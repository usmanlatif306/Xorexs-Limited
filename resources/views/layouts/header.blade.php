<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone">
                    <span class="mailus">email us:</span>
                    <a href="mailto:info@xorexs.com">info@xorexs.com</a>
                </p>
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        @if ($facebook)
                            <a href="{{ $facebook }}" class="d-flex align-items-center justify-content-center"><span
                                    class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        @endif
                        @if ($twitter)
                            <a href="{{ $twitter }}" class="d-flex align-items-center justify-content-center"><span
                                    class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        @endif
                        @if ($linkedin)
                            <a href="{{ $linkedin }}" class="d-flex align-items-center justify-content-center"><span
                                    class="fab fa-linkedin"><i class="sr-only">Instagram</i></span></a>
                        @endif
                        @if ($instagram)
                            <a href="{{ $instagram }}" class="d-flex align-items-center justify-content-center"><span
                                    class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="{{ asset('images/logo-black.webp') }}" alt="{{ config('app.name') }}" width="171"
                height="41" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->routeIs('homepage') ? 'active' : '' }}">
                    <a href="{{ route('homepage') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown {{ request()->is('services/*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="{{ route('services') }}" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('consultancy') }}">Software Consultancy</a>
                        <a class="dropdown-item" href="{{ route('web_development') }}">Web Mobile Development</a>
                        <a class="dropdown-item" href="{{ route('user_design') }}">User Experience Design</a>
                        <a class="dropdown-item" href="{{ route('strategy_planning') }}">Strategy Planning</a>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item cta">
                    <a href="tel:+44(845)4670515" class="nav-link">Call: +44 (845) 4670515</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
