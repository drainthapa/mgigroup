@extends('layouts.frontLayout.front_design')    
@section('content')
  <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            @foreach ( $sliders as $slider)

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="{{asset('images/frontend_images/core-img/curve-1.png')}}" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">{{ $slider->title }}</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">{{ $slider->subtitle }}</h5>
                                    <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">{{ $slider->btntext }}</a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="{{asset('images/frontend_images/bg-img/1.png')}}" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             @endforeach
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">
                @foreach( $introductions as $introduction)
                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="{{asset('images/frontend_images/bg-img/2.jpg')}}" alt="">
                        <!-- Video Area -->
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>{{ $introduction->title }}</h2>
                        <p>{{ $introduction->description }} </p>
                        <a href="#" class="btn uza-btn btn-2 mt-4">{{ $introduction->btntext }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="{{asset('images/frontend_images/core-img/curve-2.png')}}" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Business Groups</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach( $companygroups as $companygroup)
                <!-- Single Service Area -->
                <div class="bns-grp col-12 col-lg-4">
                    <a href="{{url('front/company-details')}}">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="{{ $companygroup->icon }}"></i>
                        </div>
                        <h5>{{ $companygroup->name }}</h5>
                        <p>{{ $companygroup->description }}</p>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Portfolio</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/3.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/4.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/5.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/6.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/5.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/6.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Digital Marketing</h4>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Client Feedback Area Start -->
        <div class="clients-feedback-area mt-80 section-padding-80 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('images/frontend_images/bg-img/7.jpg')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Manakamana Group of Industries takes a holistic approach towards sustainability, optimizing the use of available resources such as raw materials, utilities, human resources, etc.MGI Group constantly works towards minimizing its environmental footprint through this approach.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO </span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="{{asset('images/frontend_images/core-img/quote.png')}}" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('images/frontend_images/bg-img/23.jpg')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Manakamana Group of Industries takes a holistic approach towards sustainability, optimizing the use of available resources such as raw materials, utilities, human resources, etc.MGI Group constantly works towards minimizing its environmental footprint through this approach.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO</span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="{{asset('images/frontend_images/core-img/quote.png')}}" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('images/frontend_images/bg-img/24.jpg')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Manakamana Group of Industries takes a holistic approach towards sustainability, optimizing the use of available resources such as raw materials, utilities, human resources, etc.MGI Group constantly works towards minimizing its environmental footprint through this approach.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darrell Goodman <span>- CEO </span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="{{asset('images/frontend_images/core-img/quote.png')}}" alt=""></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Feedback Area End -->

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="{{asset('images/frontend_images/core-img/curve-3.png')}}" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="{{asset('images/frontend_images/core-img/curve-4.png')}}" alt="">
        </div>

        <!-- CTA Area Start -->
        <div class="uza-cta-area section-padding-0-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <div class="cta-content mb-80">
                            <h2>Interested in working with us?</h2>
                            <h6>Hit the button below or give us a call!</h6>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="cta-content mb-80">
                            <div class="call-now-btn">
                                <a href="#"><span>Call us now:</span> (+977) 9876543210</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Area End -->

        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Latest Blogs</h2>
                        <p>Hit the button below or give us a call!</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(/images/frontend_images/bg-img/8.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>23</span> August, 2018</span>
                            <a href="#" class="post-title">SEO: The Movie By Ignite Visibility</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(/images/frontend_images/bg-img/9.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>13</span> December, 2018</span>
                            <a href="#" class="post-title">What Curling Irons Are The Best Ones</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(/images/frontend_images/bg-img/10.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>08</span> July, 2018</span>
                            <a href="#" class="post-title">Amazon REV Workshop: Road to Seattle</a>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut</p>
                            <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

   

@endsection