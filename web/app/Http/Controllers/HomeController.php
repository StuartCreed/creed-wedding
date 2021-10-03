<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            return redirect('/admin');
        }

        return Inertia::render('Home');
    }
}
