@extends('layouts.app')

@section('content')
 <!-- banner blank space area -->
 <div class="rts-banner-area-two">
    <div class="swiper mySwiperh2_banner swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
                <div class="swiper-slide" role="group" aria-label="{{ $loop->iteration }} / {{ $sliders->count() }}">
                    <div class="banner-two" style="background-image: url('{{ asset($slider->image) }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-center">
                                        <div class="wrapper">
                                            <h1 class="title">{{ $slider->title }}</h1>
                                            <span class="sub">{{ $slider->caption }}</span>
                                            <a class="rts-btn btn-primary-2" href="{{ route('home.pages', 'membership-overview')}}">View Membership Overview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</div>

<!-- banner blank space area end -->


<!-- start about our company -->
<div class="rts-about-our-company-h2 rts-section-gap">
    <div class="container">
        <div class="row">
            <div
                class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                <div class="title-area about-company">
                    <span>About Us</span>
                </div>
                <div class="about-company-wrapper">
                    <p class="disc" style="text-align: justify">
                        {!! Str::limit($aboutUs->content, 400) !!} <snap> <a href="{{ route('home.pages', 'about-us') }}"  class="font-weight: bold" style="font-weight: bold">Read More</a></snap>
                    </p>
                    <div class="rts-tab-style-one">
                        <div class="d-flex align-items-start contoler-company">
                            <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Our Mission</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Our Vision</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc" style="text-align: justify">
                                            {!! Str::limit($visionMission->mission, 150) !!}
                                        </p>
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'mission') }}">Read More</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc" style="text-align: justify">
                                            {!! Str::limit($visionMission->vision, 150) !!}

                                        </p>
                                       
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'vison') }}">Read More</a>
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
                    <img src="{{ $aboutUs->image }}" alt="Business_company">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start about our company End -->
 

<!-- start service area -->
<div class="rts-service-areah2-im-3 rts-section-gap bg-service-h2">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="image-area">
                    {{-- <img src="assets/images/service/h2/03.jpg" alt="Service_Image"> --}}
                    <img   src="assets/images/service/h2/022.jpg" alt="Service_Image">
                    {{-- <img  style="object-fit: cover; width: 60%; height: 500px;" src="assets/images/service/h2/01.jpg" alt="Service_Image"> --}}
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-h2-content pl--30">
                    <div class="title-area  service-h2 service">
                        <span>Who we are</span>
                        <h2 class="title">We focus to get excellent
                            performance </h2>
                    </div>
                    <div class="content-wrapper">
                        <p class="disc" style="text-align: justify">
                            IFPN is an institute comprised of professionals in the fields of financial crime prevention, anti-money laundering (AML), know your customer (KYC) processes, transaction monitoring, and fraud control. Our members range from financial institutions, law enforcement agencies, compliance officers, and consultants to legal professionals and academics. We are dedicated to promoting best practices and standards across industries to tackle financial crime and safeguard the integrity of Nigeria’s and Africa' s economy
                        </p>
                        {{-- <div class="feature-one-wrapper mt--40">
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
                        </div> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start service area End -->

 <!-- core activities -->
 <div class="working-process-area rts-section-gap working-process-bg">
    <div class="container">
        <div class="row mt--40">
            <div class="title-area text-center working-process">
                
                <h2 class="title">Core Activities</h2>
            </div>
        </div>
        <div class="row g-5 mt--20 align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/01.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">EDUCATION & CERTIFICATION</h6>
                        <p class="disc">
                            Offering courses, workshops, and certification programs to enhance professional expertise in fraud prevention, AML, KYC, and compliance.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner two">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/02.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">RESEARCH & ADVOCACY</h6>
                        <p class="disc">
                            Conducting research on emerging trends in financial crime and advocating for sound policies and regulations.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner three">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/03.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">CONFERENCES & SEMINARS</h6>
                        <p class="disc">
                            Hosting events, conferences, and roundtable discussions to promote knowledge sharing and collaboration between industries.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1  text-center">
                    <div class="inner four">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/04.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">MEMBER SERVICES</h6>
                        <p class="disc">
                            Providing a range of services to support members’ professional growth, including mentorship, networking, and continuing professional development.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner five">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/05.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">REGULATION & ENFORCEMENT SUPPORT</h6>
                        <p class="disc">
                            Working closely with regulatory bodies, law enforcement agencies, and financial institutions to support the development and enforcement of anti-fraud measures.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner six">
                        <div class="icon">
                            <img src="assets/images/working-step/icon/06.svg" alt="Working_process">
                        </div>
                    </div>
                    <div class="content">
                        <h6 class="title">CONSULTANCY SERVICES</h6>
                        <p class="disc">
                            Offering expert consultancy in financial crime prevention strategies, compliance frameworks, and risk assessment to organizations seeking to enhance their security and regulatory measures.
                        </p>
                    </div>
                </div>
                <!-- single wirking process End -->
            </div>
        </div>
    </div>
</div>
<!-- our working Process End -->








@endsection
