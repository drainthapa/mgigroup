@extends('layouts.frontLayout.front_design')    
@section('content') 

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Privacy Policy</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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

<div class="uza-blog-area ">
    <div class="container" style="padding:25px;">
        <div class="row">
            <!-- Single Blog Post -->
            <div class="col-12 col-lg-12" style="box-shadow: 0 8px 22px 0 rgba(0, 0, 0, 0.1);">
              <!-- Post Content -->
              <div class="post-content" style="padding:25px;">
                <h4 style="font-weight: 600;font-size: 30px;"><i class="arrow_carrot-2right"></i> Who we are</h4>
                <p> Our website address is : <a href="https://mgigroup.com.np"> https://mgigroup.com.np</a></p>

                <h4 style="font-weight: 600;font-size: 30px;"><i class="arrow_carrot-2right"></i> What personal data we collect and why we collect it</h4>
                <p style="font-weight: 600;">1) Comments </p>
                <p>- When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>
                <p>- An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>

                <p style="font-weight: 600;">2) Media </p>
                <p>- If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>

                <p style="font-weight: 600;">3) Contact Forms </p>

                <p style="font-weight: 600;">4) Cookies </p>
                <p>- If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>
                <p>- If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>
                <p>- When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>
                <p>- If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>

                <p style="font-weight: 600;">5) Embedded content from other websites </p>
                <p>- Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
                <p>- These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>

                   <p style="font-weight: 600;">6) Analytics</p>
                   <p style="font-weight: 600;">7) Who we share your data with</p>
                   <p style="font-weight: 600;">8) How long we retain your data</p>
                   <p>- If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>
                   <p>- For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>

                   <p style="font-weight: 600;">9) What rights you have over your data</p>
                   <p>- If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>

                   <p style="font-weight: 600;">10) Where we send your data</p>
                   <p>- Visitor comments may be checked through an automated spam detection service.</p>
                   <p style="font-weight: 600;">11) Your contact information</p>
                   <p style="font-weight: 600;">12) How we protect your data</p>
                   <p style="font-weight: 600;">13) What data breach procedures we have in place</p>
                   <p style="font-weight: 600;">14) What third parties we receive data from</p>
                   <p style="font-weight: 600;">15) What automated decision making and/or profiling we do with user data</p>
                   <p style="font-weight: 600;">16) Industry regulatory disclosure requirements</p>
                   <p style="font-weight: 600;">17) Where we send your data</p>

            </div>
        </div>
    </div>
</div>
</div>
<!-- ***** Blog Area End ***** -->
@endsection