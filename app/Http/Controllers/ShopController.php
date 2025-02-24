<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public $product;
    public function index(){
        return view('website.shop.index',[
            'categories'=>Category::all(),
            'products' => Product::all()
        ]);
    }
    public function detail($id){
        $this->product = Product::find($id);
        return view('website.shop.details',[
            'categories'=>Category::all(),
            'product'=>Product::find($id),
            'related_products' => Product::where('category_id',$this->product->category_id)->get()
        ]);
    }
    public function productSideBar(){
        return view('website.shop.sidebar',['categories'=>Category::all(),'watches' => Product::where('category_id',7)->get()]);
    }
    public function productByCategory($id){
        return view('website.shop.category_product',[
            'categories' => Category::all(),
            'category_name' => Category::find($id)->name,
            'products' => Product::where('category_id',$id)->get()
        ]);
    }
}
