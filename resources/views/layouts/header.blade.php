<div class="header">
    <div class="header-toparea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-6 col-12">
                    <div class="header-topinfo">
                        <ul>
                            <li>
                                Email us :
                                <a href="mailto:{{ siteSetting()->email }}">{{ siteSetting()->email }}</a>
                            </li>
                            <li>
                                Call us :
                                <a href="tel:{{ siteSetting()->phone_number }}">{{ siteSetting()->phone_number }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottomarea">
        <div class="container">
            <div class="header-bottominner">
                <div class="header-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ getImage('site', siteSetting()->site_logo) }}" alt="site logo" />
                    </a>
                </div>
                <nav class="tm-navigation">
                    <ul>

                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li class="tm-navigation-dropdown">
                            <a href="">Services</a>
                            <ul>
                                @foreach (services() as $service)
                                    <li><a href="{{ route('serviceDetail', $service->slug) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </nav>

            </div>
            <div class="header-mobilemenu clearfix">
                <div class="tm-mobilenav"></div>
            </div>
        </div>
    </div>
</div>
