<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Repositories\ListingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ListingController extends AppBaseController
{
    /** @var ListingRepository $listingRepository*/
    private $listingRepository;

    public function __construct(ListingRepository $listingRepo)
    {
        $this->listingRepository = $listingRepo;
    }

    /**
     * Display a listing of the Listing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $listings = $this->listingRepository->all();

        return view('listings.index')
            ->with('listings', $listings);
    }

    /**
     * Show the form for creating a new Listing.
     *
     * @return Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created Listing in storage.
     *
     * @param CreateListingRequest $request
     *
     * @return Response
     */
    public function store(CreateListingRequest $request)
    {
        $input = $request->all();

        $listing = $this->listingRepository->create($input);

        Flash::success('Listing saved successfully.');

        return redirect(route('listings.index'));
    }

    /**
     * Display the specified Listing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $listing = $this->listingRepository->find($id);

        if (empty($listing)) {
            Flash::error('Listing not found');

            return redirect(route('listings.index'));
        }

        return view('listings.show')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified Listing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $listing = $this->listingRepository->find($id);

        if (empty($listing)) {
            Flash::error('Listing not found');

            return redirect(route('listings.index'));
        }

        return view('listings.edit')->with('listing', $listing);
    }

    /**
     * Update the specified Listing in storage.
     *
     * @param int $id
     * @param UpdateListingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateListingRequest $request)
    {
        $listing = $this->listingRepository->find($id);

        if (empty($listing)) {
            Flash::error('Listing not found');

            return redirect(route('listings.index'));
        }

        $listing = $this->listingRepository->update($request->all(), $id);

        Flash::success('Listing updated successfully.');

        return redirect(route('listings.index'));
    }

    /**
     * Remove the specified Listing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $listing = $this->listingRepository->find($id);

        if (empty($listing)) {
            Flash::error('Listing not found');

            return redirect(route('listings.index'));
        }

        $this->listingRepository->delete($id);

        Flash::success('Listing deleted successfully.');

        return redirect(route('listings.index'));
    }
}