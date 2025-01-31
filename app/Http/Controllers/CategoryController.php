<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories;
    public function index(){
        $this->categories = Category::all();
        return view('admin.category.index',['categories'=>$this->categories]);
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        Category::newCategory($request);
        return back()->with('message','Category added successfully');
    }
    public function edit($id){
        return view('admin.category.edit',['category'=>Category::find($id)]);
    }
    public function update(Request $request,$id){
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message','Category Updated successfully');
    }
    public function delete($id){
        Category::deleteCategory($id);
        return back()->with('message','Category Deleted successfully');
    }
}
