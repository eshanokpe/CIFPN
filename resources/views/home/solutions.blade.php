@extends('layouts.app')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Solutions</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}}">Home</a>
                    <span> / </span>
                    <a href="{{ route('solutions') }}" class="active">Solutions</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

 
<!-- our service area start -->
<div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image">
    <div class="container">
        <div class="title-area  service-h2 service">
            <h6>Solutions</h6>
            <p class="disc">
                At <b>Infoscert Xpression Streams Limited</b>, we provide a comprehensive suite of technology solutions tailored to meet the specific needs of industries across agriculture, telecommunications, oil and gas, education, and the public sector. Our expertise lies in systems integration, enabling businesses to unlock their full potential through the power of digital transformation, automation, and innovative technology.
            </p>
            
                
        </div>
        <div class="row g-5 service padding-controler">
          
            @forelse ($services as $service)
            <!-- single service area -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                <div class="service-two-inner">
                    <a href="{{ route('solutions.detail', encrypt($service->id)) }}" class="thumbnail">
                        <img src="{{ asset($service->image) }}" alt="Business_image" style="object-fit: contain; width: 100%; height: 300px;">
                    </a>
                    <div class="body-content">
                        <div class="hidden-area">
                            <h5 class="title">{{ $service->title }}</h5> 
                            <p class="dsic">
                                {!! Str::limit($service->content, 40) !!}
                            </p>
                            <a class="rts-read-more-two color-primary" href="{{ route('solutions.detail', encrypt($service->id)) }}">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single service area end-->
            @empty
                <p> No data found</p>
            @endforelse
        </div>
    </div>
</div>
<!-- our service area end -->




@endsection
