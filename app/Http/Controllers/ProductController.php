<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(Request $request)
    {
        return Product::findOrFail($request->get("id"));
    }

    public function store(ProductService $productService, Request $request)
    {
        $user_id = Auth::id();
        $data = $request->all();

        return $productService->create(
            $user_id,
            $data['name'],
//            $data['thumbnail'],
//            $data['description'],
//            $data['price']
        );
    }
}
