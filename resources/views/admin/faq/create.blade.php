@extends('admin.master')

@section('title')
    add-faq
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Faq Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('faq.store')}}">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-10">
                            <textarea class="form-control"name="question" placeholder="Question?"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Answer</label>
                        <div class="col-sm-10">
                            <textarea class="form-control"name="answer" placeholder="Answer"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Faq</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection
