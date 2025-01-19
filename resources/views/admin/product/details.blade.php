@extends('admin.master')

@section('title')
    product-details
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Product Name</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Product Image</th>
                    <td>
                        <img src="{{asset($product->image)}}" alt="img">
                    </td>
                </tr>
                <tr>
                    <th>Product Code</th>
                    <td>{{$product->code}}</td>
                </tr>
                <tr>
                    <th>Regular Price</th>
                    <td>{{$product->regular_price}}</td>
                </tr>
                <tr>
                    <th>Selling Price</th>
                    <td>{{$product->selling_price}}</td>
                </tr>

                <tr>
                    <th>Category</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Sub-category</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Unit</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Long Description</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Stock Amount</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Publication Status</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Other's Images</th>
                    <td>Hello</td>
                </tr>
                <tr>
                    <th>Meta Title</th>
                    <td>Hello</td>
                </tr>
                <tr>
                    <th>Meta Description</th>
                    <td>Hello</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
