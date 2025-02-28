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
                                            data-bs-target="#pengangkut" type="button" role="tab"
                                            aria-controls="pengangkut" aria-selected="false">Pengangkut</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="kemasan-tab" data-bs-toggle="tab"
                                            data-bs-target="#kemasan" type="button" role="tab"
                                            aria-controls="kemasan" aria-selected="false">Kemasan & Peti
                                            Kemas</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="transaksi-tab" data-bs-toggle="tab"
                                            data-bs-target="#transaksi" type="button" role="tab"
                                            aria-controls="transaksi" aria-selected="false">Transaksi</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="barang-tab" data-bs-toggle="tab"
                                            data-bs-target="#barang" type="button" role="tab" aria-controls="barang"
                                            aria-selected="false">Barang</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pungutan-tab" data-bs-toggle="tab"
                                            data-bs-target="#pungutan" type="button" role="tab"
                                            aria-controls="pungutan" aria-selected="false">Pungutan</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pernyataan-tab" data-bs-toggle="tab"
                                            data-bs-target="#pernyataan" type="button" role="tab"
                                            aria-controls="pernyataan" aria-selected="false">Pernyataan</button>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="header" role="tabpanel"
                                        aria-labelledby="header-tab">
                                        <div class="row">
                                            {{-- <div class="col-md-3 d-none">
                                            <label for="kodeDokumen" class="form-label">Jenis Dokumen</label>
                                            <input type="text" class="form-control" id="kodeDokumen" name="kodeDokumen"
                                                value="{{ old('kodeDokumen', '25') }}" readonly>
                                        </div>
                                        <div class="col-md-3 d-none">
                                            <label for="kodeJenisTpb" class="form-label">Entitas</label>
                                            <input type="text" class="form-control" id="kodeJenisTpb" name="kodeJenisTpb"
                                                value="{{ old('kodeJenisTpb', 'TPB') }}" readonly>
                                        </div> --}}
                                            <div class="col-md-3 d-none">
                                                <label for="asalData" class="form-label">Asal Data</label>
                                                <input type="text" class="form-control" id="asalData"
                                                    name="asalData" value="{{ old('asalData', 'S') }}",>
                                            </div>
                                            {{-- <div class="col-md-3 d-none">
                                                <label for="asalData" class="form-label">Bruto</label>
                                                <input class="form-control" type="number" name="bruto" id="bruto"
                                                    value="{{ old('bruto', 3818.88) }}" step="any">
                                            </div> --}}
                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Disclaimer</label>
                                                <input type="text" class="form-control" id="disclaimer"
                                                    name="disclaimer" value="{{ old('disclaimer', '1') }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Jumlah
                                                    Kontainer</label>
                                                <input type="text" class="form-control" id="jumlahKontainer"
                                                    name="jumlahKontainer" value="{{ old('jumlahKontainer', 0) }}"
                                                    step="any">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">kode Lokasi
                                                    Bayar</label>
                                                <input type="text" class="form-control" id="kodeLokasiBayar"
                                                    name="kodeLokasiBayar" value="{{ old('kodeLokasiBayar', '1') }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeDokumen" class="form-label">Kode Dokumen</label>
                                                <input type="text" class="form-control" id="kodeDokumen"
                                                    name="kodeDokumen" value="{{ old('kodeDokumen', '25') }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Seri</label>
                                                <input type="text" class="form-control" id="seri" name="seri"
                                                    value="{{ old('seri', 1) }}" step="any">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Identitas
                                                    Penggguna</label>
                                                <input type="text" class="form-control" id="idPengguna"
                                                    name="idPengguna" value="{{ old('idPengguna', '010016') }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Netto</label>
                                                <input type="text" class="form-control" id="netto" name="netto"
                                                    value="{{ old('netto', 3632.72) }}" step="any">
                                            </div>

                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Tanggal Aju</label>
                                                <input type="text" class="form-control" id="tanggalAju"
                                                    name="tanggalAju" value="{{ old('tanggalAju', '2025-02-09') }}">
                                            </div>

                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Volume</label>
                                                <input type="text" class="form-control" id="volume" name="volume"
                                                    value="{{ old('volume', 0) }}" step="any">
                                            </div>


                                            {{-- <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Dasar Pengenaan
                                                    Pajak</label>
                                                <input type="text" class="form-control" id="dasarPengenaanPajak"
                                                    name="dasarPengenaanPajak" value="{{ old('dasarPengenaanPajak',148358277.72) }}"
                                                    step="any">
                                            </div>

                                            <div class="col-md-3 d-none">
                                                <label for="validationCustom01" class="form-label">Harga
                                                    Penyerahan</label>
                                                <input type="text" class="form-control" id="hargaPenyerahan"
                                                    name="hargaPenyerahan" value="{{ old('hargaPenyerahan',148358277.72) }}" step="any" >
                                            </div> --}}

                                            <div class="col-md-4 ">
                                                <label for="nomorAju" class="form-label">Nomor Pengajuan</label>
                                                <input type="text" class="form-control" id="nomorAju"
                                                    name="nomorAju" value="{{ old('nomorAju') }}" readonly
                                                    style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-4 ">
                                                <label for="kodeKantor" class="form-label">Kantor Pabean</label>
                                                <input type="text" class="form-control" id="kodeKantor"
                                                    name="kodeKantor"
                                                    value="{{ old('kodeKantor', '050800 - KPPBC TMP A PURWAKARTA') }}"
                                                    readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="kodeJenisTpb" class="form-label">Jenis TPB</label>
                                                <select class="form-control" id="select-field18"name="kodeJenisTpb">
                                                    <option value="1 - KAWASAN BERIKAT" selected>1 - KAWASAN BERIKAT
                                                    </option>
                                                    <option value="10 - FTZ">10 - FTZ</option>
                                                    <option value="11 - BUKEK">11 - BUKEK</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <label for="kodeTujuanPengiriman" class="form-label">Tujuan
                                                    Pengiriman</label>
                                                <input type="text" class="form-control" id="kodeTujuanPengiriman"
                                                    name="kodeTujuanPengiriman"
                                                    value="{{ old('kodeTujuanPengiriman', '1 - PENYERAHAN BKP') }}"
                                                    readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="kodeJenisTpb" class="form-label">Cara Bayar</label>
                                                <select class="form-control" id="select-field19" name="kodeCaraBayar">
                                                    <option value="1 - BIASA / TUNAI" selected>1 - BIASA / TUNAI</option>
                                                    <option
                                                        value="10 - PEMBAYARAN KEMUDIAN  (OPEN ACCOUNT SECARA BERTAHAP)">10
                                                        - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA BERTAHAP)</option>
                                                    <option value="11 - PEMBAYARAN KEMUDIAN  (OPEN ACCOUNT SECARA TUNAI)">
                                                        11 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA TUNAI)</option>
                                                    <option value="12 - DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI">12 -
                                                        DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI </option>
                                                    <option
                                                        value="13 - DILAKUKAN DI DN DENGAN PEMBAYARAN MELALUI TELEGRAPH TRANSFER (T/T)">
                                                        13 - DILAKUKAN DI DN DENGAN PEMBAYARAN MELALUI TELEGRAPH TRANSFER
                                                        (T/T)</option>
                                                    <option value="14 TELEGRAPH TRANSFER (T/T)">14 TELEGRAPH TRANSFER (T/T)
                                                    </option>
                                                    <option value="15 PEMBAYARAN DIMUKA">15 PEMBAYARAN DIMUKA</option>
                                                    <option value="16 SIGHT LETTER OF CREDIT">16 SIGHT LETTER OF CREDIT
                                                    </option>
                                                    <option value="17 INKASO  (COLLECTION DRAFT)">17 INKASO (COLLECTION
                                                        DRAFT)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Entitas --}}
                                    <div class="tab-pane fade" id="entitas" role="tabpanel"
                                        aria-labelledby="entitas-tab">
                                        <div class="container">

                                            <!-- Penyelenggara/Pengusaha TPB/Pengusaha Kena Pajak -->
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <h5 class="text-primary">Penyelenggara/Pengusaha TPB/Pengusaha Kena Pajak
                                                </h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="nomorIdentitas" class="form-label">Nomor
                                                            Identitas</label>
                                                        <input type="text" class="form-control" id="nomorIdentitas"
                                                            placeholder="6 - NPWP 16 DIGIT" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        <label for="kodeJenisIdentitas" class="form-label ">Nomor
                                                            NPWP</label>
                                                        <input type="text" class="form-control"
                                                            id="kodeJenisIdentitas" name="entitas[0][nibEntitas]"
                                                            value="{{ old('nibEntitas', '010016806054000') }}"
                                                            readonly style="border: 1px solid #313131;">
                                                    </div> --}}
                                                    <div class="col-md-6">
                                                        <label for="nitku" class="form-label">Nitku</label>
                                                        <input type="text" class="form-control" id="nitku"
                                                            name="entitas[0][nomorIdentitas]"
                                                            value="{{ old('nomorIdentitas', '0010016806054000000000') }}"
                                                            style="border: 1px solid #313131;"
                                                            oninput="updateNomorEntitas()">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="namaEntitas" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="namaEntitas"
                                                            name="entitas[0][namaEntitas]"
                                                            value="{{ old('namaEntitas', 'INDO-RAMA SYNTHETICS TBK') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="nomorIjinEntitas" class="form-label">No Izin
                                                            TPB</label>
                                                        <input type="text" class="form-control" id="nomorIjinEntitas"
                                                            name="entitas[0][nomorIjinEntitas]"
                                                            value="{{ old('nomorIjinEntitas', 'KEP-724/WBC.09/2022') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="tanggalIjinEntitas" class="form-label">Tanggal Izin
                                                            TPB</label>
                                                        <input type="date" class="form-control"
                                                            id="tanggalIjinEntitas" name="entitas[0][tanggalIjinEntitas]"
                                                            value="{{ old('tanggalIjinEntitas', '2022-10-24') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="nibEntitas" class="form-label">NIB</label>
                                                        <input type="text" class="form-control" id="nibEntitas"
                                                            name="entitas[0][nibEntitas]"
                                                            value="{{ old('nibEntitas', '8120302880325') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="alamatEntitas" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamatEntitas" name="entitas[0][alamatEntitas]"
                                                            style="border: 1px solid #313131;">{{ old('alamatEntitas', 'JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101') }}</textarea>
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeEntitas" name="entitas[0][kodeEntitas]"
                                                            value="{{ old('kodeEntitas', '3') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeEntitas" name="entitas[0][kodeEntitas]"
                                                            value="{{ old('kodeEntitas', '3') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisApi" class="form-label">kode Jenis
                                                            Api</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeJenisApi" name="entitas[0][kodeJenisApi]"
                                                            value="{{ old('kodeJenisApi', '2') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                            Identitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeJenisIdentitas" name="entitas[0][kodeJenisIdentitas]"
                                                            value="{{ old('kodeJenisIdentitas', '6') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeStatus" class="form-label">Kode Status</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeStatus" name="entitas[0][kodeStatus]"
                                                            value="{{ old('kodeStatus', '3') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="seriEntitas" class="form-label">seri Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="seriEntitas" name="entitas[0][seriEntitas]"
                                                            value="{{ old('seriEntitas', 3) }}" step="any">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pemilik Barang -->
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-primary" id="exampleModalCenterTitle">Pemilik Barang
                                                    </h5>
                                                    <button type="button" class="btn btn-primary"
                                                        id="myBtn">Referensi</button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="nomorIdentitas" class="form-label">Nomor
                                                            Identitas</label>
                                                        <input type="text" class="form-control" id="nomorIdentitas"
                                                            placeholder="6 - NPWP 16 DIGIT" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 d-none">
                                                        <label for="nomorNpwp" class="form-label">Nomor NPWP</label>
                                                        <input type="text" class="form-control"
                                                            id="kodeJenisIdentitas2" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <label for="nitku2" class="form-label">Nitku</label>
                                                        <input type="text" class="form-control" id="nitku2"
                                                            name="entitas[1][nomorIdentitas]"
                                                            style="border: 1px solid #313131;"
                                                            oninput="updateNomorEntitas2()">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="namaEntitas2" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="namaEntitas2"
                                                            name="entitas[1][namaEntitas]"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="alamatEntitas2" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamatEntitas2" name="entitas[1][alamatEntitas]"
                                                            style="border: 1px solid #313131;"></textarea>
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                        <input type="text" class="form-control border-success"
                                                            id="kodeEntitas2" name="entitas[1][kodeEntitas]"
                                                            value="{{ old('kodeEntitas', '7') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisApi" class="form-label">kode Jenis
                                                            Api</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeJenisApi2" name="entitas[1][kodeJenisApi]"
                                                            value="{{ old('kodeJenisApi', '2') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisApi" class="form-label">kode Jenis
                                                            Api</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeJenisApi2" name="entitas[1][kodeJenisApi]"
                                                            value="{{ old('kodeJenisApi', '2') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                            Identitas</label>
                                                        <input type="text" class="form-control border-success"
                                                            id="kodeJenisIdentitas2" name="entitas[1][kodeJenisIdentitas]"
                                                            value="{{ old('kodeJenisIdentitas', '6') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeStatus2" class="form-label">Kode Status</label>
                                                        <input type="text" class="form-control border-success"
                                                            id="kodeStatus2" name="entitas[1][kodeStatus]"
                                                            value="{{ old('kodeStatus', '3') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="niperEntitas" class="form-label">niper Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="niperEntitas" name="entitas[1][niperEntitas]"
                                                            value="{{ old('niperEntitas', 'dadang') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="seriEntitas" class="form-label">seri Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="seriEntitas2" name="entitas[1][seriEntitas]"
                                                            value="{{ old('seriEntitas', 7) }}" step="any">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Penerima Barang -->
                                            <div id="myModal2" class="modal" data-backdrop="static"
                                                data-keyboard="false" style="display: none;">
                                                <div class="modal-content">
                                                    <center>
                                                        <h5 class="modal-title">Data Referensi Pengusaha</h5>
                                                    </center>
                                                    <span class="close" onclick="closeModal9()">&times;</span>
                                                    <form class="modal-form">
                                                        <table id="dataTable2" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th>NPWP</th>
                                                                    <th>Nama</th>
                                                                    <th>Alamat</th>
                                                                    <th>Negara</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($penerimaPajak as $data)
                                                                    <tr data-npwp="{{ $data->npwp }}"
                                                                        data-nama="{{ $data->Nama }}"
                                                                        data-alamat="{{ $data->Alamat }}">
                                                                        <td>{{ $data->npwp }}</td>
                                                                        <td>{{ $data->Nama }}</td>
                                                                        <td>{{ $data->Alamat }}</td>
                                                                        <td>-</td>
                                                                        <td>
                                                                            <button type="button"
                                                                                class="pilih-btn-2">Pilih</button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Penerima Barang/Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak -->
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-primary" id="exampleModalCenterTitle">Penerima
                                                        Barang/Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</h5>
                                                    <button type="button" class="btn btn-primary"
                                                        id="myBtn2">Referensi</button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="kode_jenis_tpb" class="form-label">Nomor
                                                            Identitas</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="6 - NPWP 16 DIGIT" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 d-none">
                                                        <label for="kodeJenisIdentitas3" class="form-label">Nomor
                                                            NPWP</label>
                                                        <input type="text" class="form-control"
                                                            id="kodeJenisIdentitas3" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <label for="nitku3" class="form-label">Nitku</label>
                                                        <input type="text" class="form-control" id="nitku3"
                                                            name="entitas[2][nomorIdentitas]"
                                                            style="border: 1px solid #313131;"
                                                            oninput="updateNomorEntitas3()">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="namaEntitas3" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="namaEntitas3"
                                                            name="entitas[2][namaEntitas]"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="alamatEntitas3" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamatEntitas3" name="entitas[2][alamatEntitas]"
                                                            style="border: 1px solid #313131;"></textarea>
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeEntitas3" name="entitas[2][kodeEntitas]"
                                                            value="{{ old('kodeEntitas', '8') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisApi" class="form-label">kode Jenis
                                                            Api</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeJenisApi3" name="entitas[2][kodeJenisApi]"
                                                            value="{{ old('kodeJenisApi', '2') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                            Identitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeJenisIdentitas3" name="entitas[2][kodeJenisIdentitas]"
                                                            value="{{ old('kodeJenisIdentitas', '6') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeStatus1" class="form-label">Kode Status</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="kodeStatus3" name="entitas[2][kodeStatus]"
                                                            value="{{ old('kodeStatus', '3') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="niperEntitas" class="form-label">niper Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="niperEntitas2" name="entitas[2][niperEntitas]"
                                                            value="{{ old('niperEntitas', 'yakul') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="seriEntitas" class="form-label">seri Entitas</label>
                                                        <input type="text" class="form-control border-primary"
                                                            id="seriEntitas3" name="entitas[2][seriEntitas]"
                                                            value="{{ old('seriEntitas', 8) }}" step="any">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Pemilik Barang -->
                                            <div id="myModal" class="modal" data-backdrop="static"
                                                data-keyboard="false">
                                                <div class="modal-content">
                                                    <center>
                                                        <h5 class="modal-title">Data Referensi Pengusaha</h5>
                                                    </center>
                                                    <span class="close" onclick="closeModal8()">&times;</span>
                                                    <form class="modal-form">
                                                        <table id="dataTable1" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th>NPWP</th>
                                                                    <th>Nama</th>
                                                                    <th>Alamat</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pemilikbarang as $data)
                                                                    <tr data-npwp="{{ $data->npwp }}"
                                                                        data-nama="{{ $data->Nama }}"
                                                                        data-alamat="{{ $data->Alamat }}">
                                                                        <td>{{ $data->npwp }}</td>
                                                                        <td>{{ $data->Nama }}</td>
                                                                        <td>{{ $data->Alamat }}</td>
                                                                        <td>
                                                                            <button type="button"
                                                                                class="pilih-btn-1">Pilih</button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <script>
                                        function closeModal9() {
                                            document.getElementById("myModal2").style.display = "none";
                                        }
                                    </script>

                                    {{-- Dokumen --}}
                                    <div class="tab-pane fade" id="dokumen" role="tabpanel"
                                        aria-labelledby="dokumen-tab">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <header>
                                                                <div class="right_content">
                                                                    <div class="col-lg-12 text-start mb-6">
                                                                        <button type="button"
                                                                            class="btn btn-primary mb-3" id="myBtn4"
                                                                            onclick="openModal()">
                                                                            <span data-feather="plus"></span>Tambah
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </header>
                                                            <div class="card-body" id="tableContainer">
                                                                <div class="table-responsive">
                                                                    <table class="table" id="dokumenTable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID Dokumen</th>
                                                                                <th>Kode Dokumen</th>
                                                                                <th>Nomor Dokumen</th>
                                                                                <th>Seri Dokumen</th>
                                                                                <th>Tanggal Dokumen</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="dokumenTableBody">
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModal4" class="modal" data-backdrop="static" data-keyboard="false"
                                        style="display: none;">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeModal()">&times;</span>
                                            <div class="modal-form">
                                                <div id="dokumenContainer"></div>
                                                <div class="button-group">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="tambahDokumen()">Tambah</button>
                                                    <button type="button" class="btn-cancel"
                                                        onclick="closeModal()">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

  <!-- Kode Modal Kemasan -->
  <script>
    (function() {
      let kemasanList = JSON.parse(localStorage.getItem('kemasanList')) || [];

      window.initializeKemasanTable = function() {
        let kemasanTableBody = document.getElementById("kemasanTableBody");
        kemasanTableBody.innerHTML = "";
        const nomorAjuFilter = localStorage.getItem('nomorAju');
        const filteredKemasanList = kemasanList.filter(kemasan => kemasan.nomorAju === nomorAjuFilter);
        filteredKemasanList.forEach((kemasan, index) => {
          let newRow = `<tr>
              <td>${kemasan.seriKemasan}</td>
              <td>${kemasan.kodeJenisKemasan}</td>
              <td>${kemasan.merkKemasan}</td>
              <td>${kemasan.jumlahKemasan}</td>
              <td><button class="btn btn-danger" onclick="hapusBarisKemasan(${index})">Hapus</button></td>
            </tr>`;
          kemasanTableBody.innerHTML += newRow;
        });
      }

      window.openModalKemasan = function() {
        document.getElementById('myModal5').style.display = 'block';
        tambahKemasan();
      }

      window.tambahKemasan = function() {
        let index = kemasanList.length;
        let kemasanContainer = document.getElementById('kemasanContainer');
        let kemasanForm = document.createElement('div');
        kemasanForm.classList.add('kemasan-form');
        kemasanForm.setAttribute('id', 'kemasanForm' + index);

        // Hitung seriKemasan untuk nomorAju yang aktif
        const nomorAjuFilter = localStorage.getItem('nomorAju');
        const filteredKemasanList = kemasanList.filter(kemasan => kemasan.nomorAju === nomorAjuFilter);
        const nextSeriKemasan = filteredKemasanList.length + 1;

        kemasanForm.innerHTML = `
          <div class="col-md-12">
            <label for="kemasan[${index}][seriKemasan]" class="form-label">Seri Kemasan</label>
            <input type="text" class="border-primary" value="${nextSeriKemasan}" name="kemasan[${index}][seriKemasan]" id="seriKemasan${index}" readonly>
          </div>
          <div class="col-md-12">
            <label for="kemasan[${index}][kodeJenisKemasan]" class="form-label">Kode Jenis Kemasan</label>
            <input type="text" class="border-primary" name="kemasan[${index}][kodeJenisKemasan]" id="kodeJenisKemasan${index}">
          </div>
          <div class="col-md-12">
            <label for="kemasan[${index}][merkKemasan]" class="form-label">Merk Kemasan</label>
            <input type="text" class="border-primary" name="kemasan[${index}][merkKemasan]" id="merkKemasan${index}">
          </div>
          <div class="col-md-12">
            <label for="kemasan[${index}][jumlahKemasan]" class="form-label">Jumlah Kemasan</label>
            <input type="number" class="border-primary" name="kemasan[${index}][jumlahKemasan]" id="jumlahKemasan${index}">
          </div>
          <button type="button" class="btn btn-primary" onclick="simpanKemasanIndividual(${index})">Simpan</button>
          <button type="button" class="btn btn-danger" onclick="hapusKemasan(this, ${index})">Hapus</button>
          <hr>
        `;
        kemasanContainer.appendChild(kemasanForm);
      }

      window.simpanKemasanIndividual = function(index) {
        let kodeJenisKemasan = document.getElementById(`kodeJenisKemasan${index}`).value;
        let merkKemasan = document.getElementById(`merkKemasan${index}`).value;
        let jumlahKemasan = document.getElementById(`jumlahKemasan${index}`).value;
        let seriKemasan = document.getElementById(`seriKemasan${index}`).value;
        let nomorAju = document.getElementById('nomorAju').value;

        if (!kodeJenisKemasan || !merkKemasan || !jumlahKemasan) {
          alert("Semua field harus diisi!");
          return;
        }

        const filteredKemasanList = kemasanList.filter(kemasan => kemasan.nomorAju === nomorAju);
        const autoSeriKemasan = filteredKemasanList.length + 1;

        kemasanList.push({
          seriKemasan: autoSeriKemasan,
          kodeJenisKemasan,
          merkKemasan,
          jumlahKemasan,
          nomorAju
        });
        localStorage.setItem('kemasanList', JSON.stringify(kemasanList));

        initializeKemasanTable();
        document.getElementById('kemasanForm' + index).style.display = 'none';
      }

      window.hapusKemasan = function(button, index) {
        let kemasanContainer = document.getElementById('kemasanContainer');
        kemasanContainer.removeChild(button.parentElement);
        kemasanList.splice(index, 1);
        localStorage.setItem('kemasanList', JSON.stringify(kemasanList));

        reindexKemasanList();
        initializeKemasanTable();
      }

      function reindexKemasanList() {
        let nomorAjuFilter = localStorage.getItem('nomorAju');
        kemasanList.filter(kemasan => kemasan.nomorAju === nomorAjuFilter).forEach((kemasan, index) => {
          kemasan.seriKemasan = index + 1;
        });
        localStorage.setItem('kemasanList', JSON.stringify(kemasanList));
      }

      window.hapusBarisKemasan = function(index) {
        kemasanList.splice(index, 1);
        localStorage.setItem('kemasanList', JSON.stringify(kemasanList));
        reindexKemasanList();
        initializeKemasanTable();
      }

      window.closeModalKemasan = function() {
        document.getElementById('myModal5').style.display = 'none';
      }
    })();
  </script>

  <!-- Kode Modal Dokumen -->
  <script>
    (function() {
      let dokumenList = JSON.parse(localStorage.getItem('dokumenList')) || [];

      window.initializeDokumenTable = function() {
        let dokumenTableBody = document.getElementById("dokumenTableBody");
        dokumenTableBody.innerHTML = "";
        const nomorAjuFilter = localStorage.getItem('nomorAju');
        const filteredDokumenList = dokumenList.filter(dokumen => dokumen.nomorAju === nomorAjuFilter);
        filteredDokumenList.forEach((dokumen, index) => {
          let newRow = `<tr>
              <td>${dokumen.idDokumen}</td>
              <td>${dokumen.kodeDokumen}</td>
              <td>${dokumen.nomorDokumen}</td>
              <td>${dokumen.seriDokumen}</td>
              <td>${dokumen.tanggalDokumen}</td>
              <td><button class="btn btn-danger" onclick="hapusBaris(${index})">Hapus</button></td>
            </tr>`;
          dokumenTableBody.innerHTML += newRow;
        });
      }

      window.openModal = function() {
        document.getElementById('myModal4').style.display = 'block';
        tambahDokumen();
      }

      window.tambahDokumen = function() {
        let index = dokumenList.length;
        let dokumenContainer = document.getElementById('dokumenContainer');
        let dokumenForm = document.createElement('div');
        dokumenForm.classList.add('dokumen-form');
        dokumenForm.setAttribute('id', 'dokumenForm' + index);

        const nomorAjuFilter = localStorage.getItem('nomorAju');
        const filteredDokumenList = dokumenList.filter(dokumen => dokumen.nomorAju === nomorAjuFilter);
        const nextIdDokumen = filteredDokumenList.length + 1;

        dokumenForm.innerHTML = `
          <div class="col-md-12">
            <label for="dokumen[${index}][idDokumen]" class="form-label">ID Dokumen</label>
            <input type="text" class="form-control border-primary" value="${nextIdDokumen}" name="dokumen[${index}][idDokumen]" id="idDokumen${index}" readonly>
          </div>
          <div class="col-md-12">
            <label for="dokumen[${index}][kodeDokumen]" class="form-label">Kode Dokumen</label>
            <input type="text" class="form-control border-primary" name="dokumen[${index}][kodeDokumen]" id="kodeDokumen${index}">
          </div>
          <div class="col-md-12">
            <label for="dokumen[${index}][nomorDokumen]" class="form-label">Nomor Dokumen</label>
            <input type="text" class="form-control border-primary" name="dokumen[${index}][nomorDokumen]" id="nomorDokumen${index}">
          </div>
          <div class="col-md-12">
            <label for="dokumen[${index}][seriDokumen]" class="form-label">Seri Dokumen</label>
            <input type="text" class="form-control border-primary" name="dokumen[${index}][seriDokumen]" id="seriDokumen${index}">
          </div>
          <div class="col-md-12">
            <label for="dokumen[${index}][tanggalDokumen]" class="form-label">Tanggal Dokumen</label>
            <input type="date" class="form-control border-primary" name="dokumen[${index}][tanggalDokumen]" id="tanggalDokumen${index}">
          </div>
          <button type="button" class="btn btn-primary" onclick="simpanDokumenIndividual(${index})">Simpan</button>
          <button type="button" class="btn btn-danger" onclick="hapusDokumen(this, ${index})">Hapus</button>
          <hr>
        `;
        dokumenContainer.appendChild(dokumenForm);
      }

      window.simpanDokumenIndividual = function(index) {
        let kodeDokumen = document.getElementById(`kodeDokumen${index}`).value;
        let nomorDokumen = document.getElementById(`nomorDokumen${index}`).value;
        let seriDokumen = document.getElementById(`seriDokumen${index}`).value;
        let tanggalDokumen = document.getElementById(`tanggalDokumen${index}`).value;
        let nomorAju = document.getElementById('nomorAju').value;

        if (!kodeDokumen || !nomorDokumen || !seriDokumen || !tanggalDokumen) {
          alert("Semua field harus diisi!");
          return;
        }

        const filteredDokumenList = dokumenList.filter(dokumen => dokumen.nomorAju === nomorAju);
        const idDokumen = filteredDokumenList.length + 1;

        dokumenList.push({
          idDokumen: idDokumen,
          kodeDokumen,
          nomorDokumen,
          seriDokumen,
          tanggalDokumen,
          nomorAju
        });
        localStorage.setItem('dokumenList', JSON.stringify(dokumenList));

        initializeDokumenTable();
        document.getElementById('dokumenForm' + index).style.display = 'none';
      }

      window.hapusDokumen = function(button, index) {
        let dokumenContainer = document.getElementById('dokumenContainer');
        dokumenContainer.removeChild(button.parentElement);
        dokumenList.splice(index, 1);
        localStorage.setItem('dokumenList', JSON.stringify(dokumenList));

        reindexDokumenList();
        initializeDokumenTable();
      }

      function reindexDokumenList() {
        let nomorAjuFilter = localStorage.getItem('nomorAju');
        dokumenList.filter(dokumen => dokumen.nomorAju === nomorAjuFilter).forEach((dokumen, index) => {
          dokumen.idDokumen = index + 1;
        });
        localStorage.setItem('dokumenList', JSON.stringify(dokumenList));
      }

      window.hapusBaris = function(index) {
        dokumenList.splice(index, 1);
        localStorage.setItem('dokumenList', JSON.stringify(dokumenList));
        reindexDokumenList();
        initializeDokumenTable();
      }

      window.closeModal = function() {
        document.getElementById('myModal4').style.display = 'none';
      }
    })();
  </script>



                                    {{-- Pengangkut --}}
                                    <div class="tab-pane fade" id="pengangkut" role="tabpanel"
                                        aria-labelledby="pengangkut-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="kodeJenisTpb" class="form-label">Cara Pengangkutan</label>
                                                <select class="form-control" id="select-field20"
                                                    name="pengangkut[0][kodeCaraAngkut]">
                                                    <option value="1 - LAUT" selected>1 - LAUT</option>
                                                    <option value="2 - KERETA API" selected>2 - KERETA API</option>
                                                    <option value="3 - DARAT" selected>3 - DARAT</option>
                                                    <option value="4 - UDARA">4 - UDARA</option>
                                                    <option value="5 - POS">5 - POS</option>
                                                    <option value="6 - MULTIMODA">6 - MULTIMODA</option>
                                                    <option value="7 - INSTALASI / PIPA">7 - INSTALASI / PIPA</option>
                                                    <option value="8 - PERAIRAN">8 - PERAIRAN</option>
                                                    <option value="9 - LAINNYA">9 - LAINNYA</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="namaPengangkut" class="form-label">nama Pengangkut</label>
                                                <input type="text" class="form-control" id="namaPengangkut"
                                                    name="pengangkut[0][namaPengangkut]"
                                                    value="{{ old('namaPengangkut', 'apaaja') }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nomorPengangkut" class="form-label">nomor Pengangkut</label>
                                                <input type="text" class="form-control" id="nomorPengangkut"
                                                    name="pengangkut[0][nomorPengangkut]"
                                                    value="{{ old('nomorPengangkut', '1') }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="seriPengangkut" class="form-label">seri Pengangkut</label>
                                                <input type="text" class="form-control" id="seriPengangkut"
                                                    name="pengangkut[0][seriPengangkut]"
                                                    value="{{ old('seriPengangkut', 1) }}" step="any">
                                            </div>
                                        </div>
                                    </div>


<!-- Tab Kemasan -->
<div class="tab-pane fade" id="kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
    <div class="row">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <header>
                <div class="right_content">
                  <div class="col-lg-12 text-start mb-6">
                    <button type="button" class="btn btn-primary mb-3" id="myBtn5" onclick="openModalKemasan()">
                      <span data-feather="plus"></span>Tambah
                    </button>
                  </div>
                </div>
              </header>
              <div class="card-body" id="tableContainer5">
                <div class="table-responsive">
                  <table class="table" id="kemasanTable">
                    <thead>
                      <tr>
                        <th>Seri Kemasan</th>
                        <th>Jumlah Kemasan</th>
                        <th>Kode Jenis Kemasan</th>
                        <th>Merk Kemasan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="kemasanTableBody">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Kemasan (myModal5) -->
  <div id="myModal5" class="modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-content">
      <span class="close" onclick="closeModalKemasan()">&times;</span>
      <div class="modal-form">
        <div id="kemasanContainer"></div>
        <div class="button-group">
          <button type="button" class="btn btn-primary" onclick="tambahKemasan()">Tambah</button>
          <button type="button" class="btn-cancel" onclick="closeModalKemasan()">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Inisialisasi Nomor Aju dari localStorage (atau set default jika belum ada)
    const storedNomorAju = localStorage.getItem('nomorAju');
    if (storedNomorAju) {
      document.getElementById('nomorAju').value = storedNomorAju;
    } else {
      const defaultNomorAju = 'default-value';
      document.getElementById('nomorAju').value = defaultNomorAju;
      localStorage.setItem('nomorAju', defaultNomorAju);
    }
    // Simpan perubahan Nomor Aju dan reinitialize tabel saat input diubah
    document.getElementById('nomorAju').addEventListener('input', function () {
      const currentValue = this.value;
      localStorage.setItem('nomorAju', currentValue);
      initializeKemasanTable();
    });

    // Inisialisasi data kemasan dari localStorage
    let kemasanList = JSON.parse(localStorage.getItem('kemasanList')) || [];

    // Fungsi untuk menampilkan data kemasan ke dalam tabel
    function initializeKemasanTable() {
      let kemasanTableBody = document.getElementById("kemasanTableBody");
      kemasanTableBody.innerHTML = "";
      const nomorAjuFilter = localStorage.getItem('nomorAju');
      const filteredKemasanList = kemasanList.filter(kemasan => kemasan.nomorAju === nomorAjuFilter);
      filteredKemasanList.forEach((kemasan, index) => {
        let newRow = `<tr>
            <td>${kemasan.seriKemasan}</td>
            <td>${kemasan.kodeJenisKemasan}</td>
            <td>${kemasan.merkKemasan}</td>
            <td>${kemasan.jumlahKemasan}</td>
            <td><button class="btn btn-danger" onclick="hapusBarisKemasan(${index})">Hapus</button></td>
          </tr>`;
        kemasanTableBody.innerHTML += newRow;
      });
    }

    // Buka modal kemasan
    function openModalKemasan() {
      document.getElementById('myModal5').style.display = 'block';
      tambahKemasan(); // Muat form input saat modal dibuka
    }

    // Tambah form input data kemasan
    function tambahKemasan() {
      let index = kemasanList.length;
      let kemasanContainer = document.getElementById('kemasanContainer');
      let kemasanForm = document.createElement('div');
      kemasanForm.classList.add('kemasan-form');
      kemasanForm.setAttribute('id', 'kemasanForm' + index);

      // Menghitung seriKemasan berikutnya untuk nomorAju yang sedang aktif
      const nomorAjuFilter = localStorage.getItem('nomorAju');
      const filteredKemasanList = kemasanList.filter(kemasan => kemasan.nomorAju === nomorAjuFilter);
      const nextSeriKemasan = filteredKemasanList.length + 1;

      kemasanForm.innerHTML = `
        <div class="col-md-12">
          <label for="kemasan[${index}][seriKemasan]" class="form-label">Seri Kemasan</label>
          <input type="text" class="form-control border-primary" value="${nextSeriKemasan}" name="kemasan[${index}][seriKemasan]" id="seriKemasan${index}" readonly>
        </div>
        <div class="col-md-12">
          <label for="kemasan[${index}][kodeJenisKemasan]" class="form-label">Kode Jenis Kemasan</label>
          <input type="text" class="form-control border-primary" name="kemasan[${index}][kodeJenisKemasan]" id="kodeJenisKemasan${index}">
        </div>
        <div class="col-md-12">
          <label for="kemasan[${index}][merkKemasan]" class="form-label">Merk Kemasan</label>
          <input type="text" class="form-control border-primary" name="kemasan[${index}][merkKemasan]" id="merkKemasan${index}">
        </div>
        <div class="col-md-12">
          <label for="kemasan[${index}][jumlahKemasan]" class="form-label">Jumlah Kemasan</label>
          <input type="number" class="form-control border-primary" name="kemasan[${index}][jumlahKemasan]" id="jumlahKemasan${index}">
        </div>
        <button type="button" class="btn btn-primary" onclick="simpanKemasanIndividual(${index})">Simpan</button>
        <button type="button" class="btn btn-danger" onclick="hapusKemasan(this, ${index})">Hapus</button>
        <hr>
      `;
      kemasanContainer.appendChild(kemasanForm);
    }

    // Fungsi simpan data kemasan individual
    function simpanKemasanIndividual(index) {
      let kodeJenisKemasan = document.getElementById(`kodeJenisKemasan${index}`).value;
      let merkKemasan = document.getElementById(`merkKemasan${index}`).value;
      let jumlahKemasan = document.getElementById(`jumlahKemasan${index}`).value;
      let seriKemasan = document.getElementById(`seriKemasan${index}`).value;
      let nomorAju = document.getElementById('nomorAju').value;

      if (!kodeJenisKemasan || !merkKemasan || !jumlahKemasan) {
        alert("Semua field harus diisi!");
        return;
      }

      // Menghitung ulang seriKemasan berdasarkan nomorAju
      const filteredKemasanList = kemasanList.filter(kemasan => kemasan.nomorAju === nomorAju);
      const autoSeriKemasan = filteredKemasanList.length + 1;

      kemasanList.push({
        seriKemasan: autoSeriKemasan,
        kodeJenisKemasan,
        merkKemasan,
        jumlahKemasan,
        nomorAju
      });
      localStorage.setItem('kemasanList', JSON.stringify(kemasanList));

      initializeKemasanTable();

      // Sembunyikan form input setelah data disimpan
      document.getElementById('kemasanForm' + index).style.display = 'none';
    }

    // Fungsi menghapus form input dari modal
    function hapusKemasan(button, index) {
      let kemasanContainer = document.getElementById('kemasanContainer');
      kemasanContainer.removeChild(button.parentElement);
      kemasanList.splice(index, 1);
      localStorage.setItem('kemasanList', JSON.stringify(kemasanList));

      reindexKemasanList();
      initializeKemasanTable();
    }

    // Reindex seriKemasan agar selalu berurutan
    function reindexKemasanList() {
      let nomorAjuFilter = localStorage.getItem('nomorAju');
      kemasanList.filter(kemasan => kemasan.nomorAju === nomorAjuFilter).forEach((kemasan, index) => {
        kemasan.seriKemasan = index + 1;
      });
      localStorage.setItem('kemasanList', JSON.stringify(kemasanList));
    }

    // Fungsi hapus baris tabel kemasan
    function hapusBarisKemasan(index) {
      kemasanList.splice(index, 1);
      localStorage.setItem('kemasanList', JSON.stringify(kemasanList));
      reindexKemasanList();
      initializeKemasanTable();
    }

    // Tutup modal kemasan
    function closeModalKemasan() {
      document.getElementById('myModal5').style.display = 'none';
    }

    // Inisialisasi tabel saat halaman dimuat
    window.onload = function () {
      initializeKemasanTable();
    }
  </script>




    {{-- Transaksi --}}
    <div class="tab-pane fade" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
        <div class="container">
            <!-- Harga -->
            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                <h5 class="text-primary">Harga
                </h5>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Valuta" class="form-label">Valuta</label>
                        <input type="text" class="form-control" id="nomorIdentitas" name="kodeValuta"
                            value="{{ old('kodeValuta', 'USD - US DOLLAR') }}" readonly
                            style="border: 1px solid #313131;">
                    </div>
                    <div class="col-md-6">
                        <label for="ndpbm" class="form-label">NDPBM</label>
                        <input type="number" class="form-control" id="ndpbm" name="ndpbm"
                            value="{{ old('ndpbm') }}" style="border: 1px solid #313131;"
                            oninput="hitungNilaiPabean()">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="cif" class="form-label">CIF</label>
                        <input type="text" class="form-control" id="cif" name="cif"
                            value="{{ old('cif') }}" step="any" style="border: 1px solid #313131;"
                            oninput="hitungNilaiPabean()">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="nilai_pabean" class="form-label">Nilai Pabean</label>
                        <input type="text" class="form-control" id="nilai_pabean" readonly
                            style="border: 1px solid #313131;">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="hargaPenyerahan" class="form-label">Harga
                            Penyerahan/Harga Jual/Harga Barang</label>
                        <input type="text" class="form-control" id="harga_penyerahan" name="hargaPenyerahan"
                            value="{{ old('hargaPenyerahan') }}" step="any" value="{{ old('hargaPenyerahan') }}"
                            style="border: 1px solid #313131;">
                    </div>
                </div>
            </div>

            <!-- Data Untuk Keperluan Pajak -->
            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="text-primary" id="exampleModalCenterTitle">Data Untuk
                        Keperluan Pajak
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="nomorIdentitas" class="form-label">Uang Muka</label>
                        <input type="text" class="form-control" id="uang_maku" style="border: 1px solid #313131;">
                    </div>
                    <div class="col-md-6">
                        <label for="nomorNpwp" class="form-label">Diskon</label>
                        <input type="text" class="form-control" id="diskon" name="barang[0][diskon]"
                            value="{{ old('diskon', '0.00') }}" style="border: 1px solid #313131;">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="pengenaan_pajak" class="form-label">Dasar Pengenaan
                            Pajak</label>
                        <input type="text" class="form-control" id="pengenaan_pajak" name="dasarPengenaanPajak"
                            style="border: 1px solid #313131;" oninput="hitungPPNBM(); hitungPPN();">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="namaEntitas2" class="form-label">PPN Yang Dipungut
                            (Tarif & Nilai)</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="ppn_tarif" name="tarifPpnPajak"
                                    placeholder="11.00%" value="{{ old('diskon', '11.00%') }}"
                                    style="border: 1px solid #313131;" oninput="hitungPPN()">
                            </div>

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="ppn_hasil" name="ppnPajak" readonly
                                    style="border: 1px solid #313131;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="namaEntitas3" class="form-label">PPnBM Yang Dipungut
                            (Tarif & Nilai)</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="ppnb_tarif" name="tarifPpnbmPajak"
                                    value="00.00%" style="border: 1px solid #313131;" oninput="hitungPPNBM()">
                            </div>

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="ppnb_hasil" name="ppnbmPajak" readonly
                                    style="border: 1px solid #313131;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berat -->
            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="text-primary" id="exampleModalCenterTitle">Berat
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="nomorIdentitas" class="form-label">Berat Kotor
                            (KGM)</label>
                        <input type="text" class="form-control" id="berat_kotor" name="bruto"
                            value="{{ old('bruto') }}" style="border: 1px solid #313131;">
                    </div>
                    <div class="col-md-6">
                        <label for="nomorNpwp" class="form-label">Berat Bersih
                            (KGM)</label>
                        <input type="text" class="form-control" id="berat_bersih" name="jumlahSatuan"
                            value="{{ old('jumlahSatuan') }}" style="border: 1px solid #313131;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Barang --}}
    {{-- <div class="tab-pane fade" id="barang" role="tabpanel" aria-labelledby="barang-tab">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <header>
                                <div class="right_content">
                                    <div class="col-lg-12 text-start mb-6">
                                        <button type="button" class="btn btn-primary mb-3" id="myBtn7"><span
                                                data-feather="plus"></span>Tambah
                                            Barang</button>
                                    </div>
                                </div>
                            </header>
                            <div class="card-body" id="tableContainer">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable3">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Seri</th>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Hs</th>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Uraian</th>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Nilai Barang</th>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Jumlah Satuan</th>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Jenis Satuan</th>
                                                <th class="text-dark font-weight-bold text-center">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Isi tabel akan ditambahkan di sini -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div id="myModal7" class="modal" data-backdrop="static" data-keyboard="false"
                            style="display: none;">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <form id="modalForm" action="{{ route('dokumen.create') }}" method="GET">
                                    <div class="modal-form">
                                        <h5 class="text-primary" id="exampleModalCenterTitle">Jenis
                                        </h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nomorIdentitas" class="form-label">Seri</label>
                                                <input type="text" class="form-control" id="seriDokumen4"
                                                    name="seriDokumen4" value="{{ old('uang_maku', '0.00') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nomorIdentitas" class="form-label">Hs</label>
                                                <select class="form-control" name="hs" id="select-field8" required
                                                    style="border: 1px solid #313131;">
                                                    <option selected disabled>Pilih
                                                        Hs</option>
                                                    <option value="01012100 --- BIBIT"
                                                        {{ old('hs') == '1' ? 'selected' : '' }}>
                                                        01012100 --- BIBIT</option>
                                                    <option value="01012900 --- LAIN - LAIN"
                                                        {{ old('hs') == '2' ? 'selected' : '' }}>
                                                        01012900 --- LAIN - LAIN</option>
                                                    <option value="01013010 --- BIBIT"
                                                        {{ old('hs') == '3' ? 'selected' : '' }}>
                                                        01013010 --- BIBIT</option>
                                                    <option value="01013090 --- BIBIT"
                                                        {{ old('hs') == '4' ? 'selected' : '' }}>
                                                        01013090 --- BIBIT</option>
                                                    <option value="01019000 --- LAIN - LAIN"
                                                        {{ old('hs') == '5' ? 'selected' : '' }}>
                                                        01019000 --- LAIN - LAIN</option>
                                                    <option value="01022100 --- BIBIT"
                                                        {{ old('hs') == '6' ? 'selected' : '' }}>
                                                        01022100 --- BIBIT</option>
                                                    <option value="01022910 --- SAPI JANTAN"
                                                        {{ old('hs') == '6' ? 'selected' : '' }}>
                                                        01022910 --- SAPI JANTAN</option>
                                                    <option value="01022911 --- OXEN"
                                                        {{ old('hs') == '6' ? 'selected' : '' }}>
                                                        01022911 --- OXEN</option>
                                                    <option value="01022919 --- LAIN - LAIN"
                                                        {{ old('hs') == '6' ? 'selected' : '' }}>
                                                        01022919 --- LAIN - LAIN</option>

                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nomorNpwp" class="form-label">Kode</label>
                                                <input type="text" class="form-control" id="kode" name="kode"
                                                    value="{{ old('kode') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nomorNpwp" class="form-label">Uraian</label>
                                                <input type="text" class="form-control" id="uraian" name="uraian"
                                                    value="{{ old('uraian') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nomorNpwp" class="form-label">Merk</label>
                                                <input type="text" class="form-control" id="merk" name="merk"
                                                    value="{{ old('merk') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nomorNpwp" class="form-label">Tipe</label>
                                                <input type="text" class="form-control" id="tipe" name="tipe"
                                                    value="{{ old('tipe') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="nomorNpwp" class="form-label">Ukuran</label>
                                                <input type="text" class="form-control" id="merk" name="merk"
                                                    value="{{ old('merk') }}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="nomorNpwp" class="form-label">Spesifikasi
                                                    Lain</label>
                                                <input type="text" class="form-control" id="tipe" name="tipe"
                                                    value="{{ old('tipe') }}">
                                            </div>

                                            <h5 class="text-primary" id="exampleModalCenterTitle">Keterangan
                                                Lainnya
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="alamat"class="form-label">Penggunaan</label>
                                                    <select class="form-control" name="hs" id="select-field9"
                                                        required style="border: 1px solid #313131;">
                                                        <option selected disabled>Pilih
                                                            Penggunaan</option>
                                                        <option value="0 - BARANG BERHUBUNGAN LANGSUNG"
                                                            {{ old('Penggunaan') == '1' ? 'selected' : '' }}>
                                                            0 - BARANG BERHUBUNGAN LANGSUNG
                                                        </option>
                                                        <option value="1 - TIDAK BERHUBUNGAN LANGSUNG"
                                                            {{ old('hs') == '2' ? 'selected' : '' }}>
                                                            1 - TIDAK BERHUBUNGAN LANGSUNG
                                                        </option>
                                                        <option value="2 - BARANG KONSUMSI"
                                                            {{ old('hs') == '3' ? 'selected' : '' }}>
                                                            2 - BARANG KONSUMSI</option>
                                                        <option value="3 - BARANG HASIL OLAHAN<"
                                                            {{ old('hs') == '4' ? 'selected' : '' }}>
                                                            3 - BARANG HASIL OLAHAN</option>
                                                        <option value="4 - BARANG LAINNYA"
                                                            {{ old('hs') == '5' ? 'selected' : '' }}>
                                                            4 - BARANG LAINNYA</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="alamat" class="form-label">Kategori
                                                        Barang</label>
                                                    <select class="form-control" name="hs" id="select-field10"
                                                        required style="border: 1px solid #313131;">
                                                        <option selected disabled>Pilih
                                                            Kategori Barang</option>
                                                        <option value="0 - BARANG BERHUBUNGAN LANGSUNG"
                                                            {{ old('Penggunaan') == '1' ? 'selected' : '' }}>
                                                            1 - HASIL PRODUKSI</option>
                                                        <option value="1 - TIDAK BERHUBUNGAN LANGSUNG"
                                                            {{ old('hs') == '2' ? 'selected' : '' }}>
                                                            2 - BAHAN BAKU</option>
                                                        <option value="2 - BARANG KONSUMSI"
                                                            {{ old('hs') == '3' ? 'selected' : '' }}>
                                                            3 - BARANG MODAL</option>
                                                        <option value="3 - BARANG HASIL OLAHAN<"
                                                            {{ old('hs') == '4' ? 'selected' : '' }}>
                                                            4 - PERALATAN KANTOR</option>
                                                        <option value="4 - BARANG LAINNYA"
                                                            {{ old('hs') == '5' ? 'selected' : '' }}>
                                                            5 - SISA DARI PROSES PRODUKSI /
                                                            LIMBAH (WASTE/SCRAP) DAN / ATAU
                                                            SISA ATAU BEKAS KEMAS</option>
                                                        <option value="4 - BARANG LAINNYA"
                                                            {{ old('hs') == '5' ? 'selected' : '' }}>
                                                            6 - BARANG YANG DI TIMBUN UNTUK
                                                            DI JUAL</option>
                                                        <option value="4 - BARANG LAINNYA"
                                                            {{ old('hs') == '5' ? 'selected' : '' }}>
                                                            7 - BARANG YANG DI PAMERKAN
                                                            UNTUK DI JUAL</option>
                                                        <option value="4 - BARANG LAINNYA"
                                                            {{ old('hs') == '5' ? 'selected' : '' }}>
                                                            8 - BARANG LAINNYA</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="alamat"class="form-label">Kondisi
                                                        Barang</label>
                                                    <select class="form-control" name="hs" id="select-field11"
                                                        required style="border: 1px solid #313131;">
                                                        <option selected disabled>Pilih
                                                            Penggunaan</option>
                                                        <option value="1 - BAIK"
                                                            {{ old('Penggunaan') == '1' ? 'selected' : '' }}>
                                                            1 - BAIK</option>
                                                        <option value="2 - RUSAK"
                                                            {{ old('hs') == '2' ? 'selected' : '' }}>
                                                            2 - RUSAK</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- Jangka Waktu -->
                                            <div class="col-md-6">
                                                <label for="nomorNpwp" class="form-label">Jangka
                                                    Waktu</label>
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input me-2" type="checkbox"
                                                        id="checkbox4tahun" name="tipe" value="4">
                                                    <span> > 4 Tahun</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12  mb-3">
                                                <label for="alamat" class="form-label">Cara
                                                    Perhitungan</label>
                                                <select class="form-control" name="hs" id="select-field12"
                                                    required style="border: 1px solid #313131;">
                                                    <option selected disabled>Pilih Cara
                                                        Perhitungan</option>
                                                    <option value="0 - HARGA PEMASUKAN"
                                                        {{ old('Penggunaan') == '1' ? 'selected' : '' }}>
                                                        0 - HARGA PEMASUKAN
                                                    </option>
                                                    <option value="1 - HARGA PENYERAHAN"
                                                        {{ old('hs') == '2' ? 'selected' : '' }}>
                                                        1 - HARGA PENYERAHAN
                                                    </option>
                                                </select>
                                            </div>

                                            <h5 class="text-primary" id="exampleModalCenterTitle">Jenis
                                            </h5>
                                            <style>
                                                label {
                                                    margin-bottom: 8px;
                                                    font-size: 14px;
                                                }

                                                .input-group {
                                                    display: flex;
                                                    justify-content: space-between;
                                                    align-items: center;
                                                }

                                                .input-group input[type="text"],
                                                .input-group select {
                                                    flex: 1;
                                                    padding: 10px;
                                                    border: 1px solid #ccc;
                                                    border-radius: 4px;
                                                }

                                                .input-group input[type="text"] {
                                                    margin-right: 20px;
                                                    /* Jarak antara input dan select */
                                                }
                                            </style>

                                            <div class="container">
                                                <label for="satuan">Satuan</label>
                                                <div class="input-group">
                                                    <input type="text" id="harga" name="harga">
                                                    <select name="satuan_harga" id="select-field16">
                                                        <option value="KGM - KILOGRAM"
                                                            {{ old('satuan_harga') == 'KGM - KILOGRAM' ? 'selected' : '' }}>
                                                            KGM - KILOGRAM
                                                        </option>
                                                        <option
                                                            value="KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)"
                                                            {{ old('satuan_harga') == 'KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)' ? 'selected' : '' }}>
                                                            KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <label for="satuan">Kemasan</label>
                                                <div class="input-group">
                                                    <input type="text" id="kemasan" name="kemasan">
                                                    <select name="satuan_kemasan" id="select-field17">
                                                        <option value="KGM - KILOGRAM"
                                                            {{ old('satuan_kemasan') == 'KGM - KILOGRAM' ? 'selected' : '' }}>
                                                            1F CONTAINER, FLEXIBLE
                                                        </option>
                                                        <option
                                                            value="KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)"
                                                            {{ old('satuan_kemasan') == 'KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)' ? 'selected' : '' }}>
                                                            BL, BALE COMPRESSED
                                                        </option>
                                                        <option
                                                            value="KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)"
                                                            {{ old('satuan_kemasan') == 'KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)' ? 'selected' : '' }}>
                                                            FX, BAG, FLEXIBLE CONTAINER
                                                        </option>
                                                        <option
                                                            value="KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)"
                                                            {{ old('satuan_kemasan') == 'KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)' ? 'selected' : '' }}>
                                                            FX, BAG, FLEXIBLE CONTAINER
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Tombol Simpan & Batal -->
                                        <div class="button-group">
                                            <button type="submit" class="btn-save">Simpan</button>
                                            <button type="button" class="btn-cancel"
                                                onclick="closeModal()">Cancel</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Pungutan -->
    {{-- <div class="tab-pane fade" id="pungutan" role="tabpanel" aria-labelledby="pungutan-tab">
        <div class="container-fluid p-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable3">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-dark font-weight-bold text-center">
                                        Pungutan</th>
                                    <th class="text-dark font-weight-bold text-center">
                                        Wajib Bayar</th>
                                    <th class="text-dark font-weight-bold text-center">
                                        Dibayar</th>
                                    <th class="text-dark font-weight-bold text-center">
                                        Dibebaskan</th>
                                    <th class="text-dark font-weight-bold text-center">
                                        Ditanggung Pemerintah</th>
                                    <th class="text-dark font-weight-bold text-center">
                                        Sudah Dilunasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">PPh</td>
                                    <td class="text-center">
                                        <select class="form-control" name="hs" id="select-field13" required
                                            style="width: 450px; border: 1px solid #313131; font-size: 12px; padding: 4px;">
                                            <option selected disabled></option>
                                            <option value="0 - HARGA PEMASUKAN">
                                                0010016806054000000000 - PENGUSAHA / PEMILIK
                                            </option>
                                            <option value="1 - HARGA PENYERAHAN">
                                                0011045861092000000000 - PENERIMA
                                            </option>
                                        </select>
                                    </td>
                                    <td class="text-center" id="pph">Rp 252000000
                                    </td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">BM</td>
                                    <td class="text-center">
                                        <select class="form-control" name="hs" id="select-field14" required
                                            style="width: 450px; border: 1px solid #313131; font-size: 12px; padding: 4px;">
                                            <option selected disabled></option>
                                            <option value="0 - HARGA PEMASUKAN">
                                                0010016806054000000000- PENGUSAHA / PEMILIK
                                            </option>
                                            <option value="1 - HARGA PENYERAHAN">
                                                0011045861092000000000 - PENERIMA
                                            </option>
                                        </select>
                                    </td>
                                    <td class="text-center" id="bm">Rp 90900000
                                    </td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">PPN</td>
                                    <td class="text-center">
                                        <select class="form-control" name="hs" id="select-field15" required
                                            style="width: 450px; border: 1px solid #313131; font-size: 12px; padding: 4px;">
                                            <option selected disabled></option>
                                            <option value="0 - HARGA PEMASUKAN">
                                                0010016806054000000000- PENGUSAHA / PEMILIK
                                            </option>
                                            <option value="1 - HARGA PENYERAHAN">
                                                0011045861092000000000 - PENERIMA
                                            </option>
                                        </select>
                                    </td>
                                    <td class="text-center" id="ppn">Rp 1108500000
                                    </td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">TOTAL</td>
                                    <td class="text-center"></td>
                                    <td class="text-center" id="total"></td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                    <td class="text-center">Rp 0,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Pernyataan -->
    <div class="tab-pane fade" id="pernyataan" role="tabpanel" aria-labelledby="pernyataan-tab">
        <div class="container-fluid p-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <!-- Harga -->
                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                        <h5 class="text-primary">Tempat & Tinggal</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="ndpbm" class="form-label">Tempat</label>
                                <input type="text" class="form-control" name="kotaTtd" value="{{ old('kotaTtd') }}"
                                    style="border: 1px solid #313131;">
                            </div>
                            <div class="col-md-6">
                                <label for="cif" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggalTtd"
                                    value="{{ old('tanggalTtd') }}" style="border: 1px solid #313131;">
                            </div>
                        </div>
                    </div>
                    <!-- Nama -->
                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                        <h5 class="text-primary">Nama</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="uang_muka" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="namaTtd" value="{{ old('namaTtd') }}"
                                    style="border: 1px solid #313131;">
                            </div>
                            <div class="col-md-6">
                                <label for="diskon" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatanTtd"
                                    value="{{ old('jabatanTtd') }}" style="border: 1px solid #313131;">
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="col-12 mt-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('dokumen_baru') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        </form><!--end form-->
    </div><!--end card-body-->
    </div><!--end card-->
    </div><!--end col-->
    </div><!--end row-->
    </div><!-- container -->

    <script>
        // Fungsi untuk memformat angka menjadi mata uang Indonesia tanpa titik dan koma
        function formatRupiah(angka) {
            return 'Rp ' + angka.toLocaleString('id-ID').replace(/[^0-9]/g, '');
        }

        // Fungsi untuk menghitung total
        function calculateTotal() {
            // Mendapatkan nilai dari elemen-elemen
            var pph = parseInt(document.getElementById("pph").innerText.replace('Rp ', '').replace('.', '').replace(',',
                ''));
            var bm = parseInt(document.getElementById("bm").innerText.replace('Rp ', '').replace('.', '').replace(',', ''));
            var ppn = parseInt(document.getElementById("ppn").innerText.replace('Rp ', '').replace('.', '').replace(',',
                ''));

            // Menghitung total
            var total = pph + bm + ppn;

            // Menampilkan total dengan format mata uang Indonesia tanpa titik dan koma
            document.getElementById("total").innerText = formatRupiah(total);
        }

        // Memanggil fungsi untuk menghitung total saat halaman dimuat
        window.onload = calculateTotal; <
        /scrip>


        <
        script >
            $('#select-field1').select2({
                theme: 'bootstrap-5'
            });
    </>
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
        $('#select-field4').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field5').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field6').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field7').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field8').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field9').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field10').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field11').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field12').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field13').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field14').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field15').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field16').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field17').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field18').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field19').select2({
            theme: 'bootstrap-5'
        });
    </script>
    <script>
        $('#select-field20').select2({
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

    <script>
        // Open Pemilik Barang Modal
        document.getElementById("myBtn").onclick = function() {
            document.getElementById("myModal").style.display = "block";
        };

        // Open Penerima Barang Modal
        document.getElementById("myBtn2").onclick = function() {
            document.getElementById("myModal2").style.display = "block";
        };

        // Open Penerima Barang Modal
        document.getElementById("myBtn4").onclick = function() {
            document.getElementById("myModal4").style.display = "block";
        };

        // Open Penerima Barang Modal
        document.getElementById("myBtn5").onclick = function() {
            document.getElementById("myModal5").style.display = "block";
        };
        // Open Penerima Barang Modal
        document.getElementById("myBtn6").onclick = function() {
            document.getElementById("myModal6").style.display = "block";
        };
        document.getElementById("myBtn7").onclick = function() {
            document.getElementById("myModal7").style.display = "block";
        };

        // Close Modal
        document.getElementsByClassName("close")[0].onclick = function() {
            document.getElementById("myModal").style.display = "none";
        };

        document.getElementsByClassName("close")[1].onclick = function() {
            document.getElementById("myModal2").style.display = "none";
        };
        document.getElementsByClassName("close")[2].onclick = function() {
            document.getElementById("myModal4").style.display = "none";
        };

        document.getElementsByClassName("close")[3].onclick = function() {
            document.getElementById("myModal5").style.display = "none";
        };

        document.getElementsByClassName("close")[4].onclick = function() {
            document.getElementById("myModal6").style.display = "none";
        };
        document.getElementsByClassName("close")[5].onclick = function() {
            document.getElementById("myModal7").style.display = "none";
        };
        document.getElementsByClassName("close")[6].onclick = function() {
            document.getElementById("myModal8").style.display = "none";
        };
        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == document.getElementById("myModal")) {
                document.getElementById("myModal").style.display = "none";
            }
            if (event.target == document.getElementById("myModal2")) {
                document.getElementById("myModal2").style.display = "none";
            }
            if (event.target == document.getElementById("myModal4")) {
                document.getElementById("myModal4").style.display = "none";
            }
            if (event.target == document.getElementById("myModal5")) {
                document.getElementById("myModal5").style.display = "none";
            }
            if (event.target == document.getElementById("myModal6")) {
                document.getElementById("myModal6").style.display = "none";
            }
            if (event.target == document.getElementById("myModal7")) {
                document.getElementById("myModal7").style.display = "none";
            }
            if (event.target == document.getElementById("myModal8")) {
                document.getElementById("myModal8").style.display = "none";
            }
        };
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Retrieve the Nomor Pengajuan value
            const nomorAju = document.getElementById('nomorAju').value;

            // Function to handle loading saved data from localStorage for Pemilik Barang
            function loadPemilikBarangData() {
                if (localStorage.getItem(nomorAju + '_pemilik_npwp') && localStorage.getItem(nomorAju +
                        '_pemilik_nama') && localStorage.getItem(nomorAju + '_pemilik_alamat')) {
                    document.getElementById('nitku2').value = localStorage.getItem(nomorAju + '_pemilik_npwp');
                    document.getElementById('kodeJenisIdentitas2').value = localStorage.getItem(nomorAju +
                        '_pemilik_npwp');
                    document.getElementById('namaEntitas2').value = localStorage.getItem(nomorAju +
                        '_pemilik_nama');
                    document.getElementById('alamatEntitas2').value = localStorage.getItem(nomorAju +
                        '_pemilik_alamat');
                }
            }

            // Function to handle loading saved data from localStorage for Penerima Barang
            function loadPenerimaBarangData() {
                if (localStorage.getItem(nomorAju + '_penerima_npwp') && localStorage.getItem(nomorAju +
                        '_penerima_nama') && localStorage.getItem(nomorAju + '_penerima_alamat')) {
                    document.getElementById('nitku3').value = localStorage.getItem(nomorAju + '_penerima_npwp');
                    document.getElementById('kodeJenisIdentitas3').value = localStorage.getItem(nomorAju +
                        '_penerima_npwp');
                    document.getElementById('namaEntitas3').value = localStorage.getItem(nomorAju +
                        '_penerima_nama');
                    document.getElementById('alamatEntitas3').value = localStorage.getItem(nomorAju +
                        '_penerima_alamat');
                }
            }

            // Load data for both modals when the page is ready
            loadPemilikBarangData();
            loadPenerimaBarangData();

            // Add event listener to each "Pilih" button for Pemilik Barang
            document.querySelectorAll('.pilih-btn-1').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const npwp = row.getAttribute('data-npwp');
                    const nama = row.getAttribute('data-nama');
                    const alamat = row.getAttribute('data-alamat');

                    // Save selected data for Pemilik Barang to localStorage
                    localStorage.setItem(nomorAju + '_pemilik_npwp', npwp);
                    localStorage.setItem(nomorAju + '_pemilik_nama', nama);
                    localStorage.setItem(nomorAju + '_pemilik_alamat', alamat);

                    // Fill the form with the selected data for Pemilik Barang
                    document.getElementById('nitku2').value = npwp;
                    document.getElementById('kodeJenisIdentitas2').value = npwp;
                    document.getElementById('namaEntitas2').value = nama;
                    document.getElementById('alamatEntitas2').value = alamat;

                    // Close the modal after selecting the data
                    document.getElementById("myModal").style.display = "none";
                });
            });

            // Add event listener to each "Pilih" button for Penerima Barang
            document.querySelectorAll('.pilih-btn-2').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const npwp = row.getAttribute('data-npwp');
                    const nama = row.getAttribute('data-nama');
                    const alamat = row.getAttribute('data-alamat');

                    // Save selected data for Penerima Barang to localStorage
                    localStorage.setItem(nomorAju + '_penerima_npwp', npwp);
                    localStorage.setItem(nomorAju + '_penerima_nama', nama);
                    localStorage.setItem(nomorAju + '_penerima_alamat', alamat);

                    // Fill the form with the selected data for Penerima Barang
                    document.getElementById('nitku3').value = npwp;
                    document.getElementById('kodeJenisIdentitas3').value = npwp;
                    document.getElementById('namaEntitas3').value = nama;
                    document.getElementById('alamatEntitas3').value = alamat;

                    // Close the modal after selecting the data
                    document.getElementById("myModal2").style.display = "none";
                });
            });
        });

        // Function to close the Pemilik Barang modal
        function closeModal8() {
            document.getElementById("myModal").style.display = "none";
        }

        // Function to close the Penerima Barang modal
        function closeModal9() {
            document.getElementById("myModal2").style.display = "none";
        }
    </script>
    </script>
    {{-- <script>
        // Fungsi untuk mengisi form dengan data yang dipilih
        function populateForm1(kodeJenisIdentitas2, namaEntitas2, alamatEntitas2, nitku2) {
            document.getElementById('nitku2').value = nitku2;
            document.getElementById('kodeJenisIdentitas2').value = kodeJenisIdentitas2;
            document.getElementById('namaEntitas2').value = namaEntitas2;
            document.getElementById('alamatEntitas2').value = alamatEntitas2;
        }

        // Menangani klik tombol Pilih pada setiap baris tabel
        document.querySelectorAll('.pilih-btn-1').forEach(button => {
            button.addEventListener('click', function() {
                // Mengambil data dari atribut 'data-'
                const row = this.closest('tr');
                const kodeJenisIdentitas2 = row.getAttribute('data-npwp') || row.getAttribute(
                        'data-npwp2') || row.getAttribute('data-npwp3') || row.getAttribute('data-npwp4') ||
                    row
                    .getAttribute('data-npwp5') || row.getAttribute('data-npwp6') || row.getAttribute(
                        'data-npwp7') || row.getAttribute('data-npwp8') || row.getAttribute('data-npwp9') ||
                    row.getAttribute('data-npwp10') || row.getAttribute('data-npwp11') || row.getAttribute(
                        'data-npwp12');
                const namaEntitas2 = row.getAttribute('data-nama') || row.getAttribute('data-nama2') || row
                    .getAttribute('data-nama3') || row.getAttribute('data-nama4') || row.getAttribute(
                        'data-nama5') || row.getAttribute('data-nama6') || row.getAttribute('data-nama7') ||
                    row.getAttribute('data-nama8') || row.getAttribute('data-nama9') || row.getAttribute(
                        'data-nama10') || row.getAttribute('data-nama11') || row.getAttribute(
                        'data-nama12');
                const alamatEntitas2 = row.getAttribute('data-alamat') || row.getAttribute(
                    'data-alamat2') || row.getAttribute('data-alamat3') || row.getAttribute(
                    'data-alamat4') || row.getAttribute('data-alamat5') || row.getAttribute(
                    'data-alamat6') || row.getAttribute('data-alamat7') || row.getAttribute(
                    'data-alamat8') || row.getAttribute('data-alamat9') || row.getAttribute(
                    'data-alamat10') || row.getAttribute('data-alamat11') || row.getAttribute(
                    'data-alamat12');
                const nitku2 = row.getAttribute('data-nitku') || row.getAttribute('data-nitku2') || row
                    .getAttribute('data-nitku3') || row.getAttribute('data-nitku4') || row.getAttribute(
                        'data-nitku5') || row.getAttribute('data-nitku6') || row.getAttribute(
                        'data-nitku7') || row.getAttribute('data-nitku8') || row.getAttribute(
                        'data-nitku9') ||
                    row.getAttribute('data-nitku10') || row.getAttribute('data-nitku11') || row
                    .getAttribute('data-nitku12');

                // Memanggil fungsi untuk mengisi form
                populateForm1(kodeJenisIdentitas2, namaEntitas2, alamatEntitas2, nitku2);
                document.getElementById("myModal").style.display = "none"; // Menutup modal setelah memilih
            });
        });
    </script> --}}

    {{--
    <script>
        // Fungsi untuk mengisi form dengan data yang dipilih
        function populateForm2(kodeJenisIdentitas3, namaEntitas3, alamatEntitas3, nitku3) {
            document.getElementById('nitku3').value = nitku3;
            document.getElementById('kodeJenisIdentitas3').value = kodeJenisIdentitas3;
            document.getElementById('namaEntitas3').value = namaEntitas3;
            document.getElementById('alamatEntitas3').value = alamatEntitas3;
        }

        // Menangani klik tombol Pilih pada setiap baris tabel
        document.querySelectorAll('.pilih-btn-2').forEach(button => {
            button.addEventListener('click', function() {
                // Mengambil data dari atribut 'data-'
                const row = this.closest('tr');
                const kodeJenisIdentitas3 = row.getAttribute('data-npwp') || row.getAttribute(
                        'data-npwp2') || row.getAttribute('data-npwp3') || row.getAttribute('data-npwp4') ||
                    row
                    .getAttribute('data-npwp5');
                const namaEntitas3 = row.getAttribute('data-nama') || row.getAttribute('data-nama2') || row
                    .getAttribute('data-nama3') || row.getAttribute('data-nama4') || row.getAttribute(
                        'data-nama5');
                const alamatEntitas3 = row.getAttribute('data-alamat') || row.getAttribute(
                    'data-alamat2') || row.getAttribute('data-alamat3') || row.getAttribute(
                    'data-alamat4') || row.getAttribute('data-alamat5');
                const nitku3 = row.getAttribute('data-nitku') || row.getAttribute('data-nitku2') || row
                    .getAttribute('data-nitku3') || row.getAttribute('data-nitku4') || row.getAttribute(
                        'data-nitku5');

                // Memanggil fungsi untuk mengisi form
                populateForm2(kodeJenisIdentitas3, namaEntitas3, alamatEntitas3, nitku3);
                document.getElementById("myModal2").style.display = "none"; // Menutup modal setelah memilih
            });
        });
    </script> --}}

    <style>
        .btn i {
            font-size: 16px;
            color: #000;
        }

        .btn:hover i {
            color: #007bff;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 100px;
            /* Adjust for centering */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Adjust width */
            max-width: 800px;
            /* Maximum width */
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
            border-radius: 4px;
            /* Rounded corners for inputs */
        }

        .modal-form button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            /* Rounded corners */
        }

        .modal-form button:hover {
            background-color: #45a049;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .button-wrapper {
            display: flex;
            justify-content: center;
            /* Posisikan tombol di tengah secara horizontal */
            align-items: center;
            /* Posisikan tombol di tengah secara vertikal */
            height: 100vh;
            /* Pastikan elemen pembungkus memiliki tinggi penuh layar */
        }

        button[type="button"] {
            padding: 5px 10px;
            background-color: #0abef0;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button[type="button"]:hover {
            background-color: #0abef0;
        }
    </style>


    <!-- Tambahkan sebelum penutupan tag </body> -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "pageLength": 8 // Menetapkan jumlah data per halaman menjadi 5
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(' #dataTable1, #dataTable2, #dataTable3').DataTable();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script>
        // Retrieve the Nomor Pengajuan value from localStorage
        const storedNomorAju = localStorage.getItem('nomorAju');

        if (storedNomorAju) {
            // If a value is found in localStorage, set it as the input's value
            document.getElementById('nomorAju').value = storedNomorAju;
        } else {
            // If no value is found, set a default value (optional)
            const defaultNomorAju = 'default-value'; // You can adjust this default value as needed
            document.getElementById('nomorAju').value = defaultNomorAju;
            localStorage.setItem('nomorAju', defaultNomorAju); // Save default value to localStorage
        }

        // Save the value to localStorage whenever the input field is modified
        document.getElementById('nomorAju').addEventListener('input', function() {
            const currentValue = this.value;
            localStorage.setItem('nomorAju', currentValue);
        });
    </script>



    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 200;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 100px;
            /* Adjust for centering */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Adjust width */
            max-width: 800px;
            /* Maximum width */
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
            border-radius: 4px;
            /* Rounded corners for inputs */
        }

        /* Gaya tombol (untuk tombol dengan warna biru) */
        .modal-form button.btn-save {
            padding: 10px;
            background-color: #007bff;
            /* Biru */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            /* Sudut membulat */
        }

        .modal-form button.btn-save:hover {
            background-color: #0056b3;
            /* Biru lebih gelap saat hover */
        }

        /* Gaya tombol (untuk tombol dengan warna merah) */
        .modal-form button.btn-cancel {
            padding: 10px;
            background-color: #dc3545;
            /* Merah */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            /* Sudut membulat */
        }

        .modal-form button.btn-cancel:hover {
            background-color: #c82333;
            /* Merah lebih gelap saat hover */
        }

        /* Styling untuk tombol button di dalam button-wrapper */
        .button-wrapper button[type="button"] {
            padding: 5px 10px;
            background-color: #007bff;
            /* Biru default */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .button-wrapper button[type="button"]:hover {
            background-color: #0056b3;
            /* Biru lebih gelap saat hover */
        }

        /* Menambahkan tombol Cancel dengan warna merah */
        .button-wrapper .btn-cancel {
            background-color: #dc3545;
            /* Merah */
        }

        .button-wrapper .btn-cancel:hover {
            background-color: #c82333;
            /* Merah lebih gelap saat hover */
        }

        label {
            display: block;
            margin-bottom: 8px;
            /* Sesuaikan nilai ini sesuai kebutuhan */
        }
    </style>


    <script>
        // Fungsi untuk mendapatkan nilai increment terakhir dari penyimpanan lokal
        function getLastIncrement() {
            return parseInt(localStorage.getItem('lastIncrement')) || 0;
        }

        // Fungsi untuk menyimpan nilai increment terbaru ke penyimpanan lokal
        function setLastIncrement(value) {
            localStorage.setItem('lastIncrement', value);
        }

        // Fungsi untuk menghasilkan nilai seri baru
        function generateSeri() {
            let lastIncrement = getLastIncrement();
            let newIncrement = lastIncrement + 1;
            setLastIncrement(newIncrement);
            return newIncrement; // Format: 1, 2, 3, ...
        }

        // Atur nilai input "seri" saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Reset nilai lastIncrement di localStorage saat halaman dimuat
            setLastIncrement(0);
            document.getElementById('seriDokumen2').value = generateSeri();
        });
    </script>

    <script>
        // Fungsi untuk mendapatkan nilai increment terakhir dari penyimpanan lokal
        function getLastIncrement() {
            return parseInt(localStorage.getItem('lastIncrement')) || 0;
        }

        // Fungsi untuk menyimpan nilai increment terbaru ke penyimpanan lokal
        function setLastIncrement(value) {
            localStorage.setItem('lastIncrement', value);
        }

        // Fungsi untuk menghasilkan nilai seri baru
        function generateSeri() {
            let lastIncrement = getLastIncrement();
            let newIncrement = lastIncrement + 1;
            setLastIncrement(newIncrement);
            return newIncrement; // Format: 1, 2, 3, ...
        }

        // Atur nilai input "seri" saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Reset nilai lastIncrement di localStorage saat halaman dimuat
            setLastIncrement(0);
            document.getElementById('seriDokumen3').value = generateSeri();
        });
    </script>

    <script>
        // Fungsi untuk mendapatkan nilai increment terakhir dari penyimpanan lokal
        function getLastIncrement() {
            return parseInt(localStorage.getItem('lastIncrement')) || 0;
        }

        // Fungsi untuk menyimpan nilai increment terbaru ke penyimpanan lokal
        function setLastIncrement(value) {
            localStorage.setItem('lastIncrement', value);
        }

        // Fungsi untuk menghasilkan nilai seri baru
        function generateSeri() {
            let lastIncrement = getLastIncrement();
            let newIncrement = lastIncrement + 1;
            setLastIncrement(newIncrement);
            return newIncrement; // Format: 1, 2, 3, ...
        }

        // Atur nilai input "seri" saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Reset nilai lastIncrement di localStorage saat halaman dimuat
            setLastIncrement(0);
            document.getElementById('seriDokumen4').value = generateSeri();
        });
    </script>
    <script>
        function hitungNilaiPabean() {
            // Ambil nilai NDPBM dari input
            var ndpbm = parseFloat(document.getElementById('ndpbm').value);

            // Ambil nilai CIF dari input dan ganti koma dengan titik
            var cifInput = document.getElementById('cif').value.replace(/,/g, '');
            var cif = parseFloat(cifInput);

            // Pastikan nilai NDPBM dan CIF adalah angka dan bukan NaN
            if (!isNaN(ndpbm) && !isNaN(cif)) {
                // Hitung nilai pabean
                var nilaiPabean = cif * ndpbm;
                // Tampilkan hasil pada input nilai_pabean dengan format ribuan
                document.getElementById('nilai_pabean').value = nilaiPabean.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            } else {
                // Jika input tidak valid, kosongkan nilai_pabean
                document.getElementById('nilai_pabean').value = '';
            }
        }
    </script>

    <script>
        function hitungPPN() {
            // Ambil nilai dasar pengenaan pajak dari input dan ganti koma dengan titik
            var dppInput = document.getElementById('pengenaan_pajak').value.replace(/,/g, '');
            var dpp = parseFloat(dppInput);

            // Ambil nilai tarif PPN dari input
            var ppnTarif = parseFloat(document.getElementById('ppn_tarif').value);

            // Pastikan nilai dasar pengenaan pajak dan tarif PPN adalah angka dan bukan NaN
            if (!isNaN(dpp) && !isNaN(ppnTarif)) {
                // Hitung PPN terutang
                var ppnTerutang = (ppnTarif / 100) * dpp;
                // Tampilkan hasil pada input ppn_hasil dengan format ribuan
                document.getElementById('ppn_hasil').value = ppnTerutang.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            } else {
                // Jika input tidak valid, kosongkan ppn_hasil
                document.getElementById('ppn_hasil').value = '';
            }
        }
    </script>

    <script>
        function hitungPPNBM() {
            // Ambil nilai dasar pengenaan pajak dari input dan ganti koma dengan titik
            var dppInput = document.getElementById('pengenaan_pajak').value.replace(/,/g, '');
            var dpp = parseFloat(dppInput);

            // Ambil nilai tarif PPnBM dari input
            var ppnbTarif = parseFloat(document.getElementById('ppnb_tarif').value);

            // Pastikan nilai DPP dan tarif PPnBM adalah angka dan bukan NaN
            if (!isNaN(dpp) && !isNaN(ppnbTarif)) {
                // Hitung PPnBM terutang
                var ppnbmTerutang = (ppnbTarif / 100) * dpp;
                // Tampilkan hasil pada input ppnb_hasil dengan format ribuan
                document.getElementById('ppnb_hasil').value = ppnbmTerutang.toLocaleString('id-ID', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            } else {
                // Jika input tidak valid, kosongkan ppnb_hasil
                document.getElementById('ppnb_hasil').value = '';
            }
        }
    </script>

    {{-- Fungsi MODAL DOKUMEN  --}}
    <script>
        let idCounter = 1; // Auto-increment ID Dokumen
        let dokumenList = [0]; // Menyimpan index dokumen

        // Buka modal tanpa perlu memanggil tambahDokumen() lagi
        function openModal() {
            document.getElementById('myModal4').style.display = 'block';
        }

        // Simpan dokumen ke dalam tabel
        function simpanDokumen() {
            let dokumenTableBody = document.getElementById("dokumenTableBody");
            dokumenList.forEach(index => {
                let idDokumen = document.getElementById(idDokumen$ {
                    index
                }).value;
                let kodeDokumen = document.getElementById(kodeDokumen$ {
                    index
                }).value;
                let nomorDokumen = document.getElementById(nomorDokumen$ {
                    index
                }).value;
                let seriDokumen = document.getElementById(seriDokumen$ {
                    index
                }).value;
                let tanggalDokumen = document.getElementById(tanggalDokumen$ {
                    index
                }).value;

                if (!idDokumen || !kodeDokumen || !nomorDokumen || !seriDokumen || !tanggalDokumen) {
                    alert("Semua field harus diisi!");
                    return;
                }

                let newRow = `<tr>
                    <td>${idDokumen}</td>
                    <td>${kodeDokumen}</td>
                    <td>${nomorDokumen}</td>
                    <td>${seriDokumen}</td>
                    <td>${tanggalDokumen}</td>
                    <td><button class='btn btn-danger' onclick='hapusBaris(this)'>Hapus</button></td>
                </tr>`;

                dokumenTableBody.innerHTML += newRow;
            });

            dokumenList = [];
            closeModal();
        }

        // Tutup modal
        function closeModal() {
            document.getElementById('myModal4').style.display = 'none';
        }

        // Hapus baris dari tabel
        function hapusBaris(button) {
            let row = button.parentElement.parentElement;
            row.parentElement.removeChild(row);
        }
    </script>


    {{-- Fungsi MODAL PETI --}}
    {{-- <script>
        // Fungsi untuk membuka modal saat tombol "Tambah" diklik
        document.getElementById("myBtn5").addEventListener("click", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            var nextSeriDokumen2 = getNextSeriDokumen2(nomorAju);
            document.getElementById("seriDokumen2").value = nextSeriDokumen2;
            document.getElementById("select-field5").value = ""; // Reset pilihan jenis dokumen
            document.getElementById("jumlah").value = ""; // Reset input jumlah
            document.getElementById("merk").value = ""; // Reset input merk
            document.getElementById("editIndex2").value = ""; // Pastikan editIndex2 kosong untuk mode tambah
            document.getElementById("myModal5").style.display = "block";
        });

        // Fungsi untuk menutup modal
        function closeModal2() {
            document.getElementById("myModal5").style.display = "none";
            document.getElementById("seriDokumen2").value = "";
            document.getElementById("select-field5").value = "";
            document.getElementById("jumlah").value = "";
            document.getElementById("merk").value = "";
            document.getElementById("editIndex2").value = "";
        }

        // Fungsi untuk mendapatkan nomor seriDokumen2 berikutnya
        function getNextSeriDokumen2(nomorAju) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_peti")) || [];
            return storedData.length + 1;
        }

        // Fungsi untuk menyimpan data ke localStorage
        function saveToLocalStorage2(nomorAju, data) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_peti")) || [];
            storedData.push(data);
            localStorage.setItem(nomorAju + "_peti", JSON.stringify(storedData));
        }

        // Fungsi untuk merender tabel dari data yang tersimpan
        function renderTable2(nomorAju) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_peti")) || [];
            let tableBody = document.querySelector("#Table2 tbody");
            tableBody.innerHTML = "";

            storedData.forEach((item, index) => {
                let newRow = document.createElement("tr");
                newRow.innerHTML = `
        <td>${index + 1}</td>
        <td>${item.jenisDokumen2}</td>
        <td>${item.jumlah}</td>
        <td>${item.merk}</td>
        <td>
            <button class="btn btn-edit2" data-index="${index}">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-delete2" data-index="${index}">
                <i class="fa fa-trash"></i>
            </button>
        </td>
    `;
                tableBody.appendChild(newRow);
            });

            // Menambahkan event listener untuk tombol edit
            document.querySelectorAll(".btn-edit2").forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    var nomorAju = document.getElementById("nomorAju").value;
                    editData2(nomorAju, this.getAttribute("data-index"));
                });
            });

            // Menambahkan event listener untuk tombol delete
            document.querySelectorAll(".btn-delete2").forEach(button => {
                button.addEventListener("click", function() {
                    var nomorAju = document.getElementById("nomorAju").value;
                    deleteData2(nomorAju, this.getAttribute("data-index"));
                });
            });
        }

        // Fungsi untuk mengedit data
        function editData2(nomorAju, index) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_peti")) || [];
            let dataToEdit = storedData[index];

            document.getElementById("seriDokumen2").value = dataToEdit.seriDokumen2;
            document.getElementById("select-field5").value = dataToEdit.jenisDokumen2;
            document.getElementById("jumlah").value = dataToEdit.jumlah;
            document.getElementById("merk").value = dataToEdit.merk;
            document.getElementById("editIndex2").value = index;

            document.getElementById("myModal5").style.display = "block";
        }

        // Fungsi untuk menghapus data
        function deleteData2(nomorAju, index) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_peti")) || [];
            storedData.splice(index, 1);

            // Menyesuaikan seriDokumen2 agar tetap berurutan mulai dari 1
            storedData.forEach((item, idx) => {
                item.seriDokumen2 = idx + 1;
            });

            localStorage.setItem(nomorAju + "_peti", JSON.stringify(storedData));
            renderTable2(nomorAju);
        }

        // Event listener untuk tombol simpan
        document.getElementById("btn-save2").addEventListener("click", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            var seriDokumen2 = document.getElementById("seriDokumen2").value;
            var jenisDokumen2 = document.getElementById("select-field5").value;
            var jumlah = document.getElementById("jumlah").value;
            var merk = document.getElementById("merk").value;
            var editIndex2 = document.getElementById("editIndex2").value;

            if (jenisDokumen2 && jumlah && merk) {
                let storedData = JSON.parse(localStorage.getItem(nomorAju + "_peti")) || [];

                if (editIndex2) {
                    // Mode edit: perbarui data yang ada
                    storedData[editIndex2] = {
                        seriDokumen2,
                        jenisDokumen2,
                        jumlah,
                        merk
                    };
                } else {
                    // Mode tambah: tambahkan data baru
                    seriDokumen2 = getNextSeriDokumen2(nomorAju);
                    storedData.push({
                        seriDokumen2,
                        jenisDokumen2,
                        jumlah,
                        merk
                    });
                }

                // Simpan data ke localStorage
                localStorage.setItem(nomorAju + "_peti", JSON.stringify(storedData));

                // Render ulang tabel
                renderTable2(nomorAju);

                // Tutup modal
                closeModal2();
            } else {
                alert("Harap isi semua field!");
            }
        });

        // Load data and render table when the page loads
        window.addEventListener("load", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            renderTable2(nomorAju);
        });
    </script> --}}

    {{-- Fungsi MODAL PETI KEMASAN --}}
    {{-- <script>
        // Fungsi untuk membuka modal saat tombol "Tambah" diklik
        document.getElementById("myBtn6").addEventListener("click", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            var nextSeriDokumen3 = getNextSeriDokumen3(nomorAju);
            document.getElementById("seriDokumen3").value = nextSeriDokumen3;
            document.getElementById("nomor2").value = ""; // Reset input nomor
            document.getElementById("select-field6").value = ""; // Reset pilihan ukuran
            document.getElementById("select-field7").value = ""; // Reset pilihan jenis
            document.getElementById("Tipe").value = ""; // Reset input tipe
            document.getElementById("editIndex3").value = ""; // Pastikan editIndex3 kosong untuk mode tambah
            document.getElementById("myModal6").style.display = "block";
        });

        // Fungsi untuk menutup modal
        function closeModal3() {
            document.getElementById("myModal6").style.display = "none";
            document.getElementById("seriDokumen3").value = "";
            document.getElementById("nomor2").value = "";
            document.getElementById("select-field6").value = "";
            document.getElementById("select-field7").value = "";
            document.getElementById("Tipe").value = "";
            document.getElementById("editIndex3").value = "";
        }

        // Fungsi untuk mendapatkan nomor seriDokumen3 berikutnya
        function getNextSeriDokumen3(nomorAju) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_kemas")) || [];
            return storedData.length + 1;
        }

        // Fungsi untuk menyimpan data ke localStorage
        function saveToLocalStorage3(nomorAju, data) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_kemas")) || [];
            storedData.push(data);
            localStorage.setItem(nomorAju + "_kemas", JSON.stringify(storedData));
        }

        // Fungsi untuk merender tabel dari data yang tersimpan
        function renderTable3(nomorAju) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_kemas")) || [];
            let tableBody = document.querySelector("#Table3 tbody");
            tableBody.innerHTML = "";

            storedData.forEach((item, index) => {
                let newRow = document.createElement("tr");
                newRow.innerHTML = `
                <td>${item.seriDokumen3}</td>
                <td>${item.nomor2}</td>
                <td>${item.ukuran}</td>
                <td>${item.jenis}</td>
                <td>${item.Tipe}</td>
                <td>
                    <button class="btn btn-edit3" data-index="${index}">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-delete3" data-index="${index}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            `;
                tableBody.appendChild(newRow);
            });

            // Menambahkan event listener untuk tombol edit
            document.querySelectorAll(".btn-edit3").forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    var nomorAju = document.getElementById("nomorAju").value;
                    editData3(nomorAju, this.getAttribute("data-index"));
                });
            });

            // Menambahkan event listener untuk tombol delete
            document.querySelectorAll(".btn-delete3").forEach(button => {
                button.addEventListener("click", function() {
                    var nomorAju = document.getElementById("nomorAju").value;
                    deleteData3(nomorAju, this.getAttribute("data-index"));
                });
            });
        }
        // Fungsi untuk mengedit data
        function editData3(nomorAju, index) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_kemas")) || [];
            let dataToEdit = storedData[index];

            // Mengisi form modal dengan data yang akan diedit
            document.getElementById("seriDokumen3").value = dataToEdit.seriDokumen3;
            document.getElementById("nomor2").value = dataToEdit.nomor2;
            document.getElementById("select-field6").value = dataToEdit.ukuran;
            document.getElementById("select-field7").value = dataToEdit.jenis;
            document.getElementById("Tipe").value = dataToEdit.Tipe;
            document.getElementById("editIndex3").value = index;

            // Menampilkan modal
            document.getElementById("myModal6").style.display = "block";
        }

        // Fungsi untuk menghapus data
        function deleteData3(nomorAju, index) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju + "_kemas")) || [];
            storedData.splice(index, 1);

            // Menyesuaikan seriDokumen3 agar tetap berurutan mulai dari 1
            storedData.forEach((item, idx) => {
                item.seriDokumen3 = idx + 1;
            });

            localStorage.setItem(nomorAju + "_kemas", JSON.stringify(storedData));
            renderTable3(nomorAju);
        }

        // Event listener untuk tombol simpan
        document.getElementById("btn-save3").addEventListener("click", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            var seriDokumen3 = document.getElementById("seriDokumen3").value;
            var nomor2 = document.getElementById("nomor2").value;
            var ukuran = document.getElementById("select-field6").value;
            var jenis = document.getElementById("select-field7").value;
            var Tipe = document.getElementById("Tipe").value;
            var editIndex3 = document.getElementById("editIndex3").value;

            if (nomor2 && ukuran && jenis && Tipe) {
                let storedData = JSON.parse(localStorage.getItem(nomorAju + "_kemas")) || [];

                if (editIndex3) {
                    // Mode edit: update existing data
                    storedData[editIndex3] = {
                        seriDokumen3,
                        nomor2,
                        ukuran,
                        jenis,
                        Tipe
                    };
                } else {
                    // Mode add: add new data
                    seriDokumen3 = getNextSeriDokumen3(nomorAju);
                    storedData.push({
                        seriDokumen3,
                        nomor2,
                        ukuran,
                        jenis,
                        Tipe
                    });
                }

                // Save data to localStorage
                localStorage.setItem(nomorAju + "_kemas", JSON.stringify(storedData));

                // Re-render the table
                renderTable3(nomorAju);

                // Close the modal
                closeModal3();
            } else {
                alert("Please fill in all fields!");
            }
        });


        window.addEventListener("load", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            renderTable3(nomorAju);
        });
    </script> --}}
@endsection
