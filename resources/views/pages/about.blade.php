@extends('layouts.master')
@section('content')
    <div class="tm-section about-us-area bg-white tm-padding-section">
        <span class="bg-shape-2"><img src="{{ asset('assets/images/icons/bg-shape-3.png') }}" alt="bg shape 3" /></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-content about-content-2">
                        <h2>{{ $about->title }}</h2>
                        <p>
                            {!! $about->description !!}
                        </p>
                        @if ($about->title_2)
                            <h2>{{ $about->title_2 }}</h2>
                            <p>
                                {!! $about->description_2 !!}
                            </p>
                        @endif


                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-videobox">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewbox="0 0 398 358">
                            <defs>
                                <pattern id="attachedImage4" height="100%" width="100%"
                                    patternContentUnits="objectBoundingBox">
                                    <image xlink:href="{{ getImage('about', $about->featured_image) }}"
                                        preserveAspectRatio="none" width="1" height="1" />
                                </pattern>
                            </defs>
                            <path opacity="0.102" fill="rgb(0, 117, 183)"
                                d="M82.843,22.613 C175.233,-23.488 239.443,6.649 290.825,61.522 C342.208,116.395 387.664,123.712 393.707,208.984 C399.750,294.254 313.624,341.741 274.739,347.672 C235.855,353.603 189.875,346.162 138.910,347.419 C63.098,349.289 33.144,322.675 18.231,290.376 C-2.864,244.685 19.343,229.351 6.068,175.158 C-9.838,110.222 10.571,58.677 82.843,22.613 Z" />
                            <path fill="url(#attachedImage4)"
                                d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z" />
                            <path fill="rgba(0,0,0,0.1)"
                                d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="tm-section mission-vision-area bg-white tm-padding-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Why Us</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-10 col-12">
                    <div class="tm-missvis">
                        <ul class="nav tm-missvis-tabs" id="bstab1" role="tablist">
                            @foreach ($whyChooseUs as $info)
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="bstab{{ $info->id }}"
                                        data-toggle="tab" href="#tab{{ $info->id }}" role="tab"
                                        aria-controls="bstab1-area1" aria-selected="true">
                                        <span class="tab-icon"></span>
                                        <h5>{{ $info->title }}</h5>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content tm-missvis-tabcontent" id="bstab1-ontent">
                            @foreach ($whyChooseUs as $item)
                                <div class="tab-pane {{ $loop->first ? 'show active' : '' }}" id="tab{{ $item->id }}"
                                    role="tabpanel" aria-labelledby="bstab{{ $item->id }}">
                                    <div class="tm-missvis-sectionwrap">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tm-missvis-image">
                                                    <svg viewBox="0 0 431 335">
                                                        <defs>
                                                            <pattern id="attachedImage{{ $item->id }}" height="100%"
                                                                width="100%" patternContentUnits="objectBoundingBox">
                                                                <image
                                                                    xlink:href="{{ getImage('whyChooseUs', $item->featured_image) }}"
                                                                    preserveAspectRatio="none" width="1"
                                                                    height="1" />
                                                            </pattern>
                                                        </defs>
                                                        <path fill="url(#attachedImage{{ $item->id }})"
                                                            d="M430.996,174.472 C423.887,83.089 371.892,54.804 300.831,53.617 C298.012,53.570 292.437,53.719 292.437,53.719 C292.437,53.719 239.106,56.279 209.125,28.113 C186.919,10.651 157.335,-0.005 124.848,-0.005 C55.894,-0.005 -0.006,47.991 -0.006,107.199 C-0.006,134.935 12.273,160.197 32.408,179.225 C43.887,190.073 50.185,204.686 50.075,219.886 C50.073,220.143 50.072,220.400 50.072,220.657 C50.072,273.592 89.861,317.864 142.330,326.363 C224.644,346.993 398.469,340.919 429.740,191.379 C430.646,185.967 431.104,180.348 430.996,174.472 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tm-missvis-content">
                                                    <h5>{{ $item->title }}</h5>
                                                    {!! $item->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @if ($about->title_3)
        <div class="tm-section mission-vision-area bg-white tm-padding-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>{{ $about->title_3 }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-xl-10 col-12">
                        <div class="tm-missvis">
                            <div class="tab-content tm-missvis-tabcontent" id="bstab1-ontent">
                                <div class="tab-pane show active" id="tabone" role="tabpanel" aria-labelledby="bstabone">
                                    <div class="tm-missvis-sectionwrap">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tm-missvis-image">
                                                    <svg viewBox="0 0 431 335">
                                                        <defs>
                                                            <pattern id="attachedImageOne" height="100%" width="100%"
                                                                patternContentUnits="objectBoundingBox">
                                                                <image
                                                                    xlink:href="{{ getImage('about', $about->featured_image_3) }}"
                                                                    preserveAspectRatio="none" width="1"
                                                                    height="1" />
                                                            </pattern>
                                                        </defs>
                                                        <path fill="url(#attachedImageOne)"
                                                            d="M430.996,174.472 C423.887,83.089 371.892,54.804 300.831,53.617 C298.012,53.570 292.437,53.719 292.437,53.719 C292.437,53.719 239.106,56.279 209.125,28.113 C186.919,10.651 157.335,-0.005 124.848,-0.005 C55.894,-0.005 -0.006,47.991 -0.006,107.199 C-0.006,134.935 12.273,160.197 32.408,179.225 C43.887,190.073 50.185,204.686 50.075,219.886 C50.073,220.143 50.072,220.400 50.072,220.657 C50.072,273.592 89.861,317.864 142.330,326.363 C224.644,346.993 398.469,340.919 429.740,191.379 C430.646,185.967 431.104,180.348 430.996,174.472 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tm-missvis-content">
                                                    {!! $about->description_3 !!}
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
    @endif

    @if ($about->title_4)
        <div class="tm-section about-us-area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-content about-content-2">
                            <h2>{{ $about->title_4 }}</h2>
                            <p>
                                {!! $about->description_4 !!}

                            </p>

                        </div>
                    </div>

                    @if ($about->featured_image_4)
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="about-videobox">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewbox="0 0 398 358">
                                    <defs>
                                        <pattern id="attachedImage5" height="100%" width="100%"
                                            patternContentUnits="objectBoundingBox">
                                            <image xlink:href="{{ getImage('about', $about->featured_image_4) }}"
                                                preserveAspectRatio="none" width="1" height="1" />
                                        </pattern>
                                    </defs>
                                    <path opacity="0.102" fill="rgb(0, 117, 183)"
                                        d="M82.843,22.613 C175.233,-23.488 239.443,6.649 290.825,61.522 C342.208,116.395 387.664,123.712 393.707,208.984 C399.750,294.254 313.624,341.741 274.739,347.672 C235.855,353.603 189.875,346.162 138.910,347.419 C63.098,349.289 33.144,322.675 18.231,290.376 C-2.864,244.685 19.343,229.351 6.068,175.158 C-9.838,110.222 10.571,58.677 82.843,22.613 Z" />
                                    <path fill="url(#attachedImage5)"
                                        d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z" />
                                    <path fill="rgba(0,0,0,0.1)"
                                        d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z" />
                                </svg>
                            </div>
                        </div>
                    @endif


                </div>
            </div>

        </div>
    @endif
@endsection
