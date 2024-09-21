@extends('layouts.master')
@section('content')
    <div class="heroslider-area" data-black-overlay="3">
        <div class="heroslider-slider heroslider-animated tm-slider-dots tm-slider-dots-left">
            @foreach ($sliders as $slider)
                <div class="heroslider-singleslider d-flex align-items-center tm-rippple-active"
                    data-bgimage="{{ getImage('slider', $slider->featured_image) }}" data-white-overlay="7">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="heroslider-content">
                                    <h1>{{ $slider->title }}</h1>
                                    <p>
                                        {{ $slider->sub_title }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <main class="main-content">

        <div class="tm-section about-us-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="about-content about-content-2" style="text-align: justify;">
                            <h2>{{ $about->title }}</h2>
                            <p>
                                {!! $about->description !!}
                            </p>
                            <div class="about-contentbottom">
                                <a href="{{ route('about') }}" class="tm-button">Read more</a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-videobox">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewbox="0 0 398 358">
                                <defs>
                                    <pattern id="attachedImage1" height="100%" width="100%"
                                        patternContentUnits="objectBoundingBox">
                                        <image xlink:href="{{ getImage('about', $about->featured_image) }}"
                                            preserveAspectRatio="none" width="1" height="1" />
                                    </pattern>
                                </defs>
                                <path opacity="0.102" fill="rgb(0, 117, 183)"
                                    d="M82.843,22.613 C175.233,-23.488 239.443,6.649 290.825,61.522 C342.208,116.395 387.664,123.712 393.707,208.984 C399.750,294.254 313.624,341.741 274.739,347.672 C235.855,353.603 189.875,346.162 138.910,347.419 C63.098,349.289 33.144,322.675 18.231,290.376 C-2.864,244.685 19.343,229.351 6.068,175.158 C-9.838,110.222 10.571,58.677 82.843,22.613 Z" />
                                <path fill="url(#attachedImage1)"
                                    d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z" />
                                <path fill="rgba(0,0,0,0.1)"
                                    d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tm-section services-area tm-padding-section bg-white">
            <span class="bg-shape-left"><img src="assets/images/icons/bg-shape-1.png" alt="background shape" /></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-30-reverse">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <div class="tm-service-inner">
                                    <span class="tm-service-icon">
                                        <img src="{{ getImage('services', $service->featured_image) }}">
                                    </span>
                                    <h5>
                                        <a href="{{ route('serviceDetail', $service->slug) }}">{{ $service->title }}</a>
                                    </h5>
                                    <p>{!! $service->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="tm-section testimonial-area tm-padding-section bg-grey">
            <div class="bg-animated-shape">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>What Our Customers Say</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider-active tm-slider-arrow-2">
                    @foreach ($testimonials as $testimonial)
                        <div class="tm-testimonial-slideritem">
                            <div class="tm-testimonial">
                                <div class="tm-testimonial-author">
                                    <div class="tm-testimonial-authorimage">
                                        <img src="{{ getImage('testimonial', $testimonial->featured_image) }}"
                                            alt="{{ $testimonial->name }}" />
                                    </div>
                                    <div class="tm-testimonial-authorinfo">
                                        <h5>{{ $testimonial->name }}</h5>
                                        <h6>{{ $testimonial->designation }}</h6>
                                    </div>
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>
                                        {!! $testimonial->message !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="tm-section latest-blog-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Our Latest Blogs</h2>

                        </div>
                    </div>
                </div>
                <div class="row blog-slider-active tm-slider-dots">
                    @foreach ($blogs as $blog)
                        <div class="col">
                            <div class="tm-blog">
                                <div class="tm-blog-top">
                                    <a href="{{ route('blogDetail', $blog->slug) }}">
                                        <img src="{{ getImage('blog', $blog->featured_image) }}"
                                            alt="{{ $blog->title }}" />
                                    </a>
                                    <span
                                        class="tm-blog-date">{{ \Carbon\Carbon::parse($blog->created_date)->format('d M, Y') }}</span>
                                </div>
                                <div class="tm-blog-bottom">

                                    <h5 class="tm-blog-title">
                                        <a href="{{ route('blogDetail', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h5>
                                    <a href="{{ route('blogDetail', $blog->slug) }}" class="tm-button tm-button-dark">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>
@endsection
