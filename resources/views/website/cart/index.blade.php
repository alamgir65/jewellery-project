@extends('website.master')

@section('title')
    add-to-cart-page
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
                        <li><a href="index.html">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area -->
    <section class="space space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form action="{{route('cart.update')}}" method="post" class="woocommerce-cart-form">
                @csrf
                <table class="cart_table">
                    <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($sum=0)
                    @foreach(Cart::content() as $key => $cart_product)
                    <tr class="cart_item">
                        <td data-title="Product">
                            <a class="cart-productimage" href="shop.html">
                                <img width="100" height="95" src="{{asset($cart_product->options->image)}}" alt="Image">
                            </a>
                        </td>
                        <td data-title="Name">
                            <a class="cart-productname" href="shop.html">
                                {{$cart_product->name}}
                            </a>
                        </td>
                        <td data-title="Price"><span class="amount"><bdi><span>$</span>{{$cart_product->price}}</bdi></span></td>
                        <td data-title="Quantity">
                            <div class="quantity style2">
                                <div class="quantity__field quantity-container">
                                    <button class="quantity-minus qty-btn">
                                        <i class="fal fa-minus"></i>
                                    </button>
                                    <input type="hidden" name="qty[{{$key}}][rowId]" value="{{$cart_product->rowId}}">
                                    <input type="number" id="quantity" class="qty-input" step="1" min="1" max="100" name="qty[{{$key}}][qty]" value="{{$cart_product->qty}}" title="Qty">
                                    <button class="quantity-plus qty-btn">
                                        <i class="fal fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td data-title="Total"><span class="amount"><bdi><span>$</span>{{ $total = ($cart_product->qty * $cart_product->price)}}</bdi></span></td>
                        @php($sum +=($cart_product->qty * $cart_product->price))
                        <td data-title="Remove"><a href="{{route('cart.remove',['rowId'=>$cart_product->rowId])}}" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" class="cart-actions">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <div class="vs-cart-coupon">
                                        <input type="text" class="form-control" placeholder="Coupon Code...">
                                        <button type="submit" class="vs-btn">Apply Coupon</button>
                                    </div>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="vs-cart-coupon">
                                        <button type="submit" class="vs-btn">Update cart</button>
                                        <a href="shop.html" class="vs-btn">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Cart Totals</h2>
                    <table class="cart_totals">
                        <tbody>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td data-title="Cart Subtotal"><span class="amount"><bdi><span>BDT &nbsp;</span> {{number_format($sum)}}</bdi></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Tax (15%)</td>
                            <td data-title="Cart Subtotal"><span class="amount"><bdi><span>BDT &nbsp;  </span> {{ $tax = ($sum * 0.15)}}</bdi></span>
                            </td>
                            @php($sum += $tax)
                        </tr>
                        <tr class="shipping">
                            <th>Shipping and Handling</th>
                            <td data-title="Shipping and Handling">
                                <ul class="woocommerce-shipping-methods list-unstyled">
                                    <li><input type="radio" id="free_shipping" name="shipping_method" class="shipping_method"> <label for="free_shipping">Free
                                            shipping</label></li>
                                    <li><input type="radio" id="flat_rate" name="shipping_method" class="shipping_method" checked="checked"> <label for="flat_rate">Flat
                                            rate</label></li>
                                </ul>
                                <p class="woocommerce-shipping-destination">Shipping options will be updated during
                                    checkout.</p>
                                <form action="#" method="post"><a href="#" class="shipping-calculator-button">Change
                                        address</a>
                                    <div class="shipping-calculator-form">
                                        <p class="form-row">
                                            <select class="form-select">
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="BD" selected="selected">Bangladesh</option>
                                            </select>
                                        </p>
                                        <p>
                                            <select class="form-select">
                                                <option value="">Select an option…</option>
                                                <option value="BD-05">Bagerhat</option>
                                                <option value="BD-01">Bandarban</option>
                                                <option value="BD-02">Barguna</option>
                                                <option value="BD-06">Barishal</option>
                                            </select>
                                        </p>
                                        <p class="form-row"><input type="text" class="form-control" placeholder="Town / City"></p>
                                        <p class="form-row"><input type="text" class="form-control" placeholder="Postcode / ZIP"></p>
                                        <p><button class="vs-btn">Update</button></p>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr class="order-total">
                            <td>Order Total</td>
                            <td data-title="Total"><strong><span class="amount"><bdi><span>BDT &nbsp;</span>{{number_format($sum)}}</bdi></span></strong></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30"><a href="{{route('checkout')}}" class="vs-btn">Proceed
                            to checkout</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End -->

@endsection
