<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductdetailController extends Controller
{
    //
    public function productdetail($id)
    {
        $allProducts = Product::ProductById($id);
        $proid = $allProducts->id;
        $cateid = $allProducts->category_id;
        $categories = Category::Cate();
        $prolienquan = Product::GetRelatedProducts($proid, $cateid);
        return view('productdetail', compact('cateid', 'allProducts', 'categories', 'proid', 'prolienquan'));
    }
}
