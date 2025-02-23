@extends('admin.master')

@section('title')
    edit-user
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit User Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$user->name}}" class="form-control"name="name" placeholder="User Name" />
                            @error('name')
                            <span class="text-danger">{{'message'}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">User Email</label>
                        <div class="col-sm-10">
                            <input type="email" value="{{$user->email}}" class="form-control"name="email" placeholder="User Email" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">User Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$user->mobile}}" class="form-control"name="mobile" placeholder="User Mobile" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control"name="password"/>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">User Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image">
                            <img src="{{asset($user->profile_photo_path)}}" height="60" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection
