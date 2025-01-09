<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $image,$imageName,$imageUrl,$directory,$category;
//    Function for new category add
    public static function newCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->image = self::getImageUrl($request);
        self::$category->description = $request->description;
        self::$category->save();
    }
//    Function for update category
    public static function updateCategory($request,$id){
        if($request->file('image')){
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = $request->image;
        }

        self::$category = Category::find($id);
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->image = self::$imageUrl;
        self::$category->description = $request->description;
        self::$category->save();
    }
//    Category delete function
    public static function deleteCategory($id){
        self::$category = Category::find($id);
        if(file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
//    Function for image Url
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/category-images/';
        self::$image->move(self::$directory , self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }


}
