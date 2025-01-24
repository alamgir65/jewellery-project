@extends('website.master')

@section('title')
    Home
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
Hero Area
==============================-->
    <section class="z-index-common hero-layout1">
        <img src="{{asset('/')}}website/assets/img/hero/hero-outside-1-1.png" alt="shape" class="ele1">
        <img src="{{asset('/')}}website/assets/img/hero/hero-outside-1-2.png" alt="shape" class="ele2">
        <div class="container custom-container">
            <div class="vs-hero">
                <div class="vs-carousel hero-carousel" data-bg-src="{{asset('/')}}website/assets/img/hero/bg-1-1.png" data-fade="true">
                    <div>
                        <div class="hero-main">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-1-1.png" alt="hero-img" class="hero-img1">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-1-2.png" alt="hero-img" class="hero-img2">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-1-3.jpg" alt="hero-img" class="hero-img3">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-1-4.png" alt="hero-img" class="hero-img4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="hero-content">
                                            <h1 class="hero-title">
                          <span>
                        <span class="highlight htext1">necklace</span> <span class="htext2">jeweellery</span>
                          </span>
                                            </h1>
                                            <span class="hero-subtitle">
                      <span class=" htext3">
                        HOLY JEWELRY and diamonds <a href="{{route('shop.index')}}">pendants</a>
                      </span>
                        </span>
                                            <div class="d-flex overflow-hidden hbtn1">
                                                <a href="{{route('shop.index')}}" class="vs-btn">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="hero-main">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-1-1.png" alt="" class="hero-img1">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-2-2.png" alt="" class="hero-img2">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-2-3.jpg" alt="" class="hero-img3">
                            <img src="{{asset('/')}}website/assets/img/hero/hero-slide-1-1-4.png" alt="" class="hero-img4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="hero-content">
                                            <h1 class="hero-title">
                          <span>
                        <span class="highlight htext1">necklace</span> <span class="htext2">jeweellery</span>
                          </span>
                                            </h1>
                                            <span class="hero-subtitle">
                      <span class=" htext3">
                        HOLY JEWELRY and diamonds <a href="{{route('shop.index')}}">pendants</a>
                      </span>
                        </span>
                                            <div class="d-flex overflow-hidden hbtn1">
                                                <a href="{{route('shop.index')}}" class="vs-btn">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-arrow">
                    <button class="vs-btn" data-slick-prev=".hero-carousel">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none">
                            <path d="M7.57 0.930054L1.5 7.00005L7.57 13.0701" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.4999 7H1.66992" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="vs-btn" data-slick-next=".hero-carousel">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.4299 0.930054L18.4999 7.00005L12.4299 13.0701" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.5 7H18.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Hero Area end
    ==============================-->
    <!--==============================
        Product One
    ==============================-->
    <section class="section-layout1 space space-extra-bottom z-index-common">
        <img class="ele1" src="{{asset('/')}}website/assets/img/shapes/ele-1-1.svg" alt="shape">
        <img class="ele2" src="{{asset('/')}}website/assets/img/shapes/ele-1-2.svg" alt="shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-auto mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-subtitle">Find the perfect</span>
                        <h2 class="sec-title text-white">High Class Jewellery</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                    </div>
                </div>
            </div>
            <div class="row gx-60">
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.25s">
                    <div class="product-style1">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products/product-1-1.jpg" alt="product">
                            <div class="product-action">
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('shop.index')}}">Flower Pendant</a>
                        </h3>
                        <span class="product-price">
            <span class="product-price__number">$355.00</span>
              <a class="product-cart" href="">add to cart</a>
              </span>
                        <div class="product-rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.45s">
                    <div class="product-style1">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products/product-1-2.jpg" alt="product">
                            <div class="product-action">
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('shop.index')}}">Diamond Gold</a>
                        </h3>
                        <span class="product-price">
            <span class="product-price__number">$355.00</span>
              <a class="product-cart" href="">add to cart</a>
              </span>
                        <div class="product-rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.65s">
                    <div class="product-style1">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products/product-1-3.jpg" alt="product">
                            <div class="product-action">
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('shop.index')}}">Black Pendant</a>
                        </h3>
                        <span class="product-price">
            <span class="product-price__number">$355.00</span>
              <a class="product-cart" href="">add to cart</a>
              </span>
                        <div class="product-rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.85s">
                    <div class="product-style1">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products/product-1-4.jpg" alt="product">
                            <div class="product-action">
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="product-action__btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('shop.index')}}">wedding ring</a>
                        </h3>
                        <span class="product-price">
            <span class="product-price__number">$355.00</span>
              <a class="product-cart" href="">add to cart</a>
              </span>
                        <div class="product-rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Product One end
    ==============================-->
    <!--==============================
        Categories Area
    ==============================-->
    <section class="cate-layout1 space space-extra-bottom z-index-common" data-bg-src="{{asset('/')}}website/assets/img/categories/cate-bg-1-1.png">
        <img src="{{asset('/')}}website/assets/img/categories/cate-ele-1-1.svg" alt="luxrio" class="ele2 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="150">
        <div class="img-box1">
            <img src="{{asset('/')}}website/assets/img/categories/cate-main-1-1.jpg" alt="cate" class="img1 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="-300">
            <div class="img-body it-scroll-element" data-it-scroll-speed="1.2" data-it-scroll-y="100">
                <img src="{{asset('/')}}website/assets/img/shapes/cate-shape-1.svg" alt="shape" class="ele1">
                <span class="img-caption">earring</span>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-9 col-lg-7">
                    <div class="ps-xl-5">
                        <div class="title-area">
                            <span class="sec-subtitle">exclusive collection</span>
                            <h2 class="sec-title">SHOP BY CATEGORY</h2>
                            <img src="{{asset('/')}}website/assets/img/shapes/title-shape-2.svg" alt="title shape">
                        </div>
                        <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                            <div class="col-lg-4 col-md-6 wow animate__fadeInUp" data-wow-delay="0.25s">
                                <div class="cate-style1">
                                    <div class="cate-img">
                                        <img src="{{asset('/')}}website/assets/img/categories/cate-1-1.jpg" alt="categories">
                                    </div>
                                    <h3 class="cate-title">
                                        <a href="{{route('shop.index')}}">wedding ring</a>
                                    </h3>
                                    <span class="cate-stock">20 product</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow animate__fadeInUp" data-wow-delay="0.45s">
                                <div class="cate-style1">
                                    <div class="cate-img">
                                        <img src="{{asset('/')}}website/assets/img/categories/cate-1-2.jpg" alt="categories">
                                    </div>
                                    <h3 class="cate-title">
                                        <a href="{{route('shop.index')}}">Diamond Pendant</a>
                                    </h3>
                                    <span class="cate-stock">15 product</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow animate__fadeInUp" data-wow-delay="0.65s">
                                <div class="cate-style1">
                                    <div class="cate-img">
                                        <img src="{{asset('/')}}website/assets/img/categories/cate-1-3.jpg" alt="categories">
                                    </div>
                                    <h3 class="cate-title">
                                        <a href="{{route('shop.index')}}">Woman Earring</a>
                                    </h3>
                                    <span class="cate-stock">10 product</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Categories Area end
    ==============================-->
    <!--==============================
        Product Two
    ==============================-->
    <section class="section-layout2 space space-extra-bottom z-index-common">
        <img src="{{asset('/')}}website/assets/img/shapes/ele-p-1-1.svg" alt="elements luxrio" class="ele1 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="250">
        <img src="{{asset('/')}}website/assets/img/shapes/ele-p-1-2.svg" alt="elements luxrio" class="ele2 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="150">
        <img src="{{asset('/')}}website/assets/img/shapes/ele-p-1-3.svg" alt="elements luxrio" class="ele3 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="300">
        <img src="{{asset('/')}}website/assets/img/shapes/ele-p-1-4.svg" alt="elements luxrio" class="ele4 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="200">
        <div class="container">
            <div class="row">
                <div class="col-lg-auto mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-subtitle">exclusive collection</span>
                        <h2 class="sec-title text-white">top Trending Products</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="img-box2" data-bg-src="{{asset('/')}}website/assets/img/products2/product-img-1.jpg">
                        <div class="img-body">
                            <img src="{{asset('/')}}website/assets/img/products2/product-ele-1.svg" alt="shape" class="ele1">
                            <span class="img-caption">15% off</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-20">
                        <div class="col-md-6 wow animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="product-style2">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img src="{{asset('/')}}website/assets/img/products2/product-ele-2.svg" alt="product" class="ele1">
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/products2/product-1-1.png" alt="product">
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('shop.index')}}">Flower Pendant</a>
                                </h3>
                                <span class="product-price">
                <span class="product-price__number">$355.00</span>
                  <a class="product-cart" href="">add to cart</a>
                  </span>
                            </div>
                        </div>
                        <div class="col-md-6 wow animate__fadeInUp" data-wow-delay="0.3s">
                            <div class="product-style2">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img src="{{asset('/')}}website/assets/img/products2/product-ele-2.svg" alt="product" class="ele1">
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/products2/product-1-2.png" alt="product">
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('shop.index')}}">wedding ring</a>
                                </h3>
                                <span class="product-price">
                <span class="product-price__number">$355.00</span>
                  <a class="product-cart" href="">add to cart</a>
                  </span>
                            </div>
                        </div>
                        <div class="col-md-6 wow animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="product-style2">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img src="{{asset('/')}}website/assets/img/products2/product-ele-2.svg" alt="product" class="ele1">
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/products2/product-1-3.png" alt="product">
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('shop.index')}}">Multi Stone Set</a>
                                </h3>
                                <span class="product-price">
                <span class="product-price__number">$250.00</span>
                  <a class="product-cart" href="">add to cart</a>
                  </span>
                            </div>
                        </div>
                        <div class="col-md-6 wow animate__fadeInUp" data-wow-delay="0.5s">
                            <div class="product-style2">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5799 9.99992C14.5799 11.9799 12.9799 13.5799 10.9999 13.5799C9.01992 13.5799 7.41992 11.9799 7.41992 9.99992C7.41992 8.01992 9.01992 6.41992 10.9999 6.41992C12.9799 6.41992 14.5799 8.01992 14.5799 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.0001 18.27C14.5301 18.27 17.8201 16.19 20.1101 12.59C21.0101 11.18 21.0101 8.80997 20.1101 7.39997C17.8201 3.79997 14.5301 1.71997 11.0001 1.71997C7.47009 1.71997 4.18009 3.79997 1.89009 7.39997C0.990088 8.80997 0.990088 11.18 1.89009 12.59C4.18009 16.19 7.47009 18.27 11.0001 18.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img src="{{asset('/')}}website/assets/img/products2/product-ele-2.svg" alt="product" class="ele1">
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/products2/product-1-4.png" alt="product">
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('shop.index')}}">Designer Chain</a>
                                </h3>
                                <span class="product-price">
                <span class="product-price__number">$155.00</span>
                  <a class="product-cart" href="">add to cart</a>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Testimonial Section
    ==============================-->
    <section class="testi-layout1 space z-index-common overflow-hidden" data-bg-src="{{asset('/')}}website/assets/img/testimonials/testi-bg-1-1.png">
        <div class="img-box3" data-bg-src="{{asset('/')}}website/assets/img/testimonials/testi-1-1.jpg"></div>
        <img src="{{asset('/')}}website/assets/img/testimonials/testi-shape-1-1.svg" alt="testi shape" class="ele1 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="-300">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="title-area text-center">
                        <span class="sec-subtitle">CLIENT TESTIMONIALS</span>
                        <h2 class="sec-title">Our Happy Clients</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-2.svg" alt="title shape">
                    </div>
                    <div class="testi-inner z-index-common">
                        <div class="vs-carousel-arrow">
                            <button data-slick-prev=".testi-carousel">
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none">
                                    <path d="M7.57 0.930054L1.5 7.00005L7.57 13.0701" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M18.4999 7H1.66992" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button data-slick-next=".testi-carousel">
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4299 0.930054L18.4999 7.00005L12.4299 13.0701" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1.5 7H18.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="testi-carousel vs-carousel" data-fade="true">
                            <div class="testi-style">
                                <div class="testi-thumb">
                                    <img class="img" src="{{asset('/')}}website/assets/img/testimonials/testi-thumb-1-1.jpg" alt="testi thumb">
                                </div>
                                <p class="testi-text">“Lorem ipsum dolor sit amet, conse elit, sedid do eiusmod tempor incidit
                                    laboret
                                    dolore magna aliqua. Quis ipsum usndi laboris ipsum dolor sitamet conseelit, sedid mollit“</p>
                                <span class="testi-user">alaxander lee</span>
                            </div>
                            <div class="testi-style">
                                <div class="testi-thumb">
                                    <img class="img" src="{{asset('/')}}website/assets/img/testimonials/testi-thumb-1-2.jpg" alt="testi thumb">
                                </div>
                                <p class="testi-text">“Lorem ipsum dolor sit amet, conse elit, sedid do eiusmod tempor incidit
                                    laboret
                                    dolore magna aliqua. Quis ipsum usndi laboris ipsum dolor sitamet conseelit, sedid mollit“</p>
                                <span class="testi-user">dalaxander dee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Testimonial Section End
    ==============================-->
    <!--==============================
        Offer Section Start
    ==============================-->
    <section class="section-layout3 space space-extra-bottom z-index-common">
        <img class="ele1 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="250" src="{{asset('/')}}website/assets/img/shapes/ele-o-1-1.svg" alt="elements luxrio">
        <img class="ele2 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="250" src="{{asset('/')}}website/assets/img/shapes/ele-o-1-2.svg" alt="elements luxrio">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="offer-style">
                        <div class="offer-img">
                            <img src="{{asset('/')}}website/assets/img/offer/offer-1-1.png" alt="offer img">
                        </div>
                        <div class="offer-body">
                            <span class="offer-subtitle">save up to 40% off</span>
                            <h3 class="offer-title">
                                <a href="{{route('shop.index')}}">
                                    custom wedding Rings
                                </a>
                            </h3>
                            <a href="{{route('shop.index')}}" class="vs-btn">order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="offer-style">
                        <div class="offer-img">
                            <img src="{{asset('/')}}website/assets/img/offer/offer-1-2.png" alt="offer img">
                        </div>
                        <div class="offer-body">
                            <span class="offer-subtitle">save up to 60% off</span>
                            <h3 class="offer-title">
                                <a href="{{route('shop.index')}}">
                                    custom party Rings
                                </a>
                            </h3>
                            <a href="{{route('shop.index')}}" class="vs-btn">order now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Offer Section End
    ==============================-->
    <!--==============================
        Blog Section Start
    ==============================-->
    <section class="space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="title-area text-center">
                        <span class="sec-subtitle">our news & blog</span>
                        <h2 class="sec-title text-white">Latest News update</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-img-1-1.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-body">
                            <div class="blog-metas">
                                <span class="blog-meta">july 2, 2024</span>
                                <a href="about.html" class="blog-meta">frank lee</a>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-details.html">French historian Vincent</a>
                            </h3>
                            <span class="blog-divider2"></span>
                            <span class="blog-divider"></span>
                            <a href="blog-details.html" class="blog-link">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-img-1-2.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-body">
                            <div class="blog-metas">
                                <span class="blog-meta">july 2, 2024</span>
                                <a href="about.html" class="blog-meta">frank lee</a>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-details.html">world’s first diamonds</a>
                            </h3>
                            <span class="blog-divider2"></span>
                            <span class="blog-divider"></span>
                            <a href="blog-details.html" class="blog-link">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-delay="0.6s">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-img-1-3.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-body">
                            <div class="blog-metas">
                                <span class="blog-meta">july 2, 2024</span>
                                <a href="about.html" class="blog-meta">frank lee</a>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-details.html">Each setting is designed</a>
                            </h3>
                            <span class="blog-divider2"></span>
                            <span class="blog-divider"></span>
                            <a href="blog-details.html" class="blog-link">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Blog Section End
    ==============================-->
    <!--==============================
        Quote Section
    ==============================-->
    <section class="quote-layout bg-position position-relative" data-bg-src="{{asset('/')}}website/assets/img/quote/quote-bg-1-1.jpg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="quote-block text-center">
                        <img src="{{asset('/')}}website/assets/img/quote/quote-vec-1-1.svg" alt="quote vector" class="quote-icon">
                        <h2 class="quote-title">get free quote</h2>
                        <div class="quote-btns">
                            <a href="{{route('shop.index')}}" class="vs-btn style2">shop now</a>
                            <a class="vs-btn style3" href="tel:+88017673989722">
                                <i><img src="{{asset('/')}}website/assets/img/icons/vs-icon-headphone-1.svg" alt="vs-icon"></i>
                                make a call
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Quote Section End
    ==============================-->
    <!--==============================
        Newsletter Section
    ==============================-->
    <section class="space-top multi-layout1 z-index-common">
        <img src="{{asset('/')}}website/assets/img/shapes/ele-m-1-1.svg" alt="ele" class="ele1">
        <img src="{{asset('/')}}website/assets/img/shapes/ele-m-1-2.svg" alt="ele" class="ele2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="newsletter-title text-center mb-40">
                        <span class="sec-subtitle">our newsletter</span>
                        <h2 class="sec-title text-white">Get Our Latest Update</h2>
                        <strong class="sec-text">Sign up to our newsletter for information on sales</strong>
                    </div>
                    <form class="newsletter-form" action="#" method="post">
                        <input class="form-control" type="email" name="email" placeholder="enter your email..." required>
                        <button type="submit" class="vs-btn">
                            <img src="{{asset('/')}}website/assets/img/icons/vs-icon-subscribe-1.svg" alt="">
                            subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="instagram-layout1 vs-carousel" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2">
                <div>
                    <div class="insta-style wow animate__fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('/')}}website/assets/img/instagram/inssta-1-1.jpg" alt="instagram">
                        <a href="https://www.instagram.com/" class="insta-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="insta-style wow animate__fadeInUp" data-wow-delay="0.3s">
                        <img src="{{asset('/')}}website/assets/img/instagram/inssta-1-2.jpg" alt="instagram">
                        <a href="https://www.instagram.com/" class="insta-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="insta-style wow animate__fadeInUp" data-wow-delay="0.4s">
                        <img src="{{asset('/')}}website/assets/img/instagram/inssta-1-3.jpg" alt="instagram">
                        <a href="https://www.instagram.com/" class="insta-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="insta-style wow animate__fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('/')}}website/assets/img/instagram/inssta-1-4.jpg" alt="instagram">
                        <a href="https://www.instagram.com/" class="insta-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="insta-style wow animate__fadeInUp" data-wow-delay="0.6s">
                        <img src="{{asset('/')}}website/assets/img/instagram/inssta-1-5.jpg" alt="instagram">
                        <a href="https://www.instagram.com/" class="insta-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="insta-style wow animate__fadeInUp" data-wow-delay="0.7s">
                        <img src="{{asset('/')}}website/assets/img/instagram/inssta-1-6.jpg" alt="instagram">
                        <a href="https://www.instagram.com/" class="insta-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Newsletter Section End
    ==============================-->
@endsection
