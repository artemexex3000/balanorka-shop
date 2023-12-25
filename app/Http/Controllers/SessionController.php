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
        return view('session.create');
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

        $request->session()->regenerate();

        return redirect('/')->with('success', 'You have been entered to account!');
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
