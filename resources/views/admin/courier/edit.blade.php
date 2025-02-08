@extends('admin.master')

@section('title')
    edit-brand
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Update Courier Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('courier.update',['id'=>$courier->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"name="name" value="{{$courier->name}}" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control"name="email" value="{{$courier->email}}" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Publish Status</label>
                        <div class="col-sm-10 pt-3">
                            <label><input type="radio" name="status" {{$courier->status==1?'checked':''}} value="1">Published</label>
                            <label class="mx-4"><input type="radio" {{$courier->status==0?'checked':''}} name="status" value="0">Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Courier logo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="logo">
                            <img src="{{asset($courier->logo)}}" alt="logo" height="50">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" placeholder="Category Description">{{$courier->address}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Category Description">{{$courier->description}}</textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Courier</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection
