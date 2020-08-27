@extends('layouts.frontLayout.front_design')    
@section('content') 
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">News</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News/Blog</li>
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
                @foreach( $blogs as $blog)
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url('{{asset('/images/frontend_images/bg-img/8.jpg')}}');">
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
            
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn uza-btn btn-3">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Blog Area End ***** -->

@endsection