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
    <div class="vs-checkout-wrapper">
        <h5 style="color: white" class="h4 p-3 summary-title text-center">You need to login to checkout. If you are not registered then please register first.</h5>
        <hr style="color: white;">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="h4 summary-title">Login Form</h3>
                        <span style="color: #ff3e01;">{{session('message')}}</span>
                        <form action="{{route('customer.login')}}" method="post" class="woocommerce-checkout mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group"><input type="email" name="email" class="form-control" placeholder="Your Email"></div>
                                <div class="col-12 form-group"><input type="password" name="password" class="form-control" placeholder="Password"></div>
                                <div class="col-12 form-group"><input type="checkbox" id="accountNewCreate"> <label for="accountNewCreate">Remember me?</label></div>
                            </div>
                            <div class="form-row place-order"><button type="submit" class="vs-btn">Login</button></div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="h4 summary-title">Register Form</h3>
                        <form action="{{route('customer.new-customer')}}" method="post" class="woocommerce-checkout mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group"><input type="text" name="name" class="form-control" placeholder="Your Name"></div>
                                <div class="col-12 form-group"><input type="email" name="email" class="form-control" placeholder="Your Email"></div>
                                <div class="col-12 form-group"><input type="number" name="mobile" class="form-control" placeholder="Mobile Number"></div>
                                <div class="col-12 form-group"><input type="password" name="password" class="form-control" placeholder="Password"></div>
                            </div>
                            <div class="form-row place-order"><button type="submit" class="vs-btn">Create Account</button></div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <!-- Checkout End -->

@endsection
