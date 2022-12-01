@extends('layouts.app')

@section('content')


<head>
    <link rel="stylesheet" href="{{ asset('myProfile.css') }}" />
</head>

<body class="d-flex flex-column min-vh-100">
    <section id="banner" class="my-5 py-4">
        <div class="container-flex">
            <h5 class="pt-3 title-text">Welcome back, user </h5>
        </div>
    </section>

    <section id="list-banner" class="container-flex mb-3 ">
        <a class="btn btn-bar mr-5" href="{{url('myOrders')}}">My Orders</a>
        <a class="btn btn-bar ml-5" href="{{url('/myProfile')}}">My Profile</a>
    </section>

    <div class="container-sm">
        <div class="card">
            <div class="card-header">
                <div class="order-header-items">
                    <div class="uppercase font-bold">Order Placed: <p> 26th Nov 2022</p>
                    </div>
                    <div class="uppercase font-bold">Order Number: <p> 0001 </p>
                    </div>
                    <div class="uppercase font-bold">Total: <p>£300 </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="order-header-items">
                    <div><a href="btn-bar">| Order Details | </a></div>
                    <div><a href="btn-bar">Invoice</a></div>
                </div>
            </div>

            <div class="card-body">
                <div class="order-product-item">
                    <div><img src="images\img.1.jpg" class="order-img">
                        <p> Sterling Silver bracelet</p>
                    </div>
                    <div>
                        <div>£300</div>
                        <div>Quantity: 1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
