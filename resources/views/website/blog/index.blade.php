@extends('website.master')

@section('title')
    blog
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
                <h1 class="breadcumb-title">our blog</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>our blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="vs-blog blog-style1 wow animate__fadeInUp wow-animated">
                        <div class="blog-img">
                            <a href="{{route('blog-details')}}">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-big-1-1.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">Diamond</a>
                                <span>December 1, 2024</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{route('blog-details')}}">
                                    both of which translate
                                </a>
                            </h3>
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, conse elit, sedid that eiusmod aboret dolore magna aliqua conseel usndi
                                labois sitamet sedid sedid eiusm or incididunt ut labore et dolore magna aliq. Uenim minim veniam,
                                quis nostrud Duis aute irure dolor in reprehend.
                            </p>
                            <div class="blog-footer">
                                <a class="blog-link" href="{{route('blog-details')}}">
                                    Read More
                                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.707 6.04883L10.957 9.79883C10.6055 10.1797 9.99023 10.1797 9.63867 9.79883C9.25781 9.44727 9.25781 8.83203 9.63867 8.48047L11.7773 6.3125H0.9375C0.410156 6.3125 0 5.90234 0 5.375C0 4.81836 0.410156 4.4375 0.9375 4.4375H11.7773L9.63867 2.29883C9.25781 1.94727 9.25781 1.33203 9.63867 0.980469C9.99023 0.599609 10.6055 0.599609 10.957 0.980469L14.707 4.73047C15.0879 5.08203 15.0879 5.69727 14.707 6.04883Z" fill="#FF3E01" />
                                    </svg>
                                </a>
                                <div class="blog-social">
                                    <a href="#">IG</a>
                                    <a href="#">FB</a>
                                    <a href="#">LI</a>
                                </div>
                            </div>
                            <img src="{{asset('/')}}website/assets/img/shapes/dot-shape-2.svg" alt="dot" class="blog-element">
                        </div>
                    </div>
                    <div class="vs-blog blog-style1 wow animate__fadeInUp wow-animated">
                        <div class="blog-img">
                            <a href="{{route('blog-details')}}">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-big-1-2.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">Diamond</a>
                                <span>December 1, 2024</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{route('blog-details')}}">
                                    piece hanging down
                                </a>
                            </h3>
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, conse elit, sedid that eiusmod aboret dolore magna aliqua conseel usndi
                                labois sitamet sedid sedid eiusm or incididunt ut labore et dolore magna aliq. Uenim minim veniam,
                                quis nostrud Duis aute irure dolor in reprehend.
                            </p>
                            <div class="blog-footer">
                                <a class="blog-link" href="{{route('blog-details')}}">
                                    Read More
                                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.707 6.04883L10.957 9.79883C10.6055 10.1797 9.99023 10.1797 9.63867 9.79883C9.25781 9.44727 9.25781 8.83203 9.63867 8.48047L11.7773 6.3125H0.9375C0.410156 6.3125 0 5.90234 0 5.375C0 4.81836 0.410156 4.4375 0.9375 4.4375H11.7773L9.63867 2.29883C9.25781 1.94727 9.25781 1.33203 9.63867 0.980469C9.99023 0.599609 10.6055 0.599609 10.957 0.980469L14.707 4.73047C15.0879 5.08203 15.0879 5.69727 14.707 6.04883Z" fill="#FF3E01" />
                                    </svg>
                                </a>
                                <div class="blog-social">
                                    <a href="#">IG</a>
                                    <a href="#">FB</a>
                                    <a href="#">LI</a>
                                </div>
                            </div>
                            <img src="{{asset('/')}}website/assets/img/shapes/dot-shape-2.svg" alt="dot" class="blog-element">
                        </div>
                    </div>
                    <div class="vs-blog blog-style1 wow animate__fadeInUp wow-animated">
                        <div class="blog-img">
                            <a href="{{route('blog-details')}}">
                                <img class="img" src="{{asset('/')}}website/assets/img/blog/blog-big-1-3.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">Diamond</a>
                                <span>December 1, 2024</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{route('blog-details')}}">
                                    piece hanging down
                                </a>
                            </h3>
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, conse elit, sedid that eiusmod aboret dolore magna aliqua conseel usndi
                                labois sitamet sedid sedid eiusm or incididunt ut labore et dolore magna aliq. Uenim minim veniam,
                                quis nostrud Duis aute irure dolor in reprehend.
                            </p>
                            <div class="blog-footer">
                                <a class="blog-link" href="{{route('blog-details')}}">
                                    Read More
                                    <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.707 6.04883L10.957 9.79883C10.6055 10.1797 9.99023 10.1797 9.63867 9.79883C9.25781 9.44727 9.25781 8.83203 9.63867 8.48047L11.7773 6.3125H0.9375C0.410156 6.3125 0 5.90234 0 5.375C0 4.81836 0.410156 4.4375 0.9375 4.4375H11.7773L9.63867 2.29883C9.25781 1.94727 9.25781 1.33203 9.63867 0.980469C9.99023 0.599609 10.6055 0.599609 10.957 0.980469L14.707 4.73047C15.0879 5.08203 15.0879 5.69727 14.707 6.04883Z" fill="#FF3E01" />
                                    </svg>
                                </a>
                                <div class="blog-social">
                                    <a href="#">IG</a>
                                    <a href="#">FB</a>
                                    <a href="#">LI</a>
                                </div>
                            </div>
                            <img src="{{asset('/')}}website/assets/img/shapes/dot-shape-2.svg" alt="dot" class="blog-element">
                        </div>
                    </div>
                    <div class="vs-pagination">
                        <a href="#" class="pagi-btn"><i class="fa-solid fa-angles-left"></i></a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                        </ul>
                        <a href="#" class="pagi-btn"><i class="fa-solid fa-angles-right"></i></a>
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
                                    <a href="{{route('blog-details')}}">
                                        diamond pendant
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                                <li>
                                    <a href="{{route('blog-details')}}">
                                        necklace
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                                <li>
                                    <a href="{{route('blog-details')}}">
                                        woman ring
                                    </a>
                                    <span>3</span>
                                    <img class="dot-shape" src="{{asset('/')}}website/assets/img/shapes/dot-shape-3.svg" alt="dot-shape">
                                </li>
                                <li>
                                    <a href="{{route('blog-details')}}">
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
                                        <a href="{{route('blog-details')}}"><img src="{{asset('/')}}website/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{route('blog-details')}}">
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
                                        <a href="{{route('blog-details')}}"><img src="{{asset('/')}}website/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{route('blog-details')}}">
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
                                        <a href="{{route('blog-details')}}"><img src="{{asset('/')}}website/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{route('blog-details')}}">
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
                                <a href="{{route('blog-details')}}">diamond</a>
                                <a href="{{route('blog-details')}}">necklace</a>
                                <a href="{{route('blog-details')}}">rings</a>
                                <a href="{{route('blog-details')}}">wedding ring</a>
                                <a href="{{route('blog-details')}}">pendant</a>
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
