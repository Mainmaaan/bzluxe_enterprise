<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $products = [
        ['id'=>1,'name'=>'Gold Ring','price'=>50000,'image'=>'https://via.placeholder.com/300'],
        ['id'=>2,'name'=>'Diamond Necklace','price'=>120000,'image'=>'https://via.placeholder.com/300'],
        ['id'=>3,'name'=>'Silver Bracelet','price'=>25000,'image'=>'https://via.placeholder.com/300'],
        ['id'=>4,'name'=>'Luxury Watch','price'=>200000,'image'=>'https://via.placeholder.com/300'],
    ];

    return view('welcome', compact('products'));
});