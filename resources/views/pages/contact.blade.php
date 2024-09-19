@extends('layouts.master')
@section('content')
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
                            <p>
                                Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius
                                illum vocent mediocritatem an cule dicta iriure at phaedrum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-30-reverse">
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-placeholder"></i>
                            </span>
                            <span class="tm-contactblock-backicon">
                                <i class="flaticon-placeholder"></i>
                            </span>
                            <h5>Our location</h5>
                            <p>
                                {{ siteSetting()->address }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-alarm-clock"></i>
                            </span>
                            <span class="tm-contactblock-backicon">
                                <i class="flaticon-alarm-clock"></i>
                            </span>
                            <h5>Our Email</h5>
                            <p>{{ siteSetting()->email }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-phone"></i>
                            </span>
                            <span class="tm-contactblock-backicon">
                                <i class="flaticon-phone"></i>
                            </span>
                            <h5>Our location</h5>
                            <ul>
                                <li>Phone <span>: {{ siteSetting()->phone_number }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-50">
                    <div class="col-lg-8">
                        <form id="tm-contactform"
                            action="https://thememarch.com/demo/html/dialia/dialia/assets/php/mailer.php" method="POST"
                            class="tm-form tm-contact-form">
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
        <div class="tm-contact-map">
            <div class="google-map" id="google-map"></div>
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
