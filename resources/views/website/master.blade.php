<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Luxrio|@yield('title') </title>
    <meta name="author" content="vecuro">
    <meta name="description" content="Luxrio - The Fashion & Watch E-Commerce HTML5 Template">
    <meta name="keywords" content="Luxrio - The Fashion & Watch E-Commerce HTML5 Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/')}}website/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/')}}website/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/')}}website/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}website/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/')}}website/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/')}}website/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/')}}website/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/')}}website/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}website/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}website/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/')}}website/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}website/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{asset('/')}}website/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/')}}website/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--==============================
        Google Fonts
      ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&amp;family=Italiana&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <!--==============================
          All CSS File

      ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">
     <style>
        /* Show the dropdown menu when hovering */
        .nav-item.dropdown:hover .dropdown-menu {
            padding-top: 10px;
            display: block;
            visibility: visible;
        }

        /* Hide the dropdown menu by default */
        .nav-item.dropdown .dropdown-menu {
            display: none;
            visibility: hidden;
        }
        .dropdown .dropdown-menu .dropdown-item{
            font-weight: bold;
        }
         .dropdown .dropdown-menu .dropdown-item:hover{
             color: #ff3e01;
         }

    </style>
</head>

<body class="vs-body">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!--********************************
         Code Start From Here
  ******************************** -->
<!--==============================
      Preloader
  ==============================-->
<div class="preloader">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
        <img src="{{asset('/')}}website/assets/img/logo.svg" alt="logo">
        <span class="loader"></span>
    </div>
</div>
<!--==============================
      Mobile Menu
  ============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <div class="mobile-logo">
            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo.png" alt="Carmax" class="logo"></a>
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('about')}}">About</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('faq')}}">Faq’s</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{route('shop.sidebar')}}">watch</a>
                </li>
                <li>
                    <a href="{{route('shop.index')}}">jewellery</a>
                </li>
                <li class="menu-item-has-children mega-menu-wrap">
                    <a href="javascript:void(0)">Pages</a>
                    <ul class="mega-menu">
                        <li><a href="products-grid.html">Page List 1</a>
                            <ul>
                                <li><a href="{{route('home')}}">Home 1</a></li>
{{--                                <li><a href="index-2.html">Home 2</a></li>--}}
{{--                                <li><a href="index-3.html">Home 3</a></li>--}}
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('shop.sidebar')}}">watch</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page List 2</a>
                            <ul>
                                <li><a href="{{route('shop.index')}}">jewellery</a></li>
                                <li><a href="{{route('faq')}}">Faq's</a></li>
                                <li><a href="{{route('blog.index')}}">Blog</a></li>
                                <li><a href="{{route('blog-list')}}">Blog List</a></li>
                                <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page List 3</a>
                            <ul>
                                <li><a href="{{route('shop.index')}}">Shop</a></li>
                                <li><a href="{{route('shop.sidebar')}}">Shop Sidebar</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="">My Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page List 4</a>
                            <ul>
                                <li><a href="404.html">404 Error</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
      Offcanvas
  ============================== -->
<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
        <div class="sidemenu-logo">
            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo.svg" alt="Greeno" class="logo"></a>
            <button class="closeButton sideMenuCls">X</button>
        </div>
        <div class="sidemenu-body">
            <h3 class="sidemenu-title">Best Seller of the <span>Month</span></h3>
            <h4 class="sidemenu-subtitle">CONTACT US</h4>
            <div class="sidemenu-contact">
                <a href="tel:+95552247849" class="sidemenu-link">+9 555 224 7849</a>
                <a href="mailto:info@luxrio.com" class="sidemenu-link">info@luxrio.com</a>
                <a href="#" class="sidemenu-link">munich Expresswa 70 Germany, TX 7859</a>
            </div>
            <h4 class="sidemenu-subtitle style2">Subscribe</h4>
            <form action="#" class="sidemenu-form">
                <input type="text" name="email" placeholder="Get News & Updates">
                <button type="submit" class="vs-btn">
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.8883 12.657L3.01111 21.742C1.47116 22.6219 -0.336867 21.1027 0.268127 19.4355L3.31703 11.0003L0.268127 2.56498C-0.336867 0.894336 1.47116 -0.621493 3.01111 0.25845L18.8883 9.34339C20.1738 10.0756 20.1704 11.9249 18.8883 12.657Z" fill="#FF3E01" />
                    </svg>
                </button>
            </form>
            <p>Subscribe dolor sitamet, consectetur adiping eli. Duis esollici tudin augue.</p>
            <div class="footer-social">
                <span>follow us on :</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
            </div>
        </div>
        <p class="footer-copyright style2">
            Copyright <i class="fal fa-copyright"></i> 2024 <a href="{{route('home')}}">Luxrio</a>.
            All rights reserved by <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a>.
        </p>
    </div>
</div>
<!-- ==============================
      Popup Search Box
  ============================== -->
<div class="popup-search-box">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" class="border-theme" placeholder="What are you looking for">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>

</div>
<!-- ==============================
      Sticky Navbar
  ============================== -->
<div id="navbars" class="header-sticky navbars">
    <div class="container custom-container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-md-auto d-none d-lg-block col-auto">
                <div class="menu-wrapper">
                    <div class="menu-category">
                        <button class="menu-toggle">
                            <svg class="menu-icon" width="31" height="23" viewBox="0 0 31 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="line1" d="M7 1.5C7 0.671573 7.67157 0 8.5 0H29.5C30.3284 0 31 0.671573 31 1.5C31 2.32843 30.3284 3 29.5 3H8.5C7.67157 3 7 2.32843 7 1.5Z" fill="white"></path>
                                <path class="line2" d="M0 11.5C0 10.6716 0.671573 10 1.5 10H29.5C30.3284 10 31 10.6716 31 11.5C31 12.3284 30.3284 13 29.5 13H1.5C0.671573 13 0 12.3284 0 11.5Z" fill="white"></path>
                                <path class="line3" d="M7 21.5C7 20.6716 7.67157 20 8.5 20H29.5C30.3284 20 31 20.6716 31 21.5C31 22.3284 30.3284 23 29.5 23H8.5C7.67157 23 7 22.3284 7 21.5Z" fill="white"></path>
                            </svg>
                        </button>
                        <ul class="menu-list">
                            @yield('categories')
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-md-auto col-auto">
                <nav class="main-menu d-none d-lg-block">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{route('about')}}">About</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('faq')}}">Faq’s</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{route('shop.sidebar')}}">watch</a>
                        </li>
                        <li>
                            <a href="{{route('shop.index')}}">jewellery</a>
                        </li>
                        <li class="menu-item-has-children mega-menu-wrap">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="mega-menu">
                                <li><a href="products-grid.html">Page List 1</a>
                                    <ul>
                                        <li><a href="{{route('home')}}">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('shop.sidebar')}}">watch</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page List 2</a>
                                    <ul>
                                        <li><a href="{{route('shop.index')}}">jewellery</a></li>
                                        <li><a href="{{route('faq')}}">Faq's</a></li>
                                        <li><a href="{{route('blog.index')}}">Blog</a></li>
                                        <li><a href="{{route('blog-list')}}">Blog List</a></li>
                                        <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page List 3</a>
                                    <ul>
                                        <li><a href="{{route('shop.index')}}">Shop</a></li>
                                        <li><a href="{{route('shop.sidebar')}}">Shop Sidebar</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                        <li><a href="">My Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page List 4</a>
                                    <ul>
                                        <li><a href="404.html">404 Error</a></li>
                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </nav>
                <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
            </div>
            <div class="col-xl-3 col-md-auto col-auto">
                <div class="header-wc">
                    <a class="wc-link" href="">bag 0
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.33315 6.33334V3.12501C5.33315 1.75001 6.24982 0.833344 7.62482 0.833344H10.3748C11.7498 0.833344 12.6665 1.75001 12.6665 3.12501V6.33334M16.709 14.6108H5.33315M5.70002 4.95834H12.3C15.4167 4.95834 15.7284 6.41584 15.9392 8.19418L16.7642 15.0692C17.03 17.3242 16.3334 19.1667 13.125 19.1667H4.88419C1.66669 19.1667 0.970022 17.3242 1.24502 15.0692L2.07003 8.19418C2.2717 6.41584 2.58336 4.95834 5.70002 4.95834Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    @if(Session::get('id'))
                        <div class="nav-item dropdown">
                            <a class="nav-link wc-link" href="#" id="wishlistDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path d="M2 18c0-4 4-6 8-6s8 2 8 6" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                {{Session::get('name')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="wishlistDropdown">
                                <li><a class="dropdown-item " href="{{ route('about') }}">My Dashboard</a></li>
                                <li><a class="dropdown-item " href="{{ route('customer.logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="nav-item dropdown">
                            <a class="nav-link wc-link" href="#" id="wishlistDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path d="M2 18c0-4 4-6 8-6s8 2 8 6" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                My Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="wishlistDropdown">
                                <li><a class="dropdown-item " href="{{ route('checkout.index') }}">Sign Up / Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('cart.index') }}">Shopping Cart</a></li>
                                <li><a class="dropdown-item" href="{{ route('cart.index') }}">Wishlist</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==============================
      Popup Subscription
    ============================== -->
<div id="popup" class="popup-overlay d-none">
    <div class="popup-content" data-bg-src="{{asset('/')}}website/assets/img/popup/popup-bg.png">
        <img src="{{asset('/')}}website/assets/img/popup/img-1-1.jpg" alt="popup" class="popup-img">
        <div class="popup-form">
            <span class="close-btn" id="close-popup">X</span>
            <h3 class="popup-title"><span>subscribe</span> to get access</h3>
            <p class="popup-text">Subscribe to our newsletter and we will ship 20% discount code today</p>
            <input class="popup-input" type="email" placeholder="Enter your Email...">
            <button class="vs-btn">Submit</button>
            <p class="no-thanks">No thanks</p>
        </div>
    </div>
</div>
<!-- ==============================
      Main Section Wrapper
    ============================== -->
<main class="main">
    <!--==============================
    Header Area
==============================-->
    <header class="vs-header layout2">
        <div class="container custom-container">
            <div class="header-top">
                <div class="row align-items-end justify-content-between">
                    <div class="col-md-4 d-none d-md-block">
                        <form id="search-form" class="header-search">
                            <input type="text" name="query" id="search-input" placeholder="search">
                            <button type="submit" aria-label="search-button"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="header-logo">
                            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo.svg" alt="Luxrio" class="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-end d-none d-md-block">
                        <button class="sideMenuToggler">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 10V0H10.5L15 5L20 0H29.5V10L25.5 15L29.5 19.5V30H20L15 25.5L10.5 30H0V19.5L5 15L0 10Z" fill="#EEE7D5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container custom-container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-md-auto d-none d-lg-block col-auto">
                            <div class="menu-wrapper">
                                <div class="menu-category">
                                    <button class="menu-toggle">
                                        <svg class="menu-icon" width="31" height="23" viewBox="0 0 31 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="line1" d="M7 1.5C7 0.671573 7.67157 0 8.5 0H29.5C30.3284 0 31 0.671573 31 1.5C31 2.32843 30.3284 3 29.5 3H8.5C7.67157 3 7 2.32843 7 1.5Z" fill="white"></path>
                                            <path class="line2" d="M0 11.5C0 10.6716 0.671573 10 1.5 10H29.5C30.3284 10 31 10.6716 31 11.5C31 12.3284 30.3284 13 29.5 13H1.5C0.671573 13 0 12.3284 0 11.5Z" fill="white"></path>
                                            <path class="line3" d="M7 21.5C7 20.6716 7.67157 20 8.5 20H29.5C30.3284 20 31 20.6716 31 21.5C31 22.3284 30.3284 23 29.5 23H8.5C7.67157 23 7 22.3284 7 21.5Z" fill="white"></path>
                                        </svg>
                                    </button>
                                    <ul class="menu-list">
                                        @foreach($categories as $category)
                                            <a href="{{route('shop.product-by-category',['id'=>$category->id])}}">
                                                <li class="menu-item">
                                                    <span class="icon"><img src="{{asset($category->image)}}" width="40" alt="logo"></span> {{$category->name}}
                                                </li>
                                            </a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-auto col-md-auto col-auto">
                            <nav class="main-menu d-none d-lg-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('about')}}">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('faq')}}">Faq’s</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('shop.sidebar')}}">watch</a>
                                    </li>
                                    <li>
                                        <a href="{{route('shop.index')}}">jewellery</a>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="javascript:void(0)">Pages</a>
                                        <ul class="mega-menu">
                                            <li><a href="products-grid.html">Page List 1</a>
                                                <ul>
                                                    <li><a href="{{route('home')}}">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="{{route('about')}}">About</a></li>
                                                    <li><a href="{{route('shop.sidebar')}}">watch</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Page List 2</a>
                                                <ul>
                                                    <li><a href="{{route('shop.index')}}">jewellery</a></li>
                                                    <li><a href="{{route('faq')}}">Faq's</a></li>
                                                    <li><a href="{{route('blog.index')}}">Blog</a></li>
                                                    <li><a href="{{route('blog-list')}}">Blog List</a></li>
                                                    <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Page List 3</a>
                                                <ul>
                                                    <li><a href="{{route('shop.index')}}">Shop</a></li>
                                                    <li><a href="{{route('shop.sidebar')}}">Shop Sidebar</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="">My Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Page List 4</a>
                                                <ul>
                                                    <li><a href="404.html">404 Error</a></li>
                                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-xl-3 col-md-auto col-auto">
                            <div class="header-wc">
                                <a class="wc-link" href="">bag {{count(Cart::content())}}
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.33315 6.33334V3.12501C5.33315 1.75001 6.24982 0.833344 7.62482 0.833344H10.3748C11.7498 0.833344 12.6665 1.75001 12.6665 3.12501V6.33334M16.709 14.6108H5.33315M5.70002 4.95834H12.3C15.4167 4.95834 15.7284 6.41584 15.9392 8.19418L16.7642 15.0692C17.03 17.3242 16.3334 19.1667 13.125 19.1667H4.88419C1.66669 19.1667 0.970022 17.3242 1.24502 15.0692L2.07003 8.19418C2.2717 6.41584 2.58336 4.95834 5.70002 4.95834Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                @if(Session::get('id'))
                                    <div class="nav-item dropdown ">
                                        <a class="nav-link wc-link" href="#" id="wishlistDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                                <path d="M2 18c0-4 4-6 8-6s8 2 8 6" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            {{Session::get('name')}}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="wishlistDropdown">
                                            <li><a class="dropdown-item " href="{{ route('about') }}">My Dashboard</a></li>
                                            <li><a class="dropdown-item " href="{{ route('customer.logout') }}">Logout</a></li>
                                        </ul>
                                    </div>
                                @else
                                    <div class="nav-item dropdown">
                                        <a class="nav-link wc-link" href="#" id="wishlistDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="2"/>
                                                <path d="M2 18c0-4 4-6 8-6s8 2 8 6" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            My Account
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="wishlistDropdown">
                                            <li><a class="dropdown-item " href="{{ route('checkout.index') }}">Sign Up / Login</a></li>
                                            <li><a class="dropdown-item" href="{{ route('cart.index') }}">Shopping Cart</a></li>
                                            <li><a class="dropdown-item" href="{{ route('cart.index') }}">Wishlist</a></li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================
    Header Area end
==============================-->
    @yield('body')
<!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-layout2" data-bg-src="assets/img/footer/footer-image-1-1.png">
        <div class="footer-widgets">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo.svg" alt="logo"></a>
                        </div>
                        <div class="footer-info style2">
                            <p><span>Address :</span> 966 munich Expressway
                                Sue 700 Germany, TX 7859</p>
                        </div>
                        <a href=""><img src="{{asset('/')}}website/assets/img/footer/payments.png" alt="payments"></a>
                    </div>
                    <div class="col-lg-auto">
                        <div class="footer-widget">
                            <h3 class="footer-title">Shopping</h3>
                            <div class="footer-menu2">
                                <a href="{{route('shop.index')}}">Gift card</a>
                                <a href="{{route('about')}}">terms & conditions</a>
                                <a href="{{route('about')}}">privacy policy</a>
                                <a href="{{route('about')}}">delivery</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="footer-widget">
                            <h3 class="footer-title">About Store</h3>
                            <div class="footer-menu2">
                                <a href="{{route('about')}}">Shopping</a>
                                <a href="">Order Cart</a>
                                <a href="{{route('about')}}">Privacy Policy</a>
                                <a href="{{route('about')}}">Help</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="footer-widget">
                            <h3 class="footer-title">Subscribe for <span>newsletter</span></h3>
                            <form class="footer-newsletter" action="#">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none">
                                        <path d="M12.43 0.930176L18.5 7.00018L12.43 13.0702M1.5 7.00018H18.33" stroke="#F5F1E6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </form>
                            <h4 class="footer-title">follow</h4>
                            <div class="social-style">
                                <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="instagram" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a class="twitter" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a class="linkedin" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-copyright style2">
            Copyright <i class="fal fa-copyright"></i> 2024 <a href="{{route('home')}}">Luxrio</a>.
            All rights reserved by <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a>.
        </p>
    </footer>
    <!--==============================
        Footer Area End
    ==============================-->
</main>
<!-- ==============================
      Main Section Wrapper End
    ============================== -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
<!--********************************
      Code End  Here
******************************** -->
<!--==============================
      All Js File
  ============================== -->
<!-- Jquery -->
<script src="{{asset('/')}}website/assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Jquery UI -->
<script src="{{asset('/')}}website/assets/js/jquery-ui.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('/')}}website/assets/js/slick.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('/')}}website/assets/js/bootstrap.min.js"></script>
<!-- WOW.js Animation -->
<script src="{{asset('/')}}website/assets/js/wow.min.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Image Loaded Jquery -->
<script src="{{asset('/')}}website/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- Gsap -->
<script src="{{asset('/')}}website/assets/js/gsap.min.js"></script>
<!-- ScrollTrigger -->
<script src="{{asset('/')}}website/assets/js/ScrollTrigger.min.js"></script>
<!-- ScrollToPlugin -->
<script src="{{asset('/')}}website/assets/js/ScrollToPlugin.min.js"></script>
<!-- SplitText -->
<script src="{{asset('/')}}website/assets/js/SplitText.min.js"></script>
<!-- Lenis -->
<script src="{{asset('/')}}website/assets/js/bundled-lenis.min.js"></script>
<!-- Main Js File -->
<script src="{{asset('/')}}website/assets/js/main.js"></script>
</body>

</html>
