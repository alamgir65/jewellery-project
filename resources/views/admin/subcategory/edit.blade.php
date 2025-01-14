@extends('admin.master')

@section('title')
    edit-sub-category
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Sub-category Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('subcategory.update',['id'=>$subcategory->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id">
                                <option value="" >--Select Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id==$subcategory->category_id?'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Sub Category</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$subcategory->name}}" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Publish Status</label>
                        <div class="col-sm-10 pt-3">
                            <label><input type="radio" name="status" value="1" {{$subcategory->status==1?'checked':''}}>Published</label>
                            <label class="mx-4"><input type="radio" name="status" value="0" {{$subcategory->status==0?'checked':''}}>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Sub-category Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image">
                            <img src="{{asset($subcategory->image)}}" height="50" alt="image">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Category Description">{{$subcategory->description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection
