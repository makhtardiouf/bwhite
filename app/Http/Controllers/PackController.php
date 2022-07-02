<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PackController extends Controller
{
    public function index()
    {
        return view('packs.list');
    }

    public function annonceur()
    {
        return view('packs.annonceur');
    }

    public function merchant()
    {
        return view('packs.merchant');
    }
}
