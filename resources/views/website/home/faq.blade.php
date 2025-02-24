@extends('website.master')

@section('title')
    faq's
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
                <h1 class="breadcumb-title">FAQ's</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>faq’s</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Area -->
    <section class="space space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-uppercase text-white mb-4 sec-title">faq</h2>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Why Choose us?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    At LUXRIO, we pride ourselves on creating jewelry that exemplifies superior artistry and attention to detail. Our skilled artisans meticulously craft each piece to ensure it meets the highest standards of quality and design.
                                </div>
                            </div>
                        </div>
                        @foreach($faqs as $key => $faq)
                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapseTwo">
                                     {{$faq->question}}
                                </button>
                            </h2>
                            <div id="collapse{{$key}}" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    {{$faq->answer}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Area End -->

@endsection
