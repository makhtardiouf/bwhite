<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;
use App\Repositories\PaymentsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Settings;
use App\Models\Payments;

use Exception;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

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
        $params = [
            'product' => $request->product,
            'price' => $request->price,
            'error' => '',
            'wave_launch_url' => '#'
        ];

        try {
            $input = $request->all();
            $amount = $request->price;
            $token = Settings::where('partner', 'WAVE')->where('key', 'DEV_API_KEY')->value('value');

            $url = $this->baseurl . "/v1/checkout/sessions";

            $data = [
                "amount" => "$amount",
                "currency" => "XOF",
                "error_url" => "https://bwhite.welliesmart.com/api/payments/wave",
                "success_url" => "https://bwhite.welliesmart.com/payments/waveresult"
            ];

            Log::debug("Received input payment: " . json_encode($input));
            if (Auth::check()) {
                $user = Auth::user();
                Log::debug("User $user->name $user->id");
                //   $data->user_id = Auth::user()->id;
            }

            $resp = Http::withToken($token)->post($url, $data);
            $data = json_decode($resp->body());
            if ($data) {
                $params['wave_launch_url'] = $data->wave_launch_url;
                Log::debug("Response from Wave:\n" . json_encode($data));

            } else if ($resp->failed()) {
                $params['error'] = "Erreur de traitement $resp->status";
                Log::debug("Wave payment processing error: $resp->status");
            }

            return view('payments.wave')->with('params', $params);

        } catch (Exception $e) {
            Log::debug("Payment processing error: " . $e->getMessage());
            $params['error'] = "Erreur de traitement. ";
            notify()->error("Erreur de traitement du paiement Wave");
            return view('payments.wave')->with('params', $params);
        }
    }

    public function displayWavePayment(Request $request)
    {
        Log::debug("Payment response from Wave:\n" . json_encode($request));
        $payment = Payments::orderByDesc('updated_at')->first();
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
