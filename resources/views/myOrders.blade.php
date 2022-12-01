@extends('layouts.app')

@section('content')

<body class="d-flex flex-column min-vh-100">
    <section id="profile-banner" class="my-5 py-4">
        <div class="container-flex">
            <h5 class="pt-3 title-text">Welcome back, **insert user name here** </h5>
        </div>
    </section>

    <section id="list-banner" class="container-flex">
        <div class="col">
            <a class="btn btn-link" href="{{ url('/myOrders') }}">My Orders</a>
        </div>
        <div class="col">
            <a class="btn btn-link" href="{{ url('/myProfile') }}">My Profile</a>
        </div>
    </section>

</body>
@endsection
