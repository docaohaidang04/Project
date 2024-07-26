<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $allProducts = Product::orderBy('id', 'desc')->paginate(8);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('product', compact('allProducts', 'categories'));
    }

    public function showProductsByCategory($id)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $category = Category::findOrFail($id);
        $allProducts = $category->products()->orderBy('id', 'desc')->paginate(8);
        return view('product', compact('allProducts', 'categories', 'category'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $allProducts = Product::SearchProduct($keyword);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('product', compact('allProducts', 'categories', 'keyword'));
    }
}
