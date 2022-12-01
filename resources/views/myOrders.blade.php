@extends('layouts.app')

@section('content')


<head>
    <link rel="stylesheet" href="{{ asset('myProfile.css') }}" />
</head>

<body class="d-flex flex-column min-vh-100">
    <section id="banner" class="my-5 py-4">
        <div class="container-flex">
            <h5 class="pt-3 title-text">Welcome back, Thomas </h5>
        </div>
    </section>

    <section id="list-banner" class="container-flex mb-3 ">
        <a class="btn btn-bar mr-5" href="{{url('myOrders')}}">My Orders</a>
        <a class="btn btn-bar ml-5" href="{{url('/myProfile')}}">My Profile</a>
    </section>

    <div class="container">
        <div class="row">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="order-header-items">
                        <div>Order Placed: <p> 26th Nov 2022</p>
                        </div>
                        <div>Order Number: <p> 0001 </p>
                        </div>
                        <div>Total: <p>£300 </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-body">
                        <div><a href="btn-bar">| Order Details | </a></div>
                        <div><a href="btn-bar">Invoice</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="order-product-item">
                        <div><img src="images\img.1.jpg" class="order-img">
                            <p> Sterling Silver bracelet</p>
                            <div>Item cost: £300</div>
                            <div>Quantity: 1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
