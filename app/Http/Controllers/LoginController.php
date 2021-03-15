<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{



    public function view()
    {
        return view('login');
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
            $session = $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
            'password' => 'Le mot de passe ne semble pas correspondre !',
        ]);
    }
}
