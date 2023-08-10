<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
Route::get('about', [AppController::class, 'aboutPage'])->name("app.about");


Route::get('catalog/categories/{categorySlug}', [AppController::class, "categoryProductsPage"])->name("app.catalog-by-category");
Route::get('product/{productSlug}', [AppController::class, "productPage"])->name("app.product-page");



Route::middleware(['auth'])->group(function(){

    Route::get('add-to-cart/{product}', [CartController::class, 'addToCart'])->name('cart.add-product');
    Route::get('cart', [CartController::class, 'cartPage'])->name('cart');
    Route::put('cart/items/{item}/edit', [CartController::class, 'changeQty'])->name('cart.item.qty-update');
    Route::delete('cart/items/{item}', [CartController::class, 'destroy'])->name('cart.item.destroy');

    Route::get('checkout', [OrderController::class, 'checkoutPage'])->name('app.checkout');
    Route::post('checkout', [OrderController::class, 'storeOrder'])->name('app.store-order');
    Route::get('order/{order}/thankyou', [OrderController::class, 'thankyouPage'])->name('app.order-thankyou');

    
    Route::prefix('admin-dashboard')->middleware('role:admin|moderator')->group(function () {
        Route::get('admin', [AdminController::class, 'adminPage'])->name('admin.main');
        Route::get('orders', [OrderController::class, 'orders'])->name('admin.orders');
    });

    Route::prefix('categories')->middleware('role:admin|moderator')->group(function () {
        Route::get('/', [CategoryController::class, 'categoriesList'])->name("categories.list");
        Route::get('create', [CategoryController::class, 'createCategory'])->name("categories.create");
        Route::post('create', [CategoryController::class, 'storeCategory'])->name("categories.store");
        Route::get('{categoryId}/edit', [CategoryController::class, 'editCategory'])->name("categories.edit");
        Route::put('{categoryId}/edit', [CategoryController::class, 'updateCategory'])->name("categories.update");
        Route::delete('{categoryId}', [CategoryController::class, 'deleteCategory'])->name("categories.delete");
    });
    
    Route::prefix('products')->middleware('role:admin|moderator')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name("products.index");
        Route::get('create', [ProductController::class, 'create'])->name("products.create");
        Route::post('create', [ProductController::class, 'store'])->name("products.store");
        Route::get('{product}/edit', [ProductController::class, 'edit'])->name("products.edit");
        Route::put('{product}/edit', [ProductController::class, 'update'])->name("products.update");
        Route::delete('{product}', [ProductController::class, 'destroy'])->name("products.destroy");
    });

    
    
    Route::prefix('users')->middleware('role:admin')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name("users.index");
        Route::get('{user}/edit', [UserController::class, 'edit'])->name("users.edit");
        Route::put('{user}/edit', [UserController::class, 'update'])->name("users.update");
    });

    Route::prefix('roles')->middleware('role:admin')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name("roles.index");
        Route::get('create', [RoleController::class, 'create'])->name("roles.create");
        Route::post('create', [RoleController::class, 'store'])->name("roles.store");
        Route::get('{role}/edit', [RoleController::class, 'edit'])->name("roles.edit");
        Route::put('{role}/edit', [RoleController::class, 'update'])->name("roles.update");
    });

    Route::prefix('permissions')->middleware('role:admin')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name("permissions.index");
        Route::get('create', [PermissionController::class, 'create'])->name("permissions.create");
        Route::post('create', [PermissionController::class, 'store'])->name("permissions.store");
    });

    Route::post('logout', [AuthController::class, 'logout'])->name("auth.logout");
});

Route::middleware(['guest'])->group(function (){
    Route::get('register', [AuthController::class, 'registerPage'])->name("auth.register");
    Route::post('register', [AuthController::class, 'storeUser'])->name("auth.store-user");
    Route::get('login', [AuthController::class, 'loginPage'])->name("auth.login-page");
    Route::post('login', [AuthController::class, 'login'])->name("auth.login");
}); 



