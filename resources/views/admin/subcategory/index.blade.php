@extends('admin.master')

@section('title')
    manage-sub-category
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subCategories as $subCategory)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{isset($subCategory->category->name)?$subCategory->category->name:'Category Not Found'}}</td>
                        <td>{{$subCategory->name}}</td>
                        <td>{{$subCategory->status==1?'Published':'Unpublished'}}</td>
                        <td>{{$subCategory->description}}</td>
                        <td>
                            <img src="{{asset($subCategory->image)}}" height="60" alt="image">
                        </td>
                        <td>
                            <a href="{{route('subcategory.edit',['id'=>$subCategory->id])}}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('subcategory.delete',['id'=>$subCategory->id])}}" onclick="return confirm('Are you want to delete this Sub-category?')" class="btn btn-danger">
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
