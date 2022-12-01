@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('myProfile.css') }}" />
</head>
<body class="d-flex flex-column min-vh-100">
    <section id="banner" class="my-5 py-4">
        <div class="container-flex">
            <h5 class="pt-3 title-text">Welcome back, **insert user name here** </h5>
        </div>
    </section>

    <section id="list-banner" class="container-flex mb-3">
        <a class="btn btn-bar ml-5" href="{{ url('/myOrders') }}">My Orders</a>
        <a class="btn btn-bar ml-5" href="{{ url('/myProfile') }}">My Profile</a>
    </section>


    <div class="card">
        <div class="card-header">
            <div class="order-header-items">
                <div class="content-justify-center">
                    <div class="">ORDER PLACED</div>
                    <p class="">Dec 01, 2022</p> <!-- insert date here -->
                </div>
                <div>
                    <div class="uppercase font-bold">Order Number</div>
                    <p>4</p> <!-- Order num here -->
                </div>
                <div>
                    <div class="uppercase font-bold">Total</div>
                    <p>$12917.65</p><!-- total cost here -->
                </div>
            </div>
            <div>
                <div class="order-header-items">
                    <div><a href="https://laravelecommerceexample.ca/my-orders/4">Order Details</a></div>
                    <div>|</div>
                    <div><a href="#">Invoice</a></div>
                </div>
            </div>
        </div>
        <div class="order-products">
            <div class="order-product-item">
                <div><img src="https://laravelecommerceexample.ca/products/dummy/laptop-1.jpg" alt="Product Image"></div>
                <div>
                    <div>
                        <a href="https://laravelecommerceexample.ca/shop/laptop-1">Laptop 1</a>
                    </div>
                    <div>$2286.31</div>
                    <div>Quantity: 5</div>
                </div>
            </div>

        </div>
    </div>


</body>
@endsection
