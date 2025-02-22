@extends('admin.master')

@section('title')
    manage-customers
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->mobile}}</td>
                        <td>
                            <img src="{{asset($customer->image)}}" alt="image" height="60">
                        </td>
                        <td>
                            <a href="{{route('admin-customer.edit',['id'=>$customer->id])}}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('admin-customer.delete',['id' => $customer->id])}}" class="btn btn-danger" onclick="return confirm('Are you want to delete this Customer?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
