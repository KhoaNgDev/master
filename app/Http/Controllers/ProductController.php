<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = auth()->user()
        ->products
        ->latest()
        ->get();

        return inertia('Product/Index', [
            'products' => ProductResource::collection($products)
        ]);
    }
}
