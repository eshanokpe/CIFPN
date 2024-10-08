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
                <div class="about-company-wrapper ">
                    <p class="disc text-wrap">
                        <b>Infoscert Xpression Streams Limited </b> is a forward-thinking technology systems integration company dedicated to delivering impactful solutions across key sectors including agriculture, telecommunications, oil and gas, education, and the public sector. We specialize in designing and implementing cutting-edge technologies that enhance operational efficiency, foster growth, and create sustainable value for our clients.
                    </p>
                    <p class="disc">
                        However, our mission extends far beyond business success. At Infoscert, we believe that technology has the power to not only drive industry transformation but also address critical societal challenges. That's why we are deeply committed to using our expertise to create positive social change. Whether through improving access to education in underserved communities, supporting sustainable agricultural practices, or enhancing digital infrastructure in public services, our solutions are designed to benefit both businesses and society at large.
                    </p>
                    <p class="disc">
                        Driven by a passion for innovation and social responsibility, we are more than just a for-profit company—we are a force for good. Our team of experts combines technological excellence with a deep sense of purpose, working tirelessly to ensure that every project we undertake not only meets the needs of our clients but also contributes to a more equitable and sustainable world.
                    </p>
                    <p class="disc">
                        With a diverse portfolio of successful projects, a strong commitment to ethical practices, and a relentless drive for excellence, <b>Infoscert Xpression Streams Limited</b> is your trusted partner in the journey toward growth, sustainability, and positive impact.
                    </p>
                    <div class="rts-tab-style-one">
                        <div class="d-flex align-items-start contoler-company">
                            <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">01. Amazing Vision</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">02. The Great Mission</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc" style="text-align: justify">
                                            At <b>Infoscert Xpression Streams Limited</b>, our vision is to be a global leader in innovative technology systems integration, driving transformative change across industries while making a lasting social impact. We envision a world where cutting-edge technology not only fuels business growth but also empowers communities, enhances sustainability, and creates a more equitable future for all.
                                        </p>
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus')}}">Contact Us</a>
                                    </div>
                                    <!-- start tab content End -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <!-- start tab content -->
                                    <div class="rts-tab-content-one">
                                        <p class="disc" style="text-align:justify">
                                            Our mission at <b>Infoscert Xpression Streams Limited</b> is to deliver seamless, innovative technology solutions that address the critical needs of diverse industries, including agriculture, telecom, oil and gas, education, and the public sector. We are committed to bridging the gap between profit and purpose by leveraging technology to solve complex challenges while uplifting communities through sustainable social impact initiatives. Through collaboration, expertise, and innovation, we strive to create a positive, lasting influence on the industries we serve and the world around us.
                                        </p>
                                        
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


 <!-- start core values -->
 <div id="about-us" class="rts-about-our-company-h2 eight rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 mt_sm--30">
                <div class="title-area about-company">
                    {{-- <span>Our Core Values</span> --}}
                    <h5>Our Core Values</h5>
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
                                       
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                       
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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
                                        
                                        <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contactus') }}">Contact Us</a>
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

<!-- rts team two area -->
<div class="rts-team-area rts-section-gapBottom appoinment-team team-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area team text-center">
                    <p class="pre-title">
                        Professionals Team
                    </p>
                    <h2 class="title">Professionals Team</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--15 mt_sm--0">
            <!-- single team -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <!-- single team inner -->
                <div class="team-inner-two">
                    <a href="team-details.html" class="thumbnail">
                        <img src="assets/images/team/tm/lg-01.jpg" alt="">
                    </a>
                    <!-- Acquaintance area -->
                    <div class="acquaintance-area">
                        <div class="header">
                            <a href="team-details.html">
                                <h5 class="title">Kevin Martin</h5>
                            </a>
                            <span>Consultant</span>
                        </div>
                        <div class="acquaintance-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
                <!-- single team inner End -->
            </div>
            <!-- single team End -->
            <!-- single team -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <!-- single team inner -->
                <div class="team-inner-two">
                    <a href="team-details.html" class="thumbnail">
                        <img src="assets/images/team/tm/lg-02.jpg" alt="">
                    </a>
                    <!-- Acquaintance area -->
                    <div class="acquaintance-area">
                        <div class="header">
                            <a href="team-details.html">
                                <h5 class="title">Martin Jone</h5>
                            </a>
                            <span>Manager</span>
                        </div>
                        <div class="acquaintance-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
                <!-- single team inner End -->
            </div>
            <!-- single team End -->
            <!-- single team -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <!-- single team inner -->
                <div class="team-inner-two">
                    <a href="team-details.html" class="thumbnail">
                        <img src="assets/images/team/tm/lg-03.jpg" alt="">
                    </a>
                    <!-- Acquaintance area -->
                    <div class="acquaintance-area">
                        <div class="header">
                            <a href="team-details.html">
                                <h5 class="title">Jone Lee</h5>
                            </a>
                            <span>CEO</span>
                        </div>
                        <div class="acquaintance-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- Acquaintance area -->
                </div>
                <!-- single team inner End -->
            </div>
            <!-- single team End -->
        </div>
    </div>
</div>
<!-- rts team two area End -->


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
