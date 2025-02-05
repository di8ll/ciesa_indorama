<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="PLN ICON Plus" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- {{-- <link href="{{ asset('template/assets/plugins/datatables/datatable.css') }}" rel="stylesheet" type="text/css" /> --}} -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>


    <link href="{{ asset('template/assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/components/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/circular-progress-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nav-link-process.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/button-action-progress.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/continue-application.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/button-medium.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/card-pattern.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progress-bar-implement.css') }}">


    <link href="{{ asset('template/assets/plugins/rating/starability-all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@1.0.2"></script>

    <script src="{{ asset('template/gantt-master/codebase/dhtmlxgantt.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('template/gantt-master/codebase/dhtmlxgantt.css') }}" type="text/css">

    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <style>
        body {
            background-image: url('{{ asset('template/img/pattern_background_main.svg') }}');
            background-color: #14A2BA;
            background-repeat: no-repeat;
            background-position: top left;
            background-size: auto;
            */
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body id="body" class="dark-sidebar">


    <!-- start sidebar-menu-->
    @include('layouts.dashboard.partials.sidebar')
    <!-- end sidebar-menu-->

    <!-- start navbar-menu-->
    @include('layouts.dashboard.partials.navbar')
    <!-- end navbar-menu-->


    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">
            @yield('content')
            <!-- container -->

            <!--Start Rightbar-->
            @include('layouts.dashboard.partials.rightbar')
            <!--end Rightbar-->

            <!--Start Footer-->
            @include('layouts.dashboard.partials.footer')
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <script src="{{ asset('template/assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('template/assets/pages/clipboard.init.js') }}"></script>

    <!-- Bootstrap core JavaScript SB-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>

    <script src="{{ asset('template/assets/pages/file-upload.init.js') }}"></script>
    <script src="{{ asset('template/assets/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('template/assets/pages/dragula.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "searching": false // Disable search feature
            });
        });
    </script>

</body>
<!--end body-->

</html>
