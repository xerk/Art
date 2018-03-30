<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Shop::all();
        return view('front.products', ['products' => $products]);
    }

    public function show($slug)
    {
        $product = Shop::findBySlug($slug);
        return view('front.show', ['product' => $product]);
    }
}
