<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apiProductController as ProductController;
use App\Http\Controllers\apiCategoriesController as CategoriesController;

Route::get('products', [ProductController::class, 'index']);
Route::get('products_lasted', [ProductController::class, 'products_lasted']);
Route::get('products_bestseller', [ProductController::class, 'products_bestseller']);
