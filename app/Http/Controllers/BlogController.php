<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('website.blog.index');
    }
    public function blogDetails(){
        return view('website.blog.details');
    }
    public function blogList(){
        return view('website.blog.list');
    }
}
