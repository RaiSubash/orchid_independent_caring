@extends('layouts.master')
@section('content')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Blog</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $detail->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="tm-section blogs-area bg-whtie tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sticky-sidebar">
                            <div class="tm-blog-list mt-50-reverse">
                                <div class="tm-blog mt-50">
                                    <div class="tm-blog-top">
                                        <img src="{{ getImage('blog', $detail->featured_image) }}"
                                            alt="{{ $detail->title }}">
                                        <span
                                            class="tm-blog-date">{{ \Carbon\Carbon::parse($detail->created_date)->format('d M, Y') }}</span>
                                    </div>
                                    <div class="tm-blog-bottom">
                                        <h5 class="tm-blog-title">{{ $detail->title }}</h5>
                                        {!! $detail->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sticky-sidebar">
                            <div class="widgets widgets-blog">
                                <div class="single-widget widget-categories">
                                    <h5 class="widget-title">Other Blogs</h5>
                                    <ul>
                                        @foreach ($otherBlogs as $other)
                                            <li><a href="{{ route('blogDetail', $other->slug) }}">{{ $other->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
