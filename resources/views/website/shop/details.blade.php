@extends('website.master')

@section('title')
    Product details
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
    <div class="breadcumb-wrapper" data-bg-src="{{asset('/')}}website/assets/img/bg/breadcumb-bg-2.jpg">
        <img src="{{asset('/')}}website/assets/img/shapes/dot-shape.svg" alt="dot" class="breadcumb-element">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">products details</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Shop details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area -->
    <div class="vs-product-wrapper space-top space-extra-bottom z-index-common">
        <div class="extra-shape"></div>
        <div class="container">
            <form action="{{route('add-to-cart',['id'=>$product->id])}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7 mb-30">
                        <div class="product-slide-row">
                            <div class="product-thumb-slide vs-carousel" data-slide-show="4" data-md-slide-show="4" data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img" data-vertical="true" data-sm-vertical="false" data-xs-vertical="false">
                                @foreach($product->otherImage as $image)
                                    <div>
                                        <div class="thumb"><img src="{{asset($image->image)}}" alt="Product Image"></div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="product-big-img vs-carousel"  data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                                @foreach($product->otherImage as $image)
                                    <div class="img"><img width="500px" src="{{asset($image->image)}}" alt="Product Image"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-30">
                        <div class="product-about">
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span></span>
                                </div>
                                <span class="product-rating__total">3 review</span>
                            </div>
                            <h2 class="product-title">dound Dial watch</h2>
                            <p class="product-price">$1250.00 <span>in stock</span></p>
                            <p class="product-desc">Lorem ipsum dolor sit amet, conse elit, sedid that was eiusmod
                                aboret dolore magna aliqua conseel usndi daimond the laois
                                sitamet sedid sedid eiusm.</p>
                            <div class="product-swatches-container">
                                <div class="swatch swatch1 active"></div>
                                <div class="swatch swatch2"></div>
                                <div class="swatch swatch3"></div>
                            </div>
                            <div class="actions">
                                <div class="quantity">
                                    <div class="quantity__field quantity-container">
                                        <input type="number" id="quantity" name="qty" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                                        <div class="quantity__buttons">
                                            <button class="quantity-plus qty-btn"><i class="fa-solid fa-angle-up"></i></button>
                                            <button class="quantity-minus qty-btn"><i class="fa-solid fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="vs-btn">Add to Cart</button>
                            </div>
                            <a class="wish-btn" href="#"><i class="fa-light fa-heart"></i>add to Wishlist</a>
                            <hr class="product-divider">
                            <div class="product_meta">
                <span>Category :
              <span>
                <a href="#" rel="tag">round,</a><a href="#" rel="tag">dial,</a><a href="#">class</a>
              </span>
                </span>
                                <span>Tags :
              <span>
                <a href="#" rel="tag">silver,</a><a href="#" rel="tag">pink,</a><a href="#" rel="tag">green</a>
              </span>
                </span>
                                <span>share :
              <span class="social">
                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
              </span>
                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Products Area End -->
    <div class="space-bottom z-index-common">
        <div class="container">
            <div class="product-description">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">product details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">additional
                            information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">review (0)</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="desc-content">
                            <h3 class="desc-title">Why choose product?</h3>
                            <p class="desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, dolore magna eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute iruremod thats dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <span class="desc-subtitle">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.00133 12H3.99867V9.55L2.07038 10.75L0 7.4275L2.29403 6L0 4.5725L2.07038 1.25L3.99867 2.45V0H8.00133V2.45L9.92962 1.25L12 4.574L9.70597 6L12 7.4275L9.92962 10.75L8.00133 9.55V12ZM4.99933 11H7.00067V7.75L9.60891 9.3735L10.6221 7.75L7.81321 6L10.6221 4.25L9.60891 2.626L7.00067 4.25V1H4.99933V4.25L2.39109 2.626L1.37792 4.25L4.18679 6L1.37792 7.75L2.39109 9.376L4.99933 7.75V11Z"
                    fill="#B0ACAC" />
              </svg>
              Creat by cotton fibric with soft and smooth
            </span>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="desc-content">
                            <div class="product-information">
                                <div class="product-information__item">
                                    <span class="product-information__name">Weight</span>
                                    <span>0.5 kg</span>
                                </div>
                                <div class="product-information__item">
                                    <span class="product-information__name">Dimensions</span>
                                    <span>24 × 1 × 2 cm</span>
                                </div>
                                <div class="product-information__item">
                                    <span class="product-information__name">Weight</span>
                                    <span>0.5kg, 1.5kg, 1kg, 2.5kg, 2kg, 3kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="desc-content">
                            <div class="vs-comments-wrap">
                                <h2 class="inner-title">review for dound Dial watch</h2>
                                <ul class="comment-list">
                                    <li class="review vs-comment-item">
                                        <div class="vs-post-comment">
                                            <div class="comment-avater">
                                                <img src="{{asset('/')}}website/assets/img/shop/reviewer-1.jpg" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-content__header">
                                                    <h4 class="name">janelle smith<span class="commented-on">–  October 11, 2024</span>
                                                    </h4>
                                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. yenim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="vs-comment-form review-form">
                                <div id="respond" class="comment-respond">
                                    <div class="form-title">
                                        <h3 class="blog-inner-title">Add a review</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <div class="rating-select">
                                            <label>Your Rating *</label>
                                            <p class="stars">
                          <span>
                        <a class="star-1" href="#">1</a>
                        <a class="star-2" href="#">2</a>
                        <a class="star-3" href="#">3</a>
                        <a class="star-4" href="#">4</a>
                        <a class="star-5" href="#">5</a>
                      </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <textarea class="form-control" placeholder="Your review *"></textarea>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" class="form-control" placeholder="Your email *">
                                        </div>
                                        <div class="col-12 ">
                                            <div class="custom-checkbox">
                                                <input id="checkbox1" name="checkbox1" type="checkbox" value="yes">
                                                <label for="checkbox1">Your email address will remain private. Mandatory fields are
                                                    indicated.*</label>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="vs-btn">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Product Two
      ==============================-->
    <section class="space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-auto mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-subtitle">highly recommend</span>
                        <h2 class="sec-title text-white">top related products</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                <div class="col-lg-3">
                    <div class="product-style2 version2">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products2/product-r-1-1.png" alt="product">
                        </div>
                        <h3 class="product-title">
                            <a href="shop-details.html">triumph watch</a>
                        </h3>
                        <span class="product-price">$755.00</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-style2 version2">
                        <a href="#new" class="product-tag">new</a>
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products2/product-r-1-2.png" alt="product">
                        </div>
                        <h3 class="product-title">
                            <a href="shop-details.html">golden line</a>
                        </h3>
                        <span class="product-price">$955.00</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-style2 version2">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products2/product-r-1-3.png" alt="product">
                        </div>
                        <h3 class="product-title">
                            <a href="shop-details.html">Round Dial semi</a>
                        </h3>
                        <span class="product-price">$555.00</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-style2 version2">
                        <div class="product-img">
                            <img class="img" src="{{asset('/')}}website/assets/img/products2/product-r-1-4.png" alt="product">
                        </div>
                        <h3 class="product-title">
                            <a href="shop-details.html">Black Dial Red</a>
                        </h3>
                        <span class="product-price">$355.00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Product Two End
      ==============================-->

@endsection
