<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoriesList()
    {
        $categories = Category::all()->sortBy('name');
        return view('admin-dashboard.categories.index', [
            "categories" => $categories,
        ]);
    }

    public function createCategory()
    {
        return view('admin-dashboard.categories.create');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        
        Category::create($request->all());

        return redirect()->route("categories.list");
    }
    public function editCategory($productId)
    {
        $category = Category::find($productId);

        return view('admin-dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    public function updateCategory(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);
        $category->update($request->all()); 

        return redirect()->route("categories.list");
    }

    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);
        $category->delete();

        return back();
    }
}
