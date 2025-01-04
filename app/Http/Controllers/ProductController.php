<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('website.product.index');
    }
    public function detail(){
        return view('website.product.details');
    }
    public function productSideBar(){
        return view('website.product.sidebar');
    }
}
