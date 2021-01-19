<div id="site-main-mobile-menu" class="site-main-mobile-menu">
    <div class="site-main-mobile-menu-inner">
        <div class="mobile-menu-header">
            <div class="mobile-menu-logo">
                <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
            </div>
            <div class="mobile-menu-close">
                <button class="toggle">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-menu-content">
            <nav class="site-mobile-menu">
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
    </div>
</div>
