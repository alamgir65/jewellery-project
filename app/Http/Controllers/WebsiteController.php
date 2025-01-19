<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'categories' => Category::all(),
            'subCategories' => SubCategory::all()
        ]);
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
