<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($categoryId=null){
        $products = Product::all();
        $categories = Category::all();
        $category = Category::find($categoryId);

        if($categoryId !== null){
            $products = Product::where('category_id', $categoryId)->get();
        }

        return inertia('Products/Index', compact('products', 'categories'));
    }
}