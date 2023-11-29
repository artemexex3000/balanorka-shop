<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Services\UserService;
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserService $userService, StoreUserRequest $request)
    {
        $data = $request->validated();
        $userService->createUser(
            $data['username'],
            $data['email'],
            $data['first_name'],
            $data['last_name'],
            $data['password'],
        );
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
