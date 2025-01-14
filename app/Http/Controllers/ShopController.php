<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('website.shop.index');
    }
    public function detail(){
        return view('website.shop.details');
    }
    public function productSideBar(){
        return view('website.shop.sidebar');
    }
}
