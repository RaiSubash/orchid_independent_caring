@extends('layouts.master')
@section('content')
    <style>
        /* Section Styling */
        .contact-steps {
            text-align: center;
            padding: 50px 20px;
            background-color: #f7f9fa;
            /* Light background to match the feel of the page */
        }

        .contact-steps h2 {
            font-size: 2.5rem;
            color: #1d1d1d;
            margin-bottom: 10px;
        }

        .contact-steps p {
            font-size: 1.2rem;
            color: #7a7a7a;
            margin-bottom: 40px;
        }

        /* Container for the steps */
        .steps-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Each Step */
        .step {
            width: 18%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .step:hover {
            transform: translateY(-10px);
        }

        .icon img {
            max-width: 80px;
            margin-bottom: 15px;
        }

        .step h3 {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 10px;
        }

        .step p {
            font-size: 1rem;
            color: #555;
        }

        /* Adjustments for smaller screens */
        @media (max-width: 768px) {
            .step {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .step {
                width: 100%;
            }
        }
    </style>
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="tm-section contact-us-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>How To Find Us</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-30-reverse">
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-placeholder"></i>
                            </span>
                            <h5>Our location</h5>
                            <p>
                                <a href="{{ siteSetting()->map_link }}"> {{ siteSetting()->address }} </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <img src="{{ asset('assets/envelope.png') }}">
                            </span>
                            <h5>Our Email</h5>
                            <p>
                                <a href="mailto::{{ siteSetting()->email }}"> {{ siteSetting()->email }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-phone"></i>
                            </span>
                            <h5>Call Us</h5>
                            <p>
                                <a href="tel:{{ siteSetting()->phone_number }}">
                                    {{ siteSetting()->phone_number }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-50">
                    <div class="col-lg-8">
                        <form id="tm-contactform" method="POST" class="tm-form tm-contact-form">
                            @csrf
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" name="name" required="required" placeholder="Name*"
                                        id="name" />
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="email" name="email" required="required" placeholder="Email*"
                                        id="email" />
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" name="phone" placeholder="Phone" id="phone" />
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" name="subject" required="required" placeholder="Subject*"
                                        id="subject" />
                                </div>
                                <div class="tm-form-field">
                                    <textarea name="message" cols="30" rows="5" placeholder="Message" id="message"></textarea>
                                </div>
                                <div class="tm-form-field text-center">
                                    <button type="submit" class="tm-button tm-button-dark">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messages"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tm-section contact-us-area bg-white">
            <div class="container">
                <section class="contact-steps">
                    <h2>Getting Started is Easy</h2>
                    <p>Our team is here to help you get started and find the support you need.</p>
                    <div class="steps-container">
                        @foreach ($gettingStarted as $info)
                            <div class="step">
                                <div class="icon">
                                    <img src="{{ getImage('gettingStarted', $info->featured_image) }}"
                                        alt="{{ $info->title }}">
                                </div>
                                <h3>Step {{ $info->step }}</h3>
                                <p>{{ $info->title }}</p>
                            </div>
                        @endforeach

                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(function() {
            $("#tm-contactform").on('submit', function(event) {
                event.preventDefault()
                $(".errors").empty()
                $.ajax({
                    type: "POST",
                    url: "{{ route('storeEnquiry') }}",
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(response) {
                        if (response.status) {
                            toastr.options.timeOut = 10000;
                            toastr.success(response.msg);
                            $("#name").val("")
                            $("#email").val("")
                            $("#phone").val("")
                            $("#subject").val("")
                            $("#message").val("")

                        } else {
                            toastr.options = {
                                "closeButton": true,
                                "progressBar": true
                            };
                            toastr.error(response.msg);
                            const errors = response.result

                            $.each(errors, function(key, value) {
                                $('[name="' + key + '"]').addClass('is-invalid').next()
                                    .html(value[0])
                            })
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                })

            })
        })
    </script>
@endsection
