<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($categoryId=null){
        $products = Product::orderBy('name')->get();
        $categories = Category::all();
        $category = Category::find($categoryId);

        if($categoryId !== null){
            $products = $category->products()->orderBy('name', 'asc')->get();
        }

        return inertia('Products/Index', compact('products', 'categories'));
    }
}