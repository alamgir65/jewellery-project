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
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
