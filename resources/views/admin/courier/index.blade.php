@extends('admin.master')

@section('title')
    manage-brands
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
                    <th>Status</th>
                    <th>Address</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($couriers as $courier)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$courier->name}}</td>
                        <td>{{$courier->email}}</td>
                        <td>{{$courier->status == 1? 'Published':'Unpublished'}}</td>
                        <td>{{$courier->address}}</td>
                        <td>
                            <img src="{{asset($courier->logo)}}" alt="image" height="60">
                        </td>
                        <td>
                            <a href="{{route('courier.edit',['id' => $courier->id])}}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('courier.delete',['id' => $courier->id])}}" class="btn btn-danger" onclick="return confirm('Are you want to delete this brand?')">
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
