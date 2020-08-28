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
                            <li class="breadcrumb-item active" aria-current="page">{{  $career->title }}</li>
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
<div class="uza-blog-area ">
    <div class="container" style="padding:50px;">
        <div class="row">
            <!-- Single Blog Post -->
            <div class="col-12 col-lg-12" style="box-shadow: 0 8px 22px 0 rgba(0, 0, 0, 0.1);">
              <!-- Post Content -->
              <div class="post-content" style="padding:25px;">
                <p style="font-weight: 600;">{{ $career->cmp_description  }}</p>
                <p style="font-size: 24px;font-weight: 600;">LOCATION : </p><span><p> - {{ $career->location }}</p></span>
            </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-12" style="box-shadow: 0 8px 22px 0 rgba(0, 0, 0, 0.1);">
              <!-- Post Content -->
              <div class="post-content" style="padding:25px;">
                <p style="font-size: 24px;font-weight: 600;">RESPONSIBILITES : </p> <p> {{ $career->responsiblities }}</p>
            </div>
            </div>

               <!-- Single Blog Post -->
            <div class="col-12 col-lg-12" style="box-shadow: 0 8px 22px 0 rgba(0, 0, 0, 0.1);">
              <!-- Post Content -->
              <div class="post-content" style="padding:25px;">
                <p style="font-size: 24px;font-weight: 600;">REQUIREMENTS : </p> <p> {{ $career->requirements }}</p>
            </div>
            </div>


               <!-- Single Blog Post -->
            <div class="col-12 col-lg-12" style="box-shadow: 0 8px 22px 0 rgba(0, 0, 0, 0.1);">
              <!-- Post Content -->
              <div class="post-content" style="padding:25px;">
                <p style="font-size: 24px;font-weight: 600;">DEADLINE: </p> <p> {{ $career->deadline }}</p>
            </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-12 text-center">
                 <a href="#" class="btn uza-btn btn-3">APPLY NOW</a>
            </div>
        </div>
</div>
<!-- ***** Blog Area End ***** -->
@endsection