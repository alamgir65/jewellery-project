<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static $image,$imageName,$imageUrl,$directory,$product;
    public static function newCategory($request){
        self::$product = new Product();

        self::$product->category_id         = $request->category_id;
        self::$product->sub_category_id     = $request->sub_category_id;
        self::$product->brand_id            = $request->brand_id;
        self::$product->unit_id             = $request->unit_id;
        self::$product->name                = $request->name;
        self::$product->code                = $request->code;
        self::$product->stock               = $request->stock;
        self::$product->regular_price       = $request->regular_price;
        self::$product->selling_price       = $request->selling_price;
        self::$product->status              = $request->status;
        self::$product->short_description   = $request->short_description;
        self::$product->long_description    = $request->long_description;
        self::$product->meta_title          = $request->meta_title;
        self::$product->meta_description    = $request->meta_description;
        self::$product->image               = self::getImageUrl($request);
        self::$product->save();
        return self::$product->id;
    }

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/category-images/';
        self::$image->move(self::$directory , self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
}
