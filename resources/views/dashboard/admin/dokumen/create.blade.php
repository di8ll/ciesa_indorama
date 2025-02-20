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
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Data Dokumen</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="barang-tab" data-bs-toggle="tab"
                                            data-bs-target="#barang" type="button" role="tab" aria-controls="barang"
                                            aria-selected="false">Barang</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="bahanBaku-tab" data-bs-toggle="tab"
                                            data-bs-target="#bahanBaku" type="button" role="tab"
                                            aria-controls="bahanBaku" aria-selected="false">Bahan Baku</button>
                                    </li>
                                    {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="bahanBakuTarif-tab" data-bs-toggle="tab"
                                            data-bs-target="#bahanBakuTarif" type="button" role="tab"
                                            aria-controls="bahanBakuTarif" aria-selected="false">Bahan Baku Tarif</button>
                                    </li> --}}
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="barangDokumen-tab" data-bs-toggle="tab"
                                            data-bs-target="#barangDokumen" type="button" role="tab"
                                            aria-controls="barangDokumen" aria-selected="false">Barang Dokumen</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="barangTarif-tab" data-bs-toggle="tab"
                                            data-bs-target="#barangTarif" type="button" role="tab"
                                            aria-controls="barangTarif" aria-selected="false">Barang Tarif</button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="Tarifbarang-tab" data-bs-toggle="tab"
                                            data-bs-target="#Tarifbarang" type="button" role="tab"
                                            aria-controls="Tarifbarang" aria-selected="false">Barang Tarif</button>
                                    </li> -->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="JenisPungutan-tab" data-bs-toggle="tab"
                                            data-bs-target="#JenisPungutan" type="button" role="tab"
                                            aria-controls="JenisPungutan" aria-selected="false">Kode Jenis Pungutan</button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="DokumenBarang-tab" data-bs-toggle="tab"
                                            data-bs-target="#DokumenBarang" type="button" role="tab"
                                            aria-controls="DokumenBarang" aria-selected="false">Barang Dokumen</button>
                                    </li> -->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="bakuTarif-tab" data-bs-toggle="tab"
                                            data-bs-target="#bakuTarif" type="button" role="tab"
                                            aria-controls="bakuTarif" aria-selected="false">Bahan Baku Tarif</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="entitas-tab" data-bs-toggle="tab"
                                            data-bs-target="#entitas" type="button" role="tab"
                                            aria-controls="entitas" aria-selected="false">Entitas</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="kemasan-tab" data-bs-toggle="tab"
                                            data-bs-target="#kemasan" type="button" role="tab"
                                            aria-controls="kemasan" aria-selected="false">Kemasan</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="kontainer-tab" data-bs-toggle="tab"
                                            data-bs-target="#kontainer" type="button" role="tab"
                                            aria-controls="kontainer" aria-selected="false">kontainer</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="dokumen-tab" data-bs-toggle="tab"
                                            data-bs-target="#dokumen" type="button" role="tab"
                                            aria-controls="dokumen" aria-selected="false">dokumen</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pengangkut-tab" data-bs-toggle="tab"
                                            data-bs-target="#pengangkut" type="button" role="tab"
                                            aria-controls="pengangkut" aria-selected="false">Pengangkut</button>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="asalData" class="form-label">Asal Data</label>
                                                <input type="text" class="form-control" id="asalData"
                                                    name="asalData" value="{{ old('asalData','S') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Bruto</label>
                                                <input class="form-control" type="text" name="bruto" id="bruto"  value="{{ old('bruto', 3818.88) }}" >
                                           </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Cif</label>
                                                <input type="text" class="form-control" id="cif" name="cif"
                                                    value="{{ old('cif', 5070.2) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Dasar Pengenaan
                                                    Pajak</label>
                                                <input type="text" class="form-control" id="dasarPengenaanPajak"
                                                    name="dasarPengenaanPajak" value="{{ old('dasarPengenaanPajak',148358277.72) }}"
                                                    >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Disclaimer</label>
                                                <input type="text" class="form-control" id="disclaimer"
                                                    name="disclaimer" value="{{ old('disclaimer','1') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Kode Jenis TPB</label>
                                                <input type="text" class="form-control" id="kodeJenisTpb"
                                                    name="kodeJenisTpb" value="{{ old('kodeJenisTpb','1') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Harga
                                                    Penyerahan</label>
                                                <input type="text" class="form-control" id="hargaPenyerahan"
                                                    name="hargaPenyerahan" value="{{ old('hargaPenyerahan',148358277.72) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Identitas
                                                    Penggguna</label>
                                                <input type="text" class="form-control" id="idPengguna"
                                                    name="idPengguna" value="{{ old('idPengguna','010016') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Jabatan TTD</label>
                                                <input type="text" class="form-control" id="jabatanTtd"
                                                    name="jabatanTtd" value="{{ old('jabatanTtd','PPIC Manager') }}" >
                                            </div>


                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Jumlah Kontainer</label>
                                                <input type="text" class="form-control"  id="jumlahKontainer"
                                                    name="jumlahKontainer" value="{{ old('jumlahKontainer', 0) }}">
                                            </div>


                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">kode Cara Bayar</label>
                                                <input type="text" class="form-control" id="kodeCaraBayar"
                                                    name="kodeCaraBayar" value="{{ old('kodeCaraBayar','13') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="kodeDokumen" class="form-label">Kode Dokumen</label>
                                                <input type="text"  class="form-control"
                                                 id="kodeDokumen" name="kodeDokumen" value="{{ old('kodeDokumen','25') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">kode Kantor</label>
                                                <input type="text" class="form-control" id="kodeKantor"
                                                    name="kodeKantor" value="{{ old('kodeKantor','050800') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">kode Lokasi
                                                    Bayar</label>
                                                <input type="text" class="form-control" id="kodeLokasiBayar"
                                                    name="kodeLokasiBayar" value="{{ old('kodeLokasiBayar','1') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">kode Tujuan
                                                    Pengiriman</label>
                                                <input type="text" class="form-control" id="kodeTujuanPengiriman"
                                                    name="kodeTujuanPengiriman" value="{{ old('kodeTujuanPengiriman','1') }}"
                                                    >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">kode Valuta</label>
                                                <input type="text" class="form-control" id="kodeValuta"
                                                    name="kodeValuta" value="{{ old('kodeValuta','USD') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">kota Ttd</label>
                                                <input type="text" class="form-control" id="kotaTtd" name="kotaTtd"
                                                    value="{{ old('kotaTtd','Purwakarta') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">nama Ttd</label>
                                                <input type="text" class="form-control" id="namaTtd" name="namaTtd"
                                                    value="{{ old('namaTtd','Tes Dokumen H2H') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">ndpbm</label>
                                                <input type="text" class="form-control" id="ndpbm" name="ndpbm"
                                                    value="{{ old('ndpbm', 16357) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Netto</label>
                                                <input type="text" class="form-control" id="netto" name="netto"
                                                    value="{{ old('netto', 3632.72) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Nomor Aju</label>
                                                <input type="text" class="form-control" id="nomorAju"
                                                    name="nomorAju" value="{{ old('nomorAju','70002501001620250131000004') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Seri</label>
                                                <input type="text" class="form-control" id="seri" name="seri"
                                                    value="{{ old('seri',1) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Tanggal Aju</label>
                                                <input type="text" class="form-control" id="tanggalAju"
                                                    name="tanggalAju" value="{{ old('tanggalAju','2025-02-09') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">tanggal Ttd</label>
                                                <input type="text" class="form-control" id="tanggalTtd"
                                                    name="tanggalTtd" value="{{ old('tanggalTtd','2025-02-09') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">Volume</label>
                                                <input type="text" class="form-control" id="volume" name="volume"
                                                    value="{{ old('volume',0) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">ppn Pajak</label>
                                                <input type="text" class="form-control" id="ppnPajak"
                                                    name="ppnPajak" value="{{ old('ppnPajak', 16319410.55) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">ppnbm Pajak</label>
                                                <input type="text" class="form-control" id="ppnbmPajak"
                                                    name="ppnbmPajak" value="{{ old('ppnbmPajak', 0) }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">tarif Ppn Pajak</label>
                                                <input type="text" class="form-control" id="tarifPpnPajak"
                                                    name="tarifPpnPajak" value="{{ old('tarifPpnPajak', 11) }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="tarifPpnbmPajak" class="form-label">tarif Ppnbm
                                                    Pajak</label>
                                                <input type="text" class="form-control " id="tarifPpnbmPajak"
                                                    name="tarifPpnbmPajak" value="{{ old('tarifPpnbmPajak', 0) }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Barang --}}
                                    <div class="tab-pane fade" id="barang" role="tabpanel"
                                        aria-labelledby="barang-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="bruto2" class="form-label">Bruto</label>
                                                <input class="form-control" type="text" name="bruto2" id="bruto2"  value="{{ old('bruto', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cif2" class="form-label">cif</label>
                                                <input type="text" class="form-control" id="cif2" name="ci2"
                                                    value="{{ old('cif', 1267.55) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="diskon" class="form-label">diskon</label>
                                                <input type="text" class="form-control" id="diskon" name="diskon"
                                                    value="{{ old('diskon', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="fob" class="form-label">fob</label>
                                                <input type="text" class="form-control" id="fob" name="fob"
                                                    value="{{ old('fob', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="freight" class="form-label">freight</label>
                                                <input type="text" class="form-control" id="freight" name="freight"
                                                    value="{{ old('freight', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="hargaEkspor" class="form-label">harga Ekspor</label>
                                                <input type="text" class="form-control" id="hargaEkspor"
                                                    name="hargaEkspor" value="{{ old('hargaEkspor', 0) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="hargaPenyerahan2" class="form-label">harga Penyerahan</label>
                                                <input type="text" class="form-control" id="hargaPenyerahan2"
                                                    name="hargaPenyerahan2" value="{{ old('hargaPenyerahan', 36751365.47) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="isiPerKemasan" class="form-label">isi PerKemasan</label>
                                                <input type="text" class="form-control" id="isiPerKemasan"
                                                    name="isiPerKemasan" value="{{ old('isiPerKemasan', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahKemasan" class="form-label">jumlah Kemasan</label>
                                                <input type="text" class="form-control" id="jumlahKemasan"
                                                    name="jumlahKemasan" value="{{ old('jumlahKemasan', 26) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan"
                                                    name="jumlahSatuan" value="{{ old('jumlahSatuan', 908.18) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeBarang" class="form-label">Kode Barang</label>
                                                <input type="text" class="form-control" id="kodeBarang"
                                                    name="kodeBarang" value="{{ old('kodeBarang',"TC-41200-100-0") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeGunaBarang" class="form-label">kode Guna Barang</label>
                                                <input type="text" class="form-control" id="kodeGunaBarang"
                                                    name="kodeGunaBarang" value="{{ old('kodeGunaBarang',"3") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeKategoriBarang" class="form-label">kode Kategori
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeKategoriBarang"
                                                    name="kodeKategoriBarang" value="{{ old('kodeKategoriBarang',"1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisKemasan" class="form-label">kode Jenis
                                                    Kemasan</label>
                                                <input type="text" class="form-control" id="kodeJenisKemasan"
                                                    name="kodeJenisKemasan" value="{{ old('kodeJenisKemasan',"CT") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeKondisiBarang" class="form-label">kode Kondisi
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeKondisiBarang"
                                                    name="kodeKondisiBarang" value="{{ old('kodeKondisiBarang',"1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodePerhitungan" class="form-label">kode Perhitungan</label>
                                                <input type="text" class="form-control" id="kodePerhitungan"
                                                    name="kodePerhitungan" value="{{ old('kodePerhitungan',"0") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeSatuanBarang"
                                                    name="kodeSatuanBarang" value="{{ old('kodeSatuanBarang',"KGM") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="merk" class="form-label">merk</label>
                                                <input type="text" class="form-control" id="merk" name="merk"
                                                    value="{{ old('merk',"Indo-Rama") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="netto" class="form-label">netto</label>
                                                <input type="text" class="form-control" id="netto2" name="netto2"
                                                    value="{{ old('netto', 908.18) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBarang" class="form-label">nilai Barang</label>
                                                <input type="text" class="form-control" id="nilaiBarang"
                                                    name="nilaiBarang" value="{{ old('nilaiBarang',0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="posTarif" class="form-label">pos Tarif</label>
                                                <input type="text" class="form-control" id="posTarif"
                                                    name="posTarif" value="{{ old('posTarif',"52062200") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBarang" class="form-label">seri Barang</label>
                                                <input type="text" class="form-control" id="seriBarang"
                                                    name="seriBarang" value="{{ old('seriBarang', 1) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="spesifikasiLain" class="form-label">spesifikasi Lain</label>
                                                <input type="text" class="form-control" id="spesifikasiLain"
                                                    name="spesifikasiLain" value="{{ old('spesifikasiLain',"-") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tipe" class="form-label">tipe</label>
                                                <input type="text" class="form-control" id="tipe" name="tipe"
                                                    value="{{ old('tipe',"-") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ukuran" class="form-label">ukuran</label>
                                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                                    value="{{ old('ukuran',"-") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="uraian" class="form-label">uraian</label>
                                                <input type="text" class="form-control" id="uraian" name="uraian"
                                                    value="{{ old('uraian',"CVC-KT-20-1") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ndpbm" class="form-label">ndpbm</label>
                                                <input type="text" class="form-control" id="ndpbm2" name="ndpbm"
                                                    value="{{ old('ndpbm', 16357) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cifRupiah" class="form-label">cif Rupiah</label>
                                                <input type="text" class="form-control" id="cifRupiah"
                                                    name="cifRupiah" value="{{ old('cifRupiah',20733315.35) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="hargaPerolehan" class="form-label">harga Perolehan</label>
                                                <input type="text" class="form-control" id="hargaPerolehan"
                                                    name="hargaPerolehan" value="{{ old('hargaPerolehan', 0) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeDokAsal" class="form-label">kode Dok Asal</label>
                                                <input type="text" class="form-control" id="kodeDokAsal"
                                                    name="kodeDokAsal" value="{{ old('kodeDokAsal', "a") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="flag4tahun" class="form-label">flag4tahun</label>
                                                <input type="text" class="form-control" id="flag4tahun"
                                                    name="flag4tahun" value="{{ old('flag4tahun', "a") }}" >
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Bahan Baku --}}
                                    <div class="tab-pane fade" id="bahanBaku" role="tabpanel"
                                        aria-labelledby="bahanBaku-tab">
                                        <div class="row">
                                            {{-- beda --}}
                                            <div class="col-md-3">
                                                <label for="kodeBahanBaku" class="form-label">Kode Bahan Baku</label>
                                                <input type="text" class="form-control" id="kodeBahanBaku"
                                                    name="kodeBahanBaku" value="{{ old('kodeBahanBaku',"BB001") }}" >
                                            </div>
                                              {{-- beda --}}
                                            <div class="col-md-3">
                                                <label for="jumlah" class="form-label">Jumlah</label>
                                                <input type="text" class="form-control" id="jumlah" name="jumlah"
                                                    value="{{ old('jumlah', 50.00) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cif3" class="form-label">CIF</label>
                                                <input type="text" class="form-control" id="cif3" name="cif3"
                                                    value="{{ old('cif', 61338.75) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cifRupiah2" class="form-label">cif Rupiah</label>
                                                <label for="validationCustom01" class="form-label">cif Rupiah</label>
                                                <input type="text" class="form-control " id="cifRupiah2"
                                                    name="cifRupiah2" value="{{ old('cifRupiah',45145.32) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="hargaPenyerahan3" class="form-label">harga
                                                    Penyerahan</label>
                                                <input type="text" class="form-control" id="hargaPenyerahan3"
                                                    name="hargaPenyerahan3" value="{{ old('hargaPenyerahan', 0) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan2" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control " id="jumlahSatuan2"
                                                    name="jumlahSatuan2" value="{{ old('jumlahSatuan', 1.09) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeAsalBahanBaku" class="form-label">kode Asal Bahan
                                                    Baku</label>
                                                <input type="text" class="form-control " id="kodeAsalBahanBaku"
                                                    name="kodeAsalBahanBaku" value="{{ old('kodeAsalBahanBaku','1') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeBarang2" class="form-label">kode Barang</label>
                                                <input type="text" class="form-control " id="kodeBarang2"
                                                    name="kodeBarang2" value="{{ old('kodeBarang',"09-05002-014-O") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeDokAsal2" class="form-label">kode Dok Asal</label>
                                                <input type="text" class="form-control " id="kodeDokAsal2"
                                                    name="kodeDokAsal2" value="{{ old('kodeDokAsal',"23") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeKantor2" class="form-label">kode Kantor</label>
                                                <input type="text" class="form-control " id="kodeKantor2"
                                                    name="kodeKantor2" value="{{ old('kodeKantor',"050800") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang2" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control " id="kodeSatuanBarang2"
                                                    name="kodeSatuanBarang2" value="{{ old('kodeSatuanBarang','KGM') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="merkBarang" class="form-label">merk Barang</label>
                                                <input type="text" class="form-control " id="merkBarang"
                                                    name="merkBarang" value="{{ old('merkBarang','Sesuai Invoice') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ndpbm3" class="form-label">ndpbm</label>
                                                <input type="text" class="form-control " id="ndpbm3"
                                                    name="ndpbm3" value="{{ old('ndpbm', 16322) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">nomor Aju Dok
                                                    Asal</label>
                                                <input type="text" class="form-control " id="nomorAjuDokAsal"
                                                    name="nomorAjuDokAsal" value="{{ old('nomorAjuDokAsal',"00002301001620250107000018") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorDaftarDokAsal" class="form-label">nomor Daftar Dok
                                                    Asal</label>
                                                <input type="text" class="form-control" id="nomorDaftarDokAsal"
                                                    name="nomorDaftarDokAsal" value="{{ old('nomorDaftarDokAsal',"002877") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="posTarif2" class="form-label">pos Tarif</label>
                                                <input type="text" class="form-control " id="posTarif2"
                                                    name="posTarif2" value="{{ old('posTarif',"34039190") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBahanBaku" class="form-label">Seri Bahan Baku</label>
                                                <input type="text" class="form-control " id="seriBahanBaku"
                                                    name="seriBahanBaku" value="{{ old('seriBahanBaku', 1) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBarang2" class="form-label">seri Barang</label>
                                                <input type="text" class="form-control " id="seriBarang2"
                                                    name="seriBarang2" value="{{ old('seriBarang', 2) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBarangDokAsal" class="form-label">seri Barang Dok
                                                    Asal</label>
                                                <input type="text" class="form-control " id="seriBarangDokAsal"
                                                    name="seriBarangDokAsal" value="{{ old('seriBarangDokAsal',2) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control " id="seriIjin"
                                                    name="seriIjin" value="{{ old('seriIjin', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">spesifikasi Lain
                                                    Barang</label>
                                                <input type="text" class="form-control " id="spesifikasiLainBarang"
                                                    name="spesifikasiLainBarang"
                                                    value="{{ old('spesifikasiLainBarang',"Baik dan Baru") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">tanggal Daftar Dok
                                                    Asal</label>
                                                <input type="text" class="form-control " id="tanggalDaftarDokAsal"
                                                    name="tanggalDaftarDokAsal" value="{{ old('tanggalDaftarDokAsal',"2025-01-15") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">tipe Barang</label>
                                                <input type="text" class="form-control " id="tipeBarang"
                                                    name="tipeBarang" value="{{ old('tipeBarang',"Sesuai Invoice") }}" >
                                            </div>

                                        </div>
                                    </div>

                                    {{-- bahan Baku Tarif --}}
                                    <div class="tab-pane fade" id="bahanBakuTarif" role="tabpanel"
                                        aria-labelledby="bahanBakuTarif-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif"
                                                    name="kodeJenisTarif" value="{{ old('kodeJenisTarif',"1") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan3" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan3"
                                                    name="jumlahSatuan" value="{{ old('jumlahSatuan',7.9) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif"
                                                    name="kodeFasilitasTarif" value="{{ old('kodeFasilitasTarif',"5") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan"
                                                    name="kodeJenisPungutan" value="{{ old('kodeJenisPungutan',"PPNLOKAL") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar"
                                                    name="nilaiBayar" value="{{ old('nilaiBayar', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas"
                                                    name="nilaiFasilitas" value="{{ old('nilaiFasilitas', 0) }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi"
                                                    name="nilaiSudahDilunasi" value="{{ old('nilaiSudahDilunasi', 0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control" id="seriBahanBaku2"
                                                    name="seriBahanBaku2" value="{{ old('seriBahanBaku', 2) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif" name="tarif"
                                                    value="{{ old('tarif',11) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas"
                                                    name="tarifFasilitas" value="{{ old('tarifFasilitas',100) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ukuranBarang" class="form-label">ukuran Barang</label>
                                                <input type="text" class="form-control" id="ukuranBarang"
                                                    name="ukuranBarang" value="{{ old('ukuranBarang',"Sesuai Invoice") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="uraianBarang" class="form-label">uraian Barang</label>
                                                <input type="text" class="form-control" id="uraianBarang"
                                                    name="uraianBarang" value="{{ old('uraianBarang',"TITANIUM DIOXIDE TIO2 (TIO2)") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control" id="seriDokumen"
                                                    name="seriDokumen" value="{{ old('seriDokumen', 1) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriIjin" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control" id="seriIjin2"
                                                    name="seriIjin2" value="{{ old('seriIjin',0) }}" >
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Barang Dokumen --}}
                                    <!-- <div class="tab-pane fade" id="barangDokumen" role="tabpanel"
                                        aria-labelledby="barangDokumen-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control" id="seriDokumen"
                                                    name="seriDokumen" value="{{ old('seriDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriIjin" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control" id="seriIjin2"
                                                    name="seriIjin2" value="{{ old('seriIjin') }}" >
                                            </div>
                                        </div>
                                    </div> -->


                                         {{--Barang Tarif 1--}}
                                         <div class="tab-pane fade" id="barangTarif" role="tabpanel"
                                         aria-labelledby="barangTarif-tab">
                                         <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                         <h5 class="text-primary">Inputan Ke 1</h5>
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <label for="seriBarang3" class="form-label">seri Barang</label>
                                                 <input type="text" class="form-control" id="seriBarang3"
                                                     name="seriBarang3" value="{{ old('seriBarang',1) }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                 <input type="text" class="form-control" id="kodeJenisTarif2"
                                                     name="kodeJenisTarif2" value="{{ old('kodeJenisTarif',"1") }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="jumlahSatuan4" class="form-label">jumlah Satuan</label>
                                                 <input type="text" class="form-control" id="jumlahSatuan4"
                                                     name="jumlahSatuan4" value="{{ old('jumlahSatuan',908.18) }}">
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                     Tarif</label>
                                                 <input type="text" class="form-control" id="kodeFasilitasTarif2"
                                                     name="kodeFasilitasTarif[" value="{{ old('kodeFasilitasTarif',"1") }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeSatuanBarang3" class="form-label">kode Satuan
                                                     Barang</label>
                                                 <input type="text" class="form-control" id="kodeSatuanBarang3"
                                                     name="kodeSatuanBarang3" value="{{ old('kodeSatuanBarang',"KGM") }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                     Pungutan</label>
                                                 <input type="text" class="form-control" id="kodeJenisPungutan2"
                                                     name="kodeJenisPungutan2" value="{{ old('kodeJenisPungutan',"BM") }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                 <input type="text" class="form-control" id="nilaiBayar2"
                                                     name="nilaiBayar2" value="{{ old('nilaiBayar',0) }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                 <input type="text" class="form-control" id="nilaiFasilitas2"
                                                     name="nilaiFasilitas2" value="{{ old('nilaiFasilitas',0) }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                     Dilunasi</label>
                                                 <input type="text" class="form-control" id="nilaiSudahDilunasi2"
                                                     name="nilaiSudahDilunasi2" value="{{ old('nilaiSudahDilunasi',0) }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="tarif" class="form-label">tarif</label>
                                                 <input type="text" class="form-control" id="tarif2"
                                                     name="tarif2" value="{{ old('tarif',7.5) }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                 <input type="text" class="form-control" id="tarifFasilitas2"
                                                     name="tarifFasilitas2" value="{{ old('tarifFasilitas', 100) }}"
                                                     >
                                             </div>

                                         </div>
                                     </div>
                                     <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                     <h5 class="text-primary">Inputan Ke 2</h5>
                                            <div class="col-md-3">
                                                <label for="seriBarang" class="form-label">seri Barang</label>
                                                <input type="text" class="form-control" id="seriBarang4"
                                                    name="seriBarang4" value="{{ old('seriBarang', 1) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif3"
                                                    name="kodeJenisTarif3" value="{{ old('kodeJenisTarif',"1") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan5" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan5"
                                                    name="jumlahSatuan5" value="{{ old('jumlahSatuan',908.18) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif3"
                                                    name="kodeFasilitasTarif3" value="{{ old('kodeFasilitasTarif',"1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang4" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeSatuanBarang4"
                                                    name="kodeSatuanBarang4" value="{{ old('kodeSatuanBarang',"PCS") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan3"
                                                    name="kodeJenisPungutan3" value="{{ old('kodeJenisPungutan',"KGM") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar3"
                                                    name="nilaiBayar3" value="{{ old('nilaiBayar', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas3"
                                                    name="nilaiFasilitas3 value="{{ old('nilaiFasilitas',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi3"
                                                    name="nilaiSudahDilunasi3" value="{{ old('nilaiSudahDilunasi',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif3"
                                                    name="tarif3" value="{{ old('tarif',11) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas3"
                                                    name="tarifFasilitas3" value="{{ old('tarifFasilitas',100) }}"
                                                    >
                                            </div>
                                                <div class="col-md-3">
                                                 <label for="jumlahSatuan6" class="form-label">jumlah Satuan</label>
                                                 <input type="text" class="form-control" id="jumlahSatuan6"
                                                     name="jumlahSatuan6" value="{{ old('jumlahSatuan',908.18) }}" autofocus
                                                     required>
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                     Tarif</label>
                                                 <input type="text" class="form-control" id="kodeFasilitasTarif4"
                                                     name="kodeFasilitasTarif4" value="{{ old('kodeFasilitasTarif',"1") }}"
                                                     >
                                             </div>
                                        </div>
                                    </div>

                                    {{-- kode Jenis Pungutan --}}
                                    <div class="tab-pane fade" id="JenisPungutan" role="tabpanel"
                                        aria-labelledby="JenisPungutan-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan7" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan7"
                                                    name="jumlahSatuan7" value="{{ old('jumlahSatuan',19455.4) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif5"
                                                    name="kodeFasilitasTarif5" value="{{ old('kodeFasilitasTarif',"1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan4"
                                                    name="kodeJenisPungutan4" value="{{ old('kodeJenisPungutan',"PPH") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif4"
                                                    name="kodeJenisTarif4" value="{{ old('kodeJenisTarif','1') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeSatuanBarang5"
                                                    name="kodeSatuanBarang5" value="{{ old('kodeSatuanBarang',"KGM") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar4"
                                                    name="nilaiBayar4" value="{{ old('nilaiBayar',0) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas4"
                                                    name="nilaiFasilitas4" value="{{ old('nilaiFasilitas',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi4"
                                                    name="nilaiSudahDilunasi4 value="{{ old('nilaiSudahDilunasi',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif4"
                                                    name="tarif4" value="{{ old('tarif',2.5) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas4"
                                                    name="tarifFasilitas4" value="{{ old('tarifFasilitas',100) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control" id="seriDokumen2"
                                                    name="seriDokumen2" value="{{ old('seriDokumen', 0) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriIjin" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control" id="seriIjin3"
                                                    name="seriIjin3" value="{{ old('seriIjin', 0) }}" >
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Barang Dokumen --}}
                                    <!-- <div class="tab-pane fade" id="DokumenBarang" role="tabpanel"
                                        aria-labelledby="DokumenBarang-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control" id="seriDokumen2"
                                                    name="seriDokumen2" value="{{ old('seriDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriIjin" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control" id="seriIjin3"
                                                    name="seriIjin3" value="{{ old('seriIjin') }}" >
                                            </div>
                                        </div>
                                    </div> -->

                                    {{-- Bahan Baku Tarif --}}
                                    <div class="tab-pane fade" id="bakuTarif" role="tabpanel"
                                        aria-labelledby="bakuTarif-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif5"
                                                    name="kodeJenisTarif5" value="{{ old('kodeJenisTarif', "1") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan8" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan8"
                                                    name="jumlahSatuan8" value="{{ old('jumlahSatuan',7.9) }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif6"
                                                    name="kodeFasilitasTarif6" value="{{ old('kodeFasilitasTarif') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan5"
                                                    name="kodeJenisPungutan5" value="{{ old('kodeJenisPungutan',"5") }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar5"
                                                    name="nilaiBayar5" value="{{ old('nilaiBayar', 0) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas5"
                                                    name="nilaiFasilitas5" value="{{ old('nilaiFasilitas',0) }}"
                                                    >

                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi5"
                                                    name="nilaiSudahDilunasi5" value="{{ old('nilaiSudahDilunasi',0) }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control" id="seriBahanBaku3"
                                                    name="seriBahanBaku3" value="{{ old('seriBahanBaku',2) }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif5"
                                                    name="tarif5" value="{{ old('tarif',11) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas5"
                                                    name="tarifFasilitas" value="{{ old('tarifFasilitas',100) }}"
                                                    >
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Entitas --}}
                                    <div class="tab-pane fade" id="entitas" role="tabpanel"
                                        aria-labelledby="entitas-tab">
                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Inputan Ke 1</h5>
                                            <div class="col-md-3">
                                                <label for="alamatEntitas" class="form-label">Alamat Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="alamatEntitas" name="alamatEntitas"
                                                    value="{{ old('alamatEntitas',"Jalan Raya Ubrug, Desa Kembangkuning, Kecamatan Jatiluhur, PO BOX 2&7, Kabupaten Purwakarta, Jawa Barat 41101") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeEntitas" name="kodeEntitas"
                                                    value="{{ old('kodeEntitas',"3") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisApi" class="form-label">kode Jenis Api</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisApi" name="kodeJenisApi"
                                                    value="{{ old('kodeJenisApi',"2") }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                    Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisIdentitas" name="kodeJenisIdentitas"
                                                    value="{{ old('kodeJenisIdentitas',"6") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeStatus" class="form-label">Kode Status</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeStatus" name="kodeStatus"
                                                    value="{{ old('kodeStatus',"3") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="namaEntitas" class="form-label">nama Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="namaEntitas" name="namaEntitas"
                                                    value="{{ old('namaEntitas',"PT Indo-Rama Synthetics, Tbk.") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nibEntitas" class="form-label">nib Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nibEntitas" name="nibEntitas"
                                                    value="{{ old('nibEntitas',"8120302880325") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorIdentitas" class="form-label">nomor Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorIdentitas" name="nomorIdentitas"
                                                    value="{{ old('nomorIdentitas','0010016806054000000000') }}" >
                                            </div>
                                        <div class="col-md-3">
                                            <label for="nomorIjinEntitas" class="form-label">nomor Ijin Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="nomorIjinEntitas" name="nomorIjinEntitas"
                                                value="{{ old('nomorIjinEntitas','KEP-724/WBC.09/2022') }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tanggalIjinEntitas" class="form-label">tanggal Ijin Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="tanggalIjinEntitas" name="tanggalIjinEntitas"
                                                value="{{ old('tanggalIjinEntitas','2022-10-24') }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="seriEntitas" class="form-label">seri Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriEntitas" name="seriEntitas"
                                                value="{{ old('seriEntitas',3) }}" >
                                        </div>
                                    </div>

                                        <div class="row p-3 border rounded shadow-sm bg-white">
                                            <h5 class="text-success">Inputan Ke 2</h5>
                                            <div class="col-md-3">
                                                <label for="alamatEntitas" class="form-label">Alamat Entitas</label>
                                                <input type="text" class="form-control border-success"
                                                    id="alamatEntitas2" name="alamatEntitas2"
                                                    value="{{ old('alamatEntitas',"Jalan Raya Ubrug, Desa Kembangkuning, Kecamatan Jatiluhur, PO BOX 2&7, Kabupaten Purwakarta, Jawa Barat 41101") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                <input type="text" class="form-control border-success"
                                                    id="kodeEntitas2" name="kodeEntitas2"
                                                    value="{{ old('kodeEntitas',"7") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisApi" class="form-label">kode Jenis Api</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisApi2" name="kodeJenisApi2"
                                                    value="{{ old('kodeJenisApi','2') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                    Identitas</label>
                                                <input type="text" class="form-control border-success"
                                                    id="kodeJenisIdentitas2" name="kodeJenisIdentitas2"
                                                    value="{{ old('kodeJenisIdentitas,"6"') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeStatus2" class="form-label">Kode Status</label>
                                                <input type="text" class="form-control border-success"
                                                    id="kodeStatus2" name="kodeStatus2"
                                                    value="{{ old('kodeStatus',"3") }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="namaEntitas" class="form-label">nama Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="namaEntitas2" name="namaEntita2"
                                                    value="{{ old('namaEntitas','PT Indo-Rama Synthetics, Tbk.') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="niperEntitas" class="form-label">niper Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="niperEntitas" name="niperEntitas"
                                                    value="{{ old('niperEntitas',"dadang") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorIdentitas" class="form-label">nomor Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorIdentitas2" name="nomorIdentitas2"
                                                    value="{{ old('nomorIdentitas',"0010016806054000000000") }}" >
                                            </div>
                                        <div class="col-md-3">
                                            <label for="seriEntitas" class="form-label">seri Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriEntitas2" name="seriEntitas2"
                                                value="{{ old('seriEntitas',7) }}" >
                                        </div>
                                        </div>

                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Inputan Ke 3</h5>
                                            <div class="col-md-3">
                                                <label for="alamatEntitas" class="form-label">Alamat Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="alamatEntitas3" name="alamatEntitas3"
                                                    value="{{ old('alamatEntitas',"JL. PARALON, NO. 10, RW 004, RT 003, CIGONDEWAH KALER, BANDUNG KULON, KOTA BANDUNG, JAWA BARAT, 40214",) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeEntitas3" name="kodeEntitas3"
                                                    value="{{ old('kodeEntitas',"8") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisApi" class="form-label">kode Jenis Api</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisApi3" name="kodeJenisApi3"
                                                    value="{{ old('kodeJenisApi',"2") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                    Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisIdentitas3" name="kodeJenisIdentitas3"
                                                    value="{{ old('kodeJenisIdentitas',"6") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeStatus1" class="form-label">Kode Status</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeStatus3" name="kodeStatus3"
                                                    value="{{ old('kodeStatus',"3") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="namaEntitas" class="form-label">nama Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="namaEntitas3" name="namaEntitas3"
                                                    value="{{ old('namaEntitas',"TRI JAYA SANDANG LESTARI") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="niperEntitas" class="form-label">niper Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="niperEntitas2" name="niperEntitas2"
                                                    value="{{ old('niperEntitas','yakul') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorIdentitas" class="form-label">nomor Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorIdentitas3" name="nomorIdentitas3"
                                                    value="{{ old('nomorIdentitas',"0802371880422000000000") }}" >
                                            </div>
                                        <div class="col-md-3">
                                            <label for="seriEntitas" class="form-label">seri Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriEntitas3" name="seriEntitas3"
                                                value="{{ old('seriEntitas', 8) }}" >
                                        </div>
                                        </div>
                                    </div>

                                    {{-- kemasan --}}
                                    <div class="tab-pane fade" id="kemasan" role="tabpanel"
                                        aria-labelledby="kemasan-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="jumlahKemasan2" class="form-label">Jumlah Kemasan</label>
                                                <input type="text" class="form-control" id="jumlahKemasan2"
                                                    name="jumlahKemasan2" value="{{ old('jumlahKemasan',104) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisKemasan2" class="form-label">kode Jenis Kemasan</label>
                                                <input type="text" class="form-control" id="kodeJenisKemasan2"
                                                    name="kodeJenisKemasan2" value="{{ old('kodeJenisKemasan',"CT") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="merkKemasan" class="form-label">merk Kemasan</label>
                                                <input type="text" class="form-control" id="merkKemasan"
                                                    name="merkKemasan" value="{{ old('merkKemasan') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriKemasan" class="form-label">seri Kemasan</label>
                                                <input type="text" class="form-control" id="seriKemasan"
                                                    name="seriKemasan" value="{{ old('seriKemasan') }}" >
                                            </div>
                                        </div>
                                    </div>

                                    {{-- kontainer --}}
                                    <div class="tab-pane fade" id="kontainer" role="tabpanel"
                                        aria-labelledby="kontainer-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="kodeJenisKontainer" class="form-label">kode Jenis Kontainer</label>
                                                <input type="text" class="form-control" id="kodeJenisKontainer"
                                                    name="kodeJenisKontainer" value="{{ old('kodeJenisKontainer','4') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeTipeKontainer" class="form-label">kode Tipe Kontainer</label>
                                                <input type="text" class="form-control" id="kodeTipeKontainer"
                                                    name="kodeTipeKontainer" value="{{ old('kodeTipeKontainer',"1") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeUkuranKontainer" class="form-label">kode Ukuran Kontainer</label>
                                                <input type="text" class="form-control" id="kodeUkuranKontainer"
                                                    name="kodeUkuranKontainer" value="{{ old('kodeUkuranKontainer',"40") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorKontainer" class="form-label">nomor Kontainer</label>
                                                <input type="text" class="form-control" id="nomorKontainer"
                                                    name="nomorKontainer" value="{{ old('nomorKontainer',"CONTAINER123") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriKontainer" class="form-label">seri Kontainer</label>
                                                <input type="text" class="form-control" id="seriKontainer"
                                                    name="seriKontainer" value="{{ old('seriKontainer',1) }}" >
                                            </div>

                                        </div>
                                    </div>


                                    {{-- dokumen --}}
                                    <div class="tab-pane fade" id="dokumen" role="tabpanel"
                                        aria-labelledby="dokumen-tab">
                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Inputan Ke 1</h5>
                                            <div class="col-md-3">
                                                <label for="idDokumen" class="form-label">id Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="idDokumen" name="idDokumen"
                                                    value="{{ old('idDokumen','1') }}" >
                                            </div>


                                            <div class="col-md-3">
                                                <label for="kodeDokumen2" class="form-label">Kode Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                       id="kodeDokumen2" name="kodeDokumen2"
                                                       value="{{ old('kodeDokumen','380') }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="nomorDokumen" class="form-label">nomor Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorDokumen" name="nomorDokumen"
                                                    value="{{ old('nomorDokumen','612500427') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="seriDokumen3" name="seriDokumen3"
                                                    value="{{ old('seriDokumen',1) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tanggalDokumen" class="form-label">tanggal Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="tanggalDokumen" name="tanggalDokumen"
                                                    value="{{ old('tanggalDokumen',"2025-02-04") }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Inputan Ke 2</h5>
                                            <div class="col-md-3">
                                                <label for="idDokumen" class="form-label">id Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="idDokumen2" name="idDokumen2"
                                                    value="{{ old('idDokumen',"2") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeDokumen3" class="form-label">kode Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeDokumen3" name="kodeDokumen3"
                                                    value="{{ old('kodeDokumen',"217") }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorDokumen" class="form-label">nomor Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorDokumen2" name="nomorDokumen2"
                                                    value="{{ old('nomorDokumen','612500427') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="seriDokumen4" name="seriDokumen4"
                                                    value="{{ old('seriDokumen',2) }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tanggalDokumen" class="form-label">tanggal Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="tanggalDokumen2" name="tanggalDokumen2"
                                                    value="{{ old('tanggalDokumen',2025-02-04) }}" >
                                            </div>
                                        </div>

                                        </div>

                                    {{-- Pengangkut --}}
                                    <div class="tab-pane fade" id="pengangkut" role="tabpanel"
                                        aria-labelledby="pengangkut-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="kodeCaraAngkut" class="form-label">kode Cara Angkut</label>
                                                <input type="text" class="form-control" id="kodeCaraAngkut"
                                                    name="kodeCaraAngkut" value="{{ old('kodeCaraAngkut','3') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="namaPengangkut" class="form-label">nama Pengangkut</label>
                                                <input type="text" class="form-control" id="namaPengangkut"
                                                    name="namaPengangkut" value="{{ old('namaPengangkut','apaaja') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorPengangkut" class="form-label">nomor Pengangkut</label>
                                                <input type="text" class="form-control" id="nomorPengangkut"
                                                    name="nomorPengangkut" value="{{ old('nomorPengangkut','1') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriPengangkut" class="form-label">seri Pengangkut</label>
                                                <input type="text" class="form-control" id="seriPengangkut"
                                                    name="seriPengangkut" value="{{ old('seriPengangkut',1) }}" >
                                            </div>
                                        </div>
                                        <!-- Tombol Submit ditempatkan di sini -->
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
@endsection
