<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
     <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>About Jewelz</title>
  <link rel="stylesheet" href="{{ asset('aboutus.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Scripts -->
    <script src="{{asset('app.js')}}"></script>
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
                        <img src="{{ asset('images/user.png') }}" >
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


<body>

<div class="wrapper">


  <div class="atitle">
    <h1> about Jewelz</h1>

  </div>
  <div class="about">
    <div class="logo">
      <img src="{{ asset('images/JWZ_Logo.png') }}">
    </div>
    <article>
      <h3>At our store, you will find the best jewelry at very reasonable prices. Our huge range includes diamonds, gold and silver jewellery as well as special pieces made. All our products are handmade by skilled craftsmen in our UK factories using traditional techniques passed down through generations.
      </h3>
   <p>We work closely with our suppliers to ensure that only the best quality materials are used in the making of our jewellery so that you can be assured of its durability and beauty.</p>

    </article>



  </div>

  <div class="atitle">
    <p></p>
    <h1 id="contact"> Get in touch</h1>

  </div>
  <div class="wrap">
  <div class="contact-info">
      <div class="card">
        <i class="card-icon far fa-envelope"></i>
        <p>info@Jewelz.com</p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-phone"></i>
        <p>+44000000000</p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-map-marker-alt"></i>
        <p>Birmingham, UK</p>
      </div>
    </div>
  </div>
  <div class="container1">
        <form>
            <h1>Contact Us Below</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <h4>Type Your Message Here...</h4>
            <textarea required></textarea>
            <input type="submit" value="Send" id="button">
        </form>
    </div>
</div>

</body>
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
                    <li><a href="{{ url('/contact') }}">ABOUT US</a></li>
                    <li><a href="{{ url('/contact') }}#contact">CONTACT US</a></li>
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
