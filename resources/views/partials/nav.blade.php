<div class="header-section header-transparent sticky-header section">
    <div class="header-inner">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-2 col-auto order-0">
                    <div class="header-logo">
                        <a href="{{url('/')}}">
                            <img class="dark-logo" src="{{asset('assets/images/logo/logo.png')}}" alt="Agency Logo">
                            <img class="light-logo" src="{{asset('assets/images/logo/logo.png')}}" alt="Agency Logo">
                        </a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Main Menu Start -->
                <div class="col-auto col-xl d-flex align-items-center justify-content-xl-center justify-content-end order-2 order-xl-1">
                    <div class="menu-column-area d-none d-xl-block position-static">
                        <nav class="site-main-menu">
                            <ul>
                                <li><a href="{{ route('home') }}" class="nav-link{{ request()->is('/') ? ' active' : '' }}">Accueil</a></li>
                                <li><a href="{{ route('about') }}" class="nav-link{{ request()->is('about') ? ' active' : '' }}">A propos </a></li>
                                <li><a href="{{ route('service') }}" class="nav-link{{ request()->is('services') ? ' active' : '' }}">Services</a></li>
                                <li><a href="{{ route('portfolio') }}" class="nav-link{{ request()->is('portfolio') ? ' active' : '' }}">Portfolio</a></li>
                                <li><a href="{{ route('news.index') }}" class="nav-link{{ request()->is('news') ? ' active' : '' }}">News</a></li>
                                <li><a href="{{ route('contact.index') }}" class="nav-link{{ request()->is('contact-us') ? ' active' : '' }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                    <!-- Header Mobile Menu Toggle Start -->
                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                        <button class="toggle">
                            <i class="icon-top"></i>
                            <i class="icon-middle"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                    <!-- Header Mobile Menu Toggle End -->
                </div>
                <!-- Header Main Menu End -->



            </div>
        </div>
    </div>
</div>
