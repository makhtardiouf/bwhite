<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;
use App\Repositories\PaymentsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Settings;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

use Flash;
use Response;

class PaymentsController extends AppBaseController
{
    /** @var PaymentsRepository $paymentsRepository*/
    private $paymentsRepository;
    private $baseurl = "https://api.wave.com";

    public function __construct(PaymentsRepository $paymentsRepo)
    {
        $this->paymentsRepository = $paymentsRepo;
    }

    /**
     * Display a listing of the Payments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $payments = $this->paymentsRepository->all();

        return view('payments.index')
            ->with('payments', $payments);
    }

    /**
     * Show the form for creating a new Payments.
     *
     * @return Response
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created Payments in storage.
     *
     * @param CreatePaymentsRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentsRequest $request)
    {
        $input = $request->all();

        $payments = $this->paymentsRepository->create($input);

        notify()->success('Payments saved successfully.');

        return redirect(route('payments.index'));
    }

    /**
     * Submit payment to wave
     * 
     */
    public function submitWavePayment(Request $request)
    {
        try {
            $input = $request->all();
            $amount = $request->price;
            $token = Settings::where('partner', 'WAVE')->where('key', 'DEV_API_KEY')->value('value');
           
            $url = $this->baseurl . "/v1/checkout/sessions";
            $data = [
                "amount" => "$amount",
                "currency" => "XOF",
                "error_url" => "https://bwhite.welliesmart.com/payments/waveresult",
                "success_url" => "https://bwhite.welliesmart.com/payments/waveresult"
            ];

            Log::debug("API key $token");
            Log::debug("Received input payment: " . json_encode($input));
            Log::debug("URL $url");
            Log::debug("Payload: " . json_encode($data));

            $resp = Http::withToken($token)->post($url, $data);
            $resp->throw();
            $data = json_decode($resp->body());
            Log::debug("Response from Wave:\n" . json_encode($data));

           return view('payments.wave')->with('wave_launch_url', $data->wave_launch_url);

        } catch (Exception $e) {
            Log::debug("Payment processing error: " . $e->getMessage());
        }
    }

    public function displayWavePayment(Request $request)
    {
        Log::debug("Payment response from Wave:\n" . json_encode($request));

        $payment = json_decode($request);
        return view('payments.waveresult')->with('payment', $payment);
    }

    /**
     * Display the specified Payments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            notify()->error('Payments not found');

            return redirect(route('payments.index'));
        }

        return view('payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified Payments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            notify()->error('Payments not found');

            return redirect(route('payments.index'));
        }

        return view('payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified Payments in storage.
     *
     * @param int $id
     * @param UpdatePaymentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentsRequest $request)
    {
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            notify()->error('Payments not found');

            return redirect(route('payments.index'));
        }

        $payments = $this->paymentsRepository->update($request->all(), $id);

        notify()->success('Payments updated successfully.');

        return redirect(route('payments.index'));
    }

    /**
     * Remove the specified Payments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            notify()->error('Payments not found');

            return redirect(route('payments.index'));
        }

        $this->paymentsRepository->delete($id);

        notify()->success('Payments deleted successfully.');

        return redirect(route('payments.index'));
    }
}
