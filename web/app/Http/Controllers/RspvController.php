<?php

namespace App\Http\Controllers;
use App\Models\Rspv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RspvController extends Controller
{
    public function index()
    {
        return Inertia::render('Rsvp');
    }

    public function store(Request $request, Rspv $rspv) {
        if (!Auth::check()) {
            return 'Not authorised!';
        }
        $rspv->create([
            'user_id' => Auth::id(),
            'coming' => (bool) $request->get('coming'),
            'song' => $request->get('song'),
            'dietary' => $request->get('dietary')
        ]);
        return redirect()->back();
    }
}
