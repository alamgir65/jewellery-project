<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $image,$imageName,$imageUrl,$directory,$category,$homeImageUrl;
//    Function for new category add
    public static function newCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->image = self::getImageUrl($request);
        if($request->file('home_image')){
            self::$category->home_image = self::getHomeImageUrl($request);
        }
        else{
            self::$category->home_image = '';
        }
        self::$category->description = $request->description;
        self::$category->save();
    }
//    Function for update category
    public static function updateCategory($request,$id){
        self::$category = Category::find($id);
        if($request->file('image')){
            if(file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$category->image;
        }
        if($request->file('home_image')){
            if(file_exists(self::$category->home_image)){
                unlink(self::$category->home_image);
            }
            self::$homeImageUrl = self::getHomeImageUrl($request);
        }
        else{
            self::$homeImageUrl = self::$category->home_image;
        }

        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->image = self::$imageUrl;
        self::$category->home_image = self::$homeImageUrl;
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
    public static function getHomeImageUrl($request){
        self::$image = $request->file('home_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/category-images/';
        self::$image->move(self::$directory , self::$imageName);
        self::$homeImageUrl = self::$directory . self::$imageName;
        return self::$homeImageUrl;
    }

}
