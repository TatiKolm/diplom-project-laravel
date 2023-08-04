<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'homePage'])->name("app.home");
Route::get('admin', [AdminController::class, 'adminPage'])->name('admin.main');
Route::get('catalog/categories/{categorySlug}', [AppController::class, "categoryProductsPage"])->name("app.catalog-by-category");

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'categoriesList'])->name("categories.list");
    Route::get('create', [CategoryController::class, 'createCategory'])->name("categories.create");
    Route::post('create', [CategoryController::class, 'storeCategory'])->name("categories.store");
    Route::get('{categoryId}/edit', [CategoryController::class, 'editCategory'])->name("categories.edit");
    Route::put('{categoryId}/edit', [CategoryController::class, 'updateCategory'])->name("categories.update");
    Route::delete('{categoryId}', [CategoryController::class, 'deleteCategory'])->name("categories.delete");
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name("products.index");
    Route::get('create', [ProductController::class, 'create'])->name("products.create");
    Route::post('create', [ProductController::class, 'store'])->name("products.store");
    Route::get('{product}/edit', [ProductController::class, 'edit'])->name("products.edit");
    Route::put('{product}/edit', [ProductController::class, 'update'])->name("products.update");
    Route::delete('{product}', [ProductController::class, 'destroy'])->name("products.destroy");
    
});