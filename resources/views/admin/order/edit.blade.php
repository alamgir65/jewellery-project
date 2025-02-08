@extends('admin.master')

@section('title')
    Edit-order
@endsection

@section('body')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Product Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <span class="text-success">{{session('message')}}</span>
                <form method="post" action="{{route('order.update',['id' => $order->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Customer Info</label>
                        <div class="col-sm-10">
                            <input type="text" readonly value="{{$order->customer->name . '(' . $order->customer->mobile . ')'}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Order Total</label>
                        <div class="col-sm-10">
                            <input type="number" name="order_total" value="{{$order->order_total}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Tax Total</label>
                        <div class="col-sm-10">
                            <input type="number" name="tax_total" value="{{$order->tax_total}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Shipping Total</label>
                        <div class="col-sm-10">
                            <input type="number" name="shipping_total" value="{{$order->shipping_total}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Order Status</label>
                        <div class="col-sm-10">
                            <select name="order_status" class="form-control">
                                <option value="">---Order status---</option>
                                <option value="Pending" {{$order->order_status == 'Pending'?'selected':''}}>Pending</option>
                                <option value="Processing" {{$order->order_status == 'Processing'?'selected':''}}>Processing</option>
                                <option value="Complete" {{$order->order_status == 'Complete'?'selected':''}}>Complete</option>
                                <option value="Cancel" {{$order->order_status == 'Cancel'?'selected':''}}>Cancel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Info</label>
                        <div class="col-sm-10">
                            <select name="courier_id" class="form-control">
                                <option value="" >Courier name</option>
                                @foreach($couriers as $courier)
                                    <option value="{{$courier->id}}" {{$order->courier_id == $courier->id?'selected':''}}>{{$courier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Delivery Address</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <textarea name="delivery_address" class="form-control">{{$order->delivery_address}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
