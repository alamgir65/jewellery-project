<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('website.product.index');
    }
    public function detail(){
        return view('website.product.details');
    }
}
