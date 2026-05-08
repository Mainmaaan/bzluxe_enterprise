<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = session('products_seed', []);

        // fallback if using DB later
        $product = collect($products)->firstWhere('id', $id);

        if (!$product) {
            abort(404);
        }

        return view('product', compact('product'));
    }
}