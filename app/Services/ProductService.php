<?php

namespace App\Services;

use App\Contracts\ProductServiceInterface;
use App\Models\Product;
use App\Models\User;
use Exception;

class ProductService implements ProductServiceInterface
{
    public function __construct(protected Product $product)
    {
    }

    public function create
    (
        int    $user_id,
        string $name,
        string $thumbnail = null,
        string $description = null,
        int    $price = null
    ): Product
    {
        return $this->product->create([
            'user_id' => $user_id,
            'name' => $name,
            'thumbnail' => $thumbnail,
            'description' => $description,
            'price' => $price,
        ]);
    }
}
