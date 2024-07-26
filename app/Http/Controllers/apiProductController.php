<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apiProductModel as Product;

class apiProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }

    public function products_lasted()
    {
        return Product::orderBy('id', 'desc')->limit(10)->get();
    }

    public function products_bestseller()
    {
        return Product::orderBy('sold', 'desc')->limit(10)->get();
    }
}
