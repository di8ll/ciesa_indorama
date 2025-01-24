@extends('layouts.auth.app')

@section('title')
    Reset Password | PLN ICON Plus
@endsection

@section('content')
<div class="container" id="container">
    <div class="form-container sign-in">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <img src="{{ asset('template/assets/images/logos.png') }}"  height="60"
            alt="logo" class="auth-logo animate__animated" id="animatedLogo" style="margin-top: 50px">
            <input type="hidden" name="token" value="{{ $request->token }}">
            <p class="text-white font-13" style="margin-left: 9px;font-size:5px">You can enter a new password with a
                length of at least <b style="color: black">8 digits</b> and confirm it again.</p>
            <div class="input-group">
                <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                    placeholder="Email">

                @error('email')
                    <span class="invalid-feedback text-white" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--end form-group-->

            <div class="input-group">
                <div class="password-input-wrapper" style="width: 100%" >
                    <input type="password"
                        class="form-control password-input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password"
                        id="password" >

                    <div class="password-toggle-icon" id="togglePassword1">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>

                @error('password')
                    <span class="invalid-feedback text-white" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-group">
                <div class="password-input-wrapper" style="width: 100%" >
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Password Confirmation" >

                    <div class="password-toggle-icon" id="togglePassword2">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
            </div>
            <!--end form-group-->


            <div class="col-12">
                <div class="d-grid ">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
            <!--end col-->
            <center>
                <p style="margin-top: 10px;margin-bottom:50px;font-size:11px" class="text-white">Already have an account?<a href="/login"
                        class="text-black"> Please Login</a></p>
            </center>

        </form>
    </div>

    <style>
        .password-input-wrapper {
            position: relative;
        }

        .password-toggle-icon {
            position: absolute;
            right: 17px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var passwordField1 = document.getElementById('password');
            var togglePasswordButton1 = document.getElementById('togglePassword1');

            togglePasswordButton1.addEventListener('click', function() {
                var fieldType = passwordField1.type === 'password' ? 'text' : 'password';
                passwordField1.type = fieldType;

                // Ganti ikon mata terbuka/tutup
                var iconClass = fieldType === 'password' ? 'fa-eye' : 'fa-eye-slash';
                togglePasswordButton1.innerHTML = '<i class="fa ' + iconClass + '"></i>';
            });

            var passwordField2 = document.getElementById('password-confirm');
            var togglePasswordButton2 = document.getElementById('togglePassword2');

            togglePasswordButton2.addEventListener('click', function() {
                var fieldType = passwordField2.type === 'password' ? 'text' : 'password';
                passwordField2.type = fieldType;

                // Ganti ikon mata terbuka/tutup
                var iconClass = fieldType === 'password' ? 'fa-eye' : 'fa-eye-slash';
                togglePasswordButton2.innerHTML = '<i class="fa ' + iconClass + '"></i>';
            });
        });
    </script>

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
