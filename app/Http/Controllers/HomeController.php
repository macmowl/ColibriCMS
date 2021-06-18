<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        if ($request->user()->hasRole('user')) {
            return redirect('/');
        }

        if ($request->user()->hasRole('admin')) {
            return redirect('/admin/dashboard');
        }
    }
}
