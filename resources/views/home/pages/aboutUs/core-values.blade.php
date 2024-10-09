@extends('layouts.app')

@section('content')

 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Core Value</h1>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Core Value</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->



 <!-- start core values -->
 <div id="about-us" class="rts-about-our-company-h2 eight rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 mt_sm--30">
                <div class="title-area about-company">
                    {{-- <span>Our Core Values</span> --}}
                    <h4>Our Core Values</h>
                </div>
                <div class="about-company-wrapper">
                    {{-- <p class="disc">
                        Core Values of Infoscert Xpression Streams Limited
                    </p> --}}
                    <div class="rts-tab-style-one">
                        <div class="d-flex align-items-start contoler-company">
                            <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">01. Innovation</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">02. Excellence</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">03. Integrity</button>
                                <button class="nav-link" id="v-pills-manufacture-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manufacture" type="button" role="tab" aria-controls="v-pills-manufacture" aria-selected="false">04. Social Responsibility</button>
                                <button class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill" data-bs-target="#v-pills-education" type="button" role="tab" aria-controls="v-pills-education" aria-selected="false">05. Collaboration</button>
                                <button class="nav-link" id="v-pills-customer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-customer" type="button" role="tab" aria-controls="v-pills-customer" aria-selected="false">06. Customer-Centricity</button>
                                <button class="nav-link" id="v-pills-sustainability-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sustainability" type="button" role="tab" aria-controls="v-pills-sustainability" aria-selected="false">07. Sustainability</button>
                                <button class="nav-link" id="v-pills-empowerment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-empowerment" type="button" role="tab" aria-controls="v-pills-empowerment" aria-selected="false">08. Empowerment</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/info.webp" alt="image"></p>
                                        <p class="disc">
                                            We are driven by a passion for continuous innovation. We believe in leveraging the latest technologies to create solutions that not only solve today’s challenges but also anticipate the needs of tomorrow. Our commitment to innovation enables us to remain at the forefront of technology integration across industries.
                                        </p>
                                       
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/hospitality-1.webp" alt="image"></p>
                                        <p class="disc">
                                            We strive for excellence in everything we do. From the quality of our solutions to the relationships we build with our clients and partners, we are committed to delivering superior results and exceeding expectations. Excellence is our standard, and we pursue it relentlessly.
                                        </p>
                                       
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/logistics.webp" alt="image"></p>
                                        <p class="disc">
                                            We conduct our business with the highest level of integrity and transparency. Honesty and ethical practices form the foundation of our operations, ensuring that we build trust and long-lasting partnerships with clients, communities, and stakeholders.
                                        </p>
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-manufacture" role="tabpanel" aria-labelledby="v-pills-manufacture-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/steel-factory.webp" alt="image"></p>
                                        <p class="disc">
                                            We believe that profit and purpose can coexist. As a company deeply invested in social impact, we prioritize giving back to society by using technology to address pressing social challenges. We are committed to driving sustainable development and improving lives through every project we undertake.
                                        </p>
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/education.webp" alt="image"></p>
                                        <p class="disc">
                                            We understand that the most transformative solutions are born from collaboration. By working closely with clients, partners, and communities, we co-create solutions that deliver maximum value and foster mutual success. We believe in teamwork and the power of collective effort.
                                        </p>
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/customer.webp" alt="image"></p>
                                        <p class="disc">
                                            Our clients are at the heart of everything we do. We take the time to understand their unique needs, and we design tailored solutions that empower them to achieve their goals. We are dedicated to delivering an exceptional customer experience and building relationships that stand the test of time.
                                        </p>
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-sustainability" role="tabpanel" aria-labelledby="v-pills-sustainability-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/customer.webp" alt="image"></p>
                                        <p class="disc">
                                            Sustainability is central to our approach. We are committed to developing solutions that not only benefit our clients but also contribute to environmental and societal well-being. We aim to build systems that are efficient, scalable, and sustainable for future generations.
                                        </p>
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-empowerment" role="tabpanel" aria-labelledby="v-pills-empowerment-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p><img src="assets/images/faq/customer.webp" alt="image"></p>
                                        <p class="disc">
                                            We are dedicated to empowering communities and individuals through technology. Whether it’s providing tools for better education, fostering digital inclusion, or supporting local economies, we believe in using technology as a force for empowerment and positive change.
                                        </p>
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('home.pages', 'contactus') }}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start core values -->


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
