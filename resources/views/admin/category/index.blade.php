@extends('admin.master')

@section('title')
    manage-category
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
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->status == 1? 'Published':'Unpublished'}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <img src="{{asset($category->image)}}" alt="image" height="60">
                        </td>
                        <td>
                            <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger mt-2" onclick="confirm('Are you want to delete this category?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
