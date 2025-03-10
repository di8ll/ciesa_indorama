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
                                            data-bs-target="#kemasan" type="button" role="tab" aria-controls="kemasan"
                                            aria-selected="false">Kemasan & Peti
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
                                        <button class="nav-link" id="bahanbakuimpor-tab" data-bs-toggle="tab"
                                            data-bs-target="#bahanbakuimpor" type="button" role="tab" aria-controls="bahanbakuimpor"
                                            aria-selected="false">Bahan Baku Impor</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="bahanbakuekspor-tab" data-bs-toggle="tab"
                                            data-bs-target="#bahanbakuekspor" type="button" role="tab" aria-controls="bahanbakuekspor"
                                            aria-selected="false">Bahan Baku Ekspor</button>
                                    </li>
                                    {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pungutan-tab" data-bs-toggle="tab"
                                            data-bs-target="#pungutan" type="button" role="tab"
                                            aria-controls="pungutan" aria-selected="false">Pungutan</button>
                                    </li> --}}
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
                                                    value="{{ old('kodeKantor', '050800') }}"
                                                    readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="kodeJenisTpb" class="form-label">Jenis TPB</label>
                                                <select class="form-control" id="select-field18" name="kodeJenisTpb">
                                                    <option value="1" selected>1 - KAWASAN BERIKAT
                                                    <option value="2" selected>2 - GUDANG BERIKAT
                                                    </option>
                                                    <option value="3">3 - TPPB</option>
                                                    <option value="4">4 - TBB</option>
                                                    <option value="5">5 - TLB</option>
                                                    <option value="6">6 - KDUB</option>
                                                    <option value="7">7 - PLB</option>
                                                    <option value="8">8 - LAINNYA</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <label for="kodeTujuanPengiriman" class="form-label">Tujuan
                                                    Pengiriman</label>
                                                <input type="text" class="form-control" id="kodeTujuanPengiriman"
                                                    name="kodeTujuanPengiriman"
                                                    value="{{ old('kodeTujuanPengiriman', '1') }}"
                                                    readonly style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="kodeJenisTpb" class="form-label">Cara Bayar</label>
                                                <select class="form-control" id="select-field19" name="kodeCaraBayar">
                                                    <option value="1" selected>1 - BIASA / TUNAI</option>
                                                    <option value="2" selected>2 - BERKALA</option>
                                                    <option value="3" selected>3 - DENGAN JAMINAN</option>
                                                    <option value="4" selected>4 - PERHITUNGAN KEMUDIAN</option>
                                                    <option value="5" selected>5 - KONSINYASI (CONSIGNMENT)</option>
                                                    <option value="6" selected>6 - USANCE LETTER OF CREDIT</option>
                                                    <option value="7" selected>7 - RED CLAUSE LETTER OF CREDIT</option>
                                                    <option value="8" selected>8 - INTER-COMPANY ACCOUNT</option>
                                                    <option value="9" selected>9 - GABUNGAN/LAINNYA</option>
                                                    <option
                                                        value="10">10
                                                        - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA BERTAHAP)</option>
                                                    <option value="11">
                                                        11 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA TUNAI)</option>
                                                    <option value="12">12 -
                                                        DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI </option>
                                                    <option
                                                        value="13">
                                                        13 - DILAKUKAN DI DN DENGAN PEMBAYARAN MELALUI TELEGRAPH TRANSFER
                                                        (T/T)</option>
                                                    <option value="14">14 TELEGRAPH TRANSFER (T/T)
                                                    </option>
                                                    <option value="15">15 PEMBAYARAN DIMUKA</option>
                                                    <option value="16">16 SIGHT LETTER OF CREDIT
                                                    </option>
                                                    <option value="17">17 INKASO (COLLECTION
                                                        DRAFT)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                   {{-- Bahan Baku Tarif --}}
                                            {{-- <div class="col-md-3 d-none">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif5"
                                                name="bahanBakuTarif[0][kodeJenisTarif]" value="{{ old('kodeJenisTarif', "1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="jumlahSatuan8" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan8"
                                                name="bahanBakuTarif[0][jumlahSatuan]" value="{{ old('jumlahSatuan',7.9) }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif6"
                                                name="bahanBakuTarif[0][kodeFasilitasTarif]" value="{{ old('kodeFasilitasTarif','1') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan5"
                                                name="bahanBakuTarif[0][kodeJenisPungutan]" value="{{ old('kodeJenisPungutan',"5") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar5"
                                                name="bahanBakuTarif[0][nilaiBayar]" value="{{ old('nilaiBayar', 0) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas5"
                                                name="bahanBakuTarif[0][nilaiFasilitas]" value="{{ old('nilaiFasilitas',0) }}">

                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi5"
                                                name="bahanBakuTarif[0][nilaiSudahDilunasi]" value="{{ old('nilaiSudahDilunasi',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control" id="seriBahanBaku3"
                                                name="bahanBakuTarif[0][seriBahanBaku]" value="{{ old('seriBahanBaku',2) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif5"
                                                name="bahanBakuTarif[0][tarif]"  value="{{ old('tarif',11) }}" >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas5"
                                                name="bahanBakuTarif[0][tarifFasilitas]" value="{{ old('tarifFasilitas',100) }}"
                                                    >
                                            </div> --}}

                                         {{--Barang Tarif 1--}}
{{--
                                                    <div class="col-md-3 d-none">
                                                        <label for="seriBarang" class="form-label">seri Barang</label>
                                                        <input type="text" class="form-control" id="seriBarang3" name="barangTarif[0][seriBarang]" value="{{ old('seriBarang', 1) }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                        <input type="text" class="form-control" id="kodeJenisTarif2" name="barangTarif[0][kodeJenisTarif]" value="{{ old('kodeJenisTarif', '1') }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="jumlahSatuan" class="form-label">jumlah Satuan</label>
                                                        <input type="text" class="form-control" id="jumlahSatuan4" name="barangTarif[0][jumlahSatuan]" value="{{ old('jumlahSatuan', 100) }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas Tarif</label>
                                                        <input type="text" class="form-control" id="kodeFasilitasTarif2" name="barangTarif[0][kodeFasilitasTarif]" value="{{ old('kodeFasilitasTarif', 'FT001') }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="kodeSatuanBarang" class="form-label">kode Satuan Barang</label>
                                                        <input type="text" class="form-control" id="kodeSatuanBarang3" name="barangTarif[0][kodeSatuanBarang]" value="{{ old('kodeSatuanBarang', 'PCS') }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="kodeJenisPungutan" class="form-label">kode Jenis Pungutan</label>
                                                        <input type="text" class="form-control" id="kodeJenisPungutan2" name="barangTarif[0][kodeJenisPungutan]" value="{{ old('kodeJenisPungutan', 'BM') }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                        <input type="text" class="form-control" id="nilaiBayar2" name="barangTarif[0][nilaiBayar]" value="{{ old('nilaiBayar', 5000.00) }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                        <input type="text" class="form-control" id="nilaiFasilitas2" name="barangTarif[0][nilaiFasilitas]" value="{{ old('nilaiFasilitas', 2000.00) }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah Dilunasi</label>
                                                        <input type="text" class="form-control" id="nilaiSudahDilunasi2" name="barangTarif[0][nilaiSudahDilunasi]" value="{{ old('nilaiSudahDilunasi', 3000) }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="tarif" class="form-label">tarif</label>
                                                        <input type="text" class="form-control" id="tarif2" name="barangTarif[0][tarif]" value="{{ old('tarif', 1) }}">
                                                    </div>
                                                    <div class="col-md-3  d-none">
                                                        <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                        <input type="text" class="form-control" id="tarifFasilitas2" name="barangTarif[0][tarifFasilitas]" value="{{ old('tarifFasilitas', 1) }}">
                                                    </div>

                                                <div class="col-md-3 d-none">
                                                    <label for="seriBarang" class="form-label">seri Barang</label>
                                                    <input type="text" class="form-control" id="seriBarang4" name="barangTarif[1][seriBarang]" value="{{ old('seriBarang', 1) }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                    <input type="text" class="form-control" id="kodeJenisTarif3" name="barangTarif[1][kodeJenisTarif]" value="{{ old('kodeJenisTarif', '1') }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="jumlahSatuan" class="form-label">jumlah Satuan</label>
                                                    <input type="text" class="form-control" id="jumlahSatuan5" name="barangTarif[1][jumlahSatuan]" value="{{ old('jumlahSatuan', 100) }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas Tarif</label>
                                                    <input type="text" class="form-control" id="kodeFasilitasTarif3" name="barangTarif[1][kodeFasilitasTarif]" value="{{ old('kodeFasilitasTarif', 'FT001') }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="kodeSatuanBarang" class="form-label">kode Satuan Barang</label>
                                                    <input type="text" class="form-control" id="kodeSatuanBarang4" name="barangTarif[1][kodeSatuanBarang]" value="{{ old('kodeSatuanBarang', 'PCS') }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="kodeJenisPungutan" class="form-label">kode Jenis Pungutan</label>
                                                    <input type="text" class="form-control" id="kodeJenisPungutan3" name="barangTarif[1][kodeJenisPungutan]" value="{{ old('kodeJenisPungutan', 'BM') }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                    <input type="text" class="form-control" id="nilaiBayar3" name="barangTarif[1][nilaiBayar]" value="{{ old('nilaiBayar', 5000.00) }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                    <input type="text" class="form-control" id="nilaiFasilitas3" name="barangTarif[1][nilaiFasilitas]" value="{{ old('nilaiFasilitas', 2000.00) }}">
                                                </div>
                                                <div class="col-md-3 d-none">
                                                    <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah Dilunasi</label>
                                                    <input type="text" class="form-control" id="nilaiSudahDilunasi3" name="barangTarif[1][nilaiSudahDilunasi]" value="{{ old('nilaiSudahDilunasi', 3000) }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="tarif" class="form-label">tarif</label>
                                                    <input type="text" class="form-control" id="tarif3" name="barangTarif[1][tarif]" value="{{ old('tarif', 1) }}">
                                                </div>
                                                <div class="col-md-3  d-none">
                                                    <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                    <input type="text" class="form-control" id="tarifFasilitas3" name="barangTarif[1][tarifFasilitas]" value="{{ old('tarifFasilitas', 1) }}">
                                                </div>
                                                <div class="col-md-3 d-none">
                                                 <label for="jumlahSatuan6" class="form-label">jumlah Satuan</label>
                                                 <input type="text" class="form-control" id="jumlahSatuan6"
                                                     name="jumlahSatuan" value="{{ old('jumlahSatuan',908.18) }}" autofocus
                                                     required>
                                             </div>
                                             <div class="col-md-3  d-none">
                                                 <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                     Tarif</label>
                                                 <input type="text" class="form-control" id="kodeFasilitasTarif4"
                                                     name="kodeFasilitasTarif" value="{{ old('kodeFasilitasTarif',"1") }}"
                                                     >
                                             </div> --}}


                                    {{-- kode Jenis Pungutan --}}

                                            {{-- <div class="col-md-3 d-none">
                                                <label for="jumlahSatuan7" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan7"
                                                name="kodeJenisPungutan[0][jumlahSatuan]" name="jumlahSatuan7" value="{{ old('jumlahSatuan',19455.4) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif5"
                                                name="kodeJenisPungutan[0][kodeFasilitasTarif]" value="{{ old('kodeFasilitasTarif',"1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan4"
                                                name="kodeJenisPungutan[0][kodeJenisPungutan]"  value="{{ old('kodeJenisPungutan',"PPH") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif4"
                                                name="kodeJenisPungutan[0][kodeJenisTarif]" value="{{ old('kodeJenisTarif','1') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeSatuanBarang" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeSatuanBarang5"
                                                name="kodeJenisPungutan[0][kodeSatuanBarang]" value="{{ old('kodeSatuanBarang',"KGM") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar4"
                                                name="kodeJenisPungutan[0][nilaiBayar]" value="{{ old('nilaiBayar',0) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas4"
                                                name="kodeJenisPungutan[0][nilaiFasilitas]" value="{{ old('nilaiFasilitas', 0) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi4"
                                                name="kodeJenisPungutan[0][nilaiSudahDilunasi]" value="{{ old('nilaiSudahDilunasi',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif4"
                                                name="kodeJenisPungutan[0][tarif]"  value="{{ old('tarif',2.5) }}" >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas4"
                                                name="kodeJenisPungutan[0][tarifFasilitas]"  value="{{ old('tarifFasilitas',100) }}"
                                                    >
                                            </div> --}}
                                            <div class="col-md-3 d-none">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control" id="seriDokumen2"
                                                name="barangDokumen[0][seriDokumen]" value="{{ old('seriDokumen', 0) }}" >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="seriIjin" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control" id="seriIjin3"
                                                name="barangDokumen[0][seriIjin]"  value="{{ old('seriIjin', 0) }}" >
                                            </div>
                                                                                        <div class="col-md-3 d-none">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control" id="seriDokumen2"
                                                name="barangDokumen[1][seriDokumen]" value="{{ old('seriDokumen', 0) }}" >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="seriIjin" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control" id="seriIjin3"
                                                name="barangDokumen[1][seriIjin]"  value="{{ old('seriIjin', 0) }}" >
                                            </div>

                                     {{-- Bahan Baku Tarif --}}

                                            {{-- <div class="col-md-3 d-none">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif5"
                                                name="bahanBakuTarif[0][kodeJenisTarif]" value="{{ old('kodeJenisTarif', "1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="jumlahSatuan8" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan8"
                                                name="bahanBakuTarif[0][jumlahSatuan]" value="{{ old('jumlahSatuan',7.9) }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif6"
                                                name="bahanBakuTarif[0][kodeFasilitasTarif]" value="{{ old('kodeFasilitasTarif','1') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan5"
                                                name="bahanBakuTarif[0][kodeJenisPungutan]" value="{{ old('kodeJenisPungutan',"5") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar5"
                                                name="bahanBakuTarif[0][nilaiBayar]" value="{{ old('nilaiBayar', 0) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas5"
                                                name="bahanBakuTarif[0][nilaiFasilitas]" value="{{ old('nilaiFasilitas',0) }}"
                                                    >

                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi5"
                                                name="bahanBakuTarif[0][nilaiSudahDilunasi]" value="{{ old('nilaiSudahDilunasi',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control" id="seriBahanBaku3"
                                                name="bahanBakuTarif[0][seriBahanBaku]" value="{{ old('seriBahanBaku',2) }}">
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif5"
                                                name="bahanBakuTarif[0][tarif]"  value="{{ old('tarif',11) }}" >
                                            </div>
                                            <div class="col-md-3 d-none">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas5"
                                                name="bahanBakuTarif[0][tarifFasilitas]" value="{{ old('tarifFasilitas',100) }}"
                                                    >
                                            </div> --}}

                                    {{-- ini belum beres --}}

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
                                                           placeholder="5 - NPWP 15 DIGIT"readonly
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
                                                            value="{{ old('kodeJenisIdentitas', '5') }}">
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
                                                        <table id="dataTable" class="display">
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
                                                            placeholder="5 - NPWP 15 DIGIT" readonly
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
                                                            value="{{ old('kodeJenisIdentitas', '5') }}">
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
                                    {{-- <div class="tab-pane fade" id="dokumen" role="tabpanel"
                                    aria-labelledby="dokumen-tab">
                                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                        <h5 class="text-primary">Inputan Ke 1</h5>
                                        <div class="col-md-3">
                                            <label for="idDokumen" class="form-label">id Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="idDokumen"  name="dokumen[0][idDokumen]"
                                                value="{{ old('idDokumen','1') }}" >
                                        </div>


                                        <div class="col-md-3">
                                            <label for="kodeDokumen2" class="form-label">Kode Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                    id="kodeDokumen2"  name="dokumen[0][kodeDokumen]"
                                                    value="{{ old('kodeDokumen','380') }}">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="nomorDokumen" class="form-label">nomor Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="nomorDokumen" name="dokumen[0][nomorDokumen]"
                                                value="{{ old('nomorDokumen','612500427') }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriDokumen3" name="dokumen[0][seriDokumen]"
                                                value="{{ old('seriDokumen',1) }}" step="any" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tanggalDokumen" class="form-label">tanggal Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="tanggalDokumen" name="dokumen[0][tanggalDokumen]"
                                                value="{{ old('tanggalDokumen',"2025-02-04") }}" >
                                        </div>
                                    </div>

                                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                        <h5 class="text-primary">Inputan Ke 2</h5>
                                        <div class="col-md-3">
                                            <label for="idDokumen" class="form-label">id Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="idDokumen2" name="dokumen[1][idDokumen]"
                                                value="{{ old('idDokumen',"2") }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="kodeDokumen3" class="form-label">kode Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="kodeDokumen3"  name="dokumen[1][kodeDokumen]"
                                                value="{{ old('kodeDokumen',"217") }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="nomorDokumen" class="form-label">nomor Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="nomorDokumen2" name="dokumen[1][nomorDokumen]"
                                                value="{{ old('nomorDokumen','612500427') }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriDokumen4"  name="dokumen[1][seriDokumen]"
                                                value="{{ old('seriDokumen',2) }}" step="any">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tanggalDokumen" class="form-label">tanggal Dokumen</label>
                                            <input type="text" class="form-control border-primary"
                                                id="tanggalDokumen2" name="dokumen[1][tanggalDokumen]"
                                                value="{{ old('tanggalDokumen','2025-02-04') }}" >
                                        </div>
                                    </div>

                                    </div> --}}


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
                                                                    <table class="table table-bordered" id="dataTable">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Seri</th>
                                                                                <th>Jenis</th>
                                                                                <th>Nomor</th>
                                                                                <th>Tanggal</th>
                                                                                <th>Fasilitas</th>
                                                                                <th>Izin</th>
                                                                                <th>Kantor</th>
                                                                                <th>File</th>
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
                                                        <button type="button" class="btn btn-primary"
                                                        onclick="editDokumen()">Edit</button>
                                                    <button type="button" class="btn-cancel"
                                                        onclick="closeModal()">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Kode Modal Dokumen -->
                                    <script>
                                        (function() {
                                            let dokumenList = JSON.parse(localStorage.getItem('dokumenList')) || [];

                                            // Fungsi untuk menginisialisasi tabel dokumen
                                            window.initializeDokumenTable = function() {
                                                let dokumenTableBody = document.getElementById("dokumenTableBody");
                                                dokumenTableBody.innerHTML = "";  // Clear tabel sebelumnya
                                                const nomorAjuFilter = localStorage.getItem('nomorAju');
                                                const filteredDokumenList = dokumenList.filter(dokumen => dokumen.nomorAju === nomorAjuFilter);

                                                // Loop untuk menambahkan baris tabel dari filteredDokumenList
                                                filteredDokumenList.forEach((dokumen, index) => {
                                                    let newRow = `<tr>
                                                        <td>${dokumen.seriDokumen}</td>
                                                        <td>${dokumen.kodeDokumen}</td>
                                                        <td>${dokumen.nomorDokumen}</td>
                                                        <td>${dokumen.tanggalDokumen}</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><button class="btn btn-danger" onclick="hapusBaris(${index})">Hapus</button></td>
                                                        </tr>`;
                                                    dokumenTableBody.innerHTML += newRow; // Menambahkan baris ke dalam body tabel
                                                });
                                            }

                                            // Fungsi untuk membuka modal
                                            window.openModal = function() {
                                                document.getElementById('myModal4').style.display = 'block';
                                                tambahDokumen();
                                                editDokumen();
                                            }

                                            // Fungsi untuk menambah form dokumen baru
                                            window.tambahDokumen = function() {
                                                let index = dokumenList.length;
                                                let dokumenContainer = document.getElementById('dokumenContainer');
                                                let dokumenForm = document.createElement('div');
                                                dokumenForm.classList.add('dokumen-form');
                                                dokumenForm.setAttribute('id', 'dokumenForm' + index);

                                                const nomorAjuFilter = localStorage.getItem('nomorAju');
                                                const filteredDokumenList = dokumenList.filter(dokumen => dokumen.nomorAju === nomorAjuFilter);
                                                const nextIdDokumen = filteredDokumenList.length + 1;
                                                const nextSeriDokumen = filteredDokumenList.length + 1;

                                                dokumenForm.innerHTML = `
                                                <div class="col-md-12 d-none">
                                                    <label for="dokumen[${index}][idDokumen]" class="form-label">ID Dokumen</label>
                                                    <input type="text" class="form-control border-primary" value="${nextIdDokumen}" name="dokumen[${index}][idDokumen]" id="idDokumen${index}" readonly>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="dokumen[${index}][seriDokumen]" class="form-label">Seri</label>
                                                    <input type="text" class="form-control border-primary" value="${nextSeriDokumen}" name="dokumen[${index}][seriDokumen]" id="seriDokumen${index}" readonly>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="kodeDokumen${index}" class="form-label">Jenis Dokumen</label>
                                                    <input
                                                        type="search"
                                                        class="form-control border-primary select-field"
                                                        name="dokumen[${index}][kodeDokumen]"
                                                        id="kodeDokumen${index}"
                                                        placeholder="Cari Jenis Dokumen"
                                                        list="dokumenList${index}">
                                                    <datalist id="dokumenList${index}">
                                                        @foreach ($referensidokumen as $dokumen)
                                                            <option value="{{ $dokumen->kode_dokumen }}">
                                                                {{ $dokumen->nama_dokumen }}
                                                            </option>
                                                        @endforeach
                                                    </datalist>
                                                </div>

                                                <br>
                                                <div class="col-md-12">
                                                    <label for="dokumen[${index}][nomorDokumen]" class="form-label">Nomor Dokumen</label>
                                                    <input type="text" class="form-control border-primary" name="dokumen[${index}][nomorDokumen]" id="nomorDokumen${index}">
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

                                            // Fungsi untuk menyimpan dokumen secara individu
                                            window.simpanDokumenIndividual = function(index) {
                                                let kodeDokumen = document.getElementById(`kodeDokumen${index}`).value;
                                                let nomorDokumen = document.getElementById(`nomorDokumen${index}`).value;
                                                let tanggalDokumen = document.getElementById(`tanggalDokumen${index}`).value;
                                                let nomorAju = localStorage.getItem('nomorAju');

                                                if (!kodeDokumen || !nomorDokumen || !tanggalDokumen) {
                                                    alert("Semua field harus diisi!");
                                                    return;
                                                }

                                                const filteredDokumenList = dokumenList.filter(dokumen => dokumen.nomorAju === nomorAju);
                                                const idDokumen = filteredDokumenList.length + 1;
                                                const seriDokumen = filteredDokumenList.length + 1;
                                                let dokumen = {
                                                    idDokumen: idDokumen,
                                                    kodeDokumen: kodeDokumen,
                                                    nomorDokumen: nomorDokumen,
                                                    seriDokumen: seriDokumen,
                                                    tanggalDokumen: tanggalDokumen,
                                                    nomorAju: nomorAju
                                                };

                                                dokumenList.push(dokumen);
                                                localStorage.setItem('dokumenList', JSON.stringify(dokumenList));
                                                initializeDokumenTable(); // Refresh tabel setelah data disimpan
                                                document.getElementById('dokumenForm' + index).style.display = 'none';
                                            }

                                            // Fungsi untuk mengedit dokumen berdasarkan seriDokumen
                                            window.editDokumen = function() {
                                                let dokumenContainer = document.getElementById('dokumenContainer');

                                                // Mencari dokumen berdasarkan seriDokumen
                                                let seriDokumenEdit = prompt("Masukkan Seri Dokumen yang ingin diedit:");
                                                if (!seriDokumenEdit) return;  // Jika tidak ada input, keluar dari fungsi

                                                let dokumenToEdit = dokumenList.find(dokumen => dokumen.seriDokumen == seriDokumenEdit);

                                                if (!dokumenToEdit) {
                                                    alert("Dokumen dengan Seri Dokumen " + seriDokumenEdit + " tidak ditemukan.");
                                                    return;
                                                }

                                                // Membuat form untuk mengedit dokumen
                                                let index = dokumenList.indexOf(dokumenToEdit);
                                                let dokumenForm = document.createElement('div');
                                                dokumenForm.classList.add('dokumen-form');
                                                dokumenForm.setAttribute('id', 'dokumenForm' + index);

                                                dokumenForm.innerHTML = `
                                                    <div class="col-md-12 d-none">
                                                        <label for="dokumen[${index}][idDokumen]" class="form-label">ID Dokumen</label>
                                                        <input type="text" class="form-control border-primary" value="${dokumenToEdit.idDokumen}" name="dokumen[${index}][idDokumen]" id="idDokumen${index}" readonly>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="dokumen[${index}][seriDokumen]" class="form-label">Seri</label>
                                                        <input type="text" class="form-control border-primary" value="${dokumenToEdit.seriDokumen}" name="dokumen[${index}][seriDokumen]" id="seriDokumen${index}" readonly>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="kodeDokumen${index}" class="form-label">Jenis Dokumen</label>
                                                        <input type="search" class="form-control border-primary select-field" name="dokumen[${index}][kodeDokumen]" id="kodeDokumen${index}" placeholder="Cari Jenis Dokumen" list="dokumenList${index}">
                                                        <datalist id="dokumenList${index}">
                                                            @foreach ($referensidokumen as $dokumen)
                                                                <option value="{{ $dokumen->kode_dokumen }}">{{ $dokumen->nama_dokumen }}</option>
                                                            @endforeach
                                                        </datalist>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <label for="dokumen[${index}][nomorDokumen]" class="form-label">Nomor Dokumen</label>
                                                        <input type="text" class="form-control border-primary" value="${dokumenToEdit.nomorDokumen}" name="dokumen[${index}][nomorDokumen]" id="nomorDokumen${index}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="dokumen[${index}][tanggalDokumen]" class="form-label">Tanggal Dokumen</label>
                                                        <input type="date" class="form-control border-primary" value="${dokumenToEdit.tanggalDokumen}" name="dokumen[${index}][tanggalDokumen]" id="tanggalDokumen${index}">
                                                    </div>
                                                    <button type="button" class="btn btn-primary" onclick="simpanDokumenEdit(${index})">Simpan Perubahan</button>
                                                    <button type="button" class="btn btn-danger" onclick="hapusDokumen(this, ${index})">Hapus</button>
                                                    <hr>
                                                `;

                                                dokumenContainer.appendChild(dokumenForm);
                                            }

                                            // Fungsi untuk menyimpan perubahan dokumen setelah di-edit
                                            window.simpanDokumenEdit = function(index) {
                                                let kodeDokumen = document.getElementById(`kodeDokumen${index}`).value;
                                                let nomorDokumen = document.getElementById(`nomorDokumen${index}`).value;
                                                let tanggalDokumen = document.getElementById(`tanggalDokumen${index}`).value;

                                                if (!kodeDokumen || !nomorDokumen || !tanggalDokumen) {
                                                    alert("Semua field harus diisi!");
                                                    return;
                                                }

                                                // Perbarui data dokumen yang sudah ada
                                                let dokumen = dokumenList[index];
                                                dokumen.kodeDokumen = kodeDokumen;
                                                dokumen.nomorDokumen = nomorDokumen;
                                                dokumen.tanggalDokumen = tanggalDokumen;

                                                // Simpan data dokumen yang telah diperbarui
                                                localStorage.setItem('dokumenList', JSON.stringify(dokumenList));

                                                // Refresh tabel setelah data disimpan
                                                initializeDokumenTable();

                                                // Tutup form edit
                                                document.getElementById('dokumenForm' + index).style.display = 'none';
                                            }

                                            // Fungsi untuk menghapus dokumen dari form
                                            window.hapusDokumen = function(button, index) {
                                                let dokumenContainer = document.getElementById('dokumenContainer');
                                                dokumenContainer.removeChild(button.parentElement);
                                                dokumenList.splice(index, 1);
                                                localStorage.setItem('dokumenList', JSON.stringify(dokumenList));

                                                reindexDokumenList();
                                                initializeDokumenTable();
                                            }

                                            // Fungsi untuk mengatur ulang index dokumen setelah dihapus
                                            function reindexDokumenList() {
                                                let nomorAjuFilter = localStorage.getItem('nomorAju');
                                                dokumenList.filter(dokumen => dokumen.nomorAju === nomorAjuFilter).forEach((dokumen, index) => {
                                                    dokumen.idDokumen = index + 1;
                                                    dokumen.seriDokumen = index + 1;
                                                });
                                                localStorage.setItem('dokumenList', JSON.stringify(dokumenList));
                                            }

                                            // Fungsi untuk menghapus baris tabel dokumen
                                            window.hapusBaris = function(index) {
                                                dokumenList.splice(index, 1);
                                                localStorage.setItem('dokumenList', JSON.stringify(dokumenList));
                                                reindexDokumenList();
                                                initializeDokumenTable();
                                            }

                                            // Fungsi untuk menutup modal
                                            window.closeModal = function() {
                                                document.getElementById('myModal4').style.display = 'none';
                                            }

                                            // Panggil fungsi inisialisasi tabel saat halaman dimuat
                                            initializeDokumenTable();

                                        })();
                                        </script>


                                    {{-- <div class="col-md-3 d-none">
                                                        <label for="kodeJenisKontainer" class="form-label">kode Jenis
                                                            Kontainer</label>
                                                        <input type="text" class="form-control"
                                                            id="kodeJenisKontainer"
                                                            name="kontainer[0][kodeJenisKontainer]"
                                                            value="{{ old('kodeJenisKontainer', '4') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="kodeTipeKontainer" class="form-label">kode Tipe
                                                            Kontainer</label>
                                                        <input type="text" class="form-control" id="kodeTipeKontainer"
                                                            name="kontainer[0][kodeTipeKontainer]"
                                                            value="{{ old('kodeTipeKontainer', '1') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">kodeJenisPungutan
                                                        <label for="kodeUkuranKontainer" class="form-label">kode Ukuran
                                                            Kontainer</label>
                                                        <input type="text" class="form-control"
                                                            id="kodeUkuranKontainer"
                                                            name="kontainer[0][kodeUkuranKontainer]"
                                                            value="{{ old('kodeUkuranKontainer', '40') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="nomorKontainer" class="form-label">nomor
                                                            Kontainer</label>
                                                        <input type="text" class="form-control" id="nomorKontainer"
                                                            name="kontainer[0][nomorKontainer]"
                                                            value="{{ old('nomorKontainer', 'CONTAINER123') }}">
                                                    </div>
                                                    <div class="col-md-3 d-none">
                                                        <label for="seriKontainer" class="form-label">seri
                                                            Kontainer</label>
                                                        <input type="text" class="form-control" id="seriKontainer"
                                                            name="kontainer[0][seriKontainer]"
                                                            value="{{ old('seriKontainer', 1) }}">
                                                    </div> --}}

                                    {{-- Pengangkut --}}
                                    <div class="tab-pane fade" id="pengangkut" role="tabpanel"
                                        aria-labelledby="pengangkut-tab">
                                        <div class="row">
                                        <div class="col-md-12">
                                            <label for="kodeJenisTpb" class="form-label">Cara Pengangkutan</label>
                                            <select class="form-control" id="select-field20" name="pengangkut[0][kodeCaraAngkut]">
                                                <option value="1" selected>1 - LAUT</option>
                                                <option value="2" selected>2 - KERETA API</option>
                                                <option value="3" selected>3 - DARAT</option>
                                                <option value="4">4 - UDARA</option>
                                                <option value="5">5 - POS</option>
                                                <option value="6">6 - MULTIMODA</option>
                                                <option value="7">7 - INSTALASI / PIPA</option>
                                                <option value="8">8 - PERAIRAN</option>
                                                <option value="9">9 - LAINNYA</option>
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

{{--
                                <!-- Tab Kemasan -->
                                <div class="tab-pane fade" id="kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                                    <div id="kemasan-container">
                                        <!-- Input fields will be added here dynamically -->
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2" id="addKemasan">Tambah Kemasan</button>
                                </div>

                                <script>
                                    let kemasanCount = 0;
                                    let seriKemasanCounter = 1; // Mulai dari 1 dan bertambah otomatis

                                    function addKemasan() {
                                        const container = document.getElementById("kemasan-container");

                                        const kemasanHtml = `
                                            <div class="row kemasan-item" id="kemasan-${kemasanCount}">
                                                <div class="col-md-3">
                                                    <label class="form-label">Seri Kemasan</label>
                                                    <input type="text" class="form-control" name="kemasan[${kemasanCount}][seriKemasan]" value="${seriKemasanCounter}" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Jumlah Kemasan</label>
                                                    <input type="number" class="form-control" name="kemasan[${kemasanCount}][jumlahKemasan]" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Kode Jenis Kemasan</label>
                                                    <input type="text" class="form-control" name="kemasan[${kemasanCount}][kodeJenisKemasan]" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Merk Kemasan</label>
                                                    <input type="text" class="form-control" name="kemasan[${kemasanCount}][merkKemasan]" required>
                                                </div>
                                                <div class="col-md-12 text-end mt-2">
                                                    <button type="button" class="btn btn-success" onclick="saveKemasan(${kemasanCount})">Simpan</button>
                                                    <button type="button" class="btn btn-warning" onclick="editKemasan(${kemasanCount})" style="display: none;">Edit</button>
                                                    <button type="button" class="btn btn-danger" onclick="removeKemasan(${kemasanCount})">Hapus</button>
                                                </div>
                                            </div>
                                        `;

                                        container.insertAdjacentHTML("beforeend", kemasanHtml);
                                        kemasanCount++;
                                        seriKemasanCounter++; // Tambah nomor seri otomatis
                                    }

                                    function removeKemasan(id) {
                                        const item = document.getElementById(`kemasan-${id}`);
                                        if (item) {
                                            item.remove();
                                        }
                                    }

                                    function saveKemasan(id) {
                                        const row = document.getElementById(`kemasan-${id}`);
                                        const inputs = row.querySelectorAll("input");
                                        let valid = true;

                                        // Validasi bahwa semua field sudah terisi
                                        inputs.forEach(input => {
                                            if (!input.value.trim()) {
                                                valid = false;
                                                input.classList.add("is-invalid");
                                            } else {
                                                input.classList.remove("is-invalid");
                                                input.setAttribute("readonly", true);
                                            }
                                        });

                                        if (!valid) return;

                                        row.querySelector(".btn-success").style.display = "none";
                                        row.querySelector(".btn-warning").style.display = "inline-block";
                                    }

                                    function editKemasan(id) {
                                        const row = document.getElementById(`kemasan-${id}`);
                                        const inputs = row.querySelectorAll("input");

                                        inputs.forEach(input => {
                                            if (!input.name.includes('seriKemasan')) {
                                                input.removeAttribute("readonly");
                                            }
                                        });

                                        row.querySelector(".btn-success").style.display = "inline-block";
                                        row.querySelector(".btn-warning").style.display = "none";
                                    }

                                    document.getElementById("addKemasan").addEventListener("click", addKemasan);

                                    // Tambahkan satu input default saat halaman dimuat
                                    addKemasan();
                                </script> --}}


                                    <div class="tab-pane fade" id="kemasan" role="tabpanel"
                                        aria-labelledby="kemasan-tab">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <header>
                                                                <div class="right_content">
                                                                    <div class="col-lg-12 text-start mb-6">
                                                                        <button type="button"
                                                                            class="btn btn-primary mb-3" id="myBtn5"
                                                                            onclick="openModalKemasan()">
                                                                            <span data-feather="plus"></span>Tambah
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </header>
                                                            <div class="card-body" id="tableContainer">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered" id="dataTable">
                                                                        <thead class="thead-light">
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
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="tambahKemasan()">Tambah</button>
                                                    <button type="button" class="btn-cancel"
                                                        onclick="closeModalKemasan()">Batal</button>
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
                                            kemasanTableBody.innerHTML = ""; // Kosongkan tabel sebelum menambahkan data baru
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
                                                    <label for="kemasan[${index}][jumlahKemasan]" class="form-label">Jumlah</label>
                                                    <input type="number" class="form-control border-primary" name="kemasan[${index}][jumlahKemasan]" id="jumlahKemasan${index}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="kemasan[${index}][kodeJenisKemasan]" class="form-label">Jenis</label>
                                                    <input type="search" class="form-control border-primary select-field" name="kemasan[${index}][kodeJenisKemasan]" id="kodeJenisKemasan${index}" placeholder="Cari Jenis Kemasan" list="kemasanList${index}">
                                                    <datalist id="kemasanList${index}">
                                                        @foreach ($referensikemasan as $kemasan)
                                                            <option value="{{ $kemasan->kode_kemasan }} - {{ $kemasan->nama_kemasan}}"></option>
                                                        @endforeach
                                                    </datalist>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <label for="kemasan[${index}][merkKemasan]" class="form-label">Merk</label>
                                                    <input type="text" class="form-control border-primary" name="kemasan[${index}][merkKemasan]" id="merkKemasan${index}">
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

                                            let kemasan = {
                                                seriKemasan: seriKemasan,
                                                kodeJenisKemasan: kodeJenisKemasan,
                                                merkKemasan: merkKemasan,
                                                jumlahKemasan: jumlahKemasan,
                                                nomorAju: nomorAju
                                            };

                                            kemasanList.push(kemasan);
                                            localStorage.setItem('kemasanList', JSON.stringify(kemasanList));
                                            initializeKemasanTable();
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
                                    <div class="tab-pane fade" id="transaksi" role="tabpanel"
                                        aria-labelledby="transaksi-tab">
                                        <div class="container">
                                            <!-- Harga -->
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <h5 class="text-primary">Harga
                                                </h5>
                                                <div class="row">
                                        <div class="col-md-6">
                                        <label for="kodeValuta" class="form-label">Valuta</label>
                                        <select class="form-control" id="select-field21" name="kodeValuta">
                                            <!-- Loop through the referensivaluta data from the database -->
                                            @foreach($referensivaluta as $valuta)
                                                <option value="{{ $valuta->kode_valuta }}"
                                                        @if(old('kodeValuta', $defaultValuta->kode_valuta ?? '') == $valuta->kode_valuta) selected @endif>
                                                    {{ $valuta->kode_valuta }} - {{ $valuta->nama_valuta }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="ndpbm" class="form-label">NDPBM</label>
                                                        <input type="number" class="form-control" id="ndpbm"
                                                            name="ndpbm" value="{{ old('ndpbm') }}"
                                                            style="border: 1px solid #313131;"
                                                            oninput="hitungNilaiPabean()">
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label for="cif" class="form-label">CIF</label>
                                                        <input type="text" class="form-control" id="cif"
                                                            name="cif" value="{{ old('cif') }}" step="any"
                                                            style="border: 1px solid #313131;"
                                                            oninput="hitungNilaiPabean()">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="nilai_pabean" class="form-label">Nilai Pabean</label>
                                                        <input type="text" class="form-control" id="nilai_pabean"
                                                            readonly style="border: 1px solid #313131;">
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label for="hargaPenyerahan" class="form-label">Harga
                                                            Penyerahan/Harga Jual/Harga Barang</label>
                                                        <input type="text" class="form-control" id="harga_penyerahan"
                                                            name="hargaPenyerahan" value="{{ old('hargaPenyerahan') }}"
                                                            step="any" value="{{ old('hargaPenyerahan') }}"
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
                                                        <input type="text" class="form-control" id="uang_maku"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="nomorNpwp" class="form-label">Diskon</label>
                                                        <input type="text" class="form-control" id="diskon"
                                                           value="{{ old('diskon', '0.00') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="pengenaan_pajak" class="form-label">Dasar Pengenaan
                                                            Pajak</label>
                                                        <input type="text" class="form-control" id="pengenaan_pajak"
                                                            name="dasarPengenaanPajak" style="border: 1px solid #313131;"
                                                            oninput="hitungPPNBM(); hitungPPN();">
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="namaEntitas2" class="form-label">PPN Yang Dipungut
                                                            (Tarif & Nilai)</label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="ppn_tarif"
                                                                    name="tarifPpnPajak" placeholder="11.00%"
                                                                    value="{{ old('diskon', '11.00%') }}"
                                                                    style="border: 1px solid #313131;"
                                                                    oninput="hitungPPN()">
                                                            </div>

                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="ppn_hasil"
                                                                    name="ppnPajak" readonly
                                                                    style="border: 1px solid #313131;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="namaEntitas3" class="form-label">PPnBM Yang Dipungut
                                                            (Tarif & Nilai)</label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control"
                                                                    id="ppnb_tarif" name="tarifPpnbmPajak" value="00.00%"
                                                                    style="border: 1px solid #313131;"
                                                                    oninput="hitungPPNBM()">
                                                            </div>

                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control"
                                                                    id="ppnb_hasil" name="ppnbmPajak" readonly
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
                                                        <input type="text" class="form-control" id="berat_kotor"
                                                            name="bruto" value="{{ old('bruto') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="nomorNpwp" class="form-label">Berat Bersih
                                                            (KGM)</label>
                                                        <input type="text" class="form-control" id="berat_bersih"
                                                            name="jumlahSatuan" value="{{ old('jumlahSatuan') }}"
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Barang -->
                                    <div class="tab-pane fade" id="barang" role="tabpanel" aria-labelledby="barang-tab">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <header>
                                                                <div class="right_content">
                                                                    <div class="col-lg-12 text-start mb-6">
                                                                        <button type="button" class="btn btn-primary mb-3" id="myBtn7" onclick="openBarangModal()">
                                                                            <span data-feather="plus"></span> Tambah Barang
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </header>
                                                            <div class="card-body" id="tableContainer">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered" id="dataTable">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Seri</th>
                                                                                <th>Hs</th>
                                                                                <th>Uraian</th>
                                                                                <th>Nilai Barang</th>
                                                                                <th>Jumlah Satuan</th>
                                                                                <th>Jenis Satuan</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="barangTbody">
                                                                            <!-- Data barang akan ditambahkan di sini -->
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

                                    <!-- Modal Barang -->
                                    <div id="myModal7" class="modal" data-backdrop="static" data-keyboard="false" style="display: none;">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeBarangModal()">&times;</span>
                                            <div class="modal-form">
                                                <div id="barangContainer"></div>
                                                <div class="button-group">
                                                    <button type="button" class="btn btn-primary" onclick="tambahBarang()">Tambah</button>
                                                    <button type="button" class="btn-cancel" onclick="closeBarangModal()">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <script>
                                            (function() {
                                                // Initialize barang list from localStorage if available
                                                let barangList = JSON.parse(localStorage.getItem('barangList')) || [];

                                                // Function to initialize the barang table
                                                window.initializeBarangTable = function() {
                                                    let barangTbody = document.getElementById("barangTbody");
                                                    barangTbody.innerHTML = ""; // Clear the table body

                                                    // Populate the table rows from barangList
                                                    barangList.forEach((barang, index) => {
                                                        let newRow = `<tr>
                                                            <td>${barang.seri}</td>
                                                            <td>${barang.hs}</td>
                                                            <td>${barang.uraian}</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td><button class="btn btn-danger" onclick="hapusBarang(${index})">Hapus</button></td>
                                                        </tr>`;
                                                        barangTbody.innerHTML += newRow;
                                                    });
                                                };

                                                // Function to open the modal and add a new barang form
                                                window.openBarangModal = function() {
                                                    document.getElementById('myModal7').style.display = 'block';
                                                    tambahBarang(); // Open with a new form
                                                };

                                                // Function to add a new barang form
                                                window.tambahBarang = function() {
                                                    let index = barangList.length;
                                                    let barangContainer = document.getElementById('barangContainer');
                                                    let barangForm = document.createElement('div');
                                                    barangForm.classList.add('barang-form');
                                                    barangForm.setAttribute('id', 'barangForm' + index);

                                                    let nextSeri = index + 1; // Next "seri" number

                                                   barangForm.innerHTML = `
                                                    <h5 class="text-primary" id="exampleModalCenterTitle">Tambah Barang</h5>
                                                    <br>
                                                    <!-- Jenis Section -->
                                                    <h5 class="text-primary">Jenis</h5>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="seri${index}" class="form-label">Seri</label>
                                                            <input type="text" class="form-control  border-primary" value="${nextSeri}" id="seri${index}" name="barang[${index}][seriBarang]" readonly>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="hs${index}" class="form-label">HS</label>
                                                            <input type="search" class="form-control border-primary select-field" name="barang[${index}][posTarif]" id="hs${index}" list="hsTarifList${index}">
                                                            <datalist id="hsTarifList${index}">
                                                                @foreach($referensiHSCODE as $hsCode)
                                                                    <option value="{{ $hsCode->hs_code }} - {{ $hsCode->uraian_barang_indonesia }}">
                                                                @endforeach
                                                            </datalist>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="kode${index}" class="form-label">Kode</label>
                                                            <input type="text" class="form-control border-primary select-field" id="kode${index}" name="barang[${index}][kodeBarang]">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="uraian${index}" class="form-label">Uraian</label>
                                                            <input type="text" class="form-control border-primary select-field" id="uraian${index}" name="barang[${index}][uraian]">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="merk${index}" class="form-label">Merk</label>
                                                            <input type="text" class="form-control border-primary select-field" id="merk${index}" name="barang[${index}][merk]">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="tipe${index}" class="form-label">Tipe</label>
                                                            <input type="text" class="form-control border-primary select-field" id="tipe${index}" name="barang[${index}][tipe]">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="ukuran${index}" class="form-label">Ukuran</label>
                                                            <input type="text" class="form-control border-primary select-field" id="ukuran${index}" name="barang[${index}][ukuran]">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="spesifikasiLain${index}" class="form-label">Spesifikasi Lain</label>
                                                            <input type="text" class="form-control border-primary select-field" id="spesifikasiLain${index}" name="barang[${index}][spesifikasiLain]">
                                                        </div>
                                                    </div>

                                                    <!-- Keterangan Lainnya Section -->
                                                    <h5 class="text-primary">Keterangan Lainnya</h5>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="kodeGunaBarang${index}" class="form-label">Penggunaan</label>
                                                            <input type="number" class="form-control border-primary select-field" list="penggunaanList${index}"
                                                                name="barang[${index}][kodeGunaBarang]" id="kodeGunaBarang${index}"
                                                                min="0" max="4" oninput="validateInput(this)">
                                                            <datalist id="penggunaanList${index}">
                                                                <option value="0">0 - BARANG BERHUBUNGAN LANGSUNG</option>
                                                                <option value="1">1 - TIDAK BERHUBUNGAN LANGSUNG</option>
                                                                <option value="2">2 - BARANG KONSUMSI</option>
                                                                <option value="3">3 - BARANG HASIL OLAHAN</option>
                                                                <option value="4">4 - BARANG LAINNYA</option>
                                                            </datalist>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="kodeKategoriBarang${index}" class="form-label">Kategori Barang</label>
                                                            <input type="text" class="form-control border-primary select-field" id="kodeKategoriBarang${index}" name="barang[${index}][kodeKategoriBarang]" list="kategoriBarangList${index}">
                                                            <datalist id="kategoriBarangList${index}">
                                                                @foreach($referensikategoribarang as $kategori)
                                                                    <option value="{{ $kategori->kode_kategori_barang }} - {{ $kategori->nama_kategori_barang }}">
                                                                @endforeach
                                                            </datalist>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="kodeKondisiBarang${index}" class="form-label">Kondisi Barang</label>
                                                            <input type="text" class="form-control border-primary select-field" list="kondisiBarangList${index}" name="barang[${index}][kodeKondisiBarang]" id="kodeKondisiBarang${index}">
                                                            <datalist id="kondisiBarangList${index}">
                                                              <option value="1" selected>1 - TIDAK RUSAK</option>
                                                              <option value="2" selected>2 - RUSAK</option>
                                                            </datalist>
                                                        </div>
                                                    <div class="col-md-6">
                                                        <label for="flag4tahun${index}" class="form-label">Jangka Waktu</label>
                                                        <div class="form-check d-flex align-items-center border-primary select-field">
                                                            <input class="form-check-input me-2" type="checkbox" id="flag4tahun${index}" name="barang[${index}][flag4tahun]" value="Y">
                                                            <span> > 4 Tahun</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="caraPerhitungan${index}" class="form-label">Cara Perhitungan</label>
                                                        <input class="form-control border-primary select-field" list="caraPerhitunganList${index}" name="barang[${index}][kodePerhitungan]" id="caraPerhitungan${index}" placeholder="Pilih Cara Perhitungan">
                                                        <datalist id="caraPerhitunganList${index}">
                                                            <option value="0">0 - HARGA PEMASUKAN</option>
                                                            <option value="1">1 - HARGA PENYERAHAN</option>
                                                        </datalist>
                                                    </div>


                                                    <!-- Jumlah & Berat Section -->
                                                    <h5 class="text-primary">Jumlah & Berat</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="satuan${index}" class="form-label">Satuan</label>
                                                            <div class="input-group">
                                                                <input type="text" id="jumlahSatuan${index}" name="barang[${index}][jumlahSatuan]" class="form-control border-primary select-field">
                                                                <input type="text" class="form-control border-primary select-field" id="kodeSatuanBarang${index}" name="barang[${index}][kodeSatuanBarang]" list="kodeSatuanBarangList">
                                                                <datalist id="kodeSatuanBarangList">
                                                                    <option value="KGM - KILOGRAM">
                                                                    <option value="KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)">
                                                                </datalist>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="kemasan${index}" class="form-label">Kemasan</label>
                                                            <div class="input-group">
                                                                <input type="text" id="jumlahKemasan${index}" name="barang[${index}][jumlahKemasan]" class="form-control border-primary select-field">
                                                                <input type="text" class="form-control border-primary select-field" id="kodeJenisKemasan${index}" name="barang[${index}][kodeJenisKemasan]" list="kodeJenisKemasanList">
                                                                <datalist id="kodeJenisKemasanList">
                                                                    @foreach($referensikemasan as $kemasan)
                                                                        <option value="{{ $kemasan->kode_kemasan }} - {{ $kemasan->nama_kemasan }}">
                                                                    @endforeach
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Harga Section -->
                                                    <h5 class="text-primary">Harga</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="cif${index}" class="form-label">CIF</label>
                                                            <input type="text" class="form-control border-primary select-field" id="cif${index}" name="barang[${index}][cif]" step="any">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="cifRupiah${index}" class="form-label">CIF Rupiah</label>
                                                            <input type="text" class="form-control border-primary select-field" id="cifRupiah${index}" name="barang[${index}][cifRupiah]" step="any">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="hargaPenyerahan${index}" class="form-label">nilai Barang</label>
                                                            <input type="text" class="form-control border-primary select-field" id="hargaPenyerahan${index}" name="barang[${index}][hargaPenyerahan]" step="any">
                                                        </div>

                                                        <div class="col-md-3 d-none">
                                                            <label for="bruto" class="form-label">bruto</label>
                                                            <input type="text" class="form-control border-primary select-field" id="bruto"  name="barang[${index}][bruto]" value="{{ old('bruto', 0) }}" step="any" >
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="diskon" class="form-label">diskon</label>
                                                            <input type="text" class="form-control border-primary select-field" id="diskon"  name="barang[${index}][diskon]" value="{{ old('diskon', 0) }}" step="any" >
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="fob" class="form-label">fob</label>
                                                            <input type="text" class="form-control border-primary select-field" id="fob"  name="barang[${index}][fob]" value="{{ old('fob', 0) }}" step="any" >
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="freight" class="form-label">freight</label>
                                                            <input type="text" class="form-control border-primary select-field" id="freight"  name="barang[${index}][freight]" value="{{ old('freight', 0) }}" step="any" >
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="hargaEkspor" class="form-label">harga Ekspor</label>
                                                            <input type="text" class="form-control border-primary select-field" id="hargaEkspor"  name="barang[${index}][hargaEkspor]" value="{{ old('hargaEkspor', 0) }}" step="any" >
                                                        </div>

                                                        <div class="col-md-3 d-none">
                                                            <label for="isiPerKemasan" class="form-label">isi PerKemasan</label>
                                                            <input type="text" class="form-control border-primary select-field" id="isiPerKemasan"  name="barang[${index}][isiPerKemasan]" value="{{ old('isiPerKemasan', 0) }}" step="any" >
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="netto" class="form-label">netto</label>
                                                            <input type="text" class="form-control border-primary select-field" id="netto"  name="barang[${index}][netto]" value="{{ old('netto', 908.18) }}" step="any" >
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="ndpbm" class="form-label">nilai Barang</label>
                                                            <input type="text" class="form-control border-primary select-field" id="nilaiBarang" name="barang[${index}][nilaiBarang]" value="{{ old('nilaiBarang', 0) }}" step="any">
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="ndpbm" class="form-label">ndpbm</label>
                                                            <input type="text" class="form-control border-primary select-field" id="ndpbm" name="barang[${index}][ndpbm]" value="{{ old('ndpbm', 16357) }}" step="any">
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="hargaPerolehan" class="form-label">Harga Perolehan</label>
                                                            <input type="text" class="form-control border-primary select-field" id="hargaPerolehan" name="barang[${index}][hargaPerolehan]" value="{{ old('hargaPerolehan', 0) }}" step="any">
                                                        </div>
                                                        <div class="col-md-3 d-none">
                                                            <label for="kodeDokAsal" class="form-label">Kode Dok Asal</label>
                                                            <input type="text" class="form-control border-primary select-field" id="kodeDokAsal" name="barang[${index}][kodeDokAsal]" value="" >
                                                        </div>
                                                    </div>
                                                       </div>
                                                         </div>
                                                    <button type="button" class="btn btn-primary" onclick="simpanBarang(${index})">Simpan</button>
                                                    <button type="button" class="btn btn-secondary" onclick="batalBarang(${index})">Batal</button>
                                                    <hr>
                                                `;


                                                    // Append the form to the container
                                                    barangContainer.appendChild(barangForm);
                                                };

                                                // Function to save the barang data and hide the current form
                                                window.simpanBarang = function(index) {
                                                    let seri = document.getElementById('seri' + index).value;
                                                    let hs = document.getElementById('hs' + index).value;
                                                    let uraian = document.getElementById('uraian' + index).value;
                                                    let merk = document.getElementById('merk' + index).value;
                                                    let tipe = document.getElementById('tipe' + index).value;
                                                    let ukuran = document.getElementById('ukuran' + index).value;
                                                    let spesifikasiLain = document.getElementById('spesifikasiLain' + index).value;
                                                    let kodeGunaBarang = document.getElementById('kodeGunaBarang' + index).value;
                                                    let kodeKategoriBarang = document.getElementById('kodeKategoriBarang' + index).value;
                                                    let kodeKondisiBarang = document.getElementById('kodeKondisiBarang' + index).value;
                                                    let flag4tahun = document.getElementById('flag4tahun' + index).checked;
                                                    let caraPerhitungan = document.getElementById('caraPerhitungan' + index).value;
                                                    let jumlahSatuan = document.getElementById('jumlahSatuan' + index).value;
                                                    let kodeSatuanBarang = document.getElementById('kodeSatuanBarang' + index).value;
                                                    let jumlahKemasan = document.getElementById('jumlahKemasan' + index).value;
                                                    let kodeJenisKemasan = document.getElementById('kodeJenisKemasan' + index).value;
                                                    let cif = document.getElementById('cif' + index).value;
                                                    let cifRupiah = document.getElementById('cifRupiah' + index).value;
                                                    let hargaPenyerahan = document.getElementById('hargaPenyerahan' + index).value;
                                                    // Create an object for the current barang
                                                    let barang = {
                                                        seri: seri,
                                                        hs: hs,
                                                        uraian: uraian,
                                                        merk: merk,
                                                        tipe: tipe,
                                                        ukuran: ukuran,
                                                        spesifikasiLain: spesifikasiLain,
                                                        kodeGunaBarang: kodeGunaBarang,
                                                        kodeKategoriBarang: kodeKategoriBarang,
                                                        kodeKondisiBarang: kodeKondisiBarang,
                                                        flag4tahun: flag4tahun,
                                                        caraPerhitungan: caraPerhitungan,
                                                        jumlahSatuan: jumlahSatuan,
                                                        kodeSatuanBarang: kodeSatuanBarang,
                                                        jumlahKemasan: jumlahKemasan,
                                                        kodeJenisKemasan: kodeJenisKemasan,
                                                        cif: cif,
                                                        cifRupiah: cifRupiah,
                                                        hargaPenyerahan: hargaPenyerahan,
                                                    };

                                                    // Save the data to the barangList
                                                    barangList.push(barang);
                                                    localStorage.setItem('barangList', JSON.stringify(barangList));

                                                    // Hide the form and show the next form
                                                    document.getElementById('barangForm' + index).style.display = 'none';

                                                    // Initialize the table with the updated list
                                                    initializeBarangTable();
                                                };

                                                // Function to cancel the current form
                                                window.batalBarang = function(index) {
                                                    document.getElementById('barangForm' + index).style.display = 'none';
                                                };

                                                // Function to remove barang from the list
                                                window.hapusBarang = function(index) {
                                                    barangList.splice(index, 1);
                                                    localStorage.setItem('barangList', JSON.stringify(barangList));
                                                    initializeBarangTable();
                                                };

                                                window.closeBarangModal = function() {
                                                document.getElementById('myModal7').style.display = 'none';
                                                    };

                                                // Initialize the table when the page is ready
                                                    window.initializeBarangTable();
                                                })();
                                            </script>

                                    {{-- bahan Baku Impor --}}
                                       <div class="tab-pane fade" id="bahanbakuimpor" role="tabpanel" aria-labelledby="bahanbakuimpor-tab">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <header>
                                                                <div class="right_content">
                                                                    <div class="col-lg-12 text-start mb-6">
                                                                        <button type="button" class="btn btn-primary mb-3" id="myBtn8" onclick="openBahanBakuImporModal()">
                                                                            <span data-feather="plus"></span> Tambah Barang Impor
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </header>
                                                            <div class="card-body" id="tableContainer">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered" id="dataTable">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Seri</th>
                                                                                <th>Hs</th>
                                                                                <th>Uraian</th>
                                                                                <th>Nilai Barang</th>
                                                                                <th>Kode Satuan</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="bahanbakuimporTbody">
                                                                            <!-- Data barang akan ditambahkan di sini -->
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

                        <!-- Modal Bahan Baku Impor -->
                        <div id="myModal8" class="modal" data-backdrop="static" data-keyboard="false" style="display: none;">
                            <div class="modal-content">
                                <span class="close" onclick="closeBahanBakuImporModal()">&times;</span>
                                <div class="modal-form">
                                    <div id="bahanBakuContainer"></div>
                                    <div class="button-group">
                                        <button type="button" class="btn btn-primary" onclick="tambahBahanBakuImpor()">Tambah</button>
                                        <button type="button" class="btn-cancel" onclick="closeBahanBakuImporModal()">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <script>
                        (function() {
                            let bahanBakuImporList = JSON.parse(localStorage.getItem('bahanBakuImporList')) || [];

                            window.initializeBahanBakuImporTable = function() {
                                let tbody = document.getElementById("bahanbakuimporTbody");
                                if (!tbody) return;
                                tbody.innerHTML = "";
                                bahanBakuImporList.forEach((item, index) => {
                                    let row = `<tr>
                                        <td>${item.seri}</td>
                                        <td>${item.hs}</td>
                                        <td>${item.uraian}</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><button class="btn btn-danger" onclick="hapusBahanBakuImpor(${index})">Hapus</button></td>
                                    </tr>`;
                                    tbody.innerHTML += row;
                                });
                            };

                            window.openBahanBakuImporModal = function() {
                                document.getElementById('myModal8').style.display = 'block';
                                tambahBahanBakuImpor();
                            };

                            window.tambahBahanBakuImpor = function() {
                                let index = bahanBakuImporList.length;
                                let container = document.getElementById('bahanBakuContainer');
                                let form = document.createElement('div');
                                form.classList.add('bahanbakuimpor-form');
                                form.id = 'bahanbakuimporForm' + index;

                                let nextSeri = index + 1;
                                form.innerHTML = `
                                    <h5 class="text-primary">Tambah Bahan Baku Impor</h5>
                                    <br>
                                    <!-- Dokumen Asal Section -->
                                    <h5 class="text-primary">Dokumen Asal</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="nomorDaftarDokAsal${index}" class="form-label">Nomor Daftar</label>
                                            <input type="text" class="form-control border-primary select-field" id="nomorDaftarDokAsal${index}" name="barang[${index}][bahanBaku][${index}][nomorDaftarDokAsal]">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="tanggalDaftarDokAsal${index}" class="form-label">Tanggal Daftar Dok Asal</label>
                                            <input type="date" class="form-control border-primary select-field" id="tanggalDaftarDokAsal${index}" name="barang[${index}][bahanBaku][${index}][tanggalDaftarDokAsal]">
                                        </div>
                                    </div>

                                    <!-- Jenis Section -->
                                    <h5 class="text-primary">Jenis</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="seri${index}" class="form-label">Seri</label>
                                            <input type="text" class="form-control border-primary" value="${nextSeri}" id="seri${index}" name="barang[${index}][bahanBaku][${index}][seriBarang]" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="hs${index}" class="form-label">HS</label>
                                            <input type="search" class="form-control border-primary select-field" name="barang[${index}][bahanBaku][${index}][posTarif]" id="hs${index}" list="hsTarifList${index}">
                                            <datalist id="hsTarifList${index}">
                                                @foreach($referensiHSCODE as $hsCode)
                                                    <option value="{{ $hsCode->hs_code }} - {{ $hsCode->uraian_barang_indonesia }}">
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="uraian${index}" class="form-label">Uraian</label>
                                            <input type="text" class="form-control border-primary select-field" id="uraian${index}" name="barang[${index}][bahanBaku][${index}][uraianBarang]">
                                        </div>

                                    </div>

                                    <!-- Jumlah & Satuan Section -->
                                    <h5 class="text-primary">Jumlah & Satuan</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="jumlahSatuan${index}" class="form-label">Jumlah</label>
                                            <input type="text" id="jumlahSatuan${index}" name="barang[${index}][bahanBaku][${index}][jumlahSatuan]" class="form-control border-primary select-field" step="any">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="kodeSatuanBarang${index}" class="form-label">Satuan Barang</label>
                                            <input type="text" class="form-control border-primary select-field" id="kodeSatuanBarang${index}" name="barang[${index}][bahanBaku][${index}][kodeSatuanBarang]" list="kodeSatuanBarangList">
                                            <datalist id="kodeSatuanBarangList">
                                                <option value="KGM - KILOGRAM">
                                                <option value="KPP - KGM OF PHOSPHORUS PENTOXIDE(PHOSPOHORIC ANHYDRIDE)">
                                            </datalist>
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="cif" class="form-label">cif</label>
                                                <input type="text" class="form-control border-primary select-field" id="cif"  name="barang[${index}][bahanBaku][${index}][cif]" value="{{ old('cif', 1.25) }}" step="any" >
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="cifRupiah" class="form-label">cif Rupiah</label>
                                                <input type="text" class="form-control border-primary select-field" id="cifRupiah"  name="barang[${index}][bahanBaku][${index}][cifRupiah]" value="{{ old('cifRupiah', 20446.25) }}" step="any">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="hargaPenyerahan" class="form-label">harga Penyerahan</label>
                                                <input type="text" class="form-control border-primary select-field" id="hargaPenyerahan"  name="barang[${index}][bahanBaku][${index}][hargaPenyerahan]" value="{{ old('hargaPenyerahan', 0) }}" step="any" >
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="kodeAsalBahanBaku" class="form-label">kode Asal Bahan Baku</label>
                                                <input type="text" class="form-control border-primary select-field" id="kodeAsalBahanBaku"  name="barang[${index}][bahanBaku][${index}][kodeAsalBahanBaku]" value="{{ old('kodeAsalBahanBaku', '1') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="kodeBarang" class="form-label">kode Barang</label>
                                                <input type="text" class="form-control border-primary select-field" id="kodeBarang"  name="barang[${index}][bahanBaku][${index}][kodeBarang]" value="{{ old('kodeBarang', '009-05002-014-O') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="kodeDokAsal" class="form-label">kode Dok Asal</label>
                                                <input type="text" class="form-control border-primary select-field" id="kodeDokAsal"  name="barang[${index}][bahanBaku][${index}][kodeDokAsal]" value="{{ old('kodeDokAsal', '23') }}" >
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="kodeKantor" class="form-label">kode Kantor</label>
                                                <input type="text" class="form-control border-primary select-field" id="kodeKantor"  name="barang[${index}][bahanBaku][${index}][kodeKantor]" value="{{ old('kodeKantor', '050800') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="merkBarang" class="form-label">merk Barang</label>
                                                <input type="text" class="form-control border-primary select-field" id="merkBarang"  name="barang[${index}][bahanBaku][${index}][merkBarang]" value="{{ old('merkBarang', 'Sesuai Invoice') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="ndpbm" class="form-label">ndpbm</label>
                                                <input type="text" class="form-control border-primary select-field" id="ndpbm"  name="barang[${index}][bahanBaku][${index}][ndpbm]" value="{{ old('ndpbm', 16322) }}" step="any">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="nomorAjuDokAsal" class="form-label">nomor Aju DokAsal</label>
                                                <input type="text" class="form-control border-primary select-field" id="nomorAjuDokAsal" name="barang[${index}][bahanBaku][${index}][nomorAjuDokAsal]" value="{{ old('nomorAjuDokAsal', '00002301001620250107000018') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control border-primary select-field" id="seriBahanBaku"  name="barang[${index}][bahanBaku][${index}][seriBahanBaku]" value="{{ old('seriBahanBaku', 1) }}" step="any">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="seriBarangDokAsal" class="form-label">seri Barang DokAsal</label>
                                                <input type="text" class="form-control border-primary select-field" id="seriBarangDokAsal" name="barang[${index}][bahanBaku][${index}][seriBarangDokAsal]" value="{{ old('seriBarangDokAsal', 1) }}" step="any">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="seriIjin" class="form-label">seri Izin</label>
                                                <input type="text" class="form-control border-primary select-field" id="seriIjin" name="barang[${index}][bahanBaku][${index}][seriIjin]" value="{{ old('seriIjin', 0) }}" step="any">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="spesifikasiLainBarang" class="form-label">spesifikasi Lain Barang</label>
                                                <input type="text" class="form-control border-primary select-field" id="spesifikasiLainBarang" name="barang[${index}][bahanBaku][${index}][spesifikasiLainBarang]" value="{{ old('spesifikasiLainBarang', 'Baik dan Baru') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="tipeBarang" class="form-label">tipe Barang</label>
                                                <input type="text" class="form-control border-primary select-field" id="tipeBarang" name="barang[${index}][bahanBaku][${index}][tipeBarang]" value="{{ old('tipeBarang', 'Sesuai Invoice') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="ukuranBarang" class="form-label">ukuran Barang</label>
                                                <input type="text" class="form-control border-primary select-field" id="ukuranBarang" name="barang[${index}][bahanBaku][${index}][ukuranBarang]" value="{{ old('ukuranBarang', 'Sesuai Invoice') }}">
                                        </div>
                                        <div class="col-md-3 d-none">
                                                <label for="jumlahSatuan" class="form-label">ukuran Barang</label>
                                                <input type="text" class="form-control border-primary select-field" id="jumlahSatuan" name="barang[${index}][bahanBaku][${index}][jumlahSatuan]" value="{{ old('jumlahSatuan', 0.36) }}">
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary" onclick="simpanBahanBakuImpor(${index})">Simpan</button>
                                    <button type="button" class="btn btn-secondary" onclick="batalBahanBakuImpor(${index})">Batal</button>
                                     <hr>
                                    `;
                                container.appendChild(form);
                            };


                            window.simpanBahanBakuImpor = function(index) {
                                let seri = document.getElementById('seri' + index).value;
                                let hs = document.getElementById('hs' + index).value;
                                let uraian = document.getElementById('uraian' + index).value;
                                let jumlahSatuan = document.getElementById('jumlahSatuan' + index).value;
                                let kodeSatuanBarang = document.getElementById('kodeSatuanBarang' + index).value;
                                let nomorDaftarDokAsal = document.getElementById('nomorDaftarDokAsal' + index).value;
                                let tanggalDaftarDokAsal = document.getElementById('tanggalDaftarDokAsal' + index).value;


                                let bahanBaku = {
                                    seri: seri,
                                    hs: hs,
                                    uraian: uraian,
                                    jumlahSatuan: jumlahSatuan,
                                    kodeSatuanBarang: kodeSatuanBarang,
                                    nomorDaftarDokAsal: nomorDaftarDokAsal,
                                    tanggalDaftarDokAsal: tanggalDaftarDokAsal,

                                };

                                bahanBakuImporList.push(bahanBaku);
                                localStorage.setItem('bahanBakuImporList', JSON.stringify(bahanBakuImporList));
                                document.getElementById('bahanbakuimporForm' + index).style.display = 'none';
                                initializeBahanBakuImporTable();
                            };

                            window.batalBahanBakuImpor = function(index) {
                                document.getElementById('bahanbakuimporForm' + index).remove();
                            };

                            window.hapusBahanBakuImpor = function(index) {
                                bahanBakuImporList.splice(index, 1);
                                localStorage.setItem('bahanBakuImporList', JSON.stringify(bahanBakuImporList));
                                initializeBahanBakuImporTable();
                            };

                            window.closeBahanBakuImporModal = function() {
                                document.getElementById('myModal8').style.display = 'none';
                            };

                            window.initializeBahanBakuImporTable();
                        })();
                    </script>


                    {{-- <!-- Modal -->
                    <div id="myModal7" class="modal" data-backdrop="static" data-keyboard="false" style="display: none;">
                        <div class="modal-content">
                            <span class="close" id="closeModal7">&times;</span>
                            <form id="modalForm" action="{{ route('dokumen.create') }}" method="POST">
                                @csrf
                                <div class="modal-form">
                                    <h5 class="text-primary" id="exampleModalCenterTitle">Tambah Barang</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="seriDokumen4" class="form-label">Seri</label>
                                            <input type="text" class="form-control" id="seriDokumen4" name="seriDokumen4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="hs" class="form-label">Hs</label>
                                            <select class="form-control" name="hs" id="select-field8" required>
                                                <option selected disabled>Pilih Hs</option>
                                                <option value="01012100 --- BIBIT">01012100 --- BIBIT</option>
                                                <option value="01012900 --- LAIN - LAIN">01012900 --- LAIN - LAIN</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="uraian" class="form-label">Uraian</label>
                                            <input type="text" class="form-control" id="uraian" name="uraian">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="merk" class="form-label">Merk</label>
                                            <input type="text" class="form-control" id="merk" name="merk">
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
                                        </div> --}}
                                        <br>
                                        {{-- <!-- Tombol Simpan & Batal -->
                                        <div class="button-group">
                                            <button type="submit" class="btn-save">Simpan</button>
                                            <button type="button" class="btn-cancel"
                                                onclick="closeModal()">Cancel</button>
                                        </div>
                                    </div> --}}
                            {{-- </div>
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
                                    <div class="tab-pane fade" id="pernyataan" role="tabpanel"
                                        aria-labelledby="pernyataan-tab">
                                        <div class="container-fluid p-4">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <!-- Harga -->
                                                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                        <h5 class="text-primary">Tempat & Tinggal</h5>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="kotaTtd" class="form-label">Tempat</label>
                                                                <input type="text" class="form-control" name="kotaTtd"
                                                                    value="{{ old('kotaTtd') }}"
                                                                    style="border: 1px solid #313131;">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="cif" class="form-label">Tanggal</label>
                                                                <input type="date" class="form-control"
                                                                    name="tanggalTtd" value="{{ old('tanggalTtd') }}"
                                                                    style="border: 1px solid #313131;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Nama -->
                                                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                        <h5 class="text-primary">Nama</h5>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="uang_muka" class="form-label">Nama</label>
                                                                <input type="text" class="form-control" name="namaTtd"
                                                                    value="{{ old('namaTtd') }}"
                                                                    style="border: 1px solid #313131;">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="Jabatan" class="form-label">Jabatan</label>
                                                                <input type="text" class="form-control"
                                                                    name="jabatanTtd" value="{{ old('jabatanTtd') }}"
                                                                    style="border: 1px solid #313131;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Tombol Submit -->
                                                    <div class="col-12 mt-3">
                                                        <button class="btn btn-primary" type="submit">Submit</button>
                                                        <a href="{{ route('dokumen_baru') }}"
                                                            class="btn btn-danger">Cancel</a>
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
            }); <
        /> <
        script >
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
        $('#select-field21').select2({
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
        document.getElementById("myBtn8").onclick = function() {
            document.getElementById("myModal8").style.display = "block";
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
    {{-- <script>
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
    </script> --}}


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
