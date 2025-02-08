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
                    <th>Customer Info</th>
                    <td>
                        <b>Name : </b> {{$order->customer->name}} <br>
                        <b>Email : </b> {{$order->customer->email}} <br>
                        <b>Mobile : </b> {{$order->customer->mobile}}
                    </td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <td>
                        {{$order->order_total}}
                    </td>
                </tr>
                <tr>
                    <th>Tax Total</th>
                    <td>{{$order->tax_total}}</td>
                </tr>
                <tr>
                    <th>Shipping Total</th>
                    <td>{{$order->shipping_total}}</td>
                </tr>
                <tr>
                    <th>Courier Info</th>
                    <td>
                        <b>Name : </b> {{$order->customer->name}} <br>
                        <b>Email : </b> {{$order->customer->email}} <br>
                        <b>Mobile : </b> {{$order->customer->mobile}}
                    </td>
                </tr>
                <tr>
                    <th>Order Date</th>
                    <td>{{$order->order_date}}</td>
                </tr>
                <tr>
                    <th>Order Status</th>
                    <td>{{$order->order_status}}</td>
                </tr>
                <tr>
                    <th>Delivery address</th>
                    <td>{{$order->delivery_address}}</td>
                </tr>
                <tr>
                    <th>Delivery Date</th>
                    <td>{{$order->delivery_date}}</td>
                </tr>
                <tr>
                    <th>Delivery Status</th>
                    <td>{{$order->delivery_status}}</td>
                </tr>
                <tr>
                    <th>Payment Amount</th>
                    <td>{{$order->payment_amount}}</td>
                </tr>
                <tr>
                    <th>Payment Date</th>
                    <td>{{$order->payment_date}}</td>
                </tr>
                <tr>
                    <th>Payment Status</th>
                    <td>{{$order->payment_status}}</td>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <td>{{$order->payment_method}}</td>
                </tr>
                <tr>
                    <th>Currency</th>
                    <td>{{$order->currency}}</td>
                </tr>
                <tr>
                    <th>Transaction Id</th>
                    <td>{{$order->transaction_id}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
