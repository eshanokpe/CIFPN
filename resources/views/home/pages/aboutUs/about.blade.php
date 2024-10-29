@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">About Us</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{ route('aboutus') }}" class="active">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- start about our company -->
<div class="rts-about-our-company-h2 rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                
                <div class="title-area about-company">
                    <h6>About Our Company</h6>
                    {{-- <h2 class="title">Professional And Dedicated <br>Consulting Services</h2> --}}
                </div>
                <div class="about-company-wrapper " style="text-align: justify">
                    {!! $aboutUs->content !!}
                </div> 
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1">
                <div class="about-company-thumbnail">
                    <img src=" {{ $aboutUs->image }}" alt="Business_company">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start about our company End -->

<!-- rts services area start -->
<div class="rts-service-area rts-section-gapBottom">
    <div class="container-fluid service-main about-service-width-controler">
        <div class="background-service service-three row">
            <div class="row g-5">
                <div class="rts-title-area service-four text-center pt--40 pt_md--0 mt_sm--0 mt_md--0">
                    <p class="pre-title">
                        Our Services
                    </p>
                    <h2 class="title">What We Provide</h2>
                </div>
                <!-- start single Service -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="assets/images/service/07.jpg" alt="Business-service">
                            </a>
                            <div class="content">
                                <img src="assets/images/service/icon/13.svg" alt="Business-icon">
                                <h5 class="title">Business Consultancy</h5>
                                <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis nam
                                    potenti</p>
                            </div>
                            <a href="service-details.html" class="over_link"></a>
                        </div>
                        <a href="service-details.html" class="rts-btn btn-primary"> Read More<i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- start single Service -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="assets/images/service/08.jpg" alt="Business-service">
                            </a>
                            <div class="content">
                                <img src="assets/images/service/icon/14.svg" alt="Business-icon">
                                <h5 class="title">Business Appoinment</h5>
                                <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis nam
                                    potenti</p>
                            </div>
                            <a href="service-details.html" class="over_link"></a>
                        </div>
                        <a href="service-details.html" class="rts-btn btn-primary"> Read More<i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- start single Service -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="assets/images/service/09.jpg" alt="Business-service">
                            </a>
                            <div class="content">
                                <img src="assets/images/service/icon/15.svg" alt="Business-icon">
                                <h5 class="title">Consultancy Foundation</h5>
                                <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis nam
                                    potenti</p>
                            </div>
                            <a href="service-details.html" class="over_link"></a>
                        </div>
                        <a href="service-details.html" class="rts-btn btn-primary"> Read More<i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<!-- rts services area End -->


<!-- customers feed back area start -->
<div class="rts-customer-feedback-area rts-section-gap bg-customer-feedback">
    <div class="container">
        <div class="row">
            <div class="rts-title-area feedback team text-center">
                <p class="pre-title">
                    Feedbacks
                </p>
                <h2 class="title">Customer Feedbacks</h2>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimopnial-wrapper-two">
                    <div class="test-header">
                        <div class="thumbnail">
                            <img src="assets/images/testimonials/02.png" alt="">
                        </div>
                        <div class="name-desig">
                            <h5 class="title">David Smith</h5>
                            <span class="designation">Business Expert</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <p class="disc">
                            “Parallel task user friendly convergence through supply are chains type siflify reliable
                            meta provide service visionary sources unleash tactical thinking via granular
                            intellectual capital architect dynamic information value online business solution
                            services”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimopnial-wrapper-two">
                    <div class="test-header">
                        <div class="thumbnail">
                            <img src="assets/images/testimonials/03.png" alt="">
                        </div>
                        <div class="name-desig">
                            <h5 class="title">David Smith</h5>
                            <span class="designation">Business Expert</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <p class="disc">
                            “Parallel task user friendly convergence through supply are chains type siflify reliable
                            meta provide service visionary sources unleash tactical thinking via granular
                            intellectual capital architect dynamic information value online business solution
                            services”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- customers feed back area end -->
@endsection
