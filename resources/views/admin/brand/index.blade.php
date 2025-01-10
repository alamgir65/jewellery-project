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
                    <th>Status</th>
                    <th>Description</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->status == 1? 'Published':'Unpublished'}}</td>
                        <td>{{$brand->description}}</td>
                        <td>
                            <img src="{{asset($brand->image)}}" alt="image" height="60">
                        </td>
                        <td>
                            <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('brand.delete',['id'=>$brand->id])}}" class="btn btn-danger" onclick="confirm('Are you want to delete this brand?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
