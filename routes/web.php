<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome');
});

Route::get('/home', function () {
    return inertia('Home/Index');
});

Route::get('/about', function () {
    return inertia('About/Index');
});



Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{productId?}', [ProductController::class, 'index']);
