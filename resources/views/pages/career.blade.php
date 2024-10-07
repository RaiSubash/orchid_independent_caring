@extends('layouts.master')
@section('content')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Career</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tm-section about-us-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-content about-content-2">
                        <h2>{{ $joinOurTeam->title }}</h2>
                        <p>
                            {!! $joinOurTeam->description !!}
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-videobox">
                        <img src="{{ getImage('about', $joinOurTeam->featured_image) }}" alt="{{ $joinOurTeam->title }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-section about-us-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-1">
                    <div class="about-videobox">
                        <img src="{{ getImage('about', $whyWorkWithUs->featured_image) }}"
                            alt="{{ $whyWorkWithUs->title }}">
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-2">
                    <div class="about-content about-content-2">
                        <h2>{{ $whyWorkWithUs->title }}</h2>
                        <p>
                            {!! $whyWorkWithUs->description !!}
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
