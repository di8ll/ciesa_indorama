@extends('layouts.dashboard.app')

@section('title')
    Dashboard Ciesa | Indorama
@endsection

@section('content')


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


@endsection
