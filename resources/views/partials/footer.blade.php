  <!-- start header area -->
    <!-- rts footer three area start -->
    <div class="rts-footer-area footer-three rts-section-gapTop footer-bg-2">
        <div class="container pb--100 pb_sm--40">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized left">
                        <a href="index" class="logo_footer">
                            <img src="{{ asset($contactUs->footer_logo)}}" alt="Logo-image">
                        </a>
                        <p class="disc">Felis consquat magnis fames sagittis ultrices plasodales porttitor quisque
                            ultrice tempor turpis.</p>
                        <ul class="social-three-wrapper"> 
                            <li><a href="{{ $sociallink->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $sociallink->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $sociallink->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $sociallink->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer three mid area -->
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <!-- footer mid area left -->
                        <div class="col-lg-6">
                            <div class="footer-three-single-wized mid-left">
                                <h5 class="title">Office Information</h5>
                                <div class="body">
                                    <div class="info-wrapper">
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="fas fa-phone-alt"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>Call Us 24/7</span>
                                                <a href="#">{{$contactUs->first_phone}}</a>
                                            </div>
                                        </div>
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="far fa-envelope"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>Work with us</span>
                                                <a href="#">{{$contactUs->first_email}}</a>
                                            </div>
                                        </div>
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="fas fa-map-marker-alt"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>Our Location</span>
                                                <a href="#">{{$contactUs->first_address}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer mid area left end -->

                        <!-- footer mid area right -->
                        <div class="col-lg-6">
                            <div class="footer-two-single-wized two">
                                <div class="wized-title-area">
                                    <h5 class="wized-title">Quick Links</h5>
                                </div>
                                <div class="wized-2-body">
                                    <ul>
                                        <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>News & Update</a></li>
                                        <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Blog</a></li>
                                        <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Case Studies</a></li>
                                        <li><a href="service-details.html"><i class="fal fa-chevron-double-right"></i>Newsletter Signup</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- footer mid area right end -->
                    </div>
                </div>
                <!-- footer three mid area ENd -->
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized mid-right">
                        <h5 class="title">Get Updates</h5>
                        <div class="body">
                            <div class="update-wrapper">
                                <p class="disc">Sign up for our latest news & articles. We won’t give you spam
                                    mails.</p>
                                <form class="email-footer-area">
                                    <input type="email" placeholder="Enter Email Address" required>
                                    <button type="submit"><i class="fas fa-location-arrow"></i></button>
                                </form>
                                <div class="note-area">
                                    <p><span>Note:</span> We do not publish your email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- rts footer three area end -->
    <!-- ENd Header Area -->



    <!-- copyright-area start -->
    <div class="rts-copy-right ptb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc">
                            {{ $contactUs->company_name }}- Copyright {{ date('Y') }} . All rights reserved.
                        </p> 
                        <div class="right">
                            <ul>
                                <li><a href="{{ route('home.pages', 'blog') }}">Company News</a></li>
                                <li><a href="{{ route('home.pages', 'faq') }}">Faq</a></li>
                                <li><a href="{{ route('home.pages', 'contactus') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright-area end -->
    <!-- ENd Header Area -->


    <!-- start loader -->
    {{-- <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> --}}
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->


    <!-- scripts start form hear -->
    <script src="{{ asset ('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset ('assets/js/vendor/jqueryui.js')}}"></script>
    <script src="{{ asset ('assets/js/vendor/waypoint.js')}}"></script>
    <script src="{{ asset ('assets/js/plugins/swiper.js')}}"></script>
    <script src="{{ asset ('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{ asset ('assets/js/plugins/sal.min.js')}}"></script>
    <script src="{{ asset ('assets/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{ asset ('assets/js/vendor/waw.js')}}"></script>
    <script src="{{ asset ('assets/js/plugins/contact.form.js')}}"></script>
    <!-- main Js -->
    <script src="{{ asset ('assets/js/main.js')}}"></script>
    <!-- scripts end form hear -->
