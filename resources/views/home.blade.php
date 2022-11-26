@extends('layouts.app')


@section('content')

{{-- <header id="header">

    <img src="{{ asset('images/JWZ_Logo.png') }}" style="width:50px;height:50px;">
    <h1>JEWELZ</h1>
    <div class="user-details">
        @guest
            @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
        <span><img src="{{ asset('images/user.png') }}" ></span>
        <span><img src="{{ asset('images/cart.png') }}" ></span>
        <span>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </span>
        @endguest
    </div>
    <nav id="nav-bar">
        <ul>
            <li><a class="nav-link" href="#rings">RINGS</a></li>
            <li><a class="nav-link" href="#necklaces">NECKLACES</a></li>
            <li><a class="nav-link" href="#bracelets">BRACELETS</a></li>
            <li><a class="nav-link" href="#earrings">EARRINGS</a></li>

        </ul>

    </nav>
</header> --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href={{ url('/') }}>
      <img src="{{ asset('images/JWZ_Logo.png') }}" alt="logo" width="50" height="50" class="d-inline-block align-text-center">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#rings">RINGS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#necklaces">NECKLACES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#bracelets">BRACELETS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#earrings">EARRINGS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
  </div>
</nav>

<main>

    <div class="section one">
        <p class="t2">EXPRESS YOURSELF</p>
        </p>
        <p class="t2">THE FINEST SUBSTAINABLE JEWELLERY</p>
        <p class="t3">....</p>
    </div>
    <div id="section1">
        <img src="{{ asset('images/pexels-milan-4639591.jpg') }}" alt="express">
    </div>

    <div class="section two">
    <button>
        <i class="gender"></i>
        <img src="{{ asset('images/pexels-milan-4639591.jpg') }}" alt="genders">
        <h1>HIM</h1>
     </button>
    <button>
        <i class="gender"></i>
        <img src="{{ asset('images/pexels-milan-4639591.jpg') }}" alt="genders">
        <h1>HER</h1>
      </button>
    </div>

    <div class="section three" id="rings">
        <p class="t1">RINGS</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse.</p>
        <p class="t4">
            <a href="{{ url('/') }}">BROWSE</a>
        </p>
    </div>
    <div id="section3">
        <img src="{{ asset('images/pexels-goran-vrakela-230290.jpg') }}" alt="ring">
    </div>

    <div class="section four" id="necklaces">
        <p class="t1">NECKLACES</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor.</p>
        <p class="t4"><a href="{{ url('/') }}">BROWSE</a></p>
    </div>
    <div id='section4'>
        <img src="{{ asset('images/pexels-lalesh-aldarwish-147637.jpg') }}" alt="necklace">
    </div>

    <div class="section five" id="bracelets">
        <p class="t1">BRACELETS</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
        <p class="t4"><a href="{{ url('/') }}">BROWSE</a></p>
    </div>
    <div id='section5'>
        <img src="{{ asset('images/pexels-hassan-ouajbir-678327.jpg') }}" alt="bracelet">
    </div>

    <div class="section six" id="earrings">
        <p class="t1">EARRINGS</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse.</p>
        <p class="t4"><a href="{{ url('/') }}">BROWSE</a></p>
    </div>
    <div id='section6'>
        <img src="{{ asset('images/pexels-joão-rabelo-10218611.jpg') }}" alt="earring">
    </div>

</main>




@endsection

