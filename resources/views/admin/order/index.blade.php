@extends('admin.master')

@section('title')
    manage-brands
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Customer Info</th>
                    <th>Order Date</th>
                    <th>Order Total</th>
                    <th>Order Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->order_date}}</td>
                        <td>{{$order->order_total}}</td>
                        <td>{{$order->order_status}}</td>
                        <td>
                            <a href="{{route('order.details',['id'=>$order->id])}}" class="btn btn-info my-1">
                                Details
                            </a>
                            <a href="{{route('order.invoice',['id' => $order->id])}}" class="btn btn-success my-1" >
                                Invoice
                            </a>
                            <a href="{{route('order.print-invoice',['id'=>$order->id])}}" class="btn btn-primary my-1" target="_blank">
                                Print
                            </a>
                            <a href="{{route('order.edit',['id' => $order->id])}}" class="btn btn-warning my-1" >
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-danger my-1" onclick="confirm('Are you want to delete this category?')">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
