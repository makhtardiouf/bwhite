<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('home');
    }

    public function dashboard() {
        return redirect('dashboard');
    }
}
