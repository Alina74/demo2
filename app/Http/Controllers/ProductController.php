<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog()
    {
        return view('products.catalog');
    }

    public function card($product)
    {
        return view('products.card');
    }

    public function basket()
    {
        return view('products.basket');
    }

    public function orders()
    {
        return view('products.orders');
    }
}
