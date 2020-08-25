<!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Footer Content -->
                        <div class="footer-content mb-15">
                            <h3>(+977)<br> {{ $footers->contact }}</h3>
                            <p>{{ $footers->address }}<br> {{ $footers->email }}</p>
                        </div>
                        <p class="mb-0">{{ $footers->openinghours }}<br>
                            {{ $footers->weekendhours }}</p>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Quick Link</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Forum Registeration</a></li>
                                <li><a href="#">Forum Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Resources</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Media &amp; Press</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p>{{ $footers->about }}</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text mb-30">
                            <p><b>FOLLOW US ON : </b></p>
                        </div>

                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>

            </div>

 <div class="row" style="margin-bottom: 30px;">
                
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> {{ $footers->copy_right_one }}<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://lumbinitech.com.np/" target="_blank">{{ $footers->copy_right_two }}</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="{{asset('js/frontend_js/jquery.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/frontend_js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/frontend_js/bootstrap.min.js')}}"></script>
    <!-- All js -->
    <script src="{{asset('js/frontend_js/uza.bundle.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/frontend_js/default-assets/active.js')}}"></script>

</body>

</html>