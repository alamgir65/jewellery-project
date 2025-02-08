<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CourierController;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/faq',[WebsiteController::class,'faq'])->name('faq');

Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/shop/detail/{id}',[ShopController::class,'detail'])->name('shop.details');
Route::get('/shop/sidebar',[ShopController::class,'productSideBar'])->name('shop.sidebar');
Route::get('/shop-product/by-category/{id}',[ShopController::class,'productByCategory'])->name('shop.product-by-category');

Route::get('/cart/index',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/add/{id}',[CartController::class,'addToCart'])->name('add-to-cart');
Route::post('/cart/update',[CartController::class,'update'])->name('cart.update');
Route::get('/cart/remove/{rowId}',[CartController::class,'remove'])->name('cart.remove');

Route::get('/checkout/index',[CheckoutController::class,'index'])->name('checkout.index');
Route::get('/checkout/billing-info',[CheckoutController::class,'billingInfo'])->name('checkout.billing-info');
Route::post('/checkout/new-order',[CheckoutController::class,'newOrder'])->name('checkout.new-order');
Route::get('/checkout/complete-order',[CheckoutController::class,'completeOrder'])->name('checkout.complete-order');

Route::post('/customer/new-customer',[CustomerAuthController::class,'newCustomer'])->name('customer.new-customer');
Route::post('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::get('/customer/logout',[CustomerAuthController::class,'logout'])->name('customer.logout');


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

    Route::get('/subcategory/index',[SubCategoryController::class,'index'])->name('subcategory.index');
    Route::get('/subcategory/create',[SubCategoryController::class,'create'])->name('subcategory.create');
    Route::post('/subcategory/store',[SubCategoryController::class,'store'])->name('subcategory.store');
    Route::get('/subcategory/edit/{id}',[SubCategoryController::class,'edit'])->name('subcategory.edit');
    Route::post('/subcategory/update/{id}',[SubCategoryController::class,'update'])->name('subcategory.update');
    Route::get('/subcategory/delete/{id}',[SubCategoryController::class,'delete'])->name('subcategory.delete');

    Route::get('/unit/index',[UnitController::class,'index'])->name('unit.index');
    Route::get('/unit/create',[UnitController::class,'create'])->name('unit.create');
    Route::post('/unit/store',[UnitController::class,'store'])->name('unit.store');
    Route::get('/unit/edit/{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}',[UnitController::class,'update'])->name('unit.update');
    Route::get('/unit/delete/{id}',[UnitController::class,'delete'])->name('unit.delete');

    Route::get('/courier/index',[CourierController::class,'index'])->name('courier.index');
    Route::get('/courier/create',[CourierController::class,'create'])->name('courier.create');
    Route::post('/courier/store',[CourierController::class,'store'])->name('courier.store');
    Route::get('/courier/edit/{id}',[CourierController::class,'edit'])->name('courier.edit');
    Route::post('/courier/update/{id}',[CourierController::class,'update'])->name('courier.update');
    Route::get('/courier/delete/{id}',[CourierController::class,'delete'])->name('courier.delete');

    Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::get('/get-subcategory-by-category',[ProductController::class,'getSubCategoryBYCategory'])->name('get-subcategory-by-category');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product/details/{id}',[ProductController::class,'details'])->name('product.details');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

    Route::get('/order/index',[AdminOrderController::class,'index'])->name('order.index');
});
