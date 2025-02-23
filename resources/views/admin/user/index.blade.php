@extends('admin.master')

@section('title')
    manage-customers
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered">
                <span class="text-success">{{session('message')}}</span>
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
                @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>
                            <img src="{{asset($user->profile_photo_path)}}" alt="image" height="60">
                        </td>
                        <td>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('users.destroy',$user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" {{$user->id == 1 || $user->id == Auth::user()->id?'disabled':''}} onclick="return confirm('Are you want to delete this Customer?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
