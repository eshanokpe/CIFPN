@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h2 class="title">Membership Login</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Membership Login</a>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- end breadcrumb area -->

  <!-- contact area start -->
  <div class="rts-contact-area contact-one">
    <div class="container">
        <div class="row align-items-center g-0">
            <!-- Contact Image Section -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="contact-image-one">
                    <img src="{{ asset('assets/images/contact/01.jpg')}}" alt="Login Image">
                </div>
            </div>
            
            <!-- Login Form Section -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
                    <!-- Title and Instructions -->
                    <div class="rts-title-area contact text-start">
                        <p class="pre-title">Membership Login</p>
                        <h5>Please enter your email and password to log in.</h5>
                    </div>
                     
                    <!-- Form Messages Area (for feedback) -->
                    <!-- Login Form -->
                    <form  action="{{ url('membership-login-post') }}" method="POST" class="mb-3">
                        @csrf
                        <!-- Membership ID -->
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control" required autocomplete="off" data-lpignore="true">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control" required autocomplete="off" data-lpignore="true">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Forgot Password Link -->
                        <div class="form-group ">
                            <div class="text-start">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember"><snap style="font-size:16px">Remember Me</snap></label>
                                
                            </div>
                            
                            <div class="text-end">
                                <a href="#" class="forgot-password" > <snap style="text-decoration: underline; color:#D4AF37">Forgot Password?</snap></a>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="rts-btn btn-primary">Login</button>
                    </form>
                    
                    <div class="form-group mb-3">
                        Don't have a profile?<a href="{{ route('membership.signup')}}" class="forgot-password"> <snap style="text-decoration: underline; color:#D4AF37">Join IFPN?</snap></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact area end -->

@endsection
