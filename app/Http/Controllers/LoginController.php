<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        auth()->attempt($fields);

        return redirect()->route('dashboard');
    }
}
