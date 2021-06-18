<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form() {
        return view('auth.login');
    }

    public function connect() {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ], true);

        if($result) {
            return redirect('/');
        }

        return back()->withInput()->withErrors([
            'email' => 'Les identifiants sont incorrects'
        ]);
    }
}
