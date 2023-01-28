<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/brand/dark.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/brand/dark.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/brand/dark.svg') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/Group.svg') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/Group.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="{{ asset('css/pixel.css') }}" rel="stylesheet">
    

    <!-- Scripts -->
    {{--@vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body cz-shortcut-listen="true">
    <div id="app">
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>--}}
        <header class="header-global">
            <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-dark">
                <div class="container position-relative">
                    <a class="navbar-brand me-lg-5" href="./index.html">
                        <img class="navbar-brand-dark" src="./assets/img/brand/light.svg" alt="Logo light">
                        <img class="navbar-brand-light" src="./assets/img/brand/dark.svg" alt="Logo dark">
                    </a>
                    <div class="navbar-collapse collapse me-auto" id="navbar_global">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="./index.html">
                                        <img src="./assets/img/brand/dark.svg" alt="Themesberg logo">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <a href="#navbar_global" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="frontPagesDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                                    Pages
                                    <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                                </a>
                                <div class="dropdown-menu dropdown-megamenu px-0 py-2 p-lg-4" aria-labelledby="frontPagesDropdown">
                                    <div class="row">
                                        <div class="col-6 col-lg-4">
                                            <h6 class="d-block mb-3 text-primary">Main pages</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/profile.html" target="_blank">Profile <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block text-primary">Legal</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/terms.html" target="_blank">Terms <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block text-primary">Career</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/career-single.html" target="_blank">Career Single <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <h6 class="d-block mb-3 text-primary">Landings</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/landing-crypto.html" target="_blank">Crypto <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block mb-3 text-primary">Support</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/support-topic.html" target="_blank">Support topic <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block mb-3 text-primary">Blog</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/blog-post.html" target="_blank">Blog post <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <h6 class="d-block mb-3 text-primary">User</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/pages/reset-password.html" target="_blank">Reset password <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block mb-3 text-primary">Special</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="./html/pages/blank.html">Blank page</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="dashboardDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                                    Dashboard
                                    <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                                </a>
                                <div class="dropdown-menu dropdown-megamenu-sm px-0 py-2 p-lg-4" aria-labelledby="dashboardDropdown">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="d-block mb-3 text-primary">User dashboard</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/dashboard/security.html" target="_blank">Security <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block mb-3 text-primary">Items</h6>
                                            <ul class="list-style-none">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/dashboard/edit-item.html" target="_blank">Edit item <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="d-block mb-3 text-primary">Messaging</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/dashboard/single-message.html" target="_blank">Chat <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                            <h6 class="d-block mb-3 text-primary">Billing</h6>
                                            <ul class="list-style-none mb-4">
                                                <li class="mb-2 megamenu-item">
                                                    <a class="megamenu-link" href="https://demo.themesberg.com/pixel-pro/v5/html/dashboard/invoice.html" target="_blank">Invoice <span class="badge bg-tertiary">Pro</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="componentsDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                                    Components
                                    <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                                </a>
                                <div class="dropdown-menu dropdown-megamenu-md p-0" aria-labelledby="componentsDropdown">
                                    <div class="row g-0">
                                        <div class="col-lg-6 bg-dark d-none d-lg-block me-0 me-3">
                                            <div class="px-0 py-3 text-center">
                                                <img src="./assets/img/megamenu_image.png" alt="Pixel Components">
                                            </div>
                                        </div>
                                        <div class="col ps-0 py-3">
                                            <ul class="list-style-none">
                                                <li><a class="dropdown-item" href="https://demo.themesberg.com/pixel-pro/v5/html/components/counters.html" target="_blank">Counters <span class="badge bg-tertiary">Pro</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col ps-0 py-3">
                                            <ul class="list-style-none">

                                                <li><a class="dropdown-item" href="./html/components/popovers.html">Popovers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col ps-0 py-3">
                                            <ul class="list-style-none">
                                                <li><a class="dropdown-item" href="https://demo.themesberg.com/pixel-pro/v5/html/components/widgets.html" target="_blank">Widgets <span class="badge bg-tertiary">Pro</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="supportDropdown" aria-expanded="false">
                                    Support
                                    <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="supportDropdown">
                                    <div class="col-auto px-0">
                                        <div class="list-group list-group-flush">
                                            <a href="https://themesberg.com/docs/bootstrap-5/pixel/getting-started/quick-start/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                                <span class="icon icon-sm"><span class="fas fa-file-alt"></span></span>
                                                <div class="ms-4">
                                                    <span class="d-block font-small fw-bold mb-0">Documentation<span class="badge badge-sm badge-secondary ms-2">v3.1</span></span>
                                                    <span class="small">Examples and guides</span>
                                                </div>
                                            </a>
                                            <a href="https://github.com/themesberg/pixel-bootstrap-ui-kit/issues" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                                <span class="icon icon-sm"><span class="fas fa-microphone-alt"></span></span>
                                                <div class="ms-4">
                                                    <span class="d-block font-small fw-bold mb-0">Support</span>
                                                    <span class="small">Need help? Ask us!</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center">
                        @guest
                        <a href="{{ route('login') }}" class="btn btn-tertiary"><span class="me-2"><i class="fas fa-sign-in-alt"></i></span> login</a>
                        @else
                            <div class="btn-group nav-item dropdown">
                                <button class="btn btn-link btn-tertiary dropdown-toggle dropdown-toggle-split me-n1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="icon icon">
                                        <img class="avatar-sm img-fluid rounded-circle" src="../../assets/img/team/profile-picture-2.jpg" alt="Jose portrait"> 
                                    </span>
                                    <span class="fas fa-angle-left dropdown-arrow"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit me-2"></span>Edit post</a>
                                    <button class="dropdown-item text-danger rounded-bottom" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><span class="fa fa-trash me-2" aria-hidden="true"></span>{{ __('Logout') }}</button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </nav>
        </header>
        <section class="section-header overflow-hidden pt-2 pt-lg-2 pb-6 pb-lg-6 bg-primary text-white">
        </section>
    </div></div></div>
    
      

        <main class="py-4">
            @yield('content')
        </main>
    </div>

        <!-- Core -->
        <script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/headroom.js/dist/headroom.min.js') }}"></script>

        <!-- Vendor JS -->
        <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
        <script src="{{ asset('vendor/jarallax/dist/jarallax.min.js') }}"></script>
        <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
        <script src="{{ asset('vendor/vivus/dist/vivus.min.js') }}"></script>
        <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Pixel JS -->
        <script src="{{ asset('assets/js/pixel.js') }}"></script>
</body>
</html>
