@extends('layouts.master')
@section('content')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Privacy Policy</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $privacyPolicy->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tm-section about-us-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-2 order-lg-1">
                    <div class="about-content about-content-2">
                        <p>
                            {!! $privacyPolicy->description !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
