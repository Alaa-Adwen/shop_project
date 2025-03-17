<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::take(3)->get();
        return view('home.index', compact('products', 'categories'));
    }

    public function declare($id)
    {
        $categories = Category::all();
        $products = Product::where('category', $id)->take(3)->get();
        return view('home.index', compact('products', 'categories'));
    }
}
