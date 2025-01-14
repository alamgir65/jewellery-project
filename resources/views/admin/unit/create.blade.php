@extends('admin.master')

@section('title')
    add-unit
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Unit Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('unit.store')}}">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Unit Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"name="name" placeholder="Unit Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Unit Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"name="code" placeholder="Unit Name" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Publish Status</label>
                        <div class="col-sm-10 pt-3">
                            <label><input type="radio" name="status" value="1" checked>Published</label>
                            <label class="mx-4"><input type="radio" name="status" value="0">Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Category Description"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create Unit</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>
@endsection
