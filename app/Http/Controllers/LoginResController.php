<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class LoginResController extends Controller
{
    //
    public function Login()
    {

        $categories = Category::Cate();
        return view('login', compact('categories'));
    }

    public function Register()
    {
        $categories = Category::Cate();
        return view('register', compact('categories'));
    }
    public function Reset()
    {
        $categories = Category::Cate();
        return view('reset', compact('categories'));
    }
}
