<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
