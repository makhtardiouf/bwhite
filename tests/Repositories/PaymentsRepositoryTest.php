<?php namespace Tests\Repositories;

use App\Models\Payments;
use App\Repositories\PaymentsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PaymentsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PaymentsRepository
     */
    protected $paymentsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->paymentsRepo = \App::make(PaymentsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_payments()
    {
        $payments = Payments::factory()->make()->toArray();

        $createdPayments = $this->paymentsRepo->create($payments);

        $createdPayments = $createdPayments->toArray();
        $this->assertArrayHasKey('id', $createdPayments);
        $this->assertNotNull($createdPayments['id'], 'Created Payments must have id specified');
        $this->assertNotNull(Payments::find($createdPayments['id']), 'Payments with given id must be in DB');
        $this->assertModelData($payments, $createdPayments);
    }

    /**
     * @test read
     */
    public function test_read_payments()
    {
        $payments = Payments::factory()->create();

        $dbPayments = $this->paymentsRepo->find($payments->id);

        $dbPayments = $dbPayments->toArray();
        $this->assertModelData($payments->toArray(), $dbPayments);
    }

    /**
     * @test update
     */
    public function test_update_payments()
    {
        $payments = Payments::factory()->create();
        $fakePayments = Payments::factory()->make()->toArray();

        $updatedPayments = $this->paymentsRepo->update($fakePayments, $payments->id);

        $this->assertModelData($fakePayments, $updatedPayments->toArray());
        $dbPayments = $this->paymentsRepo->find($payments->id);
        $this->assertModelData($fakePayments, $dbPayments->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_payments()
    {
        $payments = Payments::factory()->create();

        $resp = $this->paymentsRepo->delete($payments->id);

        $this->assertTrue($resp);
        $this->assertNull(Payments::find($payments->id), 'Payments should not exist in DB');
    }
}
