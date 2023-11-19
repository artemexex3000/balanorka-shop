<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use SebastianBergmann\Diff\Exception;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Here u can sign up to the web site";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => 'required|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'telephone' => 'required',
            ]);

            if (!User::create($credentials)) {
                return 0;
            }

            return 1;
        } catch (ValidationException $exception) {
            return $exception->getMessage();
        }
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
    public function destroy(string $id)
    {
        //
    }
}
