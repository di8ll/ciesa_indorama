@extends('layouts.dashboard.app')

@section('title')
    Dashboard | PLN ICON Plus
@endsection

@section('content')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.querySelectorAll('.dropdown-toggle');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function(event) {
                    var menu = this.nextElementSibling;
                    menu.classList.toggle('show');
                    event.stopPropagation();
                });
            });

            document.addEventListener('click', function() {
                var menus = document.querySelectorAll('.dropdown-menu');
                menus.forEach(function(menu) {
                    menu.classList.remove('show');
                });
            });
        });
    </script>

    <style>
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-toggle::after {
            display: none;
            /* Hide the dropdown indicator if not needed */
        }



        .btn-custom {
            background-color: var(--custom-bg-color);
            color: var(--custom-text-color);
            border-color: var(--custom-border-color);
        }

        .btn-custom:hover {
            background-color: var(--custom-hover-bg-color);
            color: var(--custom-hover-text-color);
            border-color: var(--custom-hover-border-color);
        }

        .btn-custom:active {
            background-color: var(--custom-active-bg-color);
            border-color: var(--custom-active-border-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            /* Menggabungkan garis-garis tabel */
        }

        th,
        td {
            border: 1.5px solid #000;
            /* Garis solid dengan warna hitam */
            padding: 8px;
            /* Padding untuk menjaga jarak antara isi dengan garis */
            text-align: start;
            /* Pusatkan teks dalam sel */
        }

        th {
            background-color: #f2f2f2;
            /* Warna latar belakang untuk header */
        }
    </style>


    <style>
        .btn-custom {
            background-color: var(--custom-bg-color);
            color: var(--custom-text-color);
            border: 1px solid var(--custom-border-color);
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn-custom:hover {
            background-color: var(--custom-hover-bg-color);
            color: var(--custom-hover-text-color);
            border-color: var(--custom-hover-border-color);
        }

        .btn-custom.active {
            background-color: var(--custom-active-bg-color);
            color: var(--custom-hover-text-color);
            border-color: var(--custom-active-border-color);
        }

        select,
        select option {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }
    </style>

    <style>
        .thead-light {
            background: #14A2BA;
        }

        .tds {
            text-align: center;
        }

        h3 {
            font-family: 'Poppins';
            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
        }
    </style>

    <style>
        .circle-progress {
            width: 60px;
            /* Sesuaikan dengan ukuran yang diinginkan */
            height: 60px;
            /* Sesuaikan dengan ukuran yang diinginkan */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* Sesuaikan dengan ukuran font yang diinginkan */
            font-weight: bold;
        }

        .circle-progress span {
            color: black;
            position: absolute;
            font-size: 12px;
            font-weight: bold;
        }
    </style>


    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="font-bold page-title-box">
                    <div class="float-end">
                        <ol class="font-light breadcrumb">

                            <li class="breadcrumb-item active" style="color: white">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                    <h4 style="color: {{ Request::is('home') ? 'white' : 'initial' }}">Dashboard</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">

                    <div class="col-lg-3">
                        <div class="card-pattern overflow-hidden"
                            style="background: linear-gradient(to bottom left, #bbfb3a, #F0F0F0); height: 90%; border: 2px solid #ffffff; position: relative;border-radius:4px">
                            <a href="{{ route('procurement.index') }}">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-between align-items-start">
                                        <div class="col-12 text-end">
                                            <div style="position: relative; width: 100%; height: 50%;">
                                                <div
                                                    style="position: absolute; top: 0; right: 0; padding: 5px; width: 65px; height: 65px; display: flex; align-items: center; justify-content: center;">
                                                    <img src="{{ asset('template/assets/images/icons/total_data_project.svg') }}"
                                                        height="40" width="40" style="border-radius: 5px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 ms-auto align-self-center" style="margin-top: 10px;">
                                            <h3 class="my-0 font-40 fw-bold" style="color: #125D72;">
                                                {{ $jumlah_center }}
                                            </h3>
                                            <h3 class="font-SemiBold" style="color: #125D72; font-size: 18px;">
                                                Total Data Project
                                            </h3>
                                            {{--  <h3 class="font-medium" style="color: #125D72;">
                                                Total Data Project (Medium)
                                            </h3>  --}}
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </a>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>

                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card-pattern overflow-hidden"
                            style="background: linear-gradient(to bottom left, #16D1B3, #F0F0F0); height: 90%; border: 2px solid #ffffff; position: relative;border-radius:4px">
                            <a href="{{ route('procurement.index', ['filter' => 'nonapproval']) }}">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-between align-items-start">
                                        <div class="col-12 text-end">
                                            <div style="position: relative; width: 100%; height: 50%;">
                                                <div
                                                    style="position: absolute; top: 0; right: 0; padding: 5px; width: 65px; height: 65px; display: flex; align-items: center; justify-content: center;">
                                                    <img src="{{ asset('template/assets/images/icons/pengadaan-card.svg') }}"
                                                        height="40" width="40" style="border-radius: 5px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 ms-auto align-self-center" style="margin-top: 10px;">
                                            <h3 class="my-0 font-40 fw-bold" style="color: #125D72; ">
                                                {{ $total_nonapproval }}
                                            </h3>
                                            <h3 class="font-SemiBold" style="color: #125D72; font-size: 18px;">
                                                Proses Pengadaan
                                            </h3>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </a>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>

                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card-pattern overflow-hidden"
                            style="background: linear-gradient(to bottom left, #FFA200, #F0F0F0); height: 90%; border: 2px solid #ffffff; position: relative; border-radius:4px">
                            <a href="{{ route('procurement.index', ['filter' => 'no_sp2k']) }}">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-between align-items-start">
                                        <div class="col-12 text-end">
                                            <div style="position: relative; width: 100%; height: 50%;">
                                                <div
                                                    style="position: absolute; top: 0; right: 0; padding: 5px; width: 65px; height: 65px; display: flex; align-items: center; justify-content: center;">
                                                    <img src="{{ asset('template/assets/images/icons/sp2k-icon.svg') }}"
                                                        height="40" width="40" style="border-radius: 5px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 ms-auto align-self-center" style="margin-top: 10px;">
                                            <h3 class="my-0 font-40 fw-bold" style="color: #125D72;">
                                                {{ $jumlah_implement }}
                                            </h3>
                                            <h3 class="font-SemiBold" , style="color: #125D72;  font-size: 18px;">
                                                SP2K
                                            </h3>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </a>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>


                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card-pattern overflow-hidden"
                            style="background: linear-gradient(to bottom left, #FCD300, #F0F0F0); height: 90%; border: 2px solid #ffffff; position: relative; border-radius:4px">
                            <a href="{{ route('implementation.index') }}">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-between align-items-start">
                                        <div class="col-12 text-end">
                                            <div style="position: relative; width: 100%; height: 50%;">
                                                <div
                                                    style="position: absolute; top: 0; right: 0; padding: 5px; width: 65px; height: 65px; display: flex; align-items: center; justify-content: center;">
                                                    <img src="{{ asset('template/assets/images/icons/implementasi-card.svg') }}"
                                                        height="40" width="40" style="border-radius: 5px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 ms-auto align-self-center" style="margin-top: 10px;">
                                            <h3 class="my-0 font-40 fw-bold" style="color: #125D72;">
                                                {{ $jumlah_implement }}
                                            </h3>
                                            <h3 class="font-SemiBold" , style=" color: #125D72; font-size: 18px;">
                                                Implementasi
                                            </h3>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </a>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <ul class="nav custom-tabs" role="tablist"
                                    style="margin-left: 15px; display: flex; align-items: center;">
                                    <li class="nav-item"
                                        style="--custom-bg-color: #FFB700;
                                        --custom-text-color: #313131;
                                        --custom-border-color: transparent;
                                        --custom-hover-bg-color: #FFB700;
                                        --custom-hover-text-color: #313131;
                                        --custom-hover-border-color: transparent;
                                        --custom-active-bg-color: #FEF76E;
                                        --custom-active-border-color: transparent;">
                                        <a class="btn-custom active font-regular" data-bs-toggle="tab" href="#proses"
                                            role="tab" aria-selected="true">
                                            Proses Pengadaan
                                        </a>
                                    </li>
                                    <li class="nav-item"
                                        style="--custom-bg-color: #FFB700;
                                        --custom-text-color: #313131;
                                        --custom-border-color: transparent;
                                        --custom-hover-bg-color: #FFB700;
                                        --custom-hover-text-color: #313131;
                                        --custom-hover-border-color: transparent;
                                        --custom-active-bg-color: #FEF76E;
                                        --custom-active-border-color: transparent;">
                                        <a class="btn-custom font-regular" data-bs-toggle="tab" href="#calendars"
                                            role="tab" aria-selected="false">
                                            Kalendar
                                        </a>
                                    </li>

                                    <li class="d-flex align-items-center font-regular"
                                        style="width: 40%; margin-left: auto;">
                                        <select class="form-control" name="sub_bidang" id="select-field1"
                                            onchange="applyClientFilter1()" required style="border: 1px solid #313131;">
                                            <option selected disabled>Pilih Sub Bidang</option>
                                            <option value="Pengembangan"
                                                {{ $selected_bidang == 'Pengembangan' ? 'selected' : '' }}>
                                                Penugasan</option>
                                            <option value="SaaS" {{ $selected_bidang == 'SaaS' ? 'selected' : '' }}>SaaS
                                            </option>
                                            <option value="Fasilitas"
                                                {{ $selected_bidang == 'Fasilitas' ? 'selected' : '' }}>
                                                Facility</option>
                                            <option value="Operasional"
                                                {{ $selected_bidang == 'Operasional' ? 'selected' : '' }}>
                                                Operasional Data center</option>
                                        </select>
                                        &nbsp;
                                        {{-- <select class="form-control" name="jenis" id="select-field2"
                                            onchange="applyClientFilter2()" required style="border: 1px solid #313131;">
                                            <option selected disabled>Pilih Jenis</option>
                                            <option value="Penugasan"
                                                {{ $selected_jenis == 'Penugasan' ? 'selected' : '' }}>
                                                Penugasan
                                            <option value="Internal"
                                                {{ $selected_jenis == 'Internal' ? 'selected' : '' }}>
                                                Internal</option>
                                        </select> --}}
                                        &nbsp;
                                        <select id="select-field3" class="form-select" name="yearFilter" onchange="applyYearFilter()">
                                            <option value="" {{ is_null($yearFilter) ? 'selected' : '' }}>Semua Tahun</option>
                                            @foreach ($filter_tahun as $year)
                                                <option value="{{ $year }}" {{ $yearFilter == $year ? 'selected' : '' }}>
                                                    {{ $year }}
                                                </option>
                                            @endforeach
                                        </select>
                                        &nbsp;

                                        <div class="ms-auto">
                                            <a href="{{ route('home') }}" class="btn btn-primary"
                                                style="border-radius: 4px; background-color: transparent; border: 1px solid #D9D9D9;">
                                                <img src="template/assets/images/Icons/refresh-icon.svg" width="25px"
                                                    height="25px"
                                                    style="background-color: #09AD30;padding: 5px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                                <script>
                                    function applyClientFilter1() {
                                        var selectedSubBidang = document.getElementById('select-field1').value;
                                        window.location.href = '{{ route('home') }}?sub_bidang=' + encodeURIComponent(selectedSubBidang);
                                    }
                                </script>
                                <script>
                                    function applyClientFilter2() {
                                        var selectedJenis = document.getElementById('select-field2').value;
                                        window.location.href = '{{ route('home') }}?jenis=' + encodeURIComponent(selectedJenis);
                                    }
                                </script>
                                <script>
                                    function applyYearFilter() {
                                        var selectedYear = document.getElementById('select-field3').value;
                                        window.location.href = '{{ route('home') }}?select-field3=' + encodeURIComponent(selectedYear);
                                    }
                                </script>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="proses" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="table-responsive browser_users">
                                                            <table class="table" id="kt_datatable_example_5">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <td class="tds" colspan="1">
                                                                            <h3>Nama Pengadaan</h3>
                                                                        </td>
                                                                        <td class="tds">
                                                                            <h3>Pengadaan</h3>
                                                                        </td>
                                                                        {{-- <td class="tds">
                                                                            <h3>Jenis Pengadaan</h3>
                                                                        </td> --}}
                                                                        <td class="tds">
                                                                            <h3>Implement</h3>
                                                                        </td>
                                                                        <td class="tds">
                                                                            <h3>Pemeliharaan</h3>
                                                                        </td>
                                                                        <td class="tds">
                                                                            <h3>Status</h3>
                                                                        </td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    @php
                                                                        $sortedDataCenters = $data_centers->sortBy(
                                                                            function ($data_center) {
                                                                                if ($data_center->jenis != 'Internal') {
                                                                                    $totalTasks = 33;
                                                                                    $completedTasksDc =
                                                                                        $data_center->penerimaan_nodin +
                                                                                        $data_center->meeting +
                                                                                        $data_center->tor +
                                                                                        $data_center->bcr +
                                                                                        $data_center->kkp +
                                                                                        $data_center->kkr +
                                                                                        $data_center->rab +
                                                                                        $data_center->surat_penugasan +
                                                                                        $data_center->pa_io +
                                                                                        $data_center->pengadaan +
                                                                                        $data_center->approval_dc_1 +
                                                                                        $data_center->approval_dc_2 +
                                                                                        $data_center->approval_dc_3;
                                                                                } else {
                                                                                    $totalTasks = 29;
                                                                                    $completedTasksDc =
                                                                                        $data_center->tor +
                                                                                        $data_center->kkp +
                                                                                        $data_center->kkr +
                                                                                        $data_center->rab +
                                                                                        $data_center->pa_io +
                                                                                        $data_center->pengadaan +
                                                                                        $data_center->approval_dc_1 +
                                                                                        $data_center->approval_dc_2 +
                                                                                        $data_center->approval_dc_3;
                                                                                }

                                                                                $completedTasksTa = $data_center->tim_anggaran->sum(
                                                                                    function ($tim_anggaran) {
                                                                                        return $tim_anggaran->approval_anggaran_1 +
                                                                                            $tim_anggaran->approval_anggaran_2 +
                                                                                            $tim_anggaran->approval_anggaran_3;
                                                                                    },
                                                                                );

                                                                                $completedTasksRe = $data_center->rendan->sum(
                                                                                    function ($rendan) {
                                                                                        return $rendan->hpe +
                                                                                            $rendan->jenis_pengadaan +
                                                                                            $rendan->list_rekanan +
                                                                                            $rendan->approval_rendan_1 +
                                                                                            $rendan->approval_rendan_2 +
                                                                                            $rendan->approval_rendan_3;
                                                                                    },
                                                                                );

                                                                                $completedTasksLa = $data_center->lakdan->sum(
                                                                                    function ($lakdan) {
                                                                                        return $lakdan->aanwijzing +
                                                                                            $lakdan->rks +
                                                                                            $lakdan->hps +
                                                                                            $lakdan->dokumen_rekanan +
                                                                                            $lakdan->klarifikasi_lakdan +
                                                                                            $lakdan->klarifikasi_teknis +
                                                                                            $lakdan->buka_harga +
                                                                                            $lakdan->penempatan_pemenang +
                                                                                            $lakdan->pembuatan_sp2k +
                                                                                            $lakdan->approval_lakdan_1 +
                                                                                            $lakdan->approval_lakdan_2 +
                                                                                            $lakdan->approval_lakdan_3;
                                                                                    },
                                                                                );

                                                                                $progressPercentage = round(
                                                                                    (($completedTasksDc +
                                                                                        $completedTasksTa +
                                                                                        $completedTasksRe +
                                                                                        $completedTasksLa) /
                                                                                        $totalTasks) *
                                                                                        100,
                                                                                );

                                                                                return $progressPercentage;
                                                                            },
                                                                        );
                                                                    @endphp
                                                                    @if ($sortedDataCenters->count())
                                                                        @foreach ($sortedDataCenters as $data_center)
                                                                            @php
                                                                                if ($data_center->jenis != 'Internal') {
                                                                                    $totalTasks = 33; // Jumlah total tugas
                                                                                    $minProgress = PHP_INT_MAX;

                                                                                    $completedTasksDc =
                                                                                        $data_center->penerimaan_nodin +
                                                                                        $data_center->meeting +
                                                                                        $data_center->tor +
                                                                                        $data_center->bcr +
                                                                                        $data_center->kkp +
                                                                                        $data_center->kkr +
                                                                                        $data_center->rab +
                                                                                        $data_center->surat_penugasan +
                                                                                        $data_center->pa_io +
                                                                                        $data_center->pengadaan +
                                                                                        $data_center->approval_dc_1 +
                                                                                        $data_center->approval_dc_2 +
                                                                                        $data_center->approval_dc_3;
                                                                                } else {
                                                                                    $totalTasks = 29; // Jumlah total tugas
                                                                                    $minProgress = PHP_INT_MAX;

                                                                                    $completedTasksDc =
                                                                                        $data_center->tor +
                                                                                        $data_center->kkp +
                                                                                        $data_center->kkr +
                                                                                        $data_center->rab +
                                                                                        $data_center->pa_io +
                                                                                        $data_center->pengadaan +
                                                                                        $data_center->approval_dc_1 +
                                                                                        $data_center->approval_dc_2 +
                                                                                        $data_center->approval_dc_3;
                                                                                }

                                                                                // Tim Anggaran
                                                                                $completedTasksTa = 0;
                                                                                foreach (
                                                                                    $data_center->tim_anggaran
                                                                                    as $tim_anggaran
                                                                                ) {
                                                                                    $completedTasksTa +=
                                                                                        $tim_anggaran->approval_anggaran_1 +
                                                                                        $tim_anggaran->approval_anggaran_2 +
                                                                                        $tim_anggaran->approval_anggaran_3;
                                                                                }

                                                                                // Rendan
                                                                                $completedTasksRe = 0;
                                                                                foreach (
                                                                                    $data_center->rendan
                                                                                    as $rendan
                                                                                ) {
                                                                                    $completedTasksRe +=
                                                                                        $rendan->hpe +
                                                                                        $rendan->jenis_pengadaan +
                                                                                        $rendan->list_rekanan +
                                                                                        $rendan->approval_rendan_1 +
                                                                                        $rendan->approval_rendan_2 +
                                                                                        $rendan->approval_rendan_3;
                                                                                }

                                                                                // Lakdan
                                                                                $completedTasksLa = 0;
                                                                                foreach (
                                                                                    $data_center->lakdan
                                                                                    as $lakdan
                                                                                ) {
                                                                                    $completedTasksLa +=
                                                                                        $lakdan->aanwijzing +
                                                                                        $lakdan->rks +
                                                                                        $lakdan->hps +
                                                                                        $lakdan->dokumen_rekanan +
                                                                                        $lakdan->klarifikasi_lakdan +
                                                                                        $lakdan->klarifikasi_teknis +
                                                                                        $lakdan->buka_harga +
                                                                                        $lakdan->penempatan_pemenang +
                                                                                        $lakdan->pembuatan_sp2k +
                                                                                        $lakdan->approval_lakdan_1 +
                                                                                        $lakdan->approval_lakdan_2 +
                                                                                        $lakdan->approval_lakdan_3;
                                                                                }

                                                                                // Hitung progres dan simpan dalam array
                                                                                $progressPercentage = round(
                                                                                    (($completedTasksDc +
                                                                                        $completedTasksTa +
                                                                                        $completedTasksRe +
                                                                                        $completedTasksLa) /
                                                                                        $totalTasks) *
                                                                                        100,
                                                                                );
                                                                                $minProgress = min(
                                                                                    $minProgress,
                                                                                    $progressPercentage,
                                                                                );
                                                                            @endphp
                                                                            <tr>
                                                                                <td colspan="1" style="width: 100%">
                                                                                    <div class="content">
                                                                                        <span class="font-bold"
                                                                                            style="color: #323232; font-size: 14px;">
                                                                                            {{ $data_center->project_name }}
                                                                                        </span>
                                                                                    </div>
                                                                                    {{-- <div class="mt-2">
                                                                                        <button type="button"
                                                                                            class="btn btn-sm mt-1"
                                                                                            style="background-color: transparent; color: #4472C4; font-weight: bold; pointer-events:none; font-size: 12px;">
                                                                                            BAPS <i
                                                                                                class="ti ti-arrow-right"></i>
                                                                                            @php
                                                                                                $bapsbasmp = $baps_basmp->firstWhere(
                                                                                                    'procurementDatacenter_id',
                                                                                                    $data_center->id,
                                                                                                );
                                                                                                \Carbon\Carbon::setLocale(
                                                                                                    'id',
                                                                                                );
                                                                                            @endphp
                                                                                            @if ($bapsbasmp)
                                                                                                {{ $bapsbasmp->baps ? \Carbon\Carbon::parse($bapsbasmp->baps)->translatedFormat('d M Y') : '-' }}
                                                                                            @else
                                                                                            @endif
                                                                                        </button>

                                                                                        <span class="btn btn-sm mt-1"
                                                                                            style="background-color: transparent; color: #46b87c; font-weight: bold; padding: 5px 10px; pointer-events:none; font-size: 12px;">
                                                                                            BASMP <i
                                                                                                class="ti ti-arrow-right"></i>
                                                                                            @if ($bapsbasmp)
                                                                                                {{ $bapsbasmp->basmp ? \Carbon\Carbon::parse($bapsbasmp->basmp)->translatedFormat('d M Y') : '-' }}
                                                                                            @else
                                                                                            @endif
                                                                                        </span>

                                                                                        <button type="button"
                                                                                            class="btn btn-sm mt-1"
                                                                                            style="background-color: transparent; color: #5E47D2; font-weight: bold; pointer-events:none; font-size: 12px;">
                                                                                            SP2K <i
                                                                                                class="ti ti-arrow-right"></i>
                                                                                            @foreach ($data_center->implementation as $implementation)
                                                                                                {{ \Carbon\Carbon::parse($implementation->date_sp2k)->translatedFormat('d M Y') }}
                                                                                            @endforeach
                                                                                        </button>
                                                                                    </div> --}}

                                                                                </td>
                                                                                {{-- <td>
                                                                                    {{ $data_center->jenis }}
                                                                                </td> --}}
                                                                                {{--  ================= Start =================  --}}
                                                                                @if (isset($minProgress))
                                                                                    <td style="text-align: left;">
                                                                                        <a
                                                                                            href="{{ route('procurement.show', $data_center->id) }}">
                                                                                            <div class="progress-bar-container"
                                                                                                style="width: 100%; background-color: #ededed; border-radius: 5px; overflow: hidden;">
                                                                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                                                    style="
                                                                                                    width: {{ $minProgress }}%;
                                                                                                    height: 20px;
                                                                                                    background-color:
                                                                                                    @if ($minProgress == 0) #FF0000
                                                                                                    @elseif ($minProgress < 25) #ffcc00
                                                                                                    @elseif ($minProgress < 50) #6c757d
                                                                                                    @elseif ($minProgress < 75) #17a2b8
                                                                                                    @elseif ($minProgress < 100) #007bff
                                                                                                    @else #28a745 @endif;
                                                                                                    text-align: center;
                                                                                                    color: white;
                                                                                                    line-height: 20px;
                                                                                                    font-size: 12px;">
                                                                                                    {{ $minProgress }}%
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>

                                                                                    <td style="text-align: left;">
                                                                                        @if (isset($progressData[$data_center->id]['totalProgress']) &&
                                                                                                round($progressData[$data_center->id]['totalProgress']) > 0)
                                                                                            @foreach ($data_center->implementation as $implementation)
                                                                                                <a
                                                                                                    href="{{ route('implementation.show', $implementation->id) }}">
                                                                                                    @php
                                                                                                        $totalProgress = round(
                                                                                                            $progressData[
                                                                                                                $data_center
                                                                                                                    ->id
                                                                                                            ][
                                                                                                                'totalProgress'
                                                                                                            ],
                                                                                                        );
                                                                                                    @endphp
                                                                                                    <div class="progress-bar-container"
                                                                                                        style="width: 100%; background-color: #ededed; border-radius: 5px; overflow: hidden;">
                                                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                                                            style="
                                                                                                            width: {{ $totalProgress }}%;
                                                                                                            height: 20px;
                                                                                                            background-color:
                                                                                                            @if ($totalProgress < 25) #ffcc00
                                                                                                            @elseif ($totalProgress < 50) #6c757d
                                                                                                            @elseif ($totalProgress < 75) #17a2b8
                                                                                                            @elseif ($totalProgress < 100) #007bff
                                                                                                            @else #28a745 @endif;
                                                                                                            text-align: center;
                                                                                                            color: white;
                                                                                                            line-height: 20px;
                                                                                                            font-size: 12px;">
                                                                                                            {{ $totalProgress }}%
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            @endforeach
                                                                                        @else
                                                                                            <a href="#">
                                                                                                <div class="progress-bar-container"
                                                                                                    style="width: 100%; background-color: #FF0000; height: 20px; border-radius: 5px; text-align: center; color: white; line-height: 20px; font-size: 12px;">
                                                                                                    0%
                                                                                                </div>
                                                                                            </a>
                                                                                        @endif
                                                                                    </td>


                                                                                    <td style="text-align: left;">
                                                                                        @if (isset($maintenanceProgressData[$data_center->id]['totalProgress']))
                                                                                            @foreach ($data_center->implementation as $implementation)
                                                                                                @foreach ($implementation->maintenance as $maintenance)
                                                                                                    <a
                                                                                                        href="{{ route('maintenance.show', $maintenance->id) }}">
                                                                                                        @php
                                                                                                            $totalProgress = round(
                                                                                                                $maintenanceProgressData[
                                                                                                                    $data_center
                                                                                                                        ->id
                                                                                                                ][
                                                                                                                    'totalProgress'
                                                                                                                ],
                                                                                                            );
                                                                                                        @endphp
                                                                                                        <div class="progress-bar-container"
                                                                                                            style="width: 100%; background-color: #ededed; border-radius: 5px; overflow: hidden;">
                                                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                                                                style="
                                                                                                                width: {{ $totalProgress }}%;
                                                                                                                height: 20px;
                                                                                                                background-color:
                                                                                                                @if ($totalProgress == 0) #FF0000
                                                                                                                @elseif ($totalProgress < 25) #ffcc00
                                                                                                                @elseif ($totalProgress < 50) #6c757d
                                                                                                                @elseif ($totalProgress < 75) #17a2b8
                                                                                                                @elseif ($totalProgress < 100) #007bff
                                                                                                                @else #28a745 @endif;
                                                                                                                text-align: center;
                                                                                                                color: white;
                                                                                                                line-height: 20px;
                                                                                                                font-size: 12px;">
                                                                                                                {{ $totalProgress }}%
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                @endforeach
                                                                                            @endforeach
                                                                                        @else
                                                                                            <a href="#">
                                                                                                <div class="progress-bar-container"
                                                                                                    style="width: 100%; background-color: #FF0000; height: 20px; border-radius: 5px; text-align: center; color: white; line-height: 20px; font-size: 12px;">
                                                                                                    0%
                                                                                                </div>
                                                                                            </a>
                                                                                        @endif
                                                                                    </td>
                                                                                @endif
                                                                                {{--  ================= end ================  --}}
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="dropdown">
                                                                                            <button type="button"
                                                                                                class="font-regular btn btn-custom dropdown-toggle"
                                                                                                id="dropdownMenuButton{{ $data_center->id }}"
                                                                                                onmouseover="showDropdown('{{ $data_center->id }}')"
                                                                                                onmouseout="delayHideDropdown('{{ $data_center->id }}')"
                                                                                                onclick="toggleDropdown(event, '{{ $data_center->id }}')"
                                                                                                aria-expanded="false"
                                                                                                style="--custom-bg-color: #14A2BA;
                                                                                                --custom-text-color: white;
                                                                                                --custom-border-color: #14A2BA;
                                                                                                --custom-hover-bg-color: white;
                                                                                                --custom-hover-text-color: #008CBA;
                                                                                                --custom-hover-border-color: #008CBA;
                                                                                                --custom-active-bg-color: #005f6b;
                                                                                                --custom-active-border-color: #005f6b;
                                                                                                width: auto;
                                                                                                height: 25px;
                                                                                                padding: 2px 5px;">
                                                                                                <b
                                                                                                    style="font-size: 12px;">Catatan</b>
                                                                                            </button>

                                                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                                                aria-labelledby="dropdownMenuButton{{ $data_center->id }}"
                                                                                                id="dropdownMenu{{ $data_center->id }}"
                                                                                                onmouseover="showDropdown('{{ $data_center->id }}')"
                                                                                                onmouseout="delayHideDropdown('{{ $data_center->id }}')">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#"
                                                                                                        onclick="openModal('last', {{ $data_center->id }})">Prev
                                                                                                        Imple</a></li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#"
                                                                                                        onclick="openModal('next', {{ $data_center->id }})">Next
                                                                                                        Imple</a></li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#"
                                                                                                        data-bs-toggle="modal"
                                                                                                        data-bs-target="#exampleModalKontrak{{ $data_center->id }}">Kontrak</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </center>

                                                                                    <script>
                                                                                        let dropdownTimeout;
                                                                                        let currentDropdown = null;

                                                                                        function showDropdown(id) {
                                                                                            clearTimeout(dropdownTimeout);
                                                                                            const dropdownMenu = document.getElementById('dropdownMenu' + id);
                                                                                            const button = document.getElementById('dropdownMenuButton' + id);

                                                                                            // Position the dropdown relative to the button using fixed positioning
                                                                                            const buttonRect = button.getBoundingClientRect();
                                                                                            dropdownMenu.style.position = 'fixed';
                                                                                            dropdownMenu.style.zIndex = 9999; // Ensure it's above other elements
                                                                                            dropdownMenu.style.top = (buttonRect.bottom) + 'px';
                                                                                            dropdownMenu.style.left = buttonRect.left + 'px';

                                                                                            if (currentDropdown && currentDropdown !== dropdownMenu) {
                                                                                                currentDropdown.classList.remove('show');
                                                                                            }

                                                                                            dropdownMenu.classList.add('show');
                                                                                            currentDropdown = dropdownMenu;
                                                                                        }

                                                                                        function delayHideDropdown(id) {
                                                                                            dropdownTimeout = setTimeout(() => {
                                                                                                hideDropdown(id);
                                                                                            }, 300); // Menunggu 300ms sebelum menyembunyikan dropdown
                                                                                        }

                                                                                        function hideDropdown(id) {
                                                                                            const dropdownMenu = document.getElementById('dropdownMenu' + id);
                                                                                            dropdownMenu.classList.remove('show');
                                                                                            if (currentDropdown === dropdownMenu) {
                                                                                                currentDropdown = null;
                                                                                            }
                                                                                        }

                                                                                        function toggleDropdown(event, id) {
                                                                                            event.preventDefault();
                                                                                            const dropdownMenu = document.getElementById('dropdownMenu' + id);
                                                                                            const button = document.getElementById('dropdownMenuButton' + id);

                                                                                            // Position the dropdown relative to the button using fixed positioning
                                                                                            const buttonRect = button.getBoundingClientRect();
                                                                                            dropdownMenu.style.position = 'fixed';
                                                                                            dropdownMenu.style.zIndex = 9999;
                                                                                            dropdownMenu.style.top = (buttonRect.bottom) + 'px';
                                                                                            dropdownMenu.style.left = buttonRect.left + 'px';

                                                                                            if (currentDropdown && currentDropdown !== dropdownMenu) {
                                                                                                currentDropdown.classList.remove('show');
                                                                                            }

                                                                                            dropdownMenu.classList.toggle('show');
                                                                                            currentDropdown = dropdownMenu.classList.contains('show') ? dropdownMenu : null;
                                                                                        }
                                                                                    </script>
                                                                                </td>

                                                                                <script>
                                                                                    function openModal(type, id) {
                                                                                        let modalId = '';
                                                                                        if (type === 'last') {
                                                                                            modalId = `#InputModalLast${id}`;
                                                                                        } else if (type === 'next') {
                                                                                            modalId = `#InputModalNext${id}`;
                                                                                        }

                                                                                        const modal = new bootstrap.Modal(document.querySelector(modalId));
                                                                                        modal.show();
                                                                                    }
                                                                                </script>

                                                                                @php
                                                                                    $lastPosition = $lastPositions->firstWhere(
                                                                                        'procurementDatacenter_id',
                                                                                        $data_center->id,
                                                                                    );
                                                                                    $next = $nextPositions->firstWhere(
                                                                                        'procurementDatacenter_id',
                                                                                        $data_center->id,
                                                                                    );

                                                                                @endphp

                                                                                <!-- Input & Edit Last Modal -->
                                                                                <div class="modal fade"
                                                                                    id="InputModalLast{{ $data_center->id }}"
                                                                                    tabindex="-1" role="dialog"
                                                                                    aria-hidden="true">
                                                                                    <div class="modal-dialog modal-md"
                                                                                        role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header"
                                                                                                style="background-color: white; color: white;">
                                                                                                <h6 class="modal-title m-0"
                                                                                                    id="myExtraLargeModalLabel"
                                                                                                    style="color: black;">
                                                                                                    <img src="template/assets/images/logos.png"
                                                                                                        alt="Logo"
                                                                                                        style="width: 60px; height: 30px; margin-right: 10px;">
                                                                                                    Form Posisi Terakhir
                                                                                                </h6>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                @if ($lastPosition)
                                                                                                    @can('View Last')
                                                                                                        {{ date('d F Y (H:i)', strtotime($lastPosition->input_date)) }}
                                                                                                        <hr>
                                                                                                        <form
                                                                                                            class="row g-3 needs-validation"
                                                                                                            method="POST"
                                                                                                            action="{{ route('last-position.update', $lastPosition->id) }}"
                                                                                                            enctype="multipart/form-data"
                                                                                                            novalidate>
                                                                                                            @csrf
                                                                                                            @method('PUT')
                                                                                                            <textarea name="last_position" id="last_position_edit{{ $data_center->id }}">{{ $lastPosition->last_position }}</textarea>
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="procurementDatacenter_id"
                                                                                                                value="{{ $data_center->id }}" />
                                                                                                            @can('Edit Last')
                                                                                                                <button
                                                                                                                    class="continue-application mt-3"
                                                                                                                    type="submit">
                                                                                                                    <div>
                                                                                                                        <div
                                                                                                                            class="pencil">
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="folder">
                                                                                                                            <div
                                                                                                                                class="top">
                                                                                                                                <svg
                                                                                                                                    viewBox="0 0 24 27">
                                                                                                                                    <path
                                                                                                                                        d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z">
                                                                                                                                    </path>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="paper">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    Update
                                                                                                                </button>
                                                                                                            @endcan
                                                                                                        </form>
                                                                                                    @endcan
                                                                                                    <script>
                                                                                                        ClassicEditor.create(document.querySelector('#last_position_edit{{ $data_center->id }}')).catch(error => {
                                                                                                            console.error(error);
                                                                                                        });
                                                                                                    </script>
                                                                                                @else
                                                                                                    <form
                                                                                                        class="row g-3 needs-validation"
                                                                                                        method="POST"
                                                                                                        action="{{ route('last-position.store') }}"
                                                                                                        enctype="multipart/form-data"
                                                                                                        novalidate>
                                                                                                        @csrf
                                                                                                        @if (count($errors) > 0)
                                                                                                            <div
                                                                                                                class="alert alert-danger">
                                                                                                                <strong>Whoops!</strong>
                                                                                                                There were
                                                                                                                some
                                                                                                                problems
                                                                                                                with your
                                                                                                                input.<br><br>
                                                                                                                <ul>
                                                                                                                    @foreach ($errors->all() as $error)
                                                                                                                        <li>{{ $error }}
                                                                                                                        </li>
                                                                                                                    @endforeach
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @can('Create Last')
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="procurementDatacenter_id"
                                                                                                                value="{{ $data_center->id }}" />
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="input_date" />
                                                                                                            <textarea name="last_position" id="last_position_create{{ $data_center->id }}"></textarea>
                                                                                                            <button
                                                                                                                class="btn btn-primary mt-3 mb-3"
                                                                                                                type="submit">Submit</button>
                                                                                                        @endcan
                                                                                                    </form>
                                                                                                    <script>
                                                                                                        ClassicEditor.create(document.querySelector('#last_position_create{{ $data_center->id }}')).catch(error => {
                                                                                                            console.error(error);
                                                                                                        });
                                                                                                    </script>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Input & Edit Next Modal -->
                                                                                <div class="modal fade"
                                                                                    id="InputModalNext{{ $data_center->id }}"
                                                                                    tabindex="-1" role="dialog"
                                                                                    aria-hidden="true">
                                                                                    <div class="modal-dialog modal-md"
                                                                                        role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header"
                                                                                                style="background-color: white; color: white;">
                                                                                                <h6 class="modal-title m-0"
                                                                                                    id="myExtraLargeModalLabel"
                                                                                                    style="color: black;">
                                                                                                    <img src="template/assets/images/logos.png"
                                                                                                        alt="Logo"
                                                                                                        style="width: 60px; height: 30px; margin-right: 10px;">
                                                                                                    Form Next Action
                                                                                                </h6>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                @if ($next)
                                                                                                    @can('View Next')
                                                                                                        <hr>
                                                                                                        <form
                                                                                                            class="row g-3 needs-validation"
                                                                                                            method="POST"
                                                                                                            action="{{ route('next-position.update', $next->id) }}"
                                                                                                            enctype="multipart/form-data"
                                                                                                            novalidate>
                                                                                                            @csrf
                                                                                                            @method('PUT')
                                                                                                            <textarea name="next_position" id="next_position_edit{{ $data_center->id }}">{{ $next->next_position }}</textarea>
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="procurementDatacenter_id"
                                                                                                                value="{{ $data_center->id }}" />
                                                                                                            <button
                                                                                                                class="continue-application mt-3"
                                                                                                                type="submit">
                                                                                                                <div>
                                                                                                                    <div
                                                                                                                        class="pencil">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="folder">
                                                                                                                        <div
                                                                                                                            class="top">
                                                                                                                            <svg
                                                                                                                                viewBox="0 0 24 27">
                                                                                                                                <path
                                                                                                                                    d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z">
                                                                                                                                </path>
                                                                                                                            </svg>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="paper">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                Update
                                                                                                            </button>
                                                                                                        </form>
                                                                                                    @endcan
                                                                                                    <script>
                                                                                                        ClassicEditor.create(document.querySelector('#next_position_edit{{ $data_center->id }}')).catch(error => {
                                                                                                            console.error(error);
                                                                                                        });
                                                                                                    </script>
                                                                                                @else
                                                                                                    <form
                                                                                                        class="row g-3 needs-validation"
                                                                                                        method="POST"
                                                                                                        action="{{ route('next-position.store') }}"
                                                                                                        enctype="multipart/form-data"
                                                                                                        novalidate>
                                                                                                        @csrf
                                                                                                        @if (count($errors) > 0)
                                                                                                            <div
                                                                                                                class="alert alert-danger">
                                                                                                                <strong>Whoops!</strong>
                                                                                                                There were
                                                                                                                some
                                                                                                                problems
                                                                                                                with your
                                                                                                                input.<br><br>
                                                                                                                <ul>
                                                                                                                    @foreach ($errors->all() as $error)
                                                                                                                        <li>{{ $error }}
                                                                                                                        </li>
                                                                                                                    @endforeach
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @can('Create Next')
                                                                                                            <textarea name="next_position" id="next_position_create{{ $data_center->id }}"></textarea>
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="procurementDatacenter_id"
                                                                                                                value="{{ $data_center->id }}" />
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="date_next" />
                                                                                                            <button
                                                                                                                class="btn btn-primary mt-3"
                                                                                                                type="submit">Submit</button>
                                                                                                        @endcan
                                                                                                    </form>
                                                                                                    <script>
                                                                                                        ClassicEditor.create(document.querySelector('#next_position_create{{ $data_center->id }}')).catch(error => {
                                                                                                            console.error(error);
                                                                                                        });
                                                                                                    </script>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                {{-- View Kontrak --}}
                                                                                <div class="modal fade"
                                                                                    id="exampleModalKontrak{{ $data_center->id }}"
                                                                                    tabindex="-1" role="dialog"
                                                                                    aria-labelledby="exampleModalDanger1"
                                                                                    aria-hidden="true">
                                                                                    <div class="modal-dialog"
                                                                                        role="document">
                                                                                        <div class="modal-content">
                                                                                            <div
                                                                                                class="modal-header bg-primary">
                                                                                                <h6 class="modal-title m-0 text-white"
                                                                                                    id="exampleModalKontrak">
                                                                                                    Kontrak Pengadaan
                                                                                                </h6>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div><!--end modal-header-->
                                                                                            <div class="modal-body">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-9">
                                                                                                        <h5> {{ $data_center->project_name }}
                                                                                                        </h5>
                                                                                                        <span
                                                                                                            class="badge bg-soft-secondary">
                                                                                                            Tanggal
                                                                                                            pengadaan
                                                                                                        </span>
                                                                                                        <small
                                                                                                            class="text-muted ml-2">{{ \Carbon\Carbon::parse($data_center->created_at)->format('d F Y') }}
                                                                                                        </small>
                                                                                                        {{-- <ul class="mt-3 mb-0">
                                                                                                        <li>{{ $data_center->name }}</li>
                                                                                                    </ul> --}}
                                                                                                    </div><!--end col-->

                                                                                                    <div class="mt-2">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn btn-sm mt-1"
                                                                                                            style="background-color: transparent; color: #4472C4; font-weight: bold; pointer-events:none; font-size: 12px;">
                                                                                                            BAPS <i
                                                                                                                class="ti ti-arrow-right"></i>
                                                                                                            @php
                                                                                                                $bapsbasmp = $baps_basmp->firstWhere(
                                                                                                                    'procurementDatacenter_id',
                                                                                                                    $data_center->id,
                                                                                                                );
                                                                                                                \Carbon\Carbon::setLocale(
                                                                                                                    'id',
                                                                                                                );
                                                                                                            @endphp
                                                                                                            @if ($bapsbasmp)
                                                                                                                {{ $bapsbasmp->baps ? \Carbon\Carbon::parse($bapsbasmp->baps)->translatedFormat('d M Y') : '-' }}
                                                                                                            @else
                                                                                                            @endif
                                                                                                        </button>

                                                                                                        <span
                                                                                                            class="btn btn-sm mt-1"
                                                                                                            style="background-color: transparent; color: #46b87c; font-weight: bold; padding: 5px 10px; pointer-events:none; font-size: 12px;">
                                                                                                            BASMP <i
                                                                                                                class="ti ti-arrow-right"></i>
                                                                                                            @if ($bapsbasmp)
                                                                                                                {{ $bapsbasmp->basmp ? \Carbon\Carbon::parse($bapsbasmp->basmp)->translatedFormat('d M Y') : '-' }}
                                                                                                            @else
                                                                                                            @endif
                                                                                                        </span>

                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn btn-sm mt-1"
                                                                                                            style="background-color: transparent; color: #5E47D2; font-weight: bold; pointer-events:none; font-size: 12px;">
                                                                                                            SP2K <i
                                                                                                                class="ti ti-arrow-right"></i>
                                                                                                            @foreach ($data_center->implementation as $implementation)
                                                                                                                {{ \Carbon\Carbon::parse($implementation->date_sp2k)->translatedFormat('d M Y') }}
                                                                                                            @endforeach
                                                                                                        </button>
                                                                                                    </div>

                                                                                                </div><!--end row-->
                                                                                            </div><!--end modal-body-->
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-de-secondary btn-sm"
                                                                                                    data-bs-dismiss="modal">
                                                                                                    Tutup
                                                                                                </button>
                                                                                            </div><!--end modal-footer-->
                                                                                        </div><!--end modal-content-->
                                                                                    </div><!--end modal-dialog-->
                                                                                </div><!--end modal-->

                                                                            </tr>
                                                                        @endforeach
                                                                    @else
                                                                        <tr>
                                                                            <td colspan="1"></td>
                                                                            <td></td>
                                                                            <td>No data available in table</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    @endif

                                                                </tbody>
                                                            </table>
                                                            <!--end table-->
                                                        </div>
                                                        <!--end /div-->
                                                    </div>
                                                    <!--end card-body-->
                                                </div>
                                                <!--end card-->
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>

                                    {{-- calendars --}}
                                    <div class="tab-pane p-3" id="calendars" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div id="calendar">

                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-header-->
                        </div>
                        <!--end card-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>


{{-- DataTables --}}
<script>
    $(document).ready(function() {
        // Ambil nilai lengthMenu dan halaman terakhir dari localStorage
        var selectedLength = localStorage.getItem('selectedLength') || 10; // Default ke 5 jika tidak ada nilai di localStorage
        var lastPage = localStorage.getItem('lastPage') || 0; // Default ke 0 jika tidak ada nilai di localStorage (halaman pertama)

        // Inisialisasi DataTable
        var table = $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
                "emptyTable": "Tidak ada data yang ditampilkan. Silakan gunakan filter untuk mencari data."
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",
            "pageLength": parseInt(selectedLength), // Atur panjang halaman sesuai dengan nilai yang tersimpan
            "lengthMenu": [10, 25, 50, 100], // Pilihan jumlah data yang ditampilkan
            "order": [
                [3, 'desc']
            ], // Urutkan berdasarkan prioritas
            "columnDefs": [{
                "targets": 3, // Kolom prioritas
                "orderData": [3],
                "type": "num"
            }],
            "displayStart": parseInt(lastPage) * selectedLength // Memulai dari halaman terakhir yang tersimpan
        });

        // Simpan nilai pageLength ke localStorage setiap kali berubah
        $('#kt_datatable_example_5').on('length.dt', function(e, settings, len) {
            localStorage.setItem('selectedLength', len);
        });

        // Simpan halaman terakhir yang diakses ke localStorage setiap kali pagination berubah
        $('#kt_datatable_example_5').on('page.dt', function() {
            var info = table.page.info();
            localStorage.setItem('lastPage', info.page);
        });

        // Custom search input
        $('#tableSearch').on('keyup', function() {
            table.search(this.value).draw(); // Pencarian otomatis saat mengetik
        });
    });
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let calendarInitialized = false;

            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                // Cek apakah tab yang aktif adalah tab "Calendar"
                if ($(e.target).attr('href') === '#calendars') {
                    let calendarEl = document.getElementById('calendar');
                    let calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridWeek',
                        locale: 'id', // Set locale to Indonesian

                        headerToolbar: {
                            left: 'prev,next',
                            center: 'title',
                            right: 'today,dayGridWeek,dayGridDay'
                        },
                        dayHeaderFormat: {
                            weekday: 'long',
                            month: 'long',
                            day: 'numeric'
                        },
                        titleFormat: {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        },
                        dayPopoverFormat: {
                            weekday: 'long',
                            day: 'numeric',
                            month: 'long',
                            year: 'numeric'
                        }, // Full day and month names
                        titleFormat: {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        }, // Full month name

                        events: @json($events), // Convert the PHP array to a JSON string
                        eventContent: function(arg) {
                            var subtitle = arg.event.extendedProps.subtitle;

                            var eventHtml = '<div class="event-subtitle">' + subtitle +
                                '</div>';

                            return {
                                html: '<div class="custom-event">' + eventHtml + '</div>',
                            };
                        },
                        eventMouseEnter: function(info) {
                            var title = info.event.title;
                            var subtitle = info.event.extendedProps.subtitle;
                            var startDate = info.event.start;
                            var endDate = info.event.end;

                            // You can also include other details such as project name, etc.
                            var details = "Title: " + title +
                                "<br>Start Date: " + startDate.toLocaleDateString('id', {
                                    weekday: 'long',
                                    day: 'numeric',
                                    month: 'long',
                                    year: 'numeric'
                                }) +
                                "<br>End Date: " + endDate.toLocaleDateString('id', {
                                    weekday: 'long',
                                    day: 'numeric',
                                    month: 'long',
                                    year: 'numeric'
                                });

                            // Use Bootstrap Tooltip for a nicer appearance
                            $(info.el).tooltip({
                                title: details,
                                html: true,
                                placement: 'top',
                                trigger: 'manual'
                            }).tooltip('show');
                        },
                        eventMouseLeave: function(info) {
                            $(info.el).tooltip('hide');
                        },
                        allDaySlot: true,
                    });
                    calendar.render();
                    calendarInitialized = true;
                }
            });
            // Debounce function
            function debounce(func, wait) {
                let timeout;
                return function() {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, arguments), wait);
                };
            }
        });
    </script>

    <script>
        $('#select-field1').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field2').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field3').select2({
            theme: 'bootstrap-5'
        });
    </script>
@endsection
