<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    private $orderId;
    public function index(){
        if(Session::get('id')){
            return redirect('/checkout/billing-info');
        }
        return view('website.checkout.index',['categories' => Category::all()]);
    }
    public function billingInfo(){
        return view('website.checkout.billingInfo',['categories' => Category::all()]);
    }
    public function newOrder(Request $request){
        if($request->payment_method == 'COD'){
            $this->orderId = Order::newOrder($request);
            OrderDetails::newOrderDetails($this->orderId);
            return redirect('/checkout/complete-order')->with('message','Your order post successfully, We will contact with you soon');

        }
        elseif($request->payment_method == 'Online'){
            $sslPayment = new SslCommerzPaymentController();
            $sslPayment->index($request);
        }
    }
    public function completeOrder(){
        return view('website.checkout.complete-order',['categories' => Category::all()]);
    }
}
