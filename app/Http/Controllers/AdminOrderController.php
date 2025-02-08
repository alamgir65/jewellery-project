<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\Order;
use Illuminate\Http\Request;
use Pdf;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin.order.index',['orders' => Order::latest()->get()]);
    }
    public function details($id){
        return view('admin.order.details',['order' => Order::find($id)]);
    }
    public function edit($id){
        return view('admin.order.edit',['order' => Order::find($id),'couriers' => Courier::all()]);
    }
    public function update(Request $request, $id){
        $order = Order::find($id);
        if($request->order_status == 'Pending'){
            $order->order_status = $request->order_status;
            $order->delivery_status = $request->order_status;
            $order->payment_status = $request->order_status;
        }
        elseif($request->order_status == 'Processing'){
            $order->order_status = $request->order_status;
            $order->delivery_status = $request->order_status;
            $order->payment_status = $request->order_status;
            $order->courier_id = $request->courier_id;
            $order->delivery_address = $request->delivery_address;
        }
        elseif($request->order_status == 'Complete'){
            $order->order_status = $request->order_status;
            $order->delivery_status = $request->order_status;
            $order->payment_status = $request->order_status;
            $order->delivery_date = date('Y-m-d');
            $order->delivery_timestamp = strtotime(date('Y-m-d'));
            $order->payment_amount = $order->order_total;
            $order->payment_date = date('Y-m-d');
            $order->payment_timestamp = strtotime(date('Y-m-d'));

        }
        elseif($request->order_status == 'Cancel'){
            $order->order_status = $request->order_status;
            $order->delivery_status = $request->order_status;
            $order->payment_status = $request->order_status;
        }
        $order->save();
        return redirect('/order/index');
    }
    public function invoice($id){
        return view('admin.order.invoice',['order' => Order::find($id)]);
    }
    public function invoicePrint($id){
        $pdf = Pdf::loadView('admin.order.print-invoice', ['order'=>Order::find($id)]);
        return $pdf->stream();
    }
}
