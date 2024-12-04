<footer class="footer">
    <div class="footer-toparea" style="margin-top: 80px;">
        <div class="container">
            <div class="row widgets footer-widgets">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="single-widget widget-contact">
                        <h5 class="widget-title">Get In Touch</h5>
                        <ul>
                            <li>
                                <b>Address :</b>{{ siteSetting()->address }}
                            </li>
                            <li>
                                <b>Phone :</b><a
                                    href="tel:{{ siteSetting()->phone_number }}">{{ siteSetting()->phone_number }}</a>
                            </li>
                            <li>
                                <b>Email :</b><a href="mailto:{{ siteSetting()->email }}">{{ siteSetting()->email }}</a>
                            </li>
                        </ul>
                        <ul class="widget-contact-social">

                            <li>
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">Quick Links</h5>
                        <ul>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('career') }}">Career</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">Services</h5>
                        <ul>
                            @foreach (services() as $service)
                                <li><a href="{{ route('serviceDetail', $service->slug) }}">{{ $service->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottomarea">
            <div class="container">
                <p class="footer-copyright">
                    {{ siteSetting()->footer_text }}
                </p>
            </div>
        </div>
</footer>
