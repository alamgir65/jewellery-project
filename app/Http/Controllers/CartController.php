<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('website.cart.index',['categories' => Category::all()]);
    }
    public function addToCart($id,Request $request){
        $product = Product::find($id);
        Cart::add([
            'name' => $product->name,
            'id'=>$id,
            'qty' => $request->qty,
            'price' => $product->selling_price,
            'options' => [
                'image' => $product->image,
                'code' => $product->code
            ]
        ]);
//        return Cart::content();
        return redirect('/cart/index');
    }
    public function remove($rowId){
        Cart::remove($rowId);
        return back()->with('message','Product deleted successfully from Cart');
    }
    public function update(Request $request){
//        return $request;
        foreach ($request->qty as $item) {
            Cart::update($item['rowId'],$item['qty']);
        }
        return back()->with('message','Product Cart updated successfully');
    }
    public function checkout(){
        return view('website.cart.checkout');
    }
}
