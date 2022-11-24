<!DOCTYPE html>
<html>
<header id="header">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <script src="{{ asset('app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <img src="{{ asset('images/JWZ_Logo.png') }}" style="width:50px;height:50px;">
    <h1>JEWELZ</h1>
    <div class="user-details ">
        <span><img src="{{ asset('images/user.png') }}" ></span>
        <span><img src="{{ asset('images/cart.png') }}" ></i></span>
    </div>
    <nav id="nav-bar ">
        <ul>
            <li><a class="nav-link" href="#rings">RINGS</a></li>
            <li><a class="nav-link" href="#necklaces">NECKLACES</a></li>
            <li><a class="nav-link" href="#bracelets">BRACELETS</a></li>
            <li><a class="nav-link" href="#earrings">EARRINGS</a></li>

        </ul>

    </nav>
</header>

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
            <a href=#>BROWSE</a>
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
