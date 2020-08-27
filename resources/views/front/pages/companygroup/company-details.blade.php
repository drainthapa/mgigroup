@extends('layouts.frontLayout.front_design')    
@section('content') 

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">{{ $companygroup->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Company Details</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $companygroup->name }}</li>
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

    <!-- ***** Portfolio Single Area Start ***** -->
    <section class="uza-portfolio-single-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-12 col-md-6">
                    <div class="portfolio-details-text">
                        <h2>{{ $companygroup->name }}</h2>
                        <p>{{ $companygroup->longdescription }}</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="portfolio-meta">
                        <h6>Managing Director: {{ $companygroup->managingdirector }}</h6>
                        <h6>Established: {{ $companygroup->established }}</h6>
                        <h6>Location: {{ $companygroup->address }}</h6>
                        <h6>Contact: {{ $companygroup->contact }}</h6>
                    </div>
                    <div class="portfolio-social-info d-flex align-items-center">
                        <p>Share:</p>
                        <a href="{{ $companygroup->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{ $companygroup->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{ $companygroup->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{ $companygroup->whatsapp }}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-thumbnail mt-80">
                        <img src="{{asset('images/frontend_images/bg-img/13.jpg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-pager mt-80 d-flex align-items-center justify-content-between">
                        <a href="#"><i class="arrow_left"></i> Previous Comapany</a>
                        <a href="{{url('/')}}">Back to home</a>
                        <a href="#">Next Comapany <i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Single Area End ***** -->
@endsection