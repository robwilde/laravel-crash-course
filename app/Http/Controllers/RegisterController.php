<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $fields = $request->validate([
           'name' => 'string|required',
           'email' => 'email|required',
           'username' => 'string|required',
           'password' => 'required|confirmed'
        ]);

        $fields['password'] = \Hash::make($fields['password']);
        User::create($fields);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
