@extends('layouts.app')


@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('myProfile.css') }}" />
</head>

<body class="d-flex flex-column min-vh-100">
    <section id="profile-banner" class="my-5 py-4">
        <div class="container-flex">
            <h5 class="pt-3 title-text">Welcome back, **insert user name here** </h5>
        </div>
    </section>


    <section class="container-flex row">

        <section id="profile-orders" class=" container-sm card col col-4 ">
            <div class="card-head">
                <h6 class="title-text">My Orders</h6>
            </div>
            <div class="card-body">
                <h6 class="mb-1"> Your Recent orders</h6>

                <img class="order-img" src="images\img.1.jpg" />
                <p> Sterling Silver Ring</p>

            </div>

        </section>


        <section id="account-details" class="container-sm card col col-4">
            <div class="card-head">
                <h6 class="title-text">........My Details........ </h6>
            </div>
            <div class="card-body">
                <p> this is a test for the box area
                    of the account details section of the webpage
                </p>
            </div>
        </section>



</body>



@endsection
