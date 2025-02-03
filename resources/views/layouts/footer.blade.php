<footer class="footer">
    <div class="footer-toparea" style="margin-top: 80px;">
        <div class="container">
            <div class="row widgets footer-widgets">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">About Orchid Independent Caring</h5>
                        <p>{!! siteSetting()->footer_text !!}</p>
                    </div>
                </div>




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

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h5 class="widget-title">Quick Links</h5>
                        <ul>
                            <li><a href="{{ route('about','who-we-are') }}">About</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ siteSetting()->NDIS_link }}" target="_blank">NDIS Code of Conduct</a></li>
                            <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                        </ul>
                        <ul class="widget-contact-social">

                            <li>
                                <a href="{{ siteSetting()->facebook_link }}" target="_blank"><i
                                        class="zmdi zmdi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{ siteSetting()->linkedin_link }}" target="_blank"><i
                                        class="zmdi zmdi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{ siteSetting()->instagram_link }}" target="_blank"><i
                                        class="zmdi zmdi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottomarea">
            <div class="container">
                <p class="footer-copyright">
                    {{ siteSetting()->copy_right_text }}
                </p>
            </div>
        </div>
</footer>
