@extends('layouts.auth.app')

@section('title')
    Forgot Password | PLN ICON Plus
@endsection

@section('content')
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form class="my-4" method="POST" action="{{ route('password.email') }}">
                <img src="{{ asset('template/assets/images/logos.png') }}"  height="80"
                    alt="logo" class="auth-logo animate__animated" id="animatedLogo" style="margin-top: 20px">
                <p class="text-white font-13">You can reset the password by entering
                    your email address.
                </p>
                @csrf

                <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback text-white" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end form-group-->

                <div class="col-12">
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
                <!--end col-->
                <center>
                    <p style="margin-top: 10px;margin-bottom:30%" class="text-white">Already have an account?<a href="{{ route('login') }}"
                            class="text-black"> Please Login</a></p>
                </center>

            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <video autoplay muted loop class="video-bg" style="max-width: 150%; max-height: 100%;">
                        <source src="{{ asset('template/img/bgn.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

    </div>
@endsection
