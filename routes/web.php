<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $products = [
        ['name' => 'Gold Ring', 'price' => 50000, 'image' => 'https://via.placeholder.com/300'],
        ['name' => 'Diamond Necklace', 'price' => 120000, 'image' => 'https://via.placeholder.com/300'],
        ['name' => 'Silver Bracelet', 'price' => 25000, 'image' => 'https://via.placeholder.com/300'],
        ['name' => 'Luxury Watch', 'price' => 200000, 'image' => 'https://via.placeholder.com/300'],
        ['name' => 'Royal Ring', 'price' => 80000, 'image' => 'https://via.placeholder.com/300'],
    ];

    return view('welcome', compact('products'));
});

Route::get('/admin', function () {
    return view('admin');
});