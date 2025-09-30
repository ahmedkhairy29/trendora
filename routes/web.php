<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Models\Category;
use App\Models\Product;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'processRegister']);

Route::post('/logout', [AuthController::class, 'logoutWeb']);


Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function () {
    $categoriesCount = Category::count();
    $productsCount = Product::count();

    
    $categoryProducts = Category::withCount('products')->get();

    return view('admin.dashboard', compact('categoriesCount', 'productsCount', 'categoryProducts'));
})->name('dashboard');

    Route::resource('categories', AdminCategoryController::class);
    Route::resource('products', AdminProductController::class);
});
