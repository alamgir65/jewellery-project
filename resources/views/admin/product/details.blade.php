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
                        <img src="{{asset($product->image)}}" height="100" alt="img">
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
                    <td>{{$product->category->name}}</td>
                </tr>
                <tr>
                    <th>Sub-category</th>
                    <td>{{$product->subCategory->name}}</td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td>{{$product->brand->name}}</td>
                </tr>
                <tr>
                    <th>Unit</th>
                    <td>{{$product->unit->name}}</td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td>{{$product->short_description}}</td>
                </tr>
                <tr>
                    <th>Long Description</th>
                    <td>{!! $product->long_description !!}</td>
                </tr>
                <tr>
                    <th>Stock Amount</th>
                    <td>{{$product->stock}}</td>
                </tr>
                <tr>
                    <th>Publication Status</th>
                    <td>{{$product->status==1?'Published':'Unpublished'}}</td>
                </tr>
                <tr>
                    <th>Other's Images</th>
                    <td>
                        @foreach($product->otherImage as $image)
                            <img src="{{asset($image->image)}}" height="100" alt="img">
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Meta Title</th>
                    <td>{{$product->meta_title}}</td>
                </tr>
                <tr>
                    <th>Meta Description</th>
                    <td>{{$product->meta_description}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
