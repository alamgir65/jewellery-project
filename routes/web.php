<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\productController;
use App\Http\Controllers\CartController;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::get('/about',[WebsiteController::class,'about'])->name('about');

Route::get('/products',[productController::class,'index'])->name('products');
Route::get('/products/detail',[productController::class,'detail'])->name('product.details');


Route::get('/products/add-to-cart',[CartController::class,'index'])->name('add-to-cart');
