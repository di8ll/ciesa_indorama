@extends('layouts.dashboard.app')

@section('title')
    Dokumen Pabean | Indorama
@endsection


@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Daftar Dokumen</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Dokumen Baru</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <form lass="row g-3 needs-validation" action="{{ route('dokumen.store') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="header-tab" data-bs-toggle="tab"
                                            data-bs-target="#header" type="button" role="tab" aria-controls="header"
                                            aria-selected="true">Header</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="entitas-tab" data-bs-toggle="tab"
                                            data-bs-target="#entitas" type="button" role="tab" aria-controls="entitas"
                                            aria-selected="false">Entitas</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="dokumen-tab" data-bs-toggle="tab"
                                            data-bs-target="#dokumen" type="button" role="tab" aria-controls="dokumen"
                                            aria-selected="false">Dokumen</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pengangkut-tab" data-bs-toggle="tab"
                                            data-bs-target="#pengangkut" type="button" role="tab" aria-controls="pengangkut"
                                            aria-selected="false">Pengangkut</button>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="header" role="tabpanel"
                                        aria-labelledby="header-tab">
                                        <div class="row">
                                        <div class="col-md-3 d-none">
                                            <label for="kodeDokumen" class="form-label">Jenis Dokumen</label>
                                            <input type="text" class="form-control" id="kodeDokumen" name="kodeDokumen"
                                                value="{{ old('kodeDokumen', '25') }}" readonly>
                                        </div>
                                        <div class="col-md-3 d-none">
                                            <label for="kodeJenisTpb" class="form-label">Entitas</label>
                                            <input type="text" class="form-control" id="kodeJenisTpb" name="kodeJenisTpb"
                                                value="{{ old('kodeJenisTpb', 'TPB') }}" readonly>
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="nomorAju" class="form-label">Nomor Pengajuan</label>
                                            <input type="text" class="form-control" id="nomorAju" name="nomorAju"
                                                value="{{ old('nomorAju') }}" readonly  style="border: 1px solid #313131;">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="kantor_pabean" class="form-label">Kantor Pabean</label>
                                            <input type="text" class="form-control" id="kantor_pabean" name="kantor_pabean"
                                                value="{{ old('kantor_pabean', '050800 - KPPBC TMP A PURWAKARTA') }}" readonly style="border: 1px solid #313131;">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="kodeKantor" class="form-label">Jenis TPB</label>
                                            <input type="text" class="form-control" id="kodeKantor" name="kodeKantor"
                                                value="{{ old('kodeKantor', '1 - KAWASAN BERIKAT') }}" readonly style="border: 1px solid #313131;">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="kodeTujuanPengiriman" class="form-label">Tujuan Pengiriman</label>
                                            <input type="text" class="form-control" id="kodeTujuanPengiriman" name="kodeTujuanPengiriman"
                                                value="{{ old('kodeTujuanPengiriman', '1 - PENYERAHAN BKP') }}" readonly style="border: 1px solid #313131;">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="kodeCaraBayar" class="form-label">Cara Bayar</label>
                                            <input type="text" class="form-control" id="kodeCaraBayar" name="kodeCaraBayar"
                                                value="{{ old('kodeCaraBayar', '1 - BIASA / TUNAI') }}" readonly style="border: 1px solid #313131;">
                                        </div>
                                        </div>
                                    </div>

                                    {{-- Entitas --}}
                                    <div class="tab-pane fade" id="entitas" role="tabpanel" aria-labelledby="entitas-tab">
                                    <div class="container">
                                    <!-- Penyelenggara/Pengusaha TPB/Pengusaha Kena Pajak -->
                                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                        <h5 class="text-primary">Penyelenggara/Pengusaha TPB/Pengusaha Kena Pajak</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="kode_jenis_tpb" class="form-label">Nomor Identitas</label>
                                                <input type="text" class="form-control" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="kodeJenisIdentitas" class="form-label ">Nomor NPWP</label>
                                                <input type="text" class="form-control" id="kodeJenisIdentitas" name="kodeJenisIdentitas" value="{{ old('kodeJenisIdentitas') }}" readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nitku" class="form-label">Nitku</label>
                                                <input type="text" class="form-control" id="nitku" name="nitku" value="{{ old('nitku') }}" style="border: 1px solid #313131;" oninput="updateNomorEntitas()">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="namaEntitas" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="namaEntitas" name="namaEntitas" value="{{ old('namaEntitas', 'INDO-RAMA SYNTHETICS TBK') }}" style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nomorIjinEntitas" class="form-label">No Izin TPB</label>
                                                <input type="text" class="form-control" id="nomorIjinEntitas" name="nomorIjinEntitas" value="{{ old('no_izin_tpb', 'KEP-724/WBC.09/2022') }}" style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="tanggalIjinEntitas" class="form-label">Tanggal Izin TPB</label>
                                                <input type="date" class="form-control" id="tanggalIjinEntitas" name="tanggalIjinEntitas" value="{{ old('tanggal_izin_tpb') }}" style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nibEntitas" class="form-label">NIB</label>
                                                <input type="text" class="form-control" id="nibEntitas" name="nibEntitas" value="{{ old('nibEntitas', '8120302880325') }}" style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="alamatEntitas" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamatEntitas" name="alamatEntitas" style="border: 1px solid #313131;">{{ old('alamatEntitas', 'JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
<!-- Pemilik Barang -->
<div class="row mb-4 p-3 border rounded shadow-sm bg-light">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="text-primary" id="exampleModalCenterTitle">Pemilik Barang</h5>
        <button type="button" class="btn btn-primary" id="myBtn">Referensi</button>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nomorIdentitas" class="form-label">Nomor Identitas</label>
            <input type="text" class="form-control" id="nomorIdentitas" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
        </div>
        <div class="col-md-6">
            <label for="nomorNpwp" class="form-label">Nomor NPWP</label>
            <input type="text" class="form-control" id="nomorNpwp" name="nomorNpwp" readonly style="border: 1px solid #313131;">
        </div>
        <div class="col-md-6 mt-3">
            <label for="nitku2" class="form-label">Nitku</label>
            <input type="text" class="form-control" id="nitku2" name="nitku2" style="border: 1px solid #313131;" oninput="updateNomorEntitas2()">
        </div>
        <div class="col-md-6 mt-3">
            <label for="namaEntitas2" class="form-label">Nama</label>
            <input type="text" class="form-control" id="namaEntitas2" name="namaEntitas2"  style="border: 1px solid #313131;">
        </div>
        <div class="col-md-6 mt-3">
            <label for="alamatEntitas2" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamatEntitas2" name="alamatEntitas2" style="border: 1px solid #313131;"></textarea>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal" data-backdrop="static" data-keyboard="false">
    <!-- Konten Modal -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form class="modal-form">
            <table>
                <thead>
                    <tr>
                        <th>NPWP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-npwp="010016806054000" data-nama="INDO-RAMA SYNTHETICS TBK" data-alamat="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                        <td>010016806054000</td>
                        <td>INDO-RAMA SYNTHETICS TBK</td>
                        <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101</td>
                        <td><button type="button" class="pilih-btn">Pilih</button></td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </form>
    </div>
</div>

<script>
// Mendapatkan elemen modal
var modal = document.getElementById("myModal");

// Mendapatkan tombol yang membuka modal
var btn = document.getElementById("myBtn");

// Mendapatkan elemen <span> yang menutup modal
var span = document.getElementsByClassName("close")[0];

// Ketika tombol diklik, buka modal
btn.onclick = function() {
    modal.style.display = "block";
}

// Ketika pengguna mengklik <span> (x), tutup modal
span.onclick = function() {
    modal.style.display = "none";
}

// Ketika pengguna mengklik di luar modal, tutup modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Fungsi untuk mengisi form dengan data yang dipilih
function populateForm(nomorNpwp, namaEntitas2, alamatEntitas2) {
    document.getElementById('nomorIdentitas').value = '6 - NPWP 16 DIGIT'; // Ganti sesuai kebutuhan
    document.getElementById('nomorNpwp').value = nomorNpwp;
    document.getElementById('namaEntitas2').value = namaEntitas2;
    document.getElementById('alamatEntitas2').value = alamatEntitas2;
}

// Menambahkan event listener ke semua tombol "Pilih"
var pilihButtons = document.getElementsByClassName('pilih-btn');
for (var i = 0; i < pilihButtons.length; i++) {
    pilihButtons[i].onclick = function() {
        var row = this.closest('tr');
        var nomorNpwp = row.getAttribute('data-npwp'); // Mengambil data-npwp
        var namaEntitas2 = row.getAttribute('data-nama'); // Mengambil data-nama
        var alamatEntitas2 = row.getAttribute('data-alamat'); // Mengambil data-alamat
        populateForm(nomorNpwp , namaEntitas2, alamatEntitas2);
        modal.style.display = "none";
    }
}
</script>

<style>
    body { font-family: Arial, Helvetica, sans-serif; }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%; /* Adjusted for better form display */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Add some shadow */
        border-radius: 8px; /* Rounded corners */
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
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

    .modal-form button {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px; /* Rounded corners */
    }

    .modal-form button:hover {
        background-color: #45a049;
    }

    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    button[type="button"] {
        padding: 5px 10px;
        background-color: #f44336;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }

    button[type="button"]:hover {
        background-color: #e53935;
    }
</style>



                                    <!-- Penerima Barang/Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak -->
                                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="text-primary">Penerima Barang/Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</h5>
                                            <button type="button" class="btn btn-primary">Referensi</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="kode_jenis_tpb" class="form-label">Nomor Identitas</label>
                                                <input type="text" class="form-control" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kodeJenisIdentitas3" class="form-label ">Nomor NPWP</label>
                                                <input type="text" class="form-control" id="kodeJenisIdentitas3" name="nomor_npwp2" value="{{ old('kodeJenisIdentitas3') }}" readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nitku3" class="form-label">Nitku</label>
                                                <input type="text" class="form-control" id="nitku3" name="nitku3" value="{{ old('nitku3') }}" style="border: 1px solid #313131;" oninput="updateNomorEntitas3()">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="namaEntitas3" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="namaEntitas3" name="namaEntitas3" value="{{ old('namaEntitas3') }}" style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="alamatEntitas3" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamatEntitas3" name="alamatEntitas3" style="border: 1px solid #313131;">{{ old('alamatEntitas3') }}</textarea>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Dokumen --}}
                                    <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                                        <div class="row">
                  
                               

                                    {{-- Pengangkut --}}
                                    <div class="tab-pane fade" id="pengangkut" role="tabpanel" aria-labelledby="pengangkut-tab">
                                    <div class="row">


                                    </div>
                                </div>
                            </div>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->
    <!-- Bootstrap 5 -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Cek saat modal dibuka
        var modal = document.getElementById("tambahDokumenModal");
        modal.addEventListener("shown.bs.modal", function () {
            document.getElementById("seri").focus();
        });
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
<script>
    function updateNomorEntitas() {
        const nitkuValue = document.getElementById('nitku').value;
        const nomorEntitasInput = document.getElementById('kodeJenisIdentitas');

        // Jika panjang Nitku mencapai 14, set Nomor Entitas menjadi 13 karakter pertama dari Nitku
        if (nitkuValue.length === 22) {
            nomorEntitasInput.value = nitkuValue.slice(0, 16); // Hanya ambil 13 karakter pertama
        }
    }
</script>

<script>
    function updateNomorEntitas2() {
        const nitkuValue = document.getElementById('nitku2').value;
        const nomorEntitasInput = document.getElementById('kodeJenisIdentitas2');

        // Jika panjang Nitku mencapai 14, set Nomor Entitas menjadi 13 karakter pertama dari Nitku
        if (nitkuValue.length === 22) {
            nomorEntitasInput.value = nitkuValue.slice(0, 16); // Hanya ambil 13 karakter pertama
        }
    }
</script>
<script>
    function updateNomorEntitas3() {
        const nitkuValue = document.getElementById('nitku3').value;
        const nomorEntitasInput = document.getElementById('kodeJenisIdentitas3');

        // Jika panjang Nitku mencapai 14, set Nomor Entitas menjadi 13 karakter pertama dari Nitku
        if (nitkuValue.length === 22) {
            nomorEntitasInput.value = nitkuValue.slice(0, 16); // Hanya ambil 13 karakter pertama
        }
    }
</script>
@endsection
