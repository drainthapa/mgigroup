    <!-- Preloader -->
   {{--  <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div> --}}

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{url('/')}}"><img src="{{asset('images/frontend_images/core-img/mgilogoo.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="{{url('/')}}">HOME</a></li>
                                <li><a href="#">MGI</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/front/pages/aboutus/about-us')}}">About MGI</a></li>
                                        <li><a href="#">Leadership</a></li>
                                        <li><a href="#">Promoters</a></li>
                                        <li><a href="{{url('/front/milestone')}}">Milestones</a></li>
                                        <li><a href="{{url('front/awards')}}">Awards</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">SBUs</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('front/company-details')}}">New Manakamana Eta</a></li>
                                        <li><a href="#">New Manakamana Miller</a></li>
                                        <li><a href="#">Manakamana Eta Udyog</a></li>
                                        <li><a href="#">Manakamana Eta Udyog</a></li>
                                        <li><a href="#">Manakamana Eta Udyog</a></li>
                                        <li><a href="#">Manakamana Eta Udyog</a></li>
                                        <li><a href="#">Manakamana Eta Udyog</a></li>
                                        <li><a href="#">Roadyz Automart Pvt. Ltd.</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">APPROVALS</a>
                                <ul class="dropdown">
                                        <li><a href="{{url('front/pages/certificate/certification')}}">CERTIFICATIONS</a></li>
                                        <li><a href="{{url('front/client')}}">CLIENTELE</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('front/pages/newsblog/news')}}">NEWS</a></li>
                                <li><a href="{{url('front/pages/career/careers')}}">CAREERS</a></li>
                            </ul>

                            <!-- Get A Quote -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="{{url('front/contact')}}" class="btn uza-btn">CONTACT US</a>
                            </div>

                            <!-- Login / Register -->
                            <div class="login-register-btn mx-3">
                                <i class="icon_profile"></i><span><a href="{{url('/admin')}}"> Login</span></a>
                            </div>

                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->