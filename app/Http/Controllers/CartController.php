<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('website.cart.index');
    }
    public function checkout(){
        return view('website.cart.checkout');
    }
}
