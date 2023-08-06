<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortBy('title');
        return view("admin-dashboard.products.index", [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view("admin-dashboard.products.create", [
            'categories' => Category::all()->sortBy('name')
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

        $product=Product::add($request->all());
        $product->uploadImage($request->file('image'));

        return redirect()->route('products.index')->with('success', 'Товар добавлен');
    }

    public function edit(Product $product)
    {
        return view('admin-dashboard.products.edit', [
            'product' => $product,
            'categories' => Category::all()->sortBy('name')
        ]);
    }

    public function update(Request $request, Product $product)
    {
         $request->validate([
            'title' => 'required'
        ]);

        $product ->update($request->all());

        $product->uploadImage($request->file("image"));

        return redirect()->route('products.index');
    }
    public function destroy($productId)
    {
        Product::find($productId)->remove();
        return back();
    }

   
}
