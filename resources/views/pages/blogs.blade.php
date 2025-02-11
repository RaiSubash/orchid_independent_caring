@extends('layouts.master')
@section('content')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Blogs</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="tm-section blogs-area bg-whtie tm-padding-section">
            <div class="container">
                <div class="row tm-blog-list mt-50-reverse">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-blog mt-50">
                                <div class="tm-blog-top">
                                    <a href="{{ route('blogDetail', $blog->slug) }}">
                                        <img src="{{ getImage('blog', $blog->featured_image) }}" alt="{{ $blog->title }}">
                                    </a>
                                    <span
                                        class="tm-blog-date">{{ \Carbon\Carbon::parse($blog->created_date)->format('d M, Y') }}</span>
                                </div>
                                <div class="tm-blog-bottom">
                                    <h5 class="tm-blog-title"><a
                                            href="{{ route('blogDetail', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                    <a href="{{ route('blogDetail', $blog->slug) }}" class="tm-button tm-button-dark">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endsection
