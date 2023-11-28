<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['logout']);
        $this->middleware('guest')->except(['logout']);
    }

    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return "Here u can sign in.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($credentials)) {
            return "There is no existing user with provided credentials";
        }

        $request->session()->regenerate();

        return "You have been logged in successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }

    public function logout()
    {
        if (!auth()->check()) {
            return "You are a guest!";
        }

        auth()->logout();

        return "You have successfully logged out!";
    }
}
