<header id="header" class="fixed-top shadow">
    <div class="container">
        <nav id="navbar" class="navbar navbar-expand-lg">
            <a class="navbar-brand logo mb-0 me-5 h1" href="index.html">
                <img src="imgs/logo.jpeg" width="60" alt="logo">
            </a>
            <div class="dropdown order-lg-1">
                <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-sharp fa-solid fa-globe"></i>
                </a>
                <ul class="dropdown-menu">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="dropdown-item">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li>
                        <a class="nav-link active" href="#hero">{{ __('front_static.home') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#about">{{ __('front_static.about') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#services">{{ __('front_static.projects') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#services">{{ __('front_static.reports') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#services">{{ __('front_static.events') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#contact">{{ __('front_static.contactus') }}</a>
                    </li>
                </ul>
                <a href="#donor" class="donor-btn me-3">
                    {{ __('front_static.volunteer') }}
                </a>
            </div>
        </nav>
    </div>
</header>
