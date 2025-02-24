@extends('admin.master')

@section('title')
    edit-faq
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Faq Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('faq.update',$faq->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="question" placeholder="Question?">{{$faq->question}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Answer</label>
                        <div class="col-sm-10">
                            <textarea class="form-control"name="answer" placeholder="Answer">{{$faq->answer}}</textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Faq</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection
