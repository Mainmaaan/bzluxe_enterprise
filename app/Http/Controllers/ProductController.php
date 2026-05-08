<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = [
            ['id' => 1, 'name' => 'Gold Ring', 'price' => 50000, 'image' => 'https://via.placeholder.com/300'],
            ['id' => 2, 'name' => 'Diamond Necklace', 'price' => 120000, 'image' => 'https://via.placeholder.com/300'],
            ['id' => 3, 'name' => 'Silver Bracelet', 'price' => 25000, 'image' => 'https://via.placeholder.com/300'],
            ['id' => 4, 'name' => 'Luxury Watch', 'price' => 200000, 'image' => 'https://via.placeholder.com/300'],
        ];

        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product) {
            abort(404);
        }

        return view('product', compact('product'));
    }
}