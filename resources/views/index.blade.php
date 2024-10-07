@extends('layouts.app')

@section('content')
<!-- rts banner area start -->
<div class="rts-banner-area-two">
    <div class="swiper mySwiperh2_banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-two-content text-center">
                                    <div class="wrapper">
                                        <span class="sub">20+ Years In Business</span>
                                        <h1 class="title">
                                            <span>Solving</span> Your Vision Is <br>
                                            <span>Our</span> Dedication
                                        </h1>
                                        <a class="rts-btn btn-primary-2" href="#">View Solution</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-two slide-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-two-content text-center">
                                    <div class="wrapper">
                                        <span class="sub">20+ Years In Business</span>
                                        <h1 class="title">
                                            <span>Boosting</span> Your Business <br> Is
                                            <span>Our</span> Dedication
                                        </h1>
                                        <a class="rts-btn btn-primary-2" href="#">View Solution</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-two slide-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-two-content text-center">
                                    <div class="wrapper">
                                        <span class="sub">20+ Years In Business</span>
                                        <h1 class="title">
                                            <span>Making</span> Business Growth Is Our <span>Dedication</span>
                                        </h1>
                                        <a class="rts-btn btn-primary-2" href="#">View Solution</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts banner area end -->

<!-- start about our company -->
<div class="rts-about-our-company-h2 rts-section-gap">
    <div class="container">
        <div class="row">
            <div
                class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                <div class="title-area about-company">
                    <span>About Our Company</span>
                    <h2 class="title">Professional And Dedicated <br>
                        Consulting Services</h2>
                </div>
                <div class="about-company-wrapper">
                    <p class="disc">
                        We are licensed and insured with over 14 years of experience in providing <br> United States
                        with
                        top-rated USA business services
                    </p>
                    <div class="rts-tab-style-one">
                        <div class="d-flex align-items-start contoler-company">
                            <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">01. The Great Mission</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">02. Amazing Vision</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc">
                                            Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                            taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                        </p>
                                        <div class="check-area">
                                            <i class="fas fa-check-circle"></i>
                                            <p class="disc">
                                                Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                            </p>
                                        </div>
                                        <div class="check-area">
                                            <i class="fas fa-check-circle"></i>
                                            <p class="disc">
                                                Eu nisi quam senectus odio commodo quam pellente
                                            </p>
                                        </div>
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus')}}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc">
                                            Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                            taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                        </p>
                                        <div class="check-area">
                                            <i class="fas fa-check-circle"></i>
                                            <p class="disc">
                                                Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                            </p>
                                        </div>
                                        <div class="check-area">
                                            <i class="fas fa-check-circle"></i>
                                            <p class="disc">
                                                Eu nisi quam senectus odio commodo quam pellente
                                            </p>
                                        </div>
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus')}}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1">
                <div class="about-company-thumbnail">
                    <img src="assets/images/about/01.png" alt="Business_company">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start about our company End -->


<div id="anywhere-home"></div>
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/logo-1.svg" alt="finbiz_logo"></a>
        <a class="logo-2" href="index.html"><img class="logo" src="assets/images/logo/logo-4.svg" alt="finbiz_logo"></a>
        <a class="logo-3" href="index.html"><img class="logo" src="assets/images/logo/logo-3.svg" alt="finbiz_logo"></a>
        <a class="logo-4" href="index.html"><img class="logo" src="assets/images/logo/logo-5.svg" alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+8801234566789</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">example@gmail.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.webexample.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">13/A, New Pro State, NYC</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Home</a>
                        <ul class="submenu">
                            <li>
                                <ul>
                                    <a href="#0" class="tag">Homepages</a>
                                    <li class="mobile-menu-link"><a href="index.html">Main Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-two.html">Consulting Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-three.html">Corporate Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-four.html">Insurance Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-five.html">Marketing Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-six.html">Finance Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-seven.html">Human Resources</a></li>
                                    <li class="mobile-menu-link"><a href="index-eight.html">IT Solutions</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-nine.html">Modern Agency</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-ten.html">Startup Agency</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-eleven.html">Branding-Agency</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="#0" class="tag">Onepages</a>
                                    <li class="mobile-menu-link"><a href="onepage-one.html">Main Home Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-two.html">Consulting Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-three.html">Corporate Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-four.html">Insurance Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-five.html">Marketing Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-six.html">Finance Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-seven.html">Human Resources
                                            Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-eight.html">IT Solutions Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-nine.html">Modern Agency</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-ten.html">Startup Agency</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-eleven.html">Branding-Agency</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Services</a>
                        <ul class="submenu">
                            <li class="has-droupdown sub-droupdown">
                                <a href="#">Our Service</a>
                                <ul class="submenu third-lvl mobile-menu">
                                    <li><a href="our-service.html">Service 1</a></li>
                                    <li><a href="service-2.html">Service 2</a></li>
                                    <li><a href="service-3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                            <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                            <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                            <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                            <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                            <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                            <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                            <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item"><a class="menu-link" href="contactus.html">Contact</a></li>
                </ul>
            </nav>
            <div class="social-wrapper-two menu mobile-menu">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
        </div>
    </div>
    <!-- inner menu area desktop End -->
</div>
<!-- ENd Header Area -->


<!-- latest service area -->
<div class="rts-service-area rts-section-gap bg-service-h2">
    <div class="container">
        <div class="row">
            <div class="title-area service-h2">
                <span>Our Latest Services</span>
                <h2 class="title">Service We Provide</h2>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single service start -->
                <div class="rts-single-service-h2">
                    <a href="service-details.html" class="thumbnail">
                        <img src="assets/images/service/10.jpg" alt="Service_image">
                    </a>
                    <div class="body">
                        <a href="service-details.html">
                            <h5 class="title">Business Solution</h5>
                        </a>
                        <p class="disc">
                            Fusce dignissim erat dis proin ornare class sem nibh
                        </p>
                        <a href="service-details.html" class="btn-red-more">Learn More<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single service start -->
                <div class="rts-single-service-h2">
                    <a href="service-details.html" class="thumbnail">
                        <img src="assets/images/service/11.jpg" alt="Service_image">
                    </a>
                    <div class="body">
                        <a href="service-details.html">
                            <h5 class="title">Creative Ideas</h5>
                        </a>
                        <p class="disc">
                            Fusce dignissim erat dis proin ornare class sem nibh
                        </p>
                        <a href="service-details.html" class="btn-red-more">Learn More<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single service start -->
                <div class="rts-single-service-h2">
                    <a href="service-details.html" class="thumbnail">
                        <img src="assets/images/service/12.jpg" alt="Service_image">
                    </a>
                    <div class="body">
                        <a href="service-details.html">
                            <h5 class="title">Market Research</h5>
                        </a>
                        <p class="disc">
                            Fusce dignissim erat dis proin ornare class sem nibh
                        </p>
                        <a href="service-details.html" class="btn-red-more">Learn More<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single service start -->
                <div class="rts-single-service-h2">
                    <a href="service-details.html" class="thumbnail">
                        <img src="assets/images/service/13.jpg" alt="Service_image">
                    </a>
                    <div class="body">
                        <a href="service-details.html">
                            <h5 class="title">Best Solution</h5>
                        </a>
                        <p class="disc">
                            Fusce dignissim erat dis proin ornare class sem nibh
                        </p>
                        <a href="service-details.html" class="btn-red-more">Learn More<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- single service End -->
            </div>
        </div>
    </div>
</div>
<!-- latest service area End -->

<!-- cta section start -->
<div class="rts-cta-section-start rts-section-gap cta-bg-h2">
    <div class="container">
        <div class="row">
            <div class="cta-h2-wrapper text-center">
                <div class="icon">
                    <a href="#"><i class="fas fa-phone-alt"></i></a>
                </div>
                <div class="body">
                    <p class="info">Contact Our Agent For Any kind off Business Help <span>(24/7 Available)</span></p>
                    <a href="tel:123-456-7890p123" class="number">+215 2153.2159</a>
                    <a href="#" class="rts-btn btn-primary-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta section end -->


<!-- our working Process -->
<div class="working-process-area rts-section-gap working-process-bg">
    <div class="container">
        <div class="row mt--40">
            <div class="title-area text-center working-process">
                <span>Working Steps</span>
                <h2 class="title">Our Basic Work Process</h2>
            </div>
        </div>
        <div class="row g-5 mt--20 align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/01.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">Make a Plan</h6>
                        <p class="disc">
                            Nostra proin fusce hendrerit <br> viverra nisl torquent.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 process-lg text-center">
                    <div class="inner two">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/02.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">Cost Calculating</h6>
                        <p class="disc">
                            Nostra proin fusce hendrerit <br> viverra nisl torquent.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner three">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/03.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">Business Growth</h6>
                        <p class="disc">
                            Nostra proin fusce hendrerit <br> viverra nisl torquent.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 process-lg text-center">
                    <div class="inner four">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/04.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">Success Mission</h6>
                        <p class="disc">
                            Nostra proin fusce hendrerit <br> viverra nisl torquent.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
        </div>
    </div>
</div>
<!-- our working Process End -->


<!-- start service area -->
<div class="rts-service-areah2-im-3 rts-section-gap">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="image-area">
                    <img src="assets/images/service/h2/03.jpg" alt="Service_Image">
                    <img class="two" src="assets/images/service/h2/02.jpg" alt="Service_Image">
                    <img class="three" src="assets/images/service/h2/01.jpg" alt="Service_Image">
                    <div class="ratio-area">
                        <h3 class="ratio">85%</h3>
                        <span>Successful Ratio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-h2-content pl--30">
                    <div class="title-area  service-h2 service">
                        <span>Why Choose Us</span>
                        <h2 class="title">We focus to get excellent
                            performance </h2>
                    </div>
                    <div class="content-wrapper">
                        <p class="disc">
                            Aliquet porta est cras proin donec odio curabitur convallis, penatibus vulputate
                            facilisi montes blandit condimentum quisque platea, sociosqu ut nec nam cursus magnis
                            leo nullam
                        </p>
                        <div class="feature-one-wrapper mt--40">
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>Fast Growing Sells</p>
                            </div>
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>24/7 Quality Services</p>
                            </div>
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>Expert Members</p>
                            </div>
                            <div class="single-feature-one">
                                <i class="fal fa-check"></i>
                                <p>Best Quality Services</p>
                            </div>
                        </div>
                        <div class="support-team">
                            <a href="team-details.html" class="thumbnail"><img
                                    src="assets/images/business-goal/team.png" alt="Image-team"></a>
                            <div class="details">
                                <span>24/7 Support Team</span>
                                <a href="team-details.html">
                                    <h6 class="title">(+214) 2158.31598</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start service area End -->

<!-- business case start -->
<div class="rts-business-case rts-section-gap business-case-bg-2">
    <div class="container">
        <div class="row">
            <div class="title-area text-center business-case">
                <span>Case Studies</span>
                <h2 class="title">Specialist Business Cases</h2>
            </div>
        </div>
    </div>
    <div class="container-cusiness-case-h2 mt--50">
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiperh2_Business_Cases">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single business case -->
                            <div class="rts-business-case-s-2">
                                <a href="project-details.html" class="thumbnail">
                                    <img src="assets/images/business-case/04.jpg" alt="Business_case">
                                </a>
                                <div class="inner">
                                    <a href="project-details.html">
                                        <h5 class="title">
                                            Business Growth
                                        </h5>
                                    </a>
                                    <span>Business Strategy</span>
                                </div>
                                <a href="project-details.html" class="over_link"></a>
                            </div>
                            <!-- single business case End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single business case -->
                            <div class="rts-business-case-s-2">
                                <a href="project-details.html" class="thumbnail">
                                    <img src="assets/images/business-case/05.jpg" alt="Business_case">
                                </a>
                                <div class="inner">
                                    <a href="project-details.html">
                                        <h5 class="title">
                                            Business Growth
                                        </h5>
                                    </a>
                                    <span>Business Strategy</span>
                                </div>
                                <a href="project-details.html" class="over_link"></a>
                            </div>
                            <!-- single business case End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single business case -->
                            <div class="rts-business-case-s-2">
                                <a href="project-details.html" class="thumbnail">
                                    <img src="assets/images/business-case/06.jpg" alt="Business_case">
                                </a>
                                <div class="inner">
                                    <a href="project-details.html">
                                        <h5 class="title">
                                            Startup Solution
                                        </h5>
                                    </a>
                                    <span>Business Strategy</span>
                                </div>
                                <a href="project-details.html" class="over_link"></a>
                            </div>
                            <!-- single business case End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single business case -->
                            <div class="rts-business-case-s-2">
                                <a href="project-details.html" class="thumbnail">
                                    <img src="assets/images/business-case/07.jpg" alt="Business_case">
                                </a>
                                <div class="inner">
                                    <a href="project-details.html">
                                        <h5 class="title">
                                            Growth Manage
                                        </h5>
                                    </a>
                                    <span>Business Strategy</span>
                                </div>
                                <a href="project-details.html" class="over_link"></a>
                            </div>
                            <!-- single business case End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single business case -->
                            <div class="rts-business-case-s-2">
                                <a href="project-details.html" class="thumbnail">
                                    <img src="assets/images/business-case/04.jpg" alt="Business_case">
                                </a>
                                <div class="inner">
                                    <a href="project-details.html">
                                        <h5 class="title">
                                            Company Skills
                                        </h5>
                                    </a>
                                    <span>Business Strategy</span>
                                </div>
                                <a href="project-details.html" class="over_link"></a>
                            </div>
                            <!-- single business case End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single business case -->
                            <div class="rts-business-case-s-2">
                                <a href="project-details.html" class="thumbnail">
                                    <img src="assets/images/business-case/05.jpg" alt="Business_case">
                                </a>
                                <div class="inner">
                                    <a href="project-details.html">
                                        <h5 class="title">
                                            Personal skill
                                        </h5>
                                    </a>
                                    <span>Business Strategy</span>
                                </div>
                                <a href="project-details.html" class="over_link"></a>
                            </div>
                            <!-- single business case End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- business case End -->

<!-- start client review area start -->
<div class="rts-client-review-two rts-section-gapTop bg-client-r-h2">
    <div class="container">
        <div class="row mt--30">
            <div class="title-area left-right testimonial-h2">
                <div class="title-left">
                    <span>Our Testimonial</span>
                    <h2 class="title mt--15">
                        Our Client Reviews
                    </h2>
                </div>
                <div class="button-area">
                    <a href="#" class="rts-btn btn-primary-2">See All Reviews</a>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-12">
                <div class="swiper mySwiperh2_clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single client reviews -->
                            <div class="rts-client-reviews-h2">
                                <div class="review-header">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/testimonials/02.png" alt="testimonials_area">
                                    </a>
                                    <div class="discription">
                                        <a href="#">
                                            <h6 class="title">David Smith</h6>
                                        </a>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <p class="disc">
                                        “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums
                                        augue
                                        volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                    </p>
                                    <div class="body-end">
                                        <a href="#"><img src="assets/images/testimonials/icon/logo-01.png"
                                                alt="Client_logo"></a>
                                        <div class="star-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single client reviews End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single client reviews -->
                            <div class="rts-client-reviews-h2">
                                <div class="review-header">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/testimonials/03.png" alt="testimonials_area">
                                    </a>
                                    <div class="discription">
                                        <a href="#">
                                            <h6 class="title">Mark Jone</h6>
                                        </a>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <p class="disc">
                                        “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums
                                        augue
                                        volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                    </p>
                                    <div class="body-end">
                                        <a href="#"><img src="assets/images/testimonials/icon/logo-02.png"
                                                alt="Client_logo"></a>
                                        <div class="star-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single client reviews End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single client reviews -->
                            <div class="rts-client-reviews-h2">
                                <div class="review-header">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/testimonials/04.png" alt="testimonials_area">
                                    </a>
                                    <div class="discription">
                                        <a href="#">
                                            <h6 class="title">Lord Korn</h6>
                                        </a>
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <p class="disc">
                                        “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums
                                        augue
                                        volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                    </p>
                                    <div class="body-end">
                                        <a href="#"><img src="assets/images/testimonials/icon/logo-03.png"
                                                alt="Client_logo"></a>
                                        <div class="star-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single client reviews End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start client review area end -->





<!-- start blog area -->
<div class="rts-blog-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="title-area text-center blog">
                <span>Blog & Article</span>
                <h2 class="title">Recent blog post</h2>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <!-- single Post Start -->
            <div class="col-lg-6 col-md-6">
                <!-- single Post blog large -->
                <div class="rts-blog-h-2-wrapper">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/09.jpg" alt="Business_blog">
                    </a>
                    <div class="body">
                        <span>Business Solution / by David Dolean</span>
                        <a href="blog-details.html">
                            <h4 class="title">The quick settle tips of the new<br>
                                ages exist </h4>
                        </a>
                        <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
                <!-- single Post blog large End -->
            </div>
            <!-- single Post End -->
            <!-- single Post Start -->
            <div class="col-lg-6 col-md-6">
                <!-- single Post blog large -->
                <div class="rts-blog-h-2-wrapper">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/08.jpg" alt="Business_blog">
                    </a>
                    <div class="body">
                        <span>Business Solution / by David Dolean</span>
                        <a href="blog-details.html">
                            <h4 class="title">Business is the practice of making money</h4>
                        </a>
                        <a class="rts-read-more btn-primary" href="blog-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
                <!-- single Post blog large End -->
            </div>
            <!-- single Post End -->
        </div>
    </div>
</div>
<!-- start blog area End -->

<!-- start client area -->
<div class="rts-client-area ptb--100 client-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="client-two-wrapper">
                    <img src="assets/images/client/01.png" alt="Business_client">
                    <img src="assets/images/client/02.png" alt="Business_client">
                    <img src="assets/images/client/03.png" alt="Business_client">
                    <img src="assets/images/client/04.png" alt="Business_client">
                    <img src="assets/images/client/05.png" alt="Business_client">
                    <img src="assets/images/client/06.png" alt="Business_client">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start client area End -->


@endsection
