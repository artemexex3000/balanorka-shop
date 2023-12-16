<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(StoreSessionRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return "Couldn't attempt with provided credentials.";
        }

        return $request->session()->regenerate();
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
        if (!Auth::check()) {
            return "You are a guest!";
        }
        Auth::logout();
        return "You have successfully logged out!";
    }
}
