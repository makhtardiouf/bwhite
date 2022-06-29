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
        $user = Auth::user();
        $listings = array();
        if (!$user) {
            $listings = Listing::where('approved', true)->orderByDesc('id');
        } else {
            Log::debug("Getting listings for " . $user->email);
            if ($user->hasRole('admin')) {
                $listings = Listing::orderByDesc('id');
            } else {
              //  Listing::where('user_id', $user->id)->orderByDesc('id');
              $listings = Listing::where('approved', true)->orderByDesc('id');
            }
        }

        // Log::debug("Retrieved listings: " . json_encode($listings));
        // return redirect('home');
        return view('home')->with('listings', $listings);
    }

    public function dashboard()
    {
        return redirect('dashboard');
    }
}
