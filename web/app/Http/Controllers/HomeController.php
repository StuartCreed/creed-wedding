<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            return Redirect::route('admin');
        }

        return Inertia::render('Home');
    }
}
