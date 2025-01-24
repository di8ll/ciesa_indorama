@extends('layouts.auth.app')

@section('title')
    Login CEISA | Indorama
@endsection

@section('content')
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form class="my-4" method="POST" action="{{ route('login') }}">
                <img src="{{ asset('template/img/logoindorama.png') }}" style="margin-bottom:8%" height="80"
                    alt="logo" class="auth-logo animate__animated" id="animatedLogo" style="margin-top: 25px">
                <br>
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                        placeholder="Username">

                        @error('username')
                        <span class="invalid-feedback text-white" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="password-input-wrapper" style="width: 100%">
                        <input type="password" class="form-control password-input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password" id="password">

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


                <div class="form-group row mt-3">
                    @if (Route::has('password.request'))
                        <div class="col-sm-12 text-end" style="margin-left: 74%">
                            <a href="{{ route('password.request') }}" class="mt-3 mb-1 text-white font-14"><i
                                    class="dripicons-lock"></i>
                                Forgot Password?
                            </a>
                        </div>
                        <!--end col-->
                    @endif
                </div>

                <div class="d-grid mt-3" style="margin-bottom: 20%; width: 105%;">
                    <button class="btn btn-primary" type="submit">Log In
                        <i class="fas fa-sign-in-alt ms-1"></i>
                    </button>
                </div>

                <!--end form-group-->
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
                    <img src="{{ asset('template/img/babaa.jpg') }}" alt="Indorama Bea Cukai" class="image-bg" style="max-width: 150%; max-height: 100%;">
                </div>
            </div>
        </div>
    </div>
@endsection
