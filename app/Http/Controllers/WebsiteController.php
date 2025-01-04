<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index');
    }
    public function contact(){
        return view('website.home.contact');
    }
    public function about(){
        return view('website.home.about');
    }
    public function faq(){
        return view('website.home.faq');
    }
}
