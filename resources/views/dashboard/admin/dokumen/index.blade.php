@extends('layouts.dashboard.app')

@section('title')
    Dokumen Pabean | PT Indorama
@endsection

@section('content')

    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            font-weight: bold;
        }

        .right_content {
            order: 2;
        }
    </style>

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Dokumen Pabean</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dokumen Pabean</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <header>
                        <div class="right_content">
                            <div class="col-lg-12 text-start mb-6">
                                <button class="btn btn-primary mb-3" id="myBtn">
                                    <span data-feather="plus"></span>
                                    Tambah Dokumen Baru
                                </button>
                            </div>
                        </div>
                    </header>
                    <!-- Modal -->
                    <div id="myModal" class="modal" data-backdrop="static" data-keyboard="false" style="display: none;">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form id="modalForm" action="{{ route('dokumen.create') }}" method="Post">
                                <div class="modal-form">
                                    <label for="nama">Entitas</label>
                                    <input type="text" class="form-control" id="kodeJenisTpb" name="kodeJenisTpb"
                                    value="{{ old('kodeJenisTpb', 'TPB') }}" readonly>

                                    <label for="usaha">Jenis Dokumen</label>
                                    <input type="text" class="form-control" id="kodeDokumen" name="kodeDokumen"
                                    value="{{ old('kodeDokumen', '25') }}" readonly style="border: 1px solid #313131;">

                                    <label for="alamat">Divisi Input Data</label>
                                    <select class="form-control" name="division_name" id="select-field"
                                    onchange="applyClientFilter()" required style="border: 1px solid #313131;">
                                    <option selected disabled>Pilih Cara Bayar</option>
                                    <option value="1" {{ old('division_name') == '1' ? 'selected' : '' }}>1 - BIASA / TUNAI</option>
                                    <option value="2" {{ old('division_name') == '2' ? 'selected' : '' }}>10 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA BERTAHAP)</option>
                                    <option value="3" {{ old('division_name') == '3' ? 'selected' : '' }}>11 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA TUNAI)</option>


                                </select>


                                    <br>
                                    <!-- Tombol Simpan & Batal -->
                                    <div class="button-group">
                                        <button type="submit" class="btn-save">Simpan</button>
                                        <button type="button" class="btn-cancel" onclick="closeModal()">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card-body" id="tableContainer">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">#</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Kode Dokumen</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Nomor Pengajuan</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Nomor / Tanggal Pendaftaran</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Nama Respon</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Tanggal Respon</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

    <style>
        body { font-family: Arial, Helvetica, sans-serif; }

       .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 200; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            padding-top: 100px; /* Adjust for centering */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Adjust width */
            max-width: 800px; /* Maximum width */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Modal form styling */
        .modal-form {
            display: flex;
            flex-direction: column;
        }

        .modal-form input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px; /* Rounded corners for inputs */
        }

   /* Gaya tombol (untuk tombol dengan warna biru) */
.modal-form button.btn-save {
    padding: 10px;
    background-color: #007bff; /* Biru */
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px; /* Sudut membulat */
}

.modal-form button.btn-save:hover {
    background-color: #0056b3; /* Biru lebih gelap saat hover */
}

/* Gaya tombol (untuk tombol dengan warna merah) */
.modal-form button.btn-cancel {
    padding: 10px;
    background-color: #dc3545; /* Merah */
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px; /* Sudut membulat */
}

.modal-form button.btn-cancel:hover {
    background-color: #c82333; /* Merah lebih gelap saat hover */
}

/* Styling untuk tombol button di dalam button-wrapper */
.button-wrapper button[type="button"] {
    padding: 5px 10px;
    background-color: #007bff; /* Biru default */
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.button-wrapper button[type="button"]:hover {
    background-color: #0056b3; /* Biru lebih gelap saat hover */
}

/* Menambahkan tombol Cancel dengan warna merah */
.button-wrapper .btn-cancel {
    background-color: #dc3545; /* Merah */
}

.button-wrapper .btn-cancel:hover {
    background-color: #c82333; /* Merah lebih gelap saat hover */
}



    </style>

<script>
    function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

    // // Open Pemilik Barang Modal
    // document.getElementById("myBtn").onclick = function() {
    //     document.getElementById("myModal").style.display = "block";
    // };
    // // Close modal when clicking outside
    // window.onclick = function(event) {
    //     if (event.target == document.getElementById("myModal")) {
    //         document.getElementById("myModal").style.display = "none";
    //     }
    // };

    document.addEventListener("DOMContentLoaded", function () {
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
    </script>

@endsection
