@extends('layouts.master')
@section('content')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>{{ $service->title }}</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                    <li>{{ $service->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="tm-section service-details-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="tm-service-details sticky-sidebar">
                            <img class="tm-service-details-image" src="{{ getImage('services', $service->featured_image) }}"
                                alt="{{ $service->title }}" />

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="tm-service-details">
                            <h2>{{ $service->title }}</h2>
                            {!! $service->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
