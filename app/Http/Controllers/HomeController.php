<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query = Product::with('images')->select('id', 'name', 'desc', 'url');

        $products = $query->latest()->get(4);

        $data = [
            'products' => $products,
        ];

        return view('frontend.home', $data);
    }
}
