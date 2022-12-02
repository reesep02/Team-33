@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('myProfile.css') }}" />
</head>

<body class="d-flex flex-column min-vh-100">
    <section id="banner" class="my-5 py-4">
        <div class="container-flex">
            <h5 class="pt-3 title-text">Welcome back, {{ Auth::user()->name }} </h5>
        </div>
    </section>

    <section id="list-banner" class="container-flex mb-3 ">
        <a class="btn btn-bar mr-5" href="{{url('myOrders')}}">My Orders</a>
        <a class="btn btn-bar btn-live ml-5" href="{{url('/myProfile')}}">My Profile</a>
    </section>

    <section id="update-details" class="container-sm ">

        <form method="POST" action="{{ route('register') }}">
            <!-- rework for update details -->
            @csrf
            <div class="row mb-4">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>
            </div>

            <div class="row mb-4">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{Auth::user()->email}}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="row mb-4">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                @error('password')
                <!-- Password must be correct to update credentials -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="row mb-4">
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="row">
                <div class="col mb-5">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Profile') }}
                    </button>
                </div>
            </div>
        </form>
    </section>
</body>
@endsection
