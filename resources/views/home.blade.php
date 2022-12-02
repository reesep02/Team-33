@extends('layouts.app')


@section('content')



<main>

    <div class="section one">
        <p class="t2">EXPRESS YOURSELF</p>
        </p>
        <p class="t2">THE FINEST SUSTAINABLE JEWELLERY</p>
        <p class="t3">CRAFTED BY OUR VERY OWN JEWELERS</p>
    </div>

    <div class="section three" id="rings">
        <p class="t1">RINGS</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse.</p>
        <p class="t4">
            <a href="{{ url('/shop-ring') }}">BROWSE</a>
        </p>
    </div>
    <div id="section3">
        <img src="{{ asset('images/pexels-goran-vrakela-230290.jpg') }}" alt="ring">
    </div>

    <div class="section four" id="necklaces">
        <p class="t1">NECKLACES</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute
            irure dolor.</p>
        <p class="t4"><a href="{{ url('/shop-necklace') }}">BROWSE</a></p>
    </div>
    <div id='section4'>
        <img src="{{ asset('images/pexels-goran-vrakela-230290.jpg') }}" alt="necklace">
    </div>

    <div class="section five" id="bracelets">
        <p class="t1">BRACELETS</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo.</p>
        <p class="t4"><a href="{{ url('/shop-bracelet') }}">BROWSE</a></p>
    </div>
    <div id='section5'>
        <img src="{{ asset('images/pexels-goran-vrakela-230290.jpg') }}" alt="bracelet">
    </div>

    <div class="section six" id="earrings">
        <p class="t1">EARRINGS</p>
        <p class="t2">SOMETHING CATCHY</p>
        <p class="t3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse.</p>
        <p class="t4"><a href="{{ url('/shop-earring') }}">BROWSE</a></p>
    </div>
    <div id='section6'>
        <img src="{{ asset('images/pexels-goran-vrakela-230290.jpg') }}" alt="earring">
    </div>

</main>




@endsection