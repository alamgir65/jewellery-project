@extends('website.master')

@section('title')
    About
@endsection

@section('body')

    <!--==============================
          Breadcumb
      ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('/')}}website/assets/img/bg/breadcumb-bg-2.jpg" data-scroll>
        <img src="{{asset('/')}}website/assets/img/shapes/dot-shape.svg" alt="dot" class="breadcumb-element">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <section class="space-extra-bottom space-top z-index-common aboutpage-layout1">
        <img class="abele1" src="{{asset('/')}}website/assets/img/shapes/aboutpage-ele1.png" alt="about page element">
        <img class="abele2" src="{{asset('/')}}website/assets/img/shapes/aboutpage-ele2.png" alt="about page element">
        <div class="extra-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area mb-4">
                        <span class="sec-subtitle">about us</span>
                        <h2 class="sec-title text-white">Graceful Drops</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                        <p class="sec-text pt-20">Lorem ipsum dolor sit amet, conse elit, sedid golden eiusmod tempor
                            aboret dolore magna aliqua. ipsum conseel dimonds usndi labois
                            sitamet sedid sedid do eiusm.</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-auto col-md-6">
                            <div class="icon-box">
                                <img class="icon-box__media" src="{{asset('/')}}website/assets/img/icons/vs-about-icon-1.svg" alt="vs-about-icon-1">
                                <h4 class="icon-box__title">Online Booking</h4>
                            </div>
                        </div>
                        <div class="col-lg-auto col-md-6">
                            <div class="icon-box">
                                <img class="icon-box__media" src="{{asset('/')}}website/assets/img/icons/vs-about-icon-2.svg" alt="vs-about-icon-1">
                                <h4 class="icon-box__title">Amazing Deals</h4>
                            </div>
                        </div>
                    </div>
                    <hr class="about-divider">
                    <div class="row gy-4">
                        <div class="col-lg-auto col-md-6">
                            <a href="shop.html" class="vs-btn style4" tabindex="0">contact us</a>
                        </div>
                        <div class="col-lg-auto col-md-6">
                            <div class="call-box">
                                <div class="call-box__list">
                                    <a href="#">
                                        <img src="{{asset('/')}}website/assets/img/author/about-auth-1-1.jpg" alt="about author">
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-headphones"></i>
                                    </a>
                                </div>
                                <div class="call-box__content">
                                    <h4 class="call-box__title">call for us</h4>
                                    <a class="call-box__subtitle" href="tel:+1444888966">+1 444 888 966</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="img-box4">
                        <img src="{{asset('/')}}website/assets/img/about/about-1-1.jpg" alt="about us" class="img-box4__img1">
                        <img src="{{asset('/')}}website/assets/img/about/about-1-2.svg" alt="about us" class="img-box4__img2">
                        <span class="img-box4__shape"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!--==============================
        Testimonial Section
    ==============================-->
    <section class="testi-layout1 space z-index-common" data-bg-src="{{asset('/')}}website/assets/img/testimonials/testi-bg-1-1.png">
        <div class="img-box3" data-bg-src="{{asset('/')}}website/assets/img/testimonials/testi-1-1.jpg"></div>
        <img src="{{asset('/')}}website/assets/img/testimonials/testi-shape-1-1.svg" alt="testi shape" class="ele1 wow animate__fadeInUp" data-wow-delay="0.2s">
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
    <!-- Feature Area -->
    <section class="space-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-style">
                        <img class="feature-style__icon mb-3" src="{{asset('/')}}website/assets/img/icons/vs-feature-icon-1-1.svg" alt="vs-feature-icon-1-1">
                        <h3 class="feature-style__title">Free Shipping</h3>
                        <p class="feature-style__text">Fact that a reader will distracted</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-style">
                        <img class="feature-style__icon mb-3" src="{{asset('/')}}website/assets/img/icons/vs-feature-icon-1-2.svg" alt="vs-feature-icon-1-1">
                        <h3 class="feature-style__title">online Support</h3>
                        <p class="feature-style__text">within 30 days for an exchange</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-style">
                        <img class="feature-style__icon mb-3" src="{{asset('/')}}website/assets/img/icons/vs-feature-icon-1-3.svg" alt="vs-feature-icon-1-1">
                        <h3 class="feature-style__title">Money Back</h3>
                        <p class="feature-style__text">Fact that a reader will distracted</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-style">
                        <img class="feature-style__icon mb-3" src="{{asset('/')}}website/assets/img/icons/vs-feature-icon-1-4.svg" alt="vs-feature-icon-1-1">
                        <h3 class="feature-style__title">Return Product</h3>
                        <p class="feature-style__text">Fact that a reader will distracted</p>
                    </div>
                </div>
            </div>
            <hr class="sec-divider mb-0">
        </div>
    </section>
    <!-- Feature Area End -->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30">
                    <div class="img-box5">
                        <div class="img1 wow animate__fadeInUp" data-wow-delay="0.2s">
                            <img src="{{asset('/')}}website/assets/img/about/about-1-3.jpg" alt="about-1-3">
                        </div>
                        <div class="img2 wow animate__fadeInUp" data-wow-delay="0.3s">
                            <img src="{{asset('/')}}website/assets/img/about/about-1-4.jpg" alt="about-1-4">
                        </div>
                        <div class="img3">
                            <img src="{{asset('/')}}website/assets/img/about/about-1-6.svg" alt="about-1-5">
                        </div>
                        <div class="img4 wow animate__fadeInUp" data-wow-delay="0.5s">
                            <img src="{{asset('/')}}website/assets/img/about/about-1-5.svg" alt="about-1-5">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="title-area text-center">
                        <img class="mb-20" src="{{asset('/')}}website/assets/img/about/about-1-7.svg" alt="title shape">
                        <span class="sec-subtitle">customs jewelry</span>
                        <h2 class="sec-title text-white">Graceful Ear Drops</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                        <p class="sec-text pt-20 mb-30 fw-medium">Lorem ipsum dolor sit amet, conse elit, sedid do eiusmod
                            tempor incidit
                            laboret dolore magna aliqua. Quis ipsum conseel usndi laboris
                            sitamet sedid sedid do eiusm.</p>
                        <a href="shop.html" class="vs-btn style4" tabindex="0">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
