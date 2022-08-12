<?php


namespace App\Http\Controllers;


use App\Models\Product;

class HomeController extends Controller
{
    public function welcome()
    {
        $products = Product::where('status',1)->get();
        $count = Product::where('status',1)->count();
        return view('welcome', compact('products','count'));
    }
}
