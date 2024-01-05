<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
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
        return view("product.show", ['product' => Product::findOrFail($slug)]);
    }

    public function store(ProductService $productService, StoreProductRequest $request)
    {
        $user_id = Auth::id();
        $data = $request->validated();

        $productService->create(
            $user_id,
            $data['name'],
            $data['thumbnail'] ?? null,
            $data['description'] ?? null,
            $data['price'] ?? null,
        );

        return redirect('/')->with('success', 'You have posted new product successfully');
    }
}
