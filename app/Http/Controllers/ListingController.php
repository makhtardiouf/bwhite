<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Repositories\ListingRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Listing;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Gate;

use RahulHaque\Filepond\Facades\Filepond;
use Flash;
use Response;

class ListingController extends AppBaseController
{
    /** @var ListingRepository $listingRepository*/
    private $listingRepository;
    private $uploadPath;

    public function __construct(ListingRepository $listingRepo)
    {
        $this->listingRepository = $listingRepo;
        $this->uploadPath = "storage";
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
        // $listings = $this->listingRepository->all();
        $listings = Listing::where('approved', false)->orderByDesc('id');

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
        Log::debug("Listing record " . json_encode($input));

        $image = $request->file('image');
        // "listing" . date('Ymd');
        // $fileInfo = Filepond::field($request->image)
        //     ->moveTo("app/public/" . $filename);

        if(empty($image)) {
            Log::debug("Failed to obtain uploaded image"); 
        } else {
            $fname = $image->getClientOriginalName();
            $path = $image->move($this->uploadPath, $fname);
            
           // $input["image"] = $fileInfo["dirname"]."/".$fileInfo["basename"];
           $input["image"] = $fname;
           Log::debug("Uploaded file: $fname");
        }

        $listing = $this->listingRepository->create($input);

        notify()->success('Annonce sauvegardée');

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
            notify()->error('Annonce introuvable');

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
            notify()->error('Annonce introuvable');

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
            notify()->error('Annonce introuvable');

            return redirect(route('listings.index'));
        }

        $image = $request->file('image');
        if(empty($image)) {
            Log::debug("Failed to obtain uploaded image"); 
        } else {
            $fname = $image->getClientOriginalName();
            $path = $image->move($this->uploadPath, $fname);
            
           $input["image"] = $fname;
           Log::debug("Uploaded file: $path");
        }

        $listing = $this->listingRepository->update($request->all(), $id);

        notify()->success('Annonce sauvegardée');

        return redirect(route('listings.index'));
    }

    /**
     * Appove listing by admin
     */
    public function approve($id) {
        // Check if user is admin

        $listing = $this->listingRepository->find($id);

        if (empty($listing)) {
            notify()->error('Annonce introuvable');

            return redirect(route('listings.index'));
        }
        $user = Auth::user();
        $listing->approved = true;
        $listing->approver_id = $user->id;
        $listing->save();
        notify()->success('Annonce approuvée');
        Log::debug($user->name . " approved listing $id");

        return view('listings.show')->with('listing', $listing);
    }

        /**
     * Appove listing by admin
     */
    public function disapprove($id) {
        // Check if user is admin

        $listing = $this->listingRepository->find($id);

        if (empty($listing)) {
            notify()->error('Annonce introuvable');

            return redirect(route('listings.index'));
        }
        $user = Auth::user();
        $listing->approved = false;
        $listing->approver_id = $user->id;
        $listing->save();
        notify()->success('Annonce désaprouvée');
        Log::debug($user->name . " disapproved listing $id");

        return view('listings.show')->with('listing', $listing);
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
            notify()->error('Annonce introuvable');

            return redirect(route('listings.index'));
        }

        $this->listingRepository->delete($id);

        notify()->success('Annonce supprimée');

        return redirect(route('listings.index'));
    }
}
