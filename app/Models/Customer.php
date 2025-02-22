<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public static $customer,$image,$imageUrl,$imageName,$directory;
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/customer-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function newCustomer($request){
        self::$customer = new Customer();
        if($request->file('image')){
            self::$customer->image = self::getImageUrl($request);
        }
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        self::$customer->password = bcrypt($request->password);
        self::$customer->save();
    }
    public static function updateCustomer($request,$id){
        self::$customer = Customer::find($id);
        if($request->file('image')){
            self::$customer->image = self::getImageUrl($request);
        }
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        self::$customer->save();
    }
    public static function deleteCustomer($id){
        self::$customer = Customer::find($id);
        if(file_exists(self::$customer->image)){
            unlink(self::$customer->image);
        }
        self::$customer->delete();
    }

}
