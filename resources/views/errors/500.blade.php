<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Error 500</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}">



    <!-- App css -->
    <link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page"
    style="background-image: url('template/assets/images/p-1.png'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="{{ route('home') }}" class="logo logo-admin">
                                            <img src="{{ asset('template/assets/images/logos.png') }}" height="50"
                                                alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">
                                            Oops! Server Error
                                        </h4>
                                        <p class="text-muted  mb-0">
                                            Try to refresh this page or
                                            feel free to contact us if
                                            the problem persist.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="ex-page-content text-center">
                                        <img src="{{ asset('template/assets/images/error.svg') }}" alt="0"
                                            class="" height="170">
                                        <h1 class="mt-5 mb-4">500!</h1>
                                        <h5 class="font-16 text-muted mb-5">Something went wrong</h5>
                                    </div>
                                    <a class="btn btn-primary w-100" href="{{ route('home') }}">Back to Dashboard <i
                                            class="fas fa-redo ml-1"></i></a>
                                </div>
                                <!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    Copyright &copy;
                                    <a href="https://plniconplus.co.id/">PLN Icon Plus</a>
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    All Right Reserved
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.js') }}"></script>

</body>

</html>
