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

                        <form class="row g-3 needs-validation" method="POST" action=""
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Asal Data</label>
                                <input type="text" class="form-control @error('asalData') is-invalid @enderror"
                                    id="asalData" name="asalData" value="{{ old('asalData') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('asalData')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Bruto</label>
                                <input type="text" class="form-control @error('bruto') is-invalid @enderror"
                                    id="bruto" name="bruto" value="{{ old('bruto') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('bruto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Cif</label>
                                <input type="text" class="form-control @error('bruto') is-invalid @enderror"
                                    id="cif" name="cif" value="{{ old('cif') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('cif')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Dasar Pengenaan Pajak</label>
                                <input type="text" class="form-control @error('dasarPengenaanPajak') is-invalid @enderror"
                                    id="dasarPengenaanPajak" name="dasarPengenaanPajak" value="{{ old('dasar_pengenaan_pajak') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('dasarPengenaanPajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Disclaimer</label>
                                <input type="text" class="form-control @error('disclaimer') is-invalid @enderror"
                                    id="disclaimer" name="disclaimer" value="{{ old('dasar_pengenaan_pajak') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('disclaimer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Kode Jenis TPB</label>
                                <input type="text" class="form-control @error('kodeJenisTpb') is-invalid @enderror"
                                    id="kodeJenisTpb" name="kodeJenisTpb" value="{{ old('kodeJenisTpb') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeJenisTpb')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Harga Penyerahan</label>
                                <input type="text" class="form-control @error('hargaPenyerahan') is-invalid @enderror"
                                    id="hargaPenyerahan" name="hargaPenyerahan" value="{{ old('hargaPenyerahan') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('hargaPenyerahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Identitas Penggguna</label>
                                <input type="text" class="form-control @error('idPengguna') is-invalid @enderror"
                                    id="idPengguna" name="idPengguna" value="{{ old('idPengguna') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('idPengguna')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Jabatan TTD</label>
                                <input type="text" class="form-control @error('jabatanTtd') is-invalid @enderror"
                                    id="jabatanTtd" name="jabatanTtd" value="{{ old('jabatanTtd') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('jabatanTtd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Jumlah Kontainer</label>
                                <input type="text" class="form-control @error('jumlahKontainer') is-invalid @enderror"
                                    id="jumlahKontainer" name="jumlahKontainer" value="{{ old('jumlahKontainer') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('jumlahKontainer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kode Cara Bayar</label>
                                <input type="text" class="form-control @error('kodeCaraBayar') is-invalid @enderror"
                                    id="kodeCaraBayar" name="kodeCaraBayar" value="{{ old('kodeCaraBayar') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeCaraBayar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kode Dokumen</label>
                                <input type="text" class="form-control @error('kodeDokumen') is-invalid @enderror"
                                    id="kodeDokumen" name="kodeDokumen" value="{{ old('kodeDokumen') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeDokumen')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kode Kantor</label>
                                <input type="text" class="form-control @error('kodeKantor') is-invalid @enderror"
                                    id="kodeKantor" name="kodeKantor" value="{{ old('kodeKantor') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeKantor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kode Lokasi Bayar</label>
                                <input type="text" class="form-control @error('kodeLokasiBayar') is-invalid @enderror"
                                    id="kodeLokasiBayar" name="kodeLokasiBayar" value="{{ old('kodeLokasiBayar') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeLokasiBayar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kode Tujuan Pengiriman</label>
                                <input type="text" class="form-control @error('kodeTujuanPengiriman') is-invalid @enderror"
                                    id="kodeTujuanPengiriman" name="kodeTujuanPengiriman" value="{{ old('kodeTujuanPengiriman') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeTujuanPengiriman')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kode Valuta</label>
                                <input type="text" class="form-control @error('kodeValuta') is-invalid @enderror"
                                    id="kodeValuta" name="kodeValuta" value="{{ old('kodeValuta') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kodeValuta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">kota Ttd</label>
                                <input type="text" class="form-control @error('kotaTtd') is-invalid @enderror"
                                    id="kotaTtd" name="kotaTtd" value="{{ old('kotaTtd') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('kotaTtd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">nama Ttd</label>
                                <input type="text" class="form-control @error('namaTtd') is-invalid @enderror"
                                    id="namaTtd" name="namaTtd" value="{{ old('namaTtd') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('namaTtd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">ndpbm</label>
                                <input type="text" class="form-control @error('ndpbm') is-invalid @enderror"
                                    id="ndpbm" name="ndpbm" value="{{ old('ndpbm') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('ndpbm')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Netto</label>
                                <input type="text" class="form-control @error('netto') is-invalid @enderror"
                                    id="netto" name="netto" value="{{ old('netto') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('netto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Nomor Aju</label>
                                <input type="text" class="form-control @error('nomorAju') is-invalid @enderror"
                                    id="nomorAju" name="nomorAju" value="{{ old('nomorAju') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('nomorAju')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Seri</label>
                                <input type="text" class="form-control @error('seri') is-invalid @enderror"
                                    id="seri" name="seri" value="{{ old('seri') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('seri')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Tanggal Aju</label>
                                <input type="text" class="form-control @error('tanggalAju') is-invalid @enderror"
                                    id="tanggalAju" name="tanggalAju" value="{{ old('tanggalAju') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('tanggalAju')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">tanggal Ttd</label>
                                <input type="text" class="form-control @error('tanggalTtd') is-invalid @enderror"
                                    id="tanggalTtd" name="tanggalTtd" value="{{ old('tanggalTtd') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('tanggalTtd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Volume</label>
                                <input type="text" class="form-control @error('volume') is-invalid @enderror"
                                    id="volume" name="volume" value="{{ old('volume') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('volume')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">ppn Pajak</label>
                                <input type="text" class="form-control @error('ppnPajak') is-invalid @enderror"
                                    id="ppnPajak" name="ppnPajak" value="{{ old('ppnPajak') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('ppnPajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">ppnbm Pajak</label>
                                <input type="text" class="form-control @error('ppnbmPajak') is-invalid @enderror"
                                    id="ppnbmPajak" name="ppnbmPajak" value="{{ old('ppnbmPajak') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('ppnbmPajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">tarif Ppn Pajak</label>
                                <input type="text" class="form-control @error('tarifPpnPajak') is-invalid @enderror"
                                    id="tarifPpnPajak" name="tarifPpnPajak" value="{{ old('tarifPpnPajak') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('tarifPpnPajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">tarif Ppnbm Pajak</label>
                                <input type="text" class="form-control @error('tarifPpnbmPajak') is-invalid @enderror"
                                    id="tarifPpnbmPajak" name="tarifPpnbmPajak" value="{{ old('tarifPpnbmPajak') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('tarifPpnbmPajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>











                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('dokumen_baru') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->

@endsection
