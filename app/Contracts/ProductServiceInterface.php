<?php

namespace App\Contracts;

use App\Models\Product;

interface ProductServiceInterface
{
    public function create(int $user_id, string $name, string $thumbnail = null, string $description = null, int $price = null): Product;
}
