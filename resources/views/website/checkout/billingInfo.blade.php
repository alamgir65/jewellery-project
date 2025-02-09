@extends('website.master')

@section('title')
    checkout-page
@endsection

@section('categories')
    @foreach($categories as $category)
        <a href="{{route('shop.product-by-category',['id'=>$category->id])}}">
            <li class="menu-item">
                <span class="icon"><img src="{{asset($category->image)}}" width="40" alt="logo"></span> {{$category->name}}
            </li>
        </a>
    @endforeach
@endsection

@section('body')

    <!--==============================
          Breadcumb
      ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('/')}}website/assets/img/bg/breadcumb-bg-4.jpg">
        <img src="{{asset('/')}}website/assets/img/shapes/dot-shape.svg" alt="dot" class="breadcumb-element">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Cart</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout -->
    <div class="vs-checkout-wrapper space-top space-extra-bottom">
        <div class="container">

            <h4 class="h4 summary-title">Your Order</h4>
            <form action="{{route('checkout.new-order')}}" method="post" class="woocommerce-cart-form">
                @csrf
                <table class="cart_table mb-20">
                    <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($order_total=0)
                    @foreach(Cart::content() as $item)
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cart-productimage" href="shop.html">
                                    <img width="91" height="91" src="{{asset($item->options->image)}}" alt="Image">
                                </a>
                            </td>
                            <td data-title="Name">
                                <a class="cart-productname" href="shop.html">{{$item->name}}</a>
                            </td>
                            <td data-title="Price"><span class="amount"><bdi>{{$item->price}}</bdi></span></td>
                            <td data-title="Quantity"><strong class="product-quantity">{{$item->qty}}</strong></td>
                            <td data-title="Total"><span class="amount"><bdi>{{$item->qty * $item->price}}</bdi></span></td>
                            @php($order_total += ($item->qty * $item->price))
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot class="checkout-ordertable">
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal" colspan="4">
                  <span class="woocommerce-Price-amount amount">
                <bdi>
                  <span class="woocommerce-Price-currencySymbol"></span>{{$order_total}}
                  </bdi>
                  </span>
                        </td>
                    </tr>
                    <tr class="woocommerce-shipping-totals shipping">
                        <th>Shipping</th>
                        <td data-title="Shipping" colspan="4">{{$shipping_total = 170}}</td>
                    </tr>
                    <tr class="woocommerce-shipping-totals shipping">
                        <th>Tax Amount(15%)</th>
                        <td data-title="Shipping" colspan="4">{{$tax_total = $order_total * 0.15}}</td>
                    </tr>
                    <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total" colspan="4">
                            <strong><span class="woocommerce-Price-amount amount"><bdi>
                                  <span class="woocommerce-Price-currencySymbol"></span>{{$total = $order_total+$tax_total+$shipping_total}}</bdi></span>
                            </strong>
                        </td>
                    </tr>
                    </tfoot>
                    <?php
                        Session::put('order_total',$order_total);
                        Session::put('shipping_total',$shipping_total);
                        Session::put('tax_total',$tax_total);
                    ?>
                </table>
                <div class="row">
                    <div class="col-12 form-group">
                        <textarea name="delivery_address" class="form-control text-white" placeholder="Delivery Address"></textarea>
                    </div>
                </div>
                <div class="mt-lg-3 mb-30">
                    <div class="woocommerce-checkout-payment">
                        <ul class="wc_payment_methods payment_methods methods">
                            <li class="wc_payment_method payment_method_bacs"><input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked"> <label for="payment_method_bacs">Cash On Delivery</label>
                                <div class="payment_box payment_method_bacs">
                                    <p>Cash on delivery (COD) lets you pay for your order in cash when it arrives at your doorstep.</p>
                                </div>
                            </li>
                            <li class="wc_payment_method payment_method_paypal"><input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="Online"> <label for="payment_method_paypal">Online</label>
                                <div class="payment_box payment_method_paypal">
                                    <p>Pay via Bkash; you can pay with your credit card if you don’t have a PayPal account.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="form-row place-order"><button type="submit" class="vs-btn">Place order</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout End -->

@endsection
