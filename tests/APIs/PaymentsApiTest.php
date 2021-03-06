<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Payments;

class PaymentsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_payments()
    {
        $payments = Payments::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/payments', $payments
        );

        $this->assertApiResponse($payments);
    }

    /**
     * @test
     */
    public function test_read_payments()
    {
        $payments = Payments::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/payments/'.$payments->id
        );

        $this->assertApiResponse($payments->toArray());
    }

    /**
     * @test
     */
    public function test_update_payments()
    {
        $payments = Payments::factory()->create();
        $editedPayments = Payments::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/payments/'.$payments->id,
            $editedPayments
        );

        $this->assertApiResponse($editedPayments);
    }

    /**
     * @test
     */
    public function test_delete_payments()
    {
        $payments = Payments::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/payments/'.$payments->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/payments/'.$payments->id
        );

        $this->response->assertStatus(404);
    }
}
