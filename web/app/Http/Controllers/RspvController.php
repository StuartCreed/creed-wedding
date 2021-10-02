<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RspvController extends Controller
{
    public function index()
    {
        return Inertia::render('Rsvp');
    }

    public function store(Request $request) {
        return $request->all();
    }
}
