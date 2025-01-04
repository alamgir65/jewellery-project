<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
//use App\Http\Controllers\productController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

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
