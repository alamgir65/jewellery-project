@extends('website.master')

@section('title')
    Contact-us
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
                <h1 class="breadcumb-title">contact us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area -->
    <section class="space space-extra-bottom">
        <div class="container">
            <div class="row gx-60 align-items-center">
                <div class="col-lg-5 mb-30">
                    <div class="mb-30">
                        <span class="sec-subtitle">contact info</span>
                        <h2 class="sec-title text-white">get in touch</h2>
                        <img src="{{asset('/')}}website/assets/img/shapes/title-shape-1.svg" alt="title shape">
                    </div>
                    <div class="contact-info mb-20">
                        <span>Address:</span> dains wQ 966 munich Expresswa 70 Germany, TX 7859
                    </div>
                    <div class="mb-20">
              <span class="address-info">
            <img src="{{asset('/')}}website/assets/img/icons/vs-ct-icon-1-1.svg" alt="vs icon">
            Customer Service :
            <a href="tel:+9-555-888-679">+9-555-888-679</a>
          </span>
                        <span class="address-info">
            <img src="{{asset('/')}}website/assets/img/icons/vs-ct-icon-1-2.svg" alt="vs icon">
            Careers :
            <a href="mailto:luxrio@info.com">luxrio@info.com</a>
          </span>
                    </div>
                    <div class="social-style">
                        <h4 class="footer-title mb-0">follow</h4>
                        <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 mb-30">
                    <form action="https://html.vecurosoft.com/luxrio/demo/mail.php" method="post" class="form-style2 ajax-contact" action="https://html.vecurosoft.com/luxrio/demo/mail.php" method="POST">
                        <div class="row gx-20">
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="text" name="name" id="fname" placeholder="Your Name *">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="text" name="name" id="lname" placeholder="Last Name *">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control" type="tel" name="phone" id="phone" placeholder="Phone *">
                            </div>
                            <div class="col-12 form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="vs-btn">submit now</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
    <div class="space-bottom">
        <div class="container">
            <div class="map-style1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461913.0572571096!2d8.516164543417332!3d50.24088825844987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd121b354b47fd%3A0x422435029b0c610!2sOffenbach%2C%20Germany!5e0!3m2!1sen!2sbd!4v1693456840610!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
