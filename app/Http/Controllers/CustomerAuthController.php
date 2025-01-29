<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;
    public function newCustomer(Request $request){
        Customer::newCustomer($request);
        $this->customer = Customer::where('email',$request->email)->first();
        Session::put('id',$this->customer->id);
        Session::put('name',$this->customer->name);
        return redirect('/checkout/billing-info');
    }
    public function login(Request $request){
//        return $request;
        $this->customer = Customer::where('email',$request->email)->first();
        if($this->customer){
            if (password_verify($request->password,$this->customer->password)){
                session::put('id',$this->customer->id);
                session::put('name',$this->customer->name);

                return redirect('/checkout/billing-info');
            }else{
                return back()->with('message','Password is invalid.');
            }
        }else{
            return back()->with('message','Email address is invalid.');
        }
    }
    public function logout(){
        Session::forget('id');
        Session::forget('name');
        return redirect('/');
    }
}
