<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public static $faq;
    public static function newFaq($request){
        self::$faq = new Faq();
        self::$faq->question = $request->question;
        self::$faq->answer = $request->answer;
        self::$faq->save();
    }
    public static function updateFaq($request,$id){
        self::$faq = Faq::find($id);
        self::$faq->question = $request->question;
        self::$faq->answer = $request->answer;
        self::$faq->save();
    }
//    Faq delete function
    public static function deleteFaq($id){
        self::$faq = Faq::find($id);
        self::$faq->delete();
    }
}
