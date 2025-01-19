@extends('admin.master')

@section('title')
    add-product
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Product Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <span class="text-success">{{session('message')}}</span>
                <form method="post" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" onchange="getSubcategoryByCategory(this.value)">
                                <option value="" >--Select Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @selected($category->id==$product->category_id)>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Sub-category</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sub_category_id" id="subCategory">
                                <option value="" >--Select Sub-category--</option>
                                @foreach($subCategories as $subCategory)
                                    <option value="{{$subCategory->id}}" @selected($subCategory->id==$product->sub_category_id)>{{$subCategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="brand_id">
                                <option value="" >--Select Brand--</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" @selected($brand->id==$product->brand_id)>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Unit</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="unit_id">
                                <option value="" >--Select Unit--</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}" @selected($unit->id==$product->unit_id)>{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$product->name}}" placeholder="Product Name" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Product Code</label>
                        <div class="col-sm-10">
                            <input type="text" name="code" value="{{$product->code}}" placeholder="Product Code" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Stock Amount</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock" value="{{$product->stock}}" placeholder="Stock" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="number" class="form-control" value="{{$product->regular_price}}" name="regular_price" placeholder="Regular Price">
                                <input type="number" class="form-control" value="{{$product->selling_price}}" name="selling_price" placeholder="Selling Price">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Publish Status</label>
                        <div class="col-sm-10 pt-3">
                            <label><input type="radio" name="status" value="1" {{$product->status==1?'checked':''}}>Published</label>
                            <label class="mx-4"><input type="radio" name="status" value="0" {{$product->status==0?'checked':''}}>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Product Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image">
                            <img src="{{asset($product->image)}}" height="60" alt="img">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Other's Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" multiple name="other_image[]">
                            <div>
                                @foreach($product->otherImage as $image)
                                    <img src="{{asset($image->image)}}" height="60" alt="img">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Short Description</label>
                        <div class="col-sm-10">
                            <textarea name="short_description" class="form-control" placeholder="Short Description">{{$product->short_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Long Description</label>
                        <div class="col-sm-10">
                            <textarea name="long_description" id="summernote" class="form-control" placeholder="Long Description">{{$product->long_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Meta Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="meta_title" value="{{$product->meta_title}}" class="form-control" placeholder="Meta title">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Meta Description</label>
                        <div class="col-sm-10">
                            <textarea name="meta_description" class="form-control" placeholder="Meta Description">{{$product->meta_description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
