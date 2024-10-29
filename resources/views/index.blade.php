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
                    <p class="disc" style="text-align: justify">
                        {!! Str::limit($aboutUs->content, 350) !!} <snap> <a href="{{ route('home.pages', 'about-us') }}"  class="font-weight: bold">Read More</a></snap>
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



<!-- ENd Header Area -->


<!-- latest service area -->
<div class="rts-service-area rts-section-gap bg-service-h2">
    <div class="container">
        <div class="row">
            <div class="title-area service-h2">
                <span>Our Latest Solutions</span>
                <h2 class="title">Solution We Provide</h2>
            </div>
        </div>
        <div class="row g-5 mt--10">
            @forelse ($solutions as $solution) 
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="{{ route('solutions.detail', ['slug' => $solution->slug] ) }}" class="thumbnail">
                            <img style="object-fit: cover; width: 100%; height: 158px;" src="{{ asset($solution->image) }}" alt="{{ $solution->title }}">
                        </a>
                        <div class="body">
                            <a href="{{ route('solutions.detail', ['slug' => $solution->slug] ) }}">
                                <h5 class="title">{{ $solution->title }}</h5>
                            </a>
                            <p class="disc">
                                {!! Str::limit($solution->content, 40) !!}
                            </p>
                            <a href="{{ route('solutions.detail', ['slug' => $solution->slug] ) }}" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
            @empty
                <p> No data found</p>
            @endforelse
            
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
                    <a href="{{ route('home.pages', 'contactus') }}"><i class="fas fa-phone-alt"></i></a>
                </div>
                <div class="body">
                    <p class="info">Contact Our Agent For Any kind off Business Help <span>(24/7 Available)</span></p>
                    <a href="#" class="number">{{$contactUs->first_phone}} | {{$contactUs->second_phone}}</a>
                    <a href="{{ route('home.pages', 'contactus') }}" class="rts-btn btn-primary-2">Contact Us</a>
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
                <h2 class="title">Industries</h2>
            </div>
        </div>
    </div>
    <div class="container-cusiness-case-h2 mt--50">
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiperh2_Business_Cases">
                    <div class="swiper-wrapper">
                        @forelse($industries as $industry)
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('industries.detail', ['slug' => $industry->slug]) }}" class="thumbnail">
                                        <img style="object-fit: cover; width: 100%; height: 403px;" src="{{ asset($industry->image) }}" alt="{{ $industry->title }}">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('industries.detail', ['slug' => $industry->slug]) }}">
                                            <h6 class="title">{{ $industry->title }}</h6>
                                        </a>
                                        <span>{{ $industry->category }}</span>
                                    </div>
                                    <a href="{{ route('industries.detail', ['slug' => $industry->slug]) }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                        @empty
                            <p class="text-center">No industries cases available.</p>
                        @endforelse
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





@endsection
