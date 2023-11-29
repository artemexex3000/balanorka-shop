<?php

namespace App\Services;

use App\Models\User;
use App\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function __construct(protected User $user)
    {
    }

    public function create(
        string $username,
        string $email,
        string $first_name,
        string $last_name,
        string $password,
    ): User
    {
        return $this->user->create([
            'username' => $username,
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'password' => $password,
        ]);
    }
}
