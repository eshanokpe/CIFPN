@extends('layouts.app')

@section('content')

  <!-- start breadcrumb area -->
  <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">FAQ</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ route('home') }}">Home</a>
                    <span> / </span>
                    <a href="#" class="active">FAQ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


 <!-- rts faq section area -->
 <div class="rts-faq-area rts-section-gap inner">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 order-xl-1 order-md-2 order-sm-2 order-2">
                <div class="accordion-area inner">
                    <div class="title-area">
                        <span>FAQ</span>
                    </div>
                    <div class="accordion-one-inner">
                        <div class="accordion" id="accordionExample2">
                            @forelse ($faqs as $index => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" 
                                                type="button" 
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#collapse{{ $index }}" 
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                                aria-controls="collapse{{ $index }}">
                                            <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span> {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" 
                                         class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                         aria-labelledby="heading{{ $index }}" 
                                         data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {!! $faq->answer !!} 
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No FAQs available at the moment.</p>
                            @endforelse
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts faq section area End -->

@endsection
