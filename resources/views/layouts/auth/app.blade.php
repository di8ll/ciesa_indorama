<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {{--
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/.png') }}" /> --}}

    <!-- App css -->
    <link href="{{ asset('template/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/logins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
          body {
            background: url('{{ asset('template/img/ooo.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            }

        .btn-primary {
            background-color: #005BAC;
            /* Warna biru Persib */
            color: #fff;
            /* Warna teks putih */
            border: none;
            /* Menghilangkan border */
        }

        .btn-primary:hover {
            background-color: #003F7D;
            /* Biru lebih gelap untuk efek hover */
            color: #fff;
        }



    </style>
</head>

<body>
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    @yield('content')
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div>
    <!--end container-->

    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.js') }}"></script>
    <script src="{{ asset('template/assets/js/script_login.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1"></script>
    <script>
        function animateLogo() {
            anime({
                targets: '#animatedLogo',
                translateY: [{
                        value: 20,
                        duration: 500,
                        easing: 'easeInOutQuad'
                    },
                    {
                        value: 0,
                        duration: 500,
                        easing: 'easeInOutQuad'
                    }
                ],
                opacity: [{
                        value: 0,
                        duration: 500,
                        easing: 'easeInOutQuad'
                    },
                    {
                        value: 1,
                        duration: 500,
                        easing: 'easeInOutQuad'
                    }
                ],
                rotate: {
                    value: '1turn',
                    duration: 1000,
                    easing: 'easeInOutSine'
                },
                scale: [{
                        value: 0.5,
                        duration: 500,
                        easing: 'easeInOutQuad'
                    },
                    {
                        value: 1,
                        duration: 500,
                        easing: 'easeInOutQuad'
                    }
                ],
            });
        }

        // Memulai animasi setiap detik
        setInterval(animateLogo, 2500);
    </script>
</body>

</html>
