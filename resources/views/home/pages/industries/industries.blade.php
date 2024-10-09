@extends('layouts.app')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Our Industries</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home')}} ">Home</a>
                    <span> / </span>
                    <a href="{{ route('home.pages', 'industries') }}" class="active">Our Industries</a>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- end breadcrumb area -->

<!-- latest service area -->
<div class="rts-service-area rts-section-gap bg-service-h2 ptb--120 mt--0">
    <div class="container">
        <div class="row">
            <div class="title-area service-h2">
                {{-- <span>Empowering Industries with Technology & Social Impact</span> --}}
                <h2 class="title">Empowering Industries with Technology & Social Impact</h2>
            </div>
            <p class="disc">
                Infoscert Xpression Streams Limited delivers cutting-edge technology solutions across a wide range of industries while embedding social impact at the core of every innovation. Explore how we help industries thrive and create positive change through responsible business practices and digital transformation.
            </p>
        </div>
        @forelse ($industries as $item)
            <div class="row g-5 mt--10">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2 inner">
                        <a href="{{ route('industries.detail', ['slug' => $item->slug] ) }}" class="thumbnail">
                            <img src="{{ asset($item->image) }}" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="{{ route('industries.detail', ['slug' => $item->slug] ) }}">
                                <h5 class="title">{{ $item->title }}</h5>
                            </a>
                            <p class="disc">
                                {!! Str::limit($item->content, 45) !!}
                            </p>
                            <a href="{{ route('industries.detail', ['slug' => $item->slug] ) }}" class="btn-red-more">Learn More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
            </div>
        @empty
            <p>No data found</p>
        @endforelse
        
    </div>
</div>
<!-- latest service area End -->


<!-- service accordion area -->
<div class="rts-accordion-area service rts-section-gap">
    <div class="accordion-service-bg bg_image ptb--120 ptb_md--80 ptb_sm--60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="accordion-service-inner">
                        <div class="title-area-start">
                            <span class="sub color-primary">JUST A CONSULTANCY</span>
                            <h2 class="title">We know how to manage
                                business globally</h2>
                        </div>
                        <div class="accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Making Easy Business Growth
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Business Solution Model
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Finbiz Company Solution
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Management Process
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Managing Invesment
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
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
</div>
<!-- service accordion area End -->



@endsection
