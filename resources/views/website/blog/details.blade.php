@extends('website.master')

@section('title')
    blog-details
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
    <div class="breadcumb-wrapper" data-bg-src="{{asset('/')}}website/assets/img/bg/breadcumb-bg-1.jpg">
        <img src="{{asset('/')}}website/assets/img/shapes/dot-shape.svg" alt="dot" class="breadcumb-element">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">blog details</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>blog details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="vs-blog blog-style1 blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-big-1-1.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">Diamond</a>
                                <span>December 1, 2024</span>
                            </div>
                            <h3 class="blog-title">
                                both of which translate
                            </h3>
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, conse elit, sedid that eiusmod aboret dolore magna aliqua conseel usndi
                                labois sitamet sedid sedid eiusm or incididunt ut labore et dolore magna aliq. Uenim minim veniam,
                                quis nostrud Duis aute irure dolor in reprehend.
                            </p>
                            <p class="blog-text">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                born and I will give you a complete account of the system, and expound the actual teachings the
                                greatsd explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                                avoids pleasure its because it is pleasure, but because those who do not know how to pursue pleasure
                            </p>
                            <blockquote class="vs-quote">
                                <i class="quote-icon"><img src="{{asset('/')}}website/assets/img/icons/svg-blog-details-quote-icon-1-1.svg"
                                                           alt="quote icon"></i>
                                <p>On the other hand, we denounce with righteous
                                    men who are so beguiled</p>
                            </blockquote>
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, conse elit, sedid that eiusmod aboret dolore magna aliqua conseel usndi
                                labois sitamet sedid sedid eiusm or incididunt ut labore et dolore magna aliq. Uenim minim veniam,
                                quis nostrud Duis aute irure dolor in reprehend.
                            </p>
                            <h2 class="blog-title">
                                which translate
                            </h2>
                            <p class="blog-text">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                born and I will give you a complete account of the system, and expound the actual teachings the
                                greatsd explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                                avoids pleasure its because it is pleasure, but because those who do not know how to pursue pleasure
                            </p>
                            <div class="row pt-30">
                                <div class="col-xl-6 col-md-auto mb-30">
                                    <div class="blog-img rounded-15 overflow-hidden">
                                        <img class="img w-100" src="{{asset('/')}}website/assets/img/blog/blog-d-1-1.jpg" alt="blog">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-auto mb-30">
                                    <div class="blog-img rounded-15 overflow-hidden">
                                        <img class="img w-100" src="{{asset('/')}}website/assets/img/blog/blog-d-1-2.jpg" alt="blog">
                                    </div>
                                </div>
                            </div>
                            <p class="blog-text">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                born and I will give you a complete account of the system, and expound the actual teachings the
                                greatsd explorer of the truth, the master-builder of human happiness. No one rejects.
                            </p>
                            <div class="blog-footer">
                                <div class="tagcloud">
                                    <a href="blog-details.html">diamond</a>
                                    <a href="blog-details.html">necklace</a>
                                    <a href="blog-details.html">rings</a>
                                </div>
                                <div class="blog-social">
                                    <a href="#">IG</a>
                                    <a href="#">FB</a>
                                    <a href="#">LI</a>
                                </div>
                            </div>
                            <img src="{{asset('/')}}website/assets/img/shapes/dot-shape-2.svg" alt="dot" class="blog-element">
                        </div>
                    </div>
                    <div class="post-admin">
                        <div class="post-img">
                            <img src="{{asset('/')}}website/assets/img/blog/blog-d-1-8.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <h4>Amalia elha</h4>
                            </div>
                            <p class="post-text">But I must explain to you how all this mistaken idea of denoucing pleasure and
                                praising pain was born and I will give.</p>
                            <div class="blog-social">
                                <a href="#">IG</a>
                                <a href="#">FB</a>
                                <a href="#">LI</a>
                            </div>
                        </div>
                    </div>
                    <div class="post-pagination">
                        <div class="row justify-content-between align-items-center gy-4">
                            <div class="col">
                                <div class="post-pagi-box prev">
                                    <div class="right">
                                        <a class="post-pagi-control" href="single-project.html"><i class="far fa-long-arrow-left"></i>previous
                                            post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="post-pagi-box next">
                                    <div class="right">
                                        <a class="post-pagi-control" href="single-project.html">next post<i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vs-comments-wrap">
                        <h2 class="blog-inner-title">3 Comments</h2>
                        <ul class="comment-list">
                            <li class="vs-comment-item">
                                <div class="vs-post-comment">
                                    <div class="comment-avater">
                                        <img src="{{asset('/')}}website/assets/img/blog/blog-d-1-9.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name h4">janel grant <span class="commented-on"> December 1, 2024</span></h4>
                                        <p class="text">But I must explain to you how all this mistaken ideashwad of denoucing pleasure
                                            and praising pain was born and I will give.</p>
                                        <a href="blog-details.html" class="replay-btn"><i class="fas fa-reply"></i>Replay</a>
                                    </div>
                                </div>
                                <img class="comment-ele" src="{{asset('/')}}website/assets/img/shapes/dot-shape-4.svg" alt="dot shape">
                                <ul class="children">
                                    <li class="vs-comment-item">
                                        <div class="vs-post-comment">
                                            <div class="comment-avater">
                                                <img src="{{asset('/')}}website/assets/img/blog/blog-d-1-10.jpg" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <h4 class="name h4">arecika jonson<span class="commented-on"> December 1, 2024</span></h4>
                                                <p class="text">But I must explain to you how all this mistaken ideashwad of denoucing
                                                    pleasure
                                                    and praising pain was born and I will give.</p>
                                                <a href="blog-details.html" class="replay-btn"><i class="fas fa-reply"></i>Replay</a>
                                            </div>
                                        </div>
                                        <img class="comment-ele" src="{{asset('/')}}website/assets/img/shapes/dot-shape-4.svg" alt="dot shape">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="vs-comment-form">
                        <div id="respond" class="comment-respond">
                            <h2 class="blog-inner-title">Leave a Reply</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="form-inner">
                                <div class="row gx-20">
                                    <div class="col-12 form-group">
                                        <textarea class="form-control" placeholder="your comments *"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="your name *">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" placeholder="your name *">
                                    </div>
                                    <div class="col-12 ">
                                        <div class="custom-checkbox notice">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent"> Save my name, email, and
                                                website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn">Send Message<i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-area">
                        <div class="widget widget_about wow animate__fadeInUp wow-animated">
                            <img src="{{asset('/')}}website/assets/img/blog/widget-profile-img-1-1.jpg" alt="about">
                            <h3>Amalia <span>elha</span></h3>
                            <p>Lorem ipsum dolor sit amet cons elitsedid that eiusmod aboret dolore</p>
                        </div>
                        <div class="widget widget_categories wow animate__fadeInUp wow-animated">
                            <h3 class="widget_title">
                                category
                            </h3>
                            <ul>
                                <li>
                                    <a href="blog-details.html">
                                        diamond pendant
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                                <li>
                                    <a href="blog-details.html">
                                        necklace
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                                <li>
                                    <a href="blog-details.html">
                                        woman ring
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                                <li>
                                    <a href="blog-details.html">
                                        pendent
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                            </ul>
                        </div>
                        <div class="widget wow animate__fadeInUp">
                            <h3 class="widget_title">
                                Recent Post
                            </h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="blog-details.html">
                                                Struure Dial design
                                                watch
                                            </a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <span>09 Aug, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="blog-details.html">
                                                piece old hanging
                                                down
                                            </a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <span>05 Mar, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="blog-details.html">
                                                loose hanging piece
                                                watch
                                            </a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <span>20 Jan, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tags wow animate__fadeInUp">
                            <h3 class="widget_title">
                                Tags
                            </h3>
                            <div class="tagcloud">
                                <a href="blog-details.html">diamond</a>
                                <a href="blog-details.html">necklace</a>
                                <a href="blog-details.html">rings</a>
                                <a href="blog-details.html">wedding ring</a>
                                <a href="blog-details.html">pendant</a>
                            </div>
                        </div>
                        <div class="widget widget_tags wow animate__fadeInUp">
                            <h3 class="widget_title">
                                Tags
                            </h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="{{asset('/')}}website/assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100">
                                    <a href="{{asset('/')}}website/assets/img/widget/gal-1-1.jpg" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{asset('/')}}website/assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
                                    <a href="{{asset('/')}}website/assets/img/widget/gal-1-2.jpg" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{asset('/')}}website/assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100">
                                    <a href="{{asset('/')}}website/assets/img/widget/gal-1-3.jpg" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{asset('/')}}website/assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100">
                                    <a href="{{asset('/')}}website/assets/img/widget/gal-1-4.jpg" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{asset('/')}}website/assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100">
                                    <a href="{{asset('/')}}website/assets/img/widget/gal-1-5.jpg" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{asset('/')}}website/assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100">
                                    <a href="{{asset('/')}}website/assets/img/widget/gal-1-6.jpg" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget wow animate__fadeInUp wow-animated">
                            <h3 class="widget_title">
                                search
                            </h3>
                            <form class="search-form">
                                <input type="text" placeholder="type here...">
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.08398 17.3333C13.6403 17.3333 17.334 13.6396 17.334 9.08325C17.334 4.5269 13.6403 0.833252 9.08398 0.833252C4.52764 0.833252 0.833984 4.5269 0.833984 9.08325C0.833984 13.6396 4.52764 17.3333 9.08398 17.3333Z" stroke="#EBEBEB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.3537 17.9656C16.8395 19.4322 17.9487 19.5789 18.8012 18.2956C19.5804 17.1222 19.067 16.1597 17.6554 16.1597C16.6104 16.1506 16.0237 16.9664 16.3537 17.9656Z" stroke="#EBEBEB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
