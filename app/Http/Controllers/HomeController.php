<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $productNew = Product::New();
        $productBest = Product::Bestseller();
        $categories = Category::Cate();
        return view('home', compact('productNew', 'productBest', 'categories'));
    }
}
