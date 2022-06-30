<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $listings = Listing::where('approved', true)->orderByDesc('id')->get();
        Log::debug("Getting approved " . count($listings) . " listings for anonymous...");

        return view('home')->with('listings', $listings);
    }

    public function dashboard()
    {
        return redirect('dashboard');
    }
}
