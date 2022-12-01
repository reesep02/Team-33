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

    <section id="list-banner" class="container-flex">
        <div class="col">
            <a class="btn btn-link" href="{{route('myOrders')}}">My Orders</a>-->
        </div>
        <div class="col">
            <a class="btn btn-link" href="{{route('home')}}">My Profile</a>
        </div>
    </section>

    <section id="update-details" class="container-sm col">

        <div class="card">
            <form method="POST" action="{{ route('register') }}">
                <!-- rework for update details -->
                @csrf
                <div class="row mb-4">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                </div>

                <div class="row mb-4">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="row">
                    <div class="col mb-5">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </section>
</body>
@endsection
