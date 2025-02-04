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
                                </ul>
                                <br>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="header" role="tabpanel"
                                        aria-labelledby="header-tab">
                                        <div class="row">
                                        <div class="col-md-3 d-none">
                                            <label for="kode_jenis_tpb" class="form-label">Jenis Dokumen</label>
                                            <input type="text" class="form-control" id="kodeDokumen" name="kode_jenis_tpb"
                                                value="{{ old('kodeDokumen', '25') }}" readonly>
                                        </div>
                                        <div class="col-md-3 d-none">
                                            <label for="kode_jenis_tpb" class="form-label">Entitas</label>
                                            <input type="text" class="form-control" id="kode_jenis_tpb" name="kode_jenis_tpb"
                                                value="{{ old('kode_jenis_tpb', 'TPB') }}" readonly>
                                        </div>
                                        <div class="col-md-3 d-none">
                                            <label for="nomor_pengajuan" class="form-label">Nomor Pengajuan</label>
                                            <input type="text" class="form-control" id="nomor_pengajuan" name="nomor_pengajuan"
                                                value="{{ old('nomor_pengajuan', '700025-010016-20250131-000001') }}" readonly>
                                        </div>
                                        <div class="col-md-3 d-none">
                                            <label for="kantor_pabean" class="form-label">Kantor Pabean</label>
                                            <input type="text" class="form-control" id="kantor_pabean" name="kantor_pabean"
                                                value="{{ old('kantor_pabean', '050800 - KPPBC TMP A PURWAKARTA') }}" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nomor_pengajuan" class="form-label">Jenis TPB</label>
                                            <select class="form-control" name="sub_bidang" id="select-field1"
                                                onchange="applyClientFilter1()" required style="border: 1px solid #313131;">
                                                <option selected disabled>Pilih Jenis TPB</option>
                                                <option value="1" {{ old('jenis_tpb') == '1' ? 'selected' : '' }}>1 - KAWASAN BERIKAT</option>
                                                <option value="10" {{ old('jenis_tpb') == '10' ? 'selected' : '' }}>10 - FTZ</option>
                                                <option value="11" {{ old('jenis_tpb') == '11' ? 'selected' : '' }}>11 - BUKEK</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nomor_pengajuan" class="form-label">Tujuan Pengiriman</label>
                                            <select class="form-control" name="tujuan_pengiriman" id="select-field2"
                                                onchange="applyClientFilter2()" required style="border: 1px solid #313131;">
                                                <option selected disabled>Pilih Tujuan Pengiriman</option>
                                                <option value="1" {{ old('tujuan_pengiriman') == '1' ? 'selected' : '' }}>1 - PENYERAHAN BKP</option>
                                                <option value="2" {{ old('tujuan_pengiriman') == '2' ? 'selected' : '' }}>2 - PENYERAHAN JKP</option>
                                                <option value="3" {{ old('tujuan_pengiriman') == '3' ? 'selected' : '' }}>3 - RETUR</option>
                                                <option value="4" {{ old('tujuan_pengiriman') == '3' ? 'selected' : '' }}>4 - NON PENYERAHAN</option>
                                                <option value="5" {{ old('tujuan_pengiriman') == '3' ? 'selected' : '' }}>5 - LAINNYA</option>
                                            </select>
                                            </div>
                                            <div class="col-md-4">
                                            <label for="cara_bayar" class="form-label">Cara Bayar</label>
                                            <select class="form-control" name="cara_bayar" id="select-field3"
                                                onchange="applyClientFilter3()" required style="border: 1px solid #313131;">
                                                <option selected disabled>Pilih Cara Bayar</option>
                                                <option value="1" {{ old('cara_bayar') == '1' ? 'selected' : '' }}>1 - BIASA / TUNAI</option>
                                                <option value="10" {{ old('cara_bayar') == '10' ? 'selected' : '' }}>10 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA BERTAHAP)</option>
                                                <option value="11" {{ old('cara_bayar') == '11' ? 'selected' : '' }}>11 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT SECARA TUNAI)</option>
                                                <option value="12" {{ old('cara_bayar') == '12' ? 'selected' : '' }}>12 - DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI</option>
                                                <option value="13" {{ old('cara_bayar') == '13' ? 'selected' : '' }}>13 - DILAKUKAN  DI DN DENGAN PEMBAYRAN MELALUI TELEGRAPH TRANSFER (T/T)</option>
                                                <option value="14" {{ old('cara_bayar') == '14' ? 'selected' : '' }}>14 - DILAKUKAN  TANPA PEMBAYARAN</option>
                                                <option value="15" {{ old('cara_bayar') == '15' ? 'selected' : '' }}>15 - PEMBAYARAN DI MUKA</option>
                                                <option value="16" {{ old('cara_bayar') == '16' ? 'selected' : '' }}>16 - SIGHT LETTER OF CREDIT</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Entitas --}}
                                    <div class="tab-pane fade" id="entitas" role="tabpanel" aria-labelledby="entitas-tab">
                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Penyelenggara/Pengusaha TPB/Pengusaha Kena Pajak</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="kode_jenis_tpb" class="form-label"></label>
                                                    <input type="text" class="form-control" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="nomor_identitas" class="form-label"></label>
                                                <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas"
                                                    value="{{ old('nomor_identitas') }}" style="border: 1px solid #313131;" readonly>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nitku" class="form-label">Nitku</label>
                                                <input type="text" class="form-control" id="nitku" name="nitku"
                                                    value="{{ old('nitku') }}" style="border: 1px solid #313131;" oninput="updateNomorEntitas()">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ old('nama', 'INDO-RAMA SYNTHETICS TBK') }}"  style="border: 1px solid #313131;" >
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="no_izin_tpb" class="form-label">No Izin TPB</label>
                                                <input type="text" class="form-control" id="no_izin_tpb" name="no_izin_tpb"
                                                    value="{{ old('no_izin_tpb', 'KEP-724/WBC.09/2022') }}" style="border: 1px solid #313131;">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="no_izin_tpb" class="form-label">Tanggal Izin TPB</label>
                                                <input type="date" class="form-control" id="no_izin_tpb" name="no_izin_tpb"
                                                    value="{{ old('no_izin_tpb') }}" style="border: 1px solid #313131;" >
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nib" class="form-label">NIB</label>
                                                <input type="text" class="form-control" id="nib" name="nib"
                                                value="{{ old('nib', '8120302880325') }}" style="border: 1px solid #313131;" >
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" style="border: 1px solid #313131;">{{ old('alamat', 'JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                        <h5 class="text-primary">Pemilik Barang</h5>
                                        <div class="col-md-6">
                                                <label for="kode_jenis_tpb" class="form-label"></label>
                                                <input type="text" class="form-control" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="nomor_npwp" class="form-label"></label>
                                                <input type="text" class="form-control" id="nomor_npwp" name="nomor_npwp"
                                                    value="{{ old('nomor_npwp') }}" style="border: 1px solid #313131;" readonly>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nitku2" class="form-label">Nitku</label>
                                                <input type="text" class="form-control" id="nitku2" name="nitku2"
                                                    value="{{ old('nitku2') }}" style="border: 1px solid #313131;" oninput="updateNomorEntitas2()">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nama2" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama2" name="nama2"
                                                value="{{ old('nama2', 'INDO-RAMA SYNTHETICS TBK') }}"  style="border: 1px solid #313131;" >
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" style="border: 1px solid #313131;">{{ old('alamat', 'JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101') }}</textarea>
                                            </div>
                                        </div>
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <h5 class="text-primary">Penerima Barang/Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="kode_jenis_tpb" class="form-label"></label>
                                                        <input type="text" class="form-control" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="kode_jenis_tpb" class="form-label"></label>
                                                        <input type="text" class="form-control" placeholder="6 - NPWP 16 DIGIT" readonly style="border: 1px solid #313131;">
                                                    </div>
                                    </div>

                                </div>
                                    {{-- Bahan Baku --}}
                                    <div class="tab-pane fade" id="bahanBaku" role="tabpanel"
                                        aria-labelledby="bahanBaku-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="kodeBahanBaku" class="form-label">Kode Bahan Baku</label>
                                                <input type="text" class="form-control" id="kodeBahanBaku"
                                                    name="kodeBahanBaku" value="{{ old('kodeBahanBaku') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlah" class="form-label">Jumlah</label>
                                                <input type="text" class="form-control" id="jumlah" name="jumlah"
                                                    value="{{ old('jumlah') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cif3" class="form-label">CIF</label>
                                                <input type="text" class="form-control" id="cif3" name="cif3"
                                                    value="{{ old('cif') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">cif Rupiah</label>
                                                <input type="text" class="form-control " id="cifRupiah2"
                                                    name="cifRupiah2" value="{{ old('cifRupiah') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="hargaPenyerahan3" class="form-label">harga
                                                    Penyerahan</label>
                                                <input type="text" class="form-control" id="hargaPenyerahan3"
                                                    name="hargaPenyerahan3" value="{{ old('hargaPenyerahan') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan2" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control " id="jumlahSatuan2"
                                                    name="jumlahSatuan2" value="{{ old('jumlahSatuan') }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeAsalBahanBaku" class="form-label">kode Asal Bahan
                                                    Baku</label>
                                                <input type="text" class="form-control " id="kodeAsalBahanBaku"
                                                    name="kodeAsalBahanBaku" value="{{ old('kodeAsalBahanBaku') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeBarang2" class="form-label">kode Barang</label>
                                                <input type="text" class="form-control " id="kodeBarang2"
                                                    name="kodeBarang2" value="{{ old('kodeBarang') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeDokAsal2" class="form-label">kode Dok Asal</label>
                                                <input type="text" class="form-control " id="kodeDokAsal2"
                                                    name="kodeDokAsal2" value="{{ old('kodeDokAsal') }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeKantor2" class="form-label">kode Kantor</label>
                                                <input type="text" class="form-control " id="kodeKantor2"
                                                    name="kodeKantor2" value="{{ old('kodeKantor') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang2" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control " id="kodeSatuanBarang2"
                                                    name="kodeSatuanBarang2" value="{{ old('kodeSatuanBarang') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="merkBarang" class="form-label">merk Barang</label>
                                                <input type="text" class="form-control " id="merkBarang"
                                                    name="merkBarang" value="{{ old('merkBarang') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ndpbm3" class="form-label">ndpbm</label>
                                                <input type="text" class="form-control " id="ndpbm3"
                                                    name="ndpbm3" value="{{ old('ndpbm') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">nomor Aju Dok
                                                    Asal</label>
                                                <input type="text" class="form-control " id="nomorAjuDokAsal"
                                                    name="nomorAjuDokAsal" value="{{ old('nomorAjuDokAsal') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorDaftarDokAsal" class="form-label">nomor Daftar Dok
                                                    Asal</label>
                                                <input type="text" class="form-control" id="nomorDaftarDokAsal"
                                                    name="nomorDaftarDokAsal" value="{{ old('nomorDaftarDokAsal') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="posTarif2" class="form-label">pos Tarif</label>
                                                <input type="text" class="form-control " id="posTarif2"
                                                    name="posTarif2" value="{{ old('posTarif') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBahanBaku" class="form-label">Seri Bahan Baku</label>
                                                <input type="text" class="form-control " id="seriBahanBaku"
                                                    name="seriBahanBaku" value="{{ old('seriBahanBaku') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBarang2" class="form-label">seri Barang</label>
                                                <input type="text" class="form-control " id="seriBarang2"
                                                    name="seriBarang2" value="{{ old('seriBarang') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBarangDokAsal" class="form-label">seri Barang Dok
                                                    Asal</label>
                                                <input type="text" class="form-control " id="seriBarangDokAsal"
                                                    name="seriBarangDokAsal" value="{{ old('seriBarangDokAsal') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">seri Ijin</label>
                                                <input type="text" class="form-control " id="seriIjin"
                                                    name="seriIjin" value="{{ old('seriIjin') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">spesifikasi Lain
                                                    Barang</label>
                                                <input type="text" class="form-control " id="spesifikasiLainBarang"
                                                    name="spesifikasiLainBarang"
                                                    value="{{ old('spesifikasiLainBarang') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">tanggal Daftar Dok
                                                    Asal</label>
                                                <input type="text" class="form-control " id="tanggalDaftarDokAsal"
                                                    name="tanggalDaftarDokAsal" value="{{ old('tanggalDaftarDokAsal') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">tipe Barang</label>
                                                <input type="text" class="form-control " id="tipeBarang"
                                                    name="tipeBarang" value="{{ old('tipeBarang') }}" >
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
                                                    name="kodeJenisTarif" value="{{ old('kodeJenisTarif') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan3" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan3"
                                                    name="jumlahSatuan3" value="{{ old('jumlahSatuan') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif"
                                                    name="kodeFasilitasTarif" value="{{ old('kodeFasilitasTarif') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan"
                                                    name="kodeJenisPungutan" value="{{ old('kodeJenisPungutan') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar"
                                                    name="nilaiBayar" value="{{ old('nilaiBayar') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas"
                                                    name="nilaiFasilitas" value="{{ old('nilaiFasilitas') }}" autofocus
                                                    required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi"
                                                    name="nilaiSudahDilunasi" value="{{ old('nilaiSudahDilunasi') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control" id="seriBahanBaku2"
                                                    name="seriBahanBaku2" value="{{ old('seriBahanBaku') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif" name="tarif"
                                                    value="{{ old('tarif') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas"
                                                    name="tarifFasilitas" value="{{ old('tarifFasilitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ukuranBarang" class="form-label">ukuran Barang</label>
                                                <input type="text" class="form-control" id="ukuranBarang"
                                                    name="ukuranBarang" value="{{ old('ukuranBarang') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="uraianBarang" class="form-label">uraian Barang</label>
                                                <input type="text" class="form-control" id="uraianBarang"
                                                    name="uraianBarang" value="{{ old('uraianBarang') }}">
                                            </div>
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
                                                     name="seriBarang3" value="{{ old('seriBarang') }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                 <input type="text" class="form-control" id="kodeJenisTarif2"
                                                     name="kodeJenisTarif2" value="{{ old('kodeJenisTarif') }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="jumlahSatuan4" class="form-label">jumlah Satuan</label>
                                                 <input type="text" class="form-control" id="jumlahSatuan4"
                                                     name="jumlahSatuan4" value="{{ old('jumlahSatuan') }}">
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                     Tarif</label>
                                                 <input type="text" class="form-control" id="kodeFasilitasTarif2"
                                                     name="kodeFasilitasTarif2" value="{{ old('kodeFasilitasTarif') }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeSatuanBarang3" class="form-label">kode Satuan
                                                     Barang</label>
                                                 <input type="text" class="form-control" id="kodeSatuanBarang3"
                                                     name="kodeSatuanBarang3" value="{{ old('kodeSatuanBarang') }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                     Pungutan</label>
                                                 <input type="text" class="form-control" id="kodeJenisPungutan2"
                                                     name="kodeJenisPungutan2" value="{{ old('kodeJenisPungutan') }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                 <input type="text" class="form-control" id="nilaiBayar2"
                                                     name="nilaiBayar2" value="{{ old('nilaiBayar') }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                 <input type="text" class="form-control" id="nilaiFasilitas2"
                                                     name="nilaiFasilitas2" value="{{ old('nilaiFasilitas') }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                     Dilunasi</label>
                                                 <input type="text" class="form-control" id="nilaiSudahDilunasi2"
                                                     name="nilaiSudahDilunasi2" value="{{ old('nilaiSudahDilunasi') }}"
                                                     >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="tarif" class="form-label">tarif</label>
                                                 <input type="text" class="form-control" id="tarif2"
                                                     name="tarif2" value="{{ old('tarif') }}" >
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                 <input type="text" class="form-control" id="tarifFasilitas2"
                                                     name="tarifFasilitas2" value="{{ old('tarifFasilitas') }}"
                                                     >
                                             </div>

                                         </div>
                                     </div>
                                     <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                     <h5 class="text-primary">Inputan Ke 2</h5>
                                            <div class="col-md-3">
                                                <label for="seriBarang" class="form-label">seri Barang</label>
                                                <input type="text" class="form-control" id="seriBarang4"
                                                    name="seriBarang4" value="{{ old('seriBarang') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif3"
                                                    name="kodeJenisTarif3" value="{{ old('kodeJenisTarif') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan5" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan5"
                                                    name="jumlahSatuan5" value="{{ old('jumlahSatuan') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif3"
                                                    name="kodeFasilitasTarif3" value="{{ old('kodeFasilitasTarif') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang4" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeSatuanBarang4"
                                                    name="kodeSatuanBarang4" value="{{ old('kodeSatuanBarang') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan3"
                                                    name="kodeJenisPungutan3" value="{{ old('kodeJenisPungutan') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar3"
                                                    name="nilaiBayar3" value="{{ old('nilaiBayar') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas3"
                                                    name="nilaiFasilitas3" value="{{ old('nilaiFasilitas') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi3"
                                                    name="nilaiSudahDilunasi3" value="{{ old('nilaiSudahDilunasi') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif3"
                                                    name="tarif3" value="{{ old('tarif3') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas3"
                                                    name="tarifFasilitas3" value="{{ old('tarifFasilitas') }}"
                                                    >
                                            </div>
                                                <div class="col-md-3">
                                                 <label for="jumlahSatuan6" class="form-label">jumlah Satuan</label>
                                                 <input type="text" class="form-control" id="jumlahSatuan6"
                                                     name="jumlahSatuan6" value="{{ old('jumlahSatuan') }}" autofocus
                                                     required>
                                             </div>
                                             <div class="col-md-3">
                                                 <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                     Tarif</label>
                                                 <input type="text" class="form-control" id="kodeFasilitasTarif4"
                                                     name="kodeFasilitasTarif4" value="{{ old('kodeFasilitasTarif') }}"
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
                                                    name="jumlahSatuan7" value="{{ old('jumlahSatuan') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeFasilitasTarif" class="form-label">kode Fasilitas
                                                    Tarif</label>
                                                <input type="text" class="form-control" id="kodeFasilitasTarif5"
                                                    name="kodeFasilitasTarif5" value="{{ old('kodeFasilitasTarif') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisPungutan" class="form-label">kode Jenis
                                                    Pungutan</label>
                                                <input type="text" class="form-control" id="kodeJenisPungutan4"
                                                    name="kodeJenisPungutan4" value="{{ old('kodeJenisPungutan') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisTarif" class="form-label">kode Jenis Tarif</label>
                                                <input type="text" class="form-control" id="kodeJenisTarif4"
                                                    name="kodeJenisTarif4" value="{{ old('kodeJenisTarif') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeSatuanBarang" class="form-label">kode Satuan
                                                    Barang</label>
                                                <input type="text" class="form-control" id="kodeSatuanBarang5"
                                                    name="kodeSatuanBarang5" value="{{ old('kodeSatuanBarang') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar4"
                                                    name="nilaiBayar4" value="{{ old('nilaiBayar') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas4"
                                                    name="nilaiFasilitas4" value="{{ old('nilaiFasilitas') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi4"
                                                    name="nilaiSudahDilunasi4" value="{{ old('nilaiSudahDilunasi') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif4"
                                                    name="tarif4" value="{{ old('tarif') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas4"
                                                    name="tarifFasilitas4" value="{{ old('tarifFasilitas') }}"
                                                    >
                                            </div>
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
                                                    name="kodeJenisTarif5" value="{{ old('kodeJenisTarif') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="jumlahSatuan8" class="form-label">jumlah Satuan</label>
                                                <input type="text" class="form-control" id="jumlahSatuan8"
                                                    name="jumlahSatuan8" value="{{ old('jumlahSatuan') }}" autofocus
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
                                                    name="kodeJenisPungutan5" value="{{ old('kodeJenisPungutan') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiBayar" class="form-label">nilai Bayar</label>
                                                <input type="text" class="form-control" id="nilaiBayar5"
                                                    name="nilaiBayar5" value="{{ old('nilaiBayar') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiFasilitas" class="form-label">nilai Fasilitas</label>
                                                <input type="text" class="form-control" id="nilaiFasilitas5"
                                                    name="nilaiFasilitas5" value="{{ old('nilaiFasilitas') }}"
                                                    >

                                            </div>
                                            <div class="col-md-3">
                                                <label for="nilaiSudahDilunasi" class="form-label">nilai Sudah
                                                    Dilunasi</label>
                                                <input type="text" class="form-control" id="nilaiSudahDilunasi5"
                                                    name="nilaiSudahDilunasi5" value="{{ old('nilaiSudahDilunasi') }}"
                                                    >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriBahanBaku" class="form-label">seri Bahan Baku</label>
                                                <input type="text" class="form-control" id="seriBahanBaku3"
                                                    name="seriBahanBaku3" value="{{ old('seriBahanBaku') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarif" class="form-label">tarif</label>
                                                <input type="text" class="form-control" id="tarif5"
                                                    name="tarif5" value="{{ old('tarif') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tarifFasilitas" class="form-label">tarif Fasilitas</label>
                                                <input type="text" class="form-control" id="tarifFasilitas5"
                                                    name="tarifFasilitas5" value="{{ old('tarifFasilitas') }}"
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
                                                    value="{{ old('alamatEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeEntitas" name="kodeEntitas"
                                                    value="{{ old('kodeEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisApi" class="form-label">kode Jenis Api</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisApi" name="kodeJenisApi"
                                                    value="{{ old('kodeJenisApi') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                    Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisIdentitas" name="kodeJenisIdentitas"
                                                    value="{{ old('kodeJenisIdentitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeStatus" class="form-label">Kode Status</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeStatus" name="kodeStatus"
                                                    value="{{ old('kodeStatus') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="namaEntitas" class="form-label">nama Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="namaEntitas" name="namaEntitas"
                                                    value="{{ old('namaEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nibEntitas" class="form-label">nib Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nibEntitas" name="nibEntitas"
                                                    value="{{ old('nibEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorIdentitas" class="form-label">nomor Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorIdentitas" name="nomorIdentitas"
                                                    value="{{ old('nomorIdentitas') }}" >
                                            </div>
                                        <div class="col-md-3">
                                            <label for="nomorIjinEntitas" class="form-label">nomor Ijin Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="nomorIjinEntitas" name="nomorIjinEntitas"
                                                value="{{ old('nomorIjinEntitas') }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tanggalIjinEntitas" class="form-label">tanggal Ijin Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="tanggalIjinEntitas" name="tanggalIjinEntitas"
                                                value="{{ old('tanggalIjinEntitas') }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="seriEntitas" class="form-label">seri Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriEntitas" name="seriEntitas"
                                                value="{{ old('seriEntitas') }}" >
                                        </div>
                                    </div>

                                        <div class="row p-3 border rounded shadow-sm bg-white">
                                            <h5 class="text-success">Inputan Ke 2</h5>
                                            <div class="col-md-3">
                                                <label for="alamatEntitas" class="form-label">Alamat Entitas</label>
                                                <input type="text" class="form-control border-success"
                                                    id="alamatEntitas2" name="alamatEntitas2"
                                                    value="{{ old('alamatEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                <input type="text" class="form-control border-success"
                                                    id="kodeEntitas2" name="kodeEntitas2"
                                                    value="{{ old('kodeEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisApi" class="form-label">kode Jenis Api</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisApi2" name="kodeJenisApi2"
                                                    value="{{ old('kodeJenisApi') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                    Identitas</label>
                                                <input type="text" class="form-control border-success"
                                                    id="kodeJenisIdentitas2" name="kodeJenisIdentitas2"
                                                    value="{{ old('kodeJenisIdentitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeStatus2" class="form-label">Kode Status</label>
                                                <input type="text" class="form-control border-success"
                                                    id="kodeStatus2" name="kodeStatus2"
                                                    value="{{ old('kodeStatus') }}" >
                                            </div>

                                            <div class="col-md-3">
                                                <label for="namaEntitas" class="form-label">nama Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="namaEntitas2" name="namaEntitas2"
                                                    value="{{ old('namaEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="niperEntitas" class="form-label">niper Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="niperEntitas" name="niperEntitas"
                                                    value="{{ old('niperEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorIdentitas" class="form-label">nomor Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorIdentitas2" name="nomorIdentitas2"
                                                    value="{{ old('nomorIdentitas') }}" >
                                            </div>
                                        <div class="col-md-3">
                                            <label for="seriEntitas" class="form-label">seri Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriEntitas2" name="seriEntitas2"
                                                value="{{ old('seriEntitas') }}" >
                                        </div>
                                        </div>

                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Inputan Ke 3</h5>
                                            <div class="col-md-3">
                                                <label for="alamatEntitas" class="form-label">Alamat Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="alamatEntitas3" name="alamatEntitas3"
                                                    value="{{ old('alamatEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeEntitas" class="form-label">Kode Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeEntitas3" name="kodeEntitas3"
                                                    value="{{ old('kodeEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisApi" class="form-label">kode Jenis Api</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisApi3" name="kodeJenisApi3"
                                                    value="{{ old('kodeJenisApi') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisIdentitas" class="form-label">Kode Jenis
                                                    Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeJenisIdentitas3" name="kodeJenisIdentitas3"
                                                    value="{{ old('kodeJenisIdentitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeStatus1" class="form-label">Kode Status</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeStatus3" name="kodeStatus3"
                                                    value="{{ old('kodeStatus') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="namaEntitas" class="form-label">nama Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="namaEntitas3" name="namaEntitas3"
                                                    value="{{ old('namaEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="niperEntitas" class="form-label">niper Entitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="niperEntitas2" name="niperEntitas2"
                                                    value="{{ old('niperEntitas') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorIdentitas" class="form-label">nomor Identitas</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorIdentitas3" name="nomorIdentitas3"
                                                    value="{{ old('nomorIdentitas') }}" >
                                            </div>
                                        <div class="col-md-3">
                                            <label for="seriEntitas" class="form-label">seri Entitas</label>
                                            <input type="text" class="form-control border-primary"
                                                id="seriEntitas3" name="seriEntitas3"
                                                value="{{ old('seriEntitas') }}" >
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
                                                    name="jumlahKemasan2" value="{{ old('jumlahKemasan') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeJenisKemasan2" class="form-label">kode Jenis Kemasan</label>
                                                <input type="text" class="form-control" id="kodeJenisKemasan2"
                                                    name="kodeJenisKemasan2" value="{{ old('kodeJenisKemasan') }}" >
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
                                                    name="kodeJenisKontainer" value="{{ old('kodeJenisKontainer') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeTipeKontainer" class="form-label">kode Tipe Kontainer</label>
                                                <input type="text" class="form-control" id="kodeTipeKontainer"
                                                    name="kodeTipeKontainer" value="{{ old('kodeTipeKontainer') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeUkuranKontainer" class="form-label">kode Ukuran Kontainer</label>
                                                <input type="text" class="form-control" id="kodeUkuranKontainer"
                                                    name="kodeUkuranKontainer" value="{{ old('kodeUkuranKontainer') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorKontainer" class="form-label">nomor Kontainer</label>
                                                <input type="text" class="form-control" id="nomorKontainer"
                                                    name="nomorKontainer" value="{{ old('nomorKontainer') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriKontainer" class="form-label">seri Kontainer</label>
                                                <input type="text" class="form-control" id="seriKontainer"
                                                    name="seriKontainer" value="{{ old('seriKontainer') }}" >
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
                                                    value="{{ old('idDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeDokumen2" class="form-label">Kode Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                id="kodeDokumen2" name="kodeDokumen2"
                                                       value="{{ old('kodeDokumen')}}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorDokumen" class="form-label">nomor Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorDokumen" name="nomorDokumen"
                                                    value="{{ old('nomorDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="seriDokumen3" name="seriDokumen3"
                                                    value="{{ old('seriDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tanggalDokumen" class="form-label">tanggal Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="tanggalDokumen" name="tanggalDokumen"
                                                    value="{{ old('tanggalDokumen') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                            <h5 class="text-primary">Inputan Ke 2</h5>
                                            <div class="col-md-3">
                                                <label for="idDokumen" class="form-label">id Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="idDokumen2" name="idDokumen2"
                                                    value="{{ old('idDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="kodeDokumen3" class="form-label">kode Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="kodeDokumen3" name="kodeDokumen3"
                                                    value="{{ old('kodeDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorDokumen" class="form-label">nomor Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="nomorDokumen2" name="nomorDokumen2"
                                                    value="{{ old('nomorDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriDokumen" class="form-label">seri Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="seriDokumen4" name="seriDokumen4"
                                                    value="{{ old('seriDokumen') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tanggalDokumen" class="form-label">tanggal Dokumen</label>
                                                <input type="text" class="form-control border-primary"
                                                    id="tanggalDokumen2" name="tanggalDokumen2"
                                                    value="{{ old('tanggalDokumen') }}" >
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
                                                    name="kodeCaraAngkut" value="{{ old('kodeCaraAngkut') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="namaPengangkut" class="form-label">nama Pengangkut</label>
                                                <input type="text" class="form-control" id="namaPengangkut"
                                                    name="namaPengangkut" value="{{ old('namaPengangkut') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="nomorPengangkut" class="form-label">nomor Pengangkut</label>
                                                <input type="text" class="form-control" id="nomorPengangkut"
                                                    name="nomorPengangkut" value="{{ old('nomorPengangkut') }}" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="seriPengangkut" class="form-label">seri Pengangkut</label>
                                                <input type="text" class="form-control" id="seriPengangkut"
                                                    name="seriPengangkut" value="{{ old('seriPengangkut') }}" >
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
        const nomorEntitasInput = document.getElementById('nomor_identitas');

        // Jika panjang Nitku mencapai 14, set Nomor Entitas menjadi 13 karakter pertama dari Nitku
        if (nitkuValue.length === 22) {
            nomorEntitasInput.value = nitkuValue.slice(0, 16); // Hanya ambil 13 karakter pertama
        }
    }
</script>

<script>
    function updateNomorEntitas2() {
        const nitkuValue = document.getElementById('nitku2').value;
        const nomorEntitasInput = document.getElementById('nomor_npwp');

        // Jika panjang Nitku mencapai 14, set Nomor Entitas menjadi 13 karakter pertama dari Nitku
        if (nitkuValue.length === 22) {
            nomorEntitasInput.value = nitkuValue.slice(0, 16); // Hanya ambil 13 karakter pertama
        }
    }
</script>
@endsection
