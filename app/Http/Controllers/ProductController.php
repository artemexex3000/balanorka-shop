<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("product.index", ['products' => Product::all()]);
    }

    public function show($slug)
    {
        return Product::findOrFail($slug);
    }

    public function store(ProductService $productService, Request $request)
    {
        $user_id = Auth::id();
        $data = $request->all();

        return $productService->create(
            $user_id,
            $data['name'],
            $data['thumbnail'] ?? null,
            $data['description'] ?? null,
            $data['price'] ?? null,
        );
    }
}
