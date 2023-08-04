<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homePage()
    {
    
        return view("home",[
            'categories' => Category::all()->sortBy('name')
        ]);
    }

    public function categoryProductsPage($categorySlug)
    {
       
        $category = Category::where('slug', $categorySlug)->first();
        return view("shop",[
            'products' => $category->products,
            'category' => $category
        ]);
    }

}
