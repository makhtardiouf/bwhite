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
        $listings = array();
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->hasRole('admin') || $user->hasRole('staff')) {
                $listings = Listing::orderByDesc('id')->get();

            } else {
                //  Listing::where('user_id', $user->id)->orderByDesc('id');
                $listings = Listing::where('user_id', $user->id)->orderByDesc('id')->get();
            }
        } else {
            $listings = Listing::where('approved', true)->orderByDesc('id')->get();
        }

        return view('home')->with('listings', $listings);
    }

    public function dashboard()
    {
        return redirect('dashboard');
    }
}
