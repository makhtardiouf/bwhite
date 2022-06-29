<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            //$user = Auth::user();
            return redirect('dashboard')->with(['success'=>'Bienvenue.']);
        }
        else{

            return back()->withErrors(['email'=>'Email ou mot de passe invalide.']);
        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/')->with(['success'=>'Au revoir']);
    }
}
