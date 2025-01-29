<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cart;

class OrderDetails extends Model
{
    public static $orderDetails;
    public static function newOrderDetails($orderId){
        foreach (Cart::content() as $item){
            self::$orderDetails = new OrderDetails();
            self::$orderDetails->order_id = $orderId;
            self::$orderDetails->product_id = $item->id;
            self::$orderDetails->product_name = $item->name;
            self::$orderDetails->product_qty = $item->qty;
            self::$orderDetails->product_price = $item->price;
            self::$orderDetails->save();
        }

    }
}
