<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.subcategory.index',['subCategories'=>SubCategory::all()]);
    }
    public function create(){
        return view('admin.subcategory.create',['categories'=>Category::all()]);
    }
    public function store(Request $request){
        SubCategory::newSubCategory($request);
        return back()->with('message','Sub-category added successfully');
    }
    public function edit(Request $request,$id){
        return view('admin.subcategory.edit',['subcategory'=>SubCategory::find($id),'categories'=>Category::all()]);
    }
    public function update(Request $request,$id){
        SubCategory::updateSubCategory($request,$id);
        return redirect('/subcategory/index')->with('message','Sub-category updated successfully');
    }
    public function delete($id){
        SubCategory::deleteSubCategory($id);
        return back()->with('message','Sub-category deleted successfully');
    }
}
