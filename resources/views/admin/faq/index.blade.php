@extends('admin.master')

@section('title')
    manage-faq's
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$faq->question}}</td>
                        <td>{{$faq->answer}}</td>
                        <td>
                            <a href="{{route('faq.edit',$faq->id)}}" class="btn btn-info mb-4">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('faq.destroy',$faq->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this faq?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
