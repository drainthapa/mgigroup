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
                        <h2>Our Business Investments</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach( $companygroups as $companygroup)
                <!-- Single Service Area -->
                <div class="bns-grp col-12 col-lg-4">
                    <a href="{{route('company.show',$companygroup->slug)}}">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="{{ $companygroup->icon }}"></i>
                        </div>
                        <h5>{{ $companygroup->name }}</h5>
                        <p>{{ $companygroup->shortdescription }}</p>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
<section class="uza-cf-area section-padding-80-0">
    <div class="container">
        <div class="row">

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">1000</span></h2>
                    <div class="cf-text">
                        <h5>More than <br> 10K Employees</h5>
                    </div>
                    {{-- <div class="bg-icon"><i class="icon_heart_alt"></i></div> --}}
                </div>
            </div>


            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">20</span></h2>
                    <div class="cf-text">
                        <h5>Companies in <br>strategic and <br> vital sectors</h5>
                    </div>
                    {{-- <div class="bg-icon"><i class="icon_piechart"></i></div> --}}
                </div>
            </div>

            
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">50</span></h2>
                    <div class="cf-text">
                        <h5>BEST GROUP<br>awards</h5>
                    </div>
                   {{--  <div class="bg-icon"><i class="icon_book_alt"></i></div> --}}
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">500</span></h2>
                    <div class="cf-text">
                        <h5>BILLION<br>Capital investment</h5>
                    </div>
                   {{--  <div class="bg-icon"><i class="icon_profile"></i></div> --}}
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="{{asset('images/frontend_images/core-img/curve-4.png')}}" alt="">
        </div>


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
                @foreach($blogs as $blog)

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(/images/frontend_images/bg-img/8.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                             <span class="post-date">{{  $blog->postdate }}</span>
                            <a href="{{route('blog.showblog',$blog->slug)}}" class="post-title">{{  $blog->title }}</a>
                            <p>{{ Str::limit($blog->description, 100) }}</p>
                            <a href="{{route('blog.showblog',$blog->slug)}}" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
@endsection