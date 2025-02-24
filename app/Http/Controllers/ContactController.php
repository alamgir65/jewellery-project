<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendContactForm;
use Illuminate\Notifications\Notification;
class ContactController extends Controller
{
    public function index(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'message' => 'required|string|max:250',
        ]);
        \Notification::route('mail','demo@mail.com')->notify(new SendContactForm($data));
        return back()->with('message','Message sent successfully');
    }
}
