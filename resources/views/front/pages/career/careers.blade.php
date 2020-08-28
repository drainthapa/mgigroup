@extends('layouts.frontLayout.front_design')    
 @section('content')
     <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Careers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Careers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{asset('images/frontend_images/core-img/curve-5.png')}}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All POSITION</button>
            <button class="btn" data-filter=".data-science">DATA SCIENCE</button>
            <button class="btn" data-filter=".engineering">ENGINEERING</button>
            <button class="btn" data-filter=".marketing">MARKETING</button>
            <button class="btn" data-filter=".quality-control">QUALITY CONTROL</button>
            <button class="btn" data-filter=".manager">MANAGER</button>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">
                @foreach($careers as $career)
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item data-science">
                    <div class="single-portfolio-slide">
                        <img src="{{asset('images/frontend_images/bg-img/career.jpg')}}" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>{{ $career->title }}</h4>
                            <p><i class="icon_info"></i> {{ $career->location }}</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="{{route('career.show',$career->slug)}}"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn uza-btn btn-3">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

@endsection