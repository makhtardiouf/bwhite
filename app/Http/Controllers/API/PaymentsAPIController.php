<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePaymentsAPIRequest;
use App\Http\Requests\API\UpdatePaymentsAPIRequest;
use App\Models\Payments;
use App\Repositories\PaymentsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
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
        $payments = $this->paymentsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($payments->toArray(), 'Payments retrieved successfully');
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
        $input = $request->all();

        $payments = $this->paymentsRepository->create($input);

        return $this->sendResponse($payments->toArray(), 'Payments saved successfully');
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
        /** @var Payments $payments */
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            return $this->sendError('Payments not found');
        }

        return $this->sendResponse($payments->toArray(), 'Payments retrieved successfully');
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
        $input = $request->all();

        /** @var Payments $payments */
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            return $this->sendError('Payments not found');
        }

        $payments = $this->paymentsRepository->update($input, $id);

        return $this->sendResponse($payments->toArray(), 'Payments updated successfully');
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
        /** @var Payments $payments */
        $payments = $this->paymentsRepository->find($id);

        if (empty($payments)) {
            return $this->sendError('Payments not found');
        }

        $payments->delete();

        return $this->sendSuccess('Payments deleted successfully');
    }
}
