<?php

namespace App\Contracts;

use App\Models\User;

interface UserServiceInterface
{
    public function create(string $username, string $email, string $first_name, string $last_name, string $password): User;
}
