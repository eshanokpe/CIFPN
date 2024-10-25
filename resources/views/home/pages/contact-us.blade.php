@extends('layouts.app')

@section('content')
 
 <!-- start breadcrumb area -->
 <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Contact Us</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="#">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


  <!-- contact single area start -->
  <div class="rts-contact-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/contact/01.png')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="{{ asset('assets/images/contact/shape/01.svg')}}" alt="">
                        </div>
                        <div class="info">
                            <span>Call Us 24/7</span>
                            <a href="tel:+18475555555">
                                <h5>{{ $contactUs->first_phone}} | {{ $contactUs->second_phone}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/contact/02.png')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="{{ asset('assets/images/contact/shape/02.svg')}}" alt="">
                        </div>
                        <div class="info">
                            <span>MAke A Quote</span>
                            <a href="mailto:{{ $contactUs->first_email}} ">
                                <h5>{{ $contactUs->first_email}} {{ $contactUs->second_email}} </h5>
                                <br/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/contact/03.png')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="{{ asset('assets/images/contact/shape/03.svg')}}" alt="">
                        </div>
                        <div class="info">
                            
                            <h6>{{ $contactUs->first_address}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
        </div>
    </div>
</div>
<!-- conact single area end -->

<!-- bizup map area start -->
<div class="rts-contact-map-area">
    <div class="contaciner-fluid">
        <div class="row">
            <div class="col-12">
                <div class="contact-map-area-fluid">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3963.1445011589967!2d3.336454373547364!3d6.628968021931741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sng!4v1729816609331!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <img class="location" src="{{ asset('assets/images/contact/shape/location.svg')}}" alt="Business_map"> --}}
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bizup map area end -->


<!-- conact us form fluid start -->
<div class="rts-contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-contact-fluid rts-section-gap">
                    <div class="rts-title-area contact-fluid text-center mb--50">
                        <p class="pre-title">
                            Get In Touch
                        </p>
                        <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                    </div>
                     
                    <div class="form-wrapper">
                        {{-- <div id="form-messages"></div> --}}
                        <form  action="{{ route('contact.submit') }}" method="post" id="contactUsForm">
                            @csrf 
                            <div class="name-email">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="name-email">
                                <input type="text" name="subject" placeholder="Your Subject" required>
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>
                            <textarea placeholder="Type Your Message" name="message"></textarea>

                            <button type="submit" class="rts-btn btn-primary g-recaptcha"
                                    data-sitekey="{{ config('services.recaptcha.siteKey') }}"
                                    data-callback="onContactUsSubmit" data-action="submit" id="submit2">Send Message
                            </button>
                        </form>
                        <script>
                            function onContactUsSubmit(token) {
                                if (navigator.onLine) {
                                    // Proceed to submit the form if online
                                    document.getElementById('g-recaptcha-response').value = token;
                                    document.getElementById("contactUsForm").submit();
                                } else {
                                    alert("You need an active internet connection to submit the form.");
                                }
                                // document.getElementById("contactUsForm").submit();
                            }
                         
                            grecaptcha.ready(function() {
                                grecaptcha.execute('{{ config('services.recaptcha.siteKey') }}', { action: 'submit' }).then(function(token) {
                                    document.getElementById("submit2").disabled = false; // Enable button after token is received
                                }).catch(function(error) {
                                    console.error("reCAPTCHA error:", error);
                                    document.getElementById("submit2").disabled = false; // Enable button on error
                                });
                            });
                        </script>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- conact us form fluid end -->

@endsection
