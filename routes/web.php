<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/faq',[WebsiteController::class,'faq'])->name('faq');

Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/products/detail',[ProductController::class,'detail'])->name('product.details');
Route::get('/product/sidebar',[ProductController::class,'productSideBar'])->name('product.sidebar');


Route::get('/products/add-to-cart',[CartController::class,'index'])->name('add-to-cart');
Route::get('/cart/checkout',[CartController::class,'checkout'])->name('checkout');

Route::get('/all-blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/details',[BlogController::class,'blogDetails'])->name('blog-details');
Route::get('/blog/list',[BlogController::class,'blogList'])->name('blog-list');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/category/add',[CategoryController::class,'create'])->name('category.create');
    Route::get('/category/manage',[CategoryController::class,'index'])->name('category.index');
    Route::post('/category/stores',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    Route::get('/brand/add',[BrandController::class,'create'])->name('brand.create');
    Route::get('/brand/manage',[BrandController::class,'index'])->name('brand.index');
    Route::post('/brand/stores',[BrandController::class,'store'])->name('brand.store');
    Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
});
