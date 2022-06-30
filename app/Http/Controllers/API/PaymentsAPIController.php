<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePaymentsAPIRequest;
use App\Http\Requests\API\UpdatePaymentsAPIRequest;
use App\Models\Payments;
use App\Repositories\PaymentsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Exception;
use Response;

/**
 * Class PaymentsController
 * @package App\Http\Controllers\API
 */

class PaymentsAPIController extends AppBaseController
{
    /** @var  PaymentsRepository */
    private $paymentsRepository;

    public function __construct(PaymentsRepository $paymentsRepo)
    {
        $this->paymentsRepository = $paymentsRepo;
    }

    /**
     * Display a listing of the Payments.
     * GET|HEAD /payments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        try {
            $payments = $this->paymentsRepository->all(
                $request->except(['skip', 'limit']),
                $request->get('skip'),
                $request->get('limit')
            );

            return $this->sendResponse($payments->toArray(), 'Payment retrieved successfully');
        } catch (Exception $e) {
            return response()->json("Processing error: \n" . $e->getMessage());
        }
    }

    /**
     * Store a newly created Payments in storage.
     * POST /payments
     *
     * @param CreatePaymentsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentsAPIRequest $request)
    {
        try {
            $input = $request->all();

            $payments = $this->paymentsRepository->create($input);

            return $this->sendResponse($payments->toArray(), 'Payment saved successfully');
        } catch (Exception $e) {
            return response()->json("Processing error: \n" . $e->getMessage());
        }
    }

    /**
     * Display the specified Payments.
     * GET|HEAD /payments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        try {
            /** @var Payments $payments */
            $payments = $this->paymentsRepository->find($id);

            if (empty($payments)) {
                return $this->sendError('Payment not found');
            }
            return $this->sendResponse($payments->toArray(), 'Payment retrieved successfully');
        } catch (Exception $e) {
            return response()->json("Processing error: \n" . $e->getMessage());
        }
    }

    /**
     * Update the specified Payments in storage.
     * PUT/PATCH /payments/{id}
     *
     * @param int $id
     * @param UpdatePaymentsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentsAPIRequest $request)
    {
        try {
            $input = $request->all();

            /** @var Payments $payments */
            $payments = $this->paymentsRepository->find($id);

            if (empty($payments)) {
                return $this->sendError('Payment not found');
            }
            $payments = $this->paymentsRepository->update($input, $id);

            return $this->sendResponse($payments->toArray(), 'Payment updated successfully');
        } catch (Exception $e) {
            return response()->json("Processing error: \n" . $e->getMessage());
        }
    }

    /**
     * Remove the specified Payments from storage.
     * DELETE /payments/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        try {
            /** @var Payments $payments */
            $payments = $this->paymentsRepository->find($id);

            if (empty($payments)) {
                return $this->sendError('Payment not found');
            }

            $payments->delete();
            return $this->sendSuccess("Payment $id deleted successfully");

        } catch (Exception $e) {
            return response()->json("Processing error: \n" . $e->getMessage());
        }
    }
}
