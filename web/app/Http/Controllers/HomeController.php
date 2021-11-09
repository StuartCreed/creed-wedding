<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            return Inertia::render('Admin/Home');
        }

        $existingRspv = Auth::user()->rspv()->orderByDesc('id')->get()->first();
        return Inertia::render('Home', [
            'existingRspv' => $existingRspv
        ]);
    }
}
