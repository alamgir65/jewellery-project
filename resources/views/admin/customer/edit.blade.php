@extends('admin.master')

@section('title')
    edit-customer
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Customer Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin-customer.update',['id' => $customer->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$customer->name}}" class="form-control"name="name" placeholder="Customer Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Customer Email</label>
                        <div class="col-sm-10">
                            <input type="email" value="{{$customer->email}}" class="form-control"name="email" placeholder="Customer Email" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Customer Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$customer->mobile}}" class="form-control"name="mobile" placeholder="Customer Mobile" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Customer Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image">
                            <img src="{{asset($customer->image)}}" height="40" alt="">
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Customer</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection

