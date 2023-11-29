<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function createUser(
        string $username,
        string $email,
        string $first_name,
        string $last_name,
        string $password,
    )
    {
        $user = new User();

        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->first_name = $first_name;
        $user->last_name = $last_name;

        return $user->save();
    }
}
