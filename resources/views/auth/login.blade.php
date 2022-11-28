@extends('layouts.app')

@section('content')
<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid my-5 border">
        <div class="row justify-content-center">
            <h1> LOGIN </h1>
            <t2>Returning customer? welcome back.</t2>
            <h6>New around here? **Sign up here instead**</h6> <!-- be sure to add the hyperlink for the sign up page here-->

            <div class="container-fluid">
               <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="container-xxl">
                        <div class="row mb-3">
                            
                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
   
                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-1">
                            <div class="form-check">
                                <input class="form-check-input mr-1" type="checkbox" name="remember" id="remember" >
                                <label for="remember" class="form-check-label">
                                {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
@endsection
