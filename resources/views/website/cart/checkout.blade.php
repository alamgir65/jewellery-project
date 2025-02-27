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
            <div class="woocommerce-form-login-toggle">
                <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>
                </div>
            </div>
            <form action="#" class="woocommerce-form-login">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"><input type="text" class="form-control" placeholder="Username or email">
                        </div>
                        <div class="form-group"><input type="text" class="form-control" placeholder="Password"></div>
                        <div class="form-group">
                            <div class="custom-checkbox"><input type="checkbox" id="remembermylogin"> <label for="remembermylogin">Remember Me</label></div>
                        </div>
                        <div class="form-group"><button type="submit" class="vs-btn">Login</button>
                            <p class="mb-0 pt-2"><a class="lost-link" href="#">Lost your password?</a></p>
                        </div>
                    </div>
                </div>
            </form>
            <div class="woocommerce-form-coupon-toggle">
                <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your
                        code</a></div>
            </div>
            <form action="#" class="woocommerce-form-coupon">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group"><input type="text" class="form-control" placeholder="Write your coupon code"></div>
                        <div class="form-group"><button type="submit" class="vs-btn">Apply coupon</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="#" class="woocommerce-checkout mt-40 space-extra-top space-extra-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="h4 summary-title">Billing Details</h3>
                        <div class="row">
                            <div class="col-12 form-group"><select class="form-select">
                                    <option>United Kingdom (UK)</option>
                                    <option>United State (US)</option>
                                    <option>Equatorial Guinea (GQ)</option>
                                    <option>Australia (AU)</option>
                                    <option>Germany (DE)</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Your Company Name">
                            </div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Street Address"> <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Town / City"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Country"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Postcode / Zip"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Email Address"> <input type="text" class="form-control" placeholder="Phone number"></div>
                            <div class="col-12 form-group"><input type="checkbox" id="accountNewCreate"> <label for="accountNewCreate">Create An Account?</label></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p id="ship-to-different-address">
                            <input id="ship-to-different-address-checkbox" type="checkbox" name="ship_to_different_address" value="1" checked="checked">
                            <label for="ship-to-different-address-checkbox">
                                Ship to a different address?
                                <span class="checkmark"></span>
                            </label>
                        </p>
                        <div class="shipping_address">
                            <div class="row">
                                <div class="col-12 form-group"><select class="form-select">
                                        <option>United Kingdom (UK)</option>
                                        <option>United State (US)</option>
                                        <option>Equatorial Guinea (GQ)</option>
                                        <option>Australia (AU)</option>
                                        <option>Germany (DE)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Your Company Name">
                                </div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Street Address">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Town / City"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Country"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Postcode / Zip">
                                </div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Email Address"> <input type="text" class="form-control" placeholder="Phone number"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group"><textarea cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea></div>
                    </div>
                </div>
            </form>
            <h4 class="h4 summary-title">Your Order</h4>
            <form action="#" class="woocommerce-cart-form">
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
                    <tr class="cart_item">
                        <td data-title="Product">
                            <a class="cart-productimage" href="shop.html">
                                <img width="91" height="91" src="{{asset('/')}}website/assets/img/shop/product-1-1.png" alt="Image">
                            </a>
                        </td>
                        <td data-title="Name">
                            <a class="cart-productname" href="shop.html">BMW Car Lexus GS Steering...</a>
                        </td>
                        <td data-title="Price"><span class="amount"><bdi><span>$</span>200</bdi></span></td>
                        <td data-title="Quantity"><strong class="product-quantity">01</strong></td>
                        <td data-title="Total"><span class="amount"><bdi><span>$</span>200</bdi></span></td>
                    </tr>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal" colspan="4">
                  <span class="woocommerce-Price-amount amount">
                <bdi>
                  <span class="woocommerce-Price-currencySymbol">$</span>200
                  </bdi>
                  </span>
                        </td>
                    </tr>
                    <tr class="woocommerce-shipping-totals shipping">
                        <th>Shipping</th>
                        <td data-title="Shipping" colspan="4">Enter your address to view shipping options.</td>
                    </tr>
                    <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>200</bdi></span></strong>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </form>
            <div class="mt-lg-3 mb-30">
                <div class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_bacs"><input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked"> <label for="payment_method_bacs">Direct bank transfer</label>
                            <div class="payment_box payment_method_bacs">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order will not be shipped until the funds have cleared in
                                    our account.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cheque"><input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"> <label for="payment_method_cheque">Cheque
                                Payment</label>
                            <div class="payment_box payment_method_cheque">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cod"><input id="payment_method_cod" type="radio" class="input-radio" name="payment_method"> <label for="payment_method_cod">Credit Cart
                                <img src="{{asset('/')}}website/assets/img/footer/payments.png" alt="image"></label>
                            <div class="payment_box payment_method_cod">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_paypal"><input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"> <label for="payment_method_paypal">Paypal</label>
                            <div class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order"><button type="submit" class="vs-btn">Place order</button></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

@endsection
