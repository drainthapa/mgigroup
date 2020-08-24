@extends('layouts.frontLayout.front_design')    
@section('content')

 <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Milestone</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Milestone</li>
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

  <!-- ***** Blog Area Start ***** -->
    <div class="uza-blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-12">
                	<img src="{{asset('/images/frontend_images/bg-img/milestonemgifinale.png')}}" style="box-shadow:0 8px 22px 0 rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>
    </div>


@endsection