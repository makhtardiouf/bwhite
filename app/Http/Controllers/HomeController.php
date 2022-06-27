<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function home()
    {
        $listings = Listing::limit(50)->orderBy('id', 'desc')->paginate(10);
        
        Log::debug("Retrieved listings: " . json_encode($listings));
        // return redirect('home');
        return view('home')->with('listings', $listings);
    }

    public function dashboard() {
        return redirect('dashboard');
    }
}
