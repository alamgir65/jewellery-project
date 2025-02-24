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
                        <li><a href="index.html">Home</a></li>
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
                                    The order
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                    born and I will give you a complete account.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     What materials are your jewelry pieces made from?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    Our jewelry is crafted from high-quality materials, including sterling silver, gold, platinum, and ethically sourced gemstones. Each product description provides detailed information about the materials used.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer customization or personalized jewelry?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    Yes, we offer custom design services. If you're interested in creating a personalized piece, please contact our design team through our Custom Jewelry Page to discuss your ideas and requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is your return and exchange policy?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    We accept returns and exchanges within 30 days of purchase, provided the item is in its original condition and packaging. Custom or personalized items are non-refundable. For detailed information, please refer to our Return Policy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    How can I determine my ring size?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    We provide a Ring Size Guide on our website to help you find your perfect fit. If you're still unsure, we recommend visiting a local jeweler for an accurate measurement.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Do you ship internationally?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    Yes, we offer international shipping to many countries. Shipping costs and delivery times vary based on the destination. Please visit our Shipping Information page for more details.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Returns, exchanges and complaints
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                    born and I will give you a complete account.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Area End -->

@endsection
