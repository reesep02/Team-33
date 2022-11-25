<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jewelz') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('app.js') }}"></script>
</head>
{{-- <body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-7 mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-thumbnail d-inline-block align-top" src="favicon.jpg" alt="Brand-image" width="35" height="35">
                    {{ config('app.name', 'Jewelz') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a  class="nav-link" aria-current="page" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"  href="{{ url('/contact') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> Contact Us / Info</a>
                        </li>

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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body> --}}
<div id="app">
    <main>
        @yield('content')
    </main>
 </div>
 <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>ABOUT JEWELZ</h6>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse.</p>
            </div>
            <br>
            <div class="col-xs-6 col-md-3">
                <h6>CATEGORIES</h6>
                <ul class="footer-links">
                    <li>
                        <a href="{{ url('/') }}">NECKLACES</a>
                    </li>
                    <li><a href="{{ url('/') }}">RINGS</a></li>
                    <li>
                        <a href="{{ url('/') }}">BRACELETS</a>
                    </li>
                    <li><a href="{{ url('/') }}">EARRINGS</a></li>
                </ul>
            </div>
            <br>
            <div class="col-xs-6 col-md-3">
                <h6>DISCOVER JEWELZ</h6>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">ABOUT US</a></li>
                    <li><a href="{{ url('/') }}">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                    <a href="{{ url('/') }}">Jewelz</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="{{ url('/') }}"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="{{ url('/') }}"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="instagram" href="{{ url('/') }}"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</html>
