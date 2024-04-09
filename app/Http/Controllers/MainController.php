<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function joke()
    {
        return view('joke');
    }

    public function tap()
    {
        return view('tap');
    }

    public function tap_check(Request $request)
    {
        $valid = $request->validate([
           'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);
    }
}
