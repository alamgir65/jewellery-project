<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index(){
        return view('admin.customer.index',['customers' => Customer::all()]);
    }
    public function create(){
        return view('admin.customer.create');
    }
    public function store(Request $request){
        Customer::newCustomer($request);
        return redirect('/admin/customer/index')->with('message','Customer created successfully');
    }

    public function edit($id){
        return view('admin.customer.edit',['customer' => Customer::find($id)]);
    }
    public function update(Request $request,$id){
        Customer::updateCustomer($request,$id);
        return redirect('/admin/customer/index')->with('message','Customer updated successfully');
    }
    public function delete($id){
        Customer::deleteCustomer($id);
        return back()->with('message','Customer deleted successfully');
    }

}
