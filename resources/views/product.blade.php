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
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="{{ asset('productpage.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    {{-- <script src="{{asset('app.js')}}"></script> --}}

    <script src="{{asset('script.js')}}"></script>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/JWZ_Logo.png') }}" alt="logo"  class="d-inline-block align-text-center">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#rings') }}">RINGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#necklaces') }}">NECKLACES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#bracelets') }}">BRACELETS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#earrings') }}">EARRINGS</a>
                </li>
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     <img src="{{ asset('images/user.png') }}">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <li><a class="dropdown-item" href="{{url('myProfile')}}">My Profile</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                        {{-- follow this formate to add more sections to the nav item dropdown button --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}"><img src="{{ asset('images/cart.png') }}">
                        @if (Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span>
                        @endif
                    </a>
                </li>
                @endguest
              </ul>
            </div>
        </div>
    </nav>
</header>



<div>
    <main>
        <body>
            <div class="card-wrapper">
                <div class="card">
                    <!-- card left -->
                   <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                                <img src="{{asset ('images/img.1.jpg') }}" alt="jewellery image">
                                <img src="{{asset ('images/img.2.jpg') }}" alt="jewellery image">
                                <img src="{{asset ('images/img.3.jpg') }}" alt="jewellery image">
                        </div>
                    </div>
                    <div class= "img-select">
                        <div class= "img-item">
                            <a href= "#" data-id = "1">
                                <img src= "{{asset ('images/img.1.jpg') }}" alt="jewellery image">
                            </a>
                        </div>
                        <div class= "img-item">
                            <a href= "#" data-id = "2">
                                <img src= "{{asset ('images/img.2.jpg') }}" alt="jewellery image">
                            </a>
                        </div>
                        <div class= "img-item">
                            <a href= "#" data-id = "3">
                                <img src= "{{asset ('images/img.3.jpg') }}" alt="jewellery image">
                            </a>
                        </div>
                    </div>
                   </div>
                    <!--- card right --->
                    <div class="product content">
                        <h2 class="product-title">Rhinestone Decor Chain Necklace</h2>
                        <div class = "product-price">
                            <p class = "price">Price: <span>£249.00
                            </span></p>
                        </div>
                        <div class = "product-size">
                            <p class = "Size">Size:
                                <button type = "button" class = "btn">
                                    One-size <i class=""></i>
                            </p>
        
                        </div>
                        <div class= "product-detail">
                            <h2>About this item: </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium exercitationem iste sapiente laudantium totam aliquid accusamus delectus quae at. Minima perferendis blanditiis aut at hic.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, itaque nulla magnam reprehenderit sunt esse!</p>
                            <ul>
                              <li>Color: <span>Silver</span></li>
                              <li>Available: <span>In stock</span></li>
                              <li>Category: <span>Jewellery</span></li>
                              <li>Shipping Area: <span>All over the world</span></li>
                              <li>Shipping fee: <span>Free</span></li>  
                            </ul>
                        </div>
        
        
                        <div class = "purchase-info">
                            <input type = "number" min ="0" value = "1">
                            <button type = "button" class = "btn">
                                Add to Cart <i class = "fas fa-shopping-cart"></i>
                            </button>
                            
                            </div>
                        
        
                        </div>
        
                    </div>
                    
                </div>
                
            </div>
        
        
        
        
            
        </body>
        
    </main>
 </div>





 <footer class="site-footer sticky-bottom footer mt-auto py-3 bg-dark">
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
                        <a href="{{ url('/#necklaces') }}">NECKLACES</a>
                    </li>
                    <li><a href="{{ url('/#rings') }}">RINGS</a></li>
                    <li>
                        <a href="{{ url('/#bracelets') }}">BRACELETS</a>
                    </li>
                    <li><a href="{{ url('/#earrings') }}">EARRINGS</a></li>
                </ul>
            </div>
            <br>
            <div class="col-xs-6 col-md-3">
                <h6>DISCOVER JEWELZ</h6>
                <ul class="footer-links">
                    <li><a href="{{ url('/about') }}">ABOUT US</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT US</a></li>
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




















