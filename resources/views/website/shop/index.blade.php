@extends('website.master')

@section('title')
    Product page
@endsection


@section('body')

    <!--==============================
          Breadcumb
      ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('/')}}website/assets/img/bg/breadcumb-bg-3.jpg">
        <img src="{{asset('/')}}website/assets/img/shapes/dot-shape.svg" alt="dot" class="breadcumb-element">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">our product</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>masonry grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area -->
    <div class="shop-page1 space-top z-index-common">
        <div class="extra-shape"></div>
        <div class="container">
            <div class="vs-sort-bar style2">
                <div class="row gx-4 gy-0 align-items-center">
                    <div class="col-md-auto flex-grow-1">
                        <p class="woocommerce-result-count"><span>||</span> Showing 1 - 09 of 20 results</p>
                    </div>
                    <div class="col-md-auto">
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="recent_product" selected="selected">default shorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-md-auto">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li><span class="nav-tabs-title">view</span></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                    2
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                    3
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <a href="#new" class="product-tag" tabindex="0">new</a>
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <a href="{{route('shop.details',['id'=>$product->id])}}">
                                        <button class="product-action__btn">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                                                <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset($product->image)}}" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="{{route('shop.details',['id'=>$product->id])}}">{{$product->name}}</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">{{$product->selling_price}}</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-1.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Petal Perfection</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-2.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">golden line</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img version2">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-3.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Cropped Golden pendant</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img version2">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-4.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Cropped Golden pendant</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-5.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Petal Perfection</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-6.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Petal Perfection</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-7.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Petal Perfection</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-8.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Petal Perfection</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-9.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">Petal Perfection</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-style3">
                                <div class="product-action">
                                    <button class="product-action__btn">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="product-action__btn">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                                            <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img class="img" src="{{asset('/')}}website/assets/img/product3/product-s-1-10.png" alt="product">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="">golden line</a>
                                    </h3>
                                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="{{route('shop.details',['id'=>$product->id])}}">add to cart</a>
                    </span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area End -->

@endsection
