<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $query = Product::with('images')->select('id', 'name', 'desc', 'url');

        $products = $query->latest()->get();

        // dd($products);

        $data = [
            'products' => $products,
        ];
        return view('frontend.product', $data);
    }

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        // dd($product);
        $data = [
            'product' => $product,
        ];
        return view('frontend.detail-prod', $data);
    }
}


