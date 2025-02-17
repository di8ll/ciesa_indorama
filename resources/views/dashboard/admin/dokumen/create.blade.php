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
                                        <button class="nav-link" id="kemaspetikemas-tab" data-bs-toggle="tab"
                                            data-bs-target="#kemaspetikemas" type="button" role="tab"
                                            aria-controls="kemaspetikemas" aria-selected="false">Kemasan & Peti
                                            Kemas</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="transaksi-tab" data-bs-toggle="tab"
                                            data-bs-target="#transaksi" type="button" role="tab"
                                            aria-controls="transaksi" aria-selected="false">Transaksi</button>
                                    </li>
                                    {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="barang-tab" data-bs-toggle="tab"
                                            data-bs-target="#barang" type="button" role="tab" aria-controls="barang"
                                            aria-selected="false">Barang</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
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
                                            @php
                                                $inputs = [
                                                    [
                                                        'label' => 'Nomor Pengajuan',
                                                        'id' => 'nomorAju',
                                                        'name' => 'nomorAju',
                                                        'value' => old('nomorAju'),
                                                        'readonly' => true,
                                                    ],
                                                    [
                                                        'label' => 'Kantor Pabean',
                                                        'id' => 'kodeKantor',
                                                        'name' => 'kodeKantor',
                                                        'value' => old('kodeKantor', '050800 - KPPBC TMP A PURWAKARTA'),
                                                        'readonly' => true,
                                                    ],
                                                    [
                                                        'label' => 'Jenis TPB',
                                                        'id' => 'kodeJenisTpb',
                                                        'name' => 'kodeJenisTpb',
                                                        'value' => old('kodeJenisTpb', '1 - KAWASAN BERIKAT'),
                                                        'readonly' => true,
                                                    ],
                                                    [
                                                        'label' => 'Tujuan Pengiriman',
                                                        'id' => 'kodeTujuanPengiriman',
                                                        'name' => 'kodeTujuanPengiriman',
                                                        'value' => old('kodeTujuanPengiriman', '1 - PENYERAHAN BKP'),
                                                        'readonly' => true,
                                                    ],
                                                    [
                                                        'label' => 'Cara Bayar',
                                                        'id' => 'kodeCaraBayar',
                                                        'name' => 'kodeCaraBayar',
                                                        'value' => old('kodeCaraBayar', '1 - BIASA / TUNAI'),
                                                        'readonly' => true,
                                                    ],
                                                ];
                                            @endphp

                                            <div class="row">
                                                @foreach ($inputs as $input)
                                                    <div class="col-md-4 mt-3">
                                                        <label for="{{ $input['id'] }}"
                                                            class="form-label">{{ $input['label'] }}</label>
                                                        <input type="text" class="form-control"
                                                            id="{{ $input['id'] }}" name="{{ $input['name'] }}"
                                                            value="{{ $input['value'] }}"
                                                            {{ $input['readonly'] ? 'readonly' : '' }}
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Entitas --}}
                                    <div class="tab-pane fade" id="entitas" role="tabpanel"
                                        aria-labelledby="entitas-tab">
                                        <div class="container">
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <h5 class="text-primary">Penyelenggara/Pengusaha TPB/Pengusaha Kena Pajak
                                                </h5>
                                                @php
                                                    $entitas = [
                                                        [
                                                            'label' => 'Nomor NPWP',
                                                            'id' => 'kodeJenisIdentitas',
                                                            'name' => 'kodeJenisIdentitas[]',
                                                            'value' => old('kodeJenisIdentitas', '010016806054000'),
                                                            'readonly' => true,
                                                        ],
                                                        [
                                                            'label' => 'Nitku',
                                                            'id' => 'nomorIdentitas',
                                                            'name' => 'nomorIdentitas[]',
                                                            'value' => old('nomorIdentitas', '0010016806054000000000'),
                                                        ],
                                                        [
                                                            'label' => 'Nama',
                                                            'id' => 'namaEntitas',
                                                            'name' => 'namaEntitas[]',
                                                            'value' => old('namaEntitas', 'INDO-RAMA SYNTHETICS TBK'),
                                                        ],
                                                        [
                                                            'label' => 'No Izin TPB',
                                                            'id' => 'nomorIjinEntitas',
                                                            'name' => 'nomorIjinEntitas',
                                                            'value' => old('nomorIjinEntitas', 'KEP-724/WBC.09/2022'),
                                                        ],
                                                        [
                                                            'label' => 'Tanggal Izin TPB',
                                                            'id' => 'tanggalIjinEntitas',
                                                            'name' => 'tanggalIjinEntitas',
                                                            'value' => old('tanggalIjinEntitas'),
                                                            'type' => 'date',
                                                        ],
                                                        [
                                                            'label' => 'NIB',
                                                            'id' => 'nibEntitas',
                                                            'name' => 'nibEntitas',
                                                            'value' => old('nibEntitas', '8120302880325'),
                                                        ],
                                                    ];
                                                @endphp

                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label for="nomorIdentitas" class="form-label">Nomor
                                                            Identitas</label>
                                                        <input type="text" class="form-control" id="nomorIdentitas[]"
                                                            placeholder="6 - NPWP 16 DIGIT" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>

                                                    @foreach ($entitas as $input)
                                                        <div class="col-md-6 mt-3">
                                                            <label for="{{ $input['id'] }}"
                                                                class="form-label">{{ $input['label'] }}</label>
                                                            <input type="{{ $input['type'] ?? 'text' }}"
                                                                class="form-control" id="{{ $input['id'] }}"
                                                                name="{{ $input['name'] }}"
                                                                value="{{ $input['value'] }}"
                                                                {{ isset($input['readonly']) ? 'readonly' : '' }}
                                                                style="border: 1px solid #313131;">
                                                        </div>
                                                    @endforeach

                                                    <div class="col-md-6 mt-3">
                                                        <label for="alamatEntitas" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamatEntitas" name="alamatEntitas[]" style="border: 1px solid #313131;">{{ old('alamatEntitas', 'JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Entitas Pemilik Barang -->
                                            <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-primary" id="exampleModalCenterTitle">Pemilik Barang
                                                    </h5>
                                                    <button type="button" class="btn btn-primary"
                                                        id="myBtn">Referensi</button>
                                                </div>

                                                @php
                                                    $pemilikBarang = [
                                                        [
                                                            'label' => 'Nomor NPWP',
                                                            'id' => 'kodeJenisIdentitas2',
                                                            'name' => 'kodeJenisIdentitas[]',
                                                            'readonly' => true,
                                                        ],
                                                        [
                                                            'label' => 'Nitku',
                                                            'id' => 'nitku2',
                                                            'name' => 'nomorIdentitas[]',
                                                            'oninput' => 'updateNomorEntitas2()',
                                                        ],
                                                        [
                                                            'label' => 'Nama',
                                                            'id' => 'namaEntitas2',
                                                            'name' => 'namaEntitas[]',
                                                        ],
                                                    ];
                                                @endphp

                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label for="nomorIdentitas" class="form-label">Nomor
                                                            Identitas</label>
                                                        <input type="text" class="form-control" id="nomorIdentitas"
                                                            placeholder="6 - NPWP 16 DIGIT" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>

                                                    @foreach ($pemilikBarang as $input)
                                                        <div class="col-md-6 mt-3">
                                                            <label for="{{ $input['id'] }}"
                                                                class="form-label">{{ $input['label'] }}</label>
                                                            <input type="text" class="form-control"
                                                                id="{{ $input['id'] }}" name="{{ $input['name'] }}"
                                                                {{ isset($input['placeholder']) ? "placeholder={$input['placeholder']}" : '' }}
                                                                {{ isset($input['readonly']) ? 'readonly' : '' }}
                                                                {{ isset($input['oninput']) ? "oninput={$input['oninput']}" : '' }}
                                                                style="border: 1px solid #313131;">
                                                        </div>
                                                    @endforeach
                                                    <div class="col-md-6 mt-3">
                                                        <label for="alamatEntitas2" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamatEntitas2" name="alamatEntitas[]" style="border: 1px solid #313131;"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div id="myModal" class="modal" data-backdrop="static"
                                                data-keyboard="false">
                                                <!-- Konten Modal -->
                                                <div class="modal-content">
                                                    <center>
                                                        <h5 class="modal-title">Data Referensi Pengusaha</h5>
                                                    </center>
                                                    <span class="close">&times;</span>
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
                                                                <tr data-npwp="010016806054000"
                                                                    data-nama="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku="0010016806054000000000"
                                                                    data-alamat="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp2="010016806054000"
                                                                    data-nama2="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku2="0010016806054000000000"
                                                                    data-alamat2="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                </tr>
                                                                <tr data-npwp3="010016806054000"
                                                                    data-nama3="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku3="0010016806054000000000"
                                                                    data-alamat3="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp4="010016806054000"
                                                                    data-nama2="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku4="0010016806054000000000"
                                                                    data-alamat4="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp5="010016806054000"
                                                                    data-nama2="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku5="0010016806054000000000"
                                                                    data-alamat5="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp6="010016806054000"
                                                                    data-nama6="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku6="0010016806054000000000"
                                                                    data-alamat6="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp7="010016806054000"
                                                                    data-nama7="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku7="0010016806054000000000"
                                                                    data-alamat7="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp8="010016806054000"
                                                                    data-nama2="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku8="0010016806054000000000"
                                                                    data-alamat8="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp9="010016806054000"
                                                                    data-nama9="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku9="0010016806054000000000"
                                                                    data-alamat9="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp10="010016806054000"
                                                                    data-nama10="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku10="0010016806054000000000"
                                                                    data-alamat10="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp11="010016806054000"
                                                                    data-nama11="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku11="0010016806054000000000"
                                                                    data-alamat11="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp12="010016806054000"
                                                                    data-nama12="INDO-RAMA SYNTHETICS TBK"
                                                                    data-nitku12="0010016806054000000000"
                                                                    data-alamat12="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>INDO-RAMA SYNTHETICS TBK</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-1">Pilih</button></td>
                                                                </tr>
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
                                                @php
                                                    $penerimaBarang = [
                                                        [
                                                            'label' => 'Nomor NPWP',
                                                            'id' => 'kodeJenisIdentitas3',
                                                            'name' => 'kodeJenisIdentitas[]',
                                                            'readonly' => true,
                                                        ],
                                                        [
                                                            'label' => 'Nitku',
                                                            'id' => 'nitku3',
                                                            'name' => 'nomorIdentitas[]',
                                                            'oninput' => 'updateNomorEntitas3()',
                                                        ],
                                                        [
                                                            'label' => 'Nama',
                                                            'id' => 'namaEntitas3',
                                                            'name' => 'namaEntitas[]',
                                                        ],
                                                    ];
                                                @endphp

                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label for="nomorIdentitas" class="form-label">Nomor
                                                            Identitas</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="6 - NPWP 16 DIGIT" readonly
                                                            style="border: 1px solid #313131;">
                                                    </div>
                                                    @foreach ($penerimaBarang as $input)
                                                        <div class="col-md-6">
                                                            <label for="{{ $input['id'] }}"
                                                                class="form-label">{{ $input['label'] }}</label>
                                                            <input type="text" class="form-control"
                                                                id="{{ $input['id'] }}" name="{{ $input['name'] }}"
                                                                {{ isset($input['readonly']) ? 'readonly' : '' }}
                                                                {{ isset($input['oninput']) ? "oninput={$input['oninput']}" : '' }}
                                                                style="border: 1px solid #313131;">
                                                        </div>
                                                    @endforeach
                                                    <div class="col-md-6 mt-3">
                                                        <label for="alamatEntitas2" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamatEntitas3" name="alamatEntitas[]" rows="3"
                                                            style="border: 1px solid #313131;"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div id="myModal2" class="modal" data-backdrop="static"
                                                data-keyboard="false" style="display: none;">
                                                <div class="modal-content">
                                                    <center>
                                                        <h5 class="modal-title">Data Referensi Pengusaha</h5>
                                                    </center>
                                                    <span class="close">&times;</span>
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
                                                                <tr data-npwp="010020766057000"
                                                                    data-nama="GOKAK INDONESIA"
                                                                    data-nitku="010020766057000000000"
                                                                    data-alamat="ATENG ILYAS KP MUHARA RT.002 RW.008 CITEUREUP CITEUREUP KAB. BOGOR INDONESIA ( PT. GOKAK INDONESIA )">
                                                                    <td>010020766057000</td>
                                                                    <td>GOKAK INDONESIA</td>
                                                                    <td>ATENG ILYAS KP MUHARA RT.002 RW.008 CITEUREUP
                                                                        CITEUREUP KAB. BOGOR INDONESIA ( PT. GOKAK INDONESIA
                                                                        )</td>
                                                                    <td>-</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-2">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp2="808248256041000"
                                                                    data-nama2="TARA PETINDO BERDIKARI"
                                                                    data-nitku2="808248256041000000000"
                                                                    data-alamat2="JALAN RAYA UJUNG BERUNG KM 12,6 RT. 002 RW. 006 CIPADUNG KULON PANYILEUKAN KOTA BANDUNG INDONESIA (PT. LONGDI SEJAHTERA INDONESIA)">
                                                                    <td>808248256041000</td>
                                                                    <td>TARA PETINDO BERDIKARI</td>
                                                                    <td>PERGUDANGAN LAKSANA BLOK RC. 21- RC.23 PAKUHAJI
                                                                        TANGERANG INDONESIA ( PT. BUANIKA SYAHPUTRA )</td>
                                                                    <td>-</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-2">Pilih</button></td>
                                                                </tr>
                                                                </tr>
                                                                <tr data-npwp3="020591459444000" data-nama3="SAMTEX"
                                                                    data-nitku3="010016806054000000000"
                                                                    data-alamat3="JL. RAYA CIJAPATI RT 02 RW. 06 KEL. CILULUK KEC. CIKANCUNG KAB. BANDUNG JAWA BARAT INDONESIA ( PT. SAMTEX )">
                                                                    <td>010016806054000</td>
                                                                    <td>SAMTEX</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td>-</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-2">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp4="716100979451000"
                                                                    data-nama2="DUTA KARYA PERTIWI"
                                                                    data-nitku4="716100979451000000000"
                                                                    data-alamat4="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>716100979451000</td>
                                                                    <td>DUTA KARYA PERTIWI</td>
                                                                    <td>JL. RAYA SERANG KM. 14,5 KP. LAMPORAN RT.002 RW.001
                                                                        DUKUH CIKUPA KAB. TANGERANG BANTEN INDONESIA ( PT.
                                                                        DUTA KARYA PERTIWI )</td>
                                                                    <td>-</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-2">Pilih</button></td>
                                                                </tr>
                                                                <tr data-npwp5="010016806054000"
                                                                    data-nama2="TARA PETINDO BERDIKARI"
                                                                    data-nitku5="010016806054000000000"
                                                                    data-alamat5="JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT 41101">
                                                                    <td>010016806054000</td>
                                                                    <td>TARA PETINDO BERDIKARI</td>
                                                                    <td>JALAN RAYA UBRUG, DESA KEMBANG KUNING, KECAMATAN
                                                                        JATILUHUR, PO BOX 2 & 7, PURWAKARTA, JAWA BARAT
                                                                        41101</td>
                                                                    <td>-</td>
                                                                    <td><button type="button"
                                                                            class="pilih-btn-2">Pilih</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

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
                                                                         class="btn btn-primary mb-3" id="myBtn4">
                                                                         <span data-feather="plus"></span>Tambah
                                                                     </button>
                                                                 </div>
                                                             </div>
                                                         </header>
                                                         <div class="card-body" id="tableContainer">
                                                             <div class="table-responsive">
                                                                 <table class="table table-bordered" id="Table">
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
                                                                             <th>Action</th>
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
                                                     <div id="myModal4" class="modal" data-backdrop="static"
                                                         data-keyboard="false" style="display: none;">
                                                         <div class="modal-content">
                                                             <span class="close">&times;</span>
                                                             <div class="modal-form">
                                                                 <input type="hidden" id="editIndex" value="">
                                                                 <label for="seri">Seri</label>
                                                                 <input type="text" class="form-control"
                                                                     id="seriDokumen" name="seriDokumen[]" readonly>

                                                                 <div class="form-group">
                                                                     <label for="kodeDokumen">Jenis Dokumen</label>
                                                                     <select class="form-control" name="kodeDokumen[]"
                                                                         id="select-field4" required>
                                                                         <option selected disabled>Pilih Jenis</option>
                                                                         <option
                                                                             value="0282 - PERSETUJUAN PENGELUARAN BC28 DENGAN DOKAP"
                                                                             {{ old('kodeDokumen') == '1' ? 'selected' : '' }}>
                                                                             0282 - PERSETUJUAN PENGELUARAN BC28
                                                                             DENGAN DOKAP</option>

                                                                         <option
                                                                             value="03001 - IZIN PRINSIP PENDIRIAN KAWASAN BERIKAT SEBELUM FISIK BANGUNAN BERDIRI"
                                                                             {{ old('kodeDokumen') == '2' ? 'selected' : '' }}>
                                                                             03001 - IZIN PRINSIP PENDIRIAN KAWASAN
                                                                             BERIKAT SEBELUM FISIK BANGUNAN BERDIRI
                                                                         </option>

                                                                         <option
                                                                             value="03002 - KEPUTUSAN PENETAPAN TEMPAT SEBAGAI KAWASAN BERIKAT DAN PEMBERIAN IZIN PENYELENGGARA KAWASAN BERIKAT"
                                                                             {{ old('kodeDokumen') == '3' ? 'selected' : '' }}>
                                                                             03002 - KEPUTUSAN PENETAPAN TEMPAT
                                                                             SEBAGAI KAWASAN BERIKAT DAN PEMBERIAN
                                                                             IZIN PENYELENGGARA KAWASAN BERIKAT
                                                                         </option>

                                                                         <option
                                                                             value="03003 - PERSETUJUAN PENETAPAN TEMPAT SEBAGAI KAWASAN BERIKAT DAN PEMBERIAN IZIN PENYELENGARA KAWASAN BERIKAT SEKALIGUS IZIN PENGUSAHA KAWASAN BERIKAT"
                                                                             {{ old('kodeDokumen') == '4' ? 'selected' : '' }}>
                                                                             03003 - PERSETUJUAN PENETAPAN TEMPAT
                                                                             SEBAGAI KAWASAN BERIKAT DAN PEMBERIAN
                                                                             IZIN PENYELENGARA KAWASAN BERIKAT
                                                                             SEKALIGUS IZIN PENGUSAHA KAWASAN BERIKAT
                                                                         </option>

                                                                         <option value="03004 - IZIN PDKB"
                                                                             {{ old('kodeDokumen') == '5' ? 'selected' : '' }}>
                                                                             03004 - IZIN PDKB</option>

                                                                         <option
                                                                             value="03005 - PERPANJANGAN PENETAPAN TEMPAT SEBAGAI KAWASAN BERIKAT DAN IZIN PENYELENGGARA KAWASAN BERIKAT, IZIN PENGUSAHA KAWASAN BERIKAT, ATAU IZIN PDKB SEBELUM JANGKA WAKTU IZIN TERSEBUT BERAKHIR"
                                                                             {{ old('kodeDokumen') == '6' ? 'selected' : '' }}>
                                                                             03005 - PERPANJANGAN PENETAPAN TEMPAT
                                                                             SEBAGAI KAWASAN BERIKAT DAN IZIN
                                                                             PENYELENGGARA KAWASAN BERIKAT, IZIN
                                                                             PENGUSAHA KAWASAN BERIKAT, ATAU IZIN
                                                                             PDKB SEBELUM JANGKA WAKTU IZIN TERSEBUT
                                                                             BERAKHIR</option>
                                                                        <option
                                                                             value="03006 - PERUBAHAN IZIN PENYELENGGARA
                                                                            KAWASAN BERIKAT, IZIN PENGUSAHA KAWASAN
                                                                            BERIKAT, ATAU IZIN PDKB (TERDAPAT
                                                                            PERUBAHAN NAMA PERUSAHAAN YANG BUKAN
                                                                            DIKARENAKAN MERGER ATAU DIAKUISISI,
                                                                            JENIS HASIL PRODUK, ATAU LUAS KAWASAN
                                                                            BERIKAT)"

                                                                             {{ old('kodeDokumen') == '7' ? 'selected' : '' }}>
                                                                            03006 - PERUBAHAN IZIN PENYELENGGARA
                                                                            KAWASAN BERIKAT, IZIN PENGUSAHA KAWASAN
                                                                            BERIKAT, ATAU IZIN PDKB (TERDAPAT
                                                                            PERUBAHAN NAMA PERUSAHAAN YANG BUKAN
                                                                            DIKARENAKAN MERGER ATAU DIAKUISISI,
                                                                            JENIS HASIL PRODUK, ATAU LUAS KAWASAN
                                                                            BERIKAT)
                                                                         </option>

                                                                         <option
                                                                             value="03007 - PERUBAHAN KEPUTUSAN IZIN PENYELENGGARA KAWASAN BERIKAT, IZIN PENGUSAHA KAWASAN BERIKAT, ATAU IZIN PDKB"
                                                                             {{ old('kodeDokumen') == '8' ? 'selected' : '' }}>
                                                                             03007 - PERUBAHAN KEPUTUSAN IZIN
                                                                             PENYELENGGARA KAWASAN BERIKAT, IZIN
                                                                             PENGUSAHA KAWASAN BERIKAT, ATAU IZIN
                                                                             PDKB
                                                                         </option>

                                                                         <option
                                                                             value="03008 - PEMBERIAN IZIN PENAMBAHAN PINTU KHUSUS PEMASUKAN DAN PENGELUARAN BARANG DI KAWASAN BERIKAT"
                                                                             {{ old('kodeDokumen') == '9' ? 'selected' : '' }}>
                                                                             03008 - PEMBERIAN IZIN PENAMBAHAN PINTU
                                                                             KHUSUS PEMASUKAN DAN PENGELUARAN BARANG
                                                                             DI KAWASAN BERIKAT
                                                                         </option>

                                                                         <option
                                                                         value="380 - INVOICE"
                                                                         {{ old('kodeDokumen') == '10' ? 'selected' : '' }}>
                                                                         380 - INVOICE
                                                                     </option>

                                                                     <option
                                                                     value="217 - PACKING LIST"
                                                                     {{ old('kodeDokumen') == '11' ? 'selected' : '' }}>
                                                                     217 - PACKING LIST
                                                                 </option>
                                                                     </select>
                                                                 </div>
                                                                 <label for="nomorDokumen">Nomor Dokumen</label>
                                                                 <input type="text" class="form-control"
                                                                     id="kodeDokumen" name="nomorDokumen[]">

                                                                 <label for="tanggalDokumen">Tanggal Dokumen</label>
                                                                 <input type="date" class="form-control"
                                                                     id="tanggalDokumen" name="tanggalDokumen[]">

                                                                 <br>

                                                                 <div class="button-group">
                                                                     <button type="button"
                                                                         class="btn-save">Simpan</button>
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
                                 </div>

                                    {{-- Pengangkut --}}
                                    <div class="tab-pane fade" id="pengangkut" role="tabpanel"
                                        aria-labelledby="pengangkut-tab">
                                        <div class="row">
                                            @php
                                                $pengangkutOptions = [
                                                    '1 - UDARA',
                                                    '2 - KERETA API',
                                                    '3 - DARAT',
                                                    '4 - UDARA',
                                                    '5 - POS',
                                                    '6 - MULTIMODA',
                                                    '7 - INSTALASI / PIPA',
                                                    '8 - PERAIRAN',
                                                ];
                                                $selectedValue = old('kodeCaraAngkut', '3 - Darat');
                                            @endphp

                                            <div class="col-md-12">
                                                <label for="kodeCaraAngkut" class="form-label">Cara Pengangkutan</label>
                                                <select class="form-control" id="select-field18" name="kodeCaraAngkut"
                                                    style="border: 1px solid #313131;">
                                                    @foreach ($pengangkutOptions as $option)
                                                        <option value="{{ $option }}"
                                                            {{ $selectedValue == $option ? 'selected' : '' }}>
                                                            {{ $option }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Kemasan  --}}
                                    <div class="tab-pane fade" id="kemaspetikemas" role="tabpanel"
                                        aria-labelledby="kemaspetikemas-tab">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <header>
                                                                <div class="right_content">
                                                                    <div class="col-lg-12 text-start mb-6">
                                                                        <button type="button"
                                                                            class="btn btn-primary mb-3"
                                                                            id="myBtn5"><span
                                                                                data-feather="plus"></span>Tambah
                                                                            Kemasan</button>
                                                                    </div>
                                                                </div>
                                                            </header>
                                                            <div class="card-body" id="tableContainer">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered" id="Table2">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th
                                                                                    style="margin-top: 19px;color:black;font-weight: bold;">
                                                                                    Seri</th>
                                                                                <th
                                                                                    style="margin-top: 19px;color:black;font-weight: bold;">
                                                                                    Jumlah</th>
                                                                                <th
                                                                                    style="margin-top: 19px;color:black;font-weight: bold;">
                                                                                    Jenis</th>
                                                                                <th
                                                                                    style="margin-top: 19px;color:black;font-weight: bold;">
                                                                                    Merk</th>
                                                                                <th
                                                                                    style="margin-top: 19px;color:black;font-weight: bold;">
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
                                                        <div id="myModal5" class="modal" data-backdrop="static"
                                                            data-keyboard="false" style="display: none;">
                                                            <div class="modal-content">
                                                                <span class="close">&times;</span>
                                                                <div class="modal-form">
                                                                    <input type="hidden" id="editIndex2" value="">
                                                                    <label for="nama">Seri</label>
                                                                    <div class="col-md-12">
                                                                        <label for="seriKemasan" class="form-label">Seri Pengangkut</label>
                                                                        <input type="text" class="form-control"
                                                                            id="seriDokumen2" name="seriKemasan"
                                                                            value="{{ is_array(old('seriKemasan')) ? implode(',', old('seriKemasan')) : old('seriKemasan') }}" readonly>
                                                                    </div>

                                                                    <label for="usaha">Jumlah</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jumlah" name="jumlahKemasan"
                                                                        value="{{ is_array(old('jumlahKemasan')) ? implode(', ', old('jumlahKemasan')) : old('jumlahKemasan') }}">


                                                                    <div class="form-group">
                                                                        <label for="alamat">Jenis Dokumen</label>
                                                                        <select class="form-control" name="kodeJenisKemasan[]"
                                                                            id="select-field5" required
                                                                            style="border: 1px solid #313131;">
                                                                            <option selected disabled>Pilih Jenis
                                                                            </option>
                                                                            <option value="1A - DRUM, STEEL"
                                                                                {{ old('kodeJenisKemasan') == '1' ? 'selected' : '' }}>
                                                                                1A - DRUM, STEEL</option>
                                                                            <option value="1B - DRUM, ALUMUNIUM"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                1B - DRUM, ALUMUNIUM</option>
                                                                            <option value="1D - DRUM, PLYWOOD"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                1D - DRUM, PLYWOOD</option>
                                                                            <option value="1F - CONTAINER, FLEXIBLE"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                1F - CONTAINER, FLEXIBLE</option>
                                                                            <option value="1G - DRUM, FIBRE"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                1G - DRUM, FIBRE</option>
                                                                            <option value="1W - DRUM, WOODEN"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                1W - DRUM, WOODEN</option>
                                                                            <option value="2C - BARREL, WOODEN"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                2C - BARREL, WOODEN</option>
                                                                            <option value=" 3A - JERICCAN, STELL"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                3A - JERICCAN, STELL</option>
                                                                            <option value=" CT - Carton"
                                                                                {{ old('kodeJenisKemasan') == '2' ? 'selected' : '' }}>
                                                                                CT - Carton</option>
                                                                        </select>
                                                                    </div>
                                                                    <BR>
                                                                    <label for="usaha">Merk</label>
                                                                    <input type="text" class="form-control"
                                                                        id="merk" name="merkKemasan[]"
                                                                        value="{{ old('merk') }}">
                                                                    <br>
                                                                    <!-- Tombol Simpan & Batal -->
                                                                    <div class="button-group">
                                                                        <button type="button" class="btn-save"
                                                                            id="btn-save2">Simpan</button>
                                                                        <button type="button" class="btn btn-cancel"
                                                                            onclick="closeModal2()">Batal</button>
                                                                    </div>
                                                                </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <header>
                                <div class="right_content">
                                    <div class="col-lg-12 text-start mb-6">
                                        <button type="button" class="btn btn-primary mb-3" id="myBtn6"><span
                                                data-feather="plus"></span>Tambah Peti Kemasan</button>

                                    </div>
                                </div>
                            </header>
                            <div class="card-body" id="tableContainer">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Table3">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="margin-top: 19px;color:black;font-weight: bold;">
                                                    Seri</th>
                                                <th style="margin-top: 19px;color:black;font-weight: bold;">
                                                    Nomor</th>
                                                <th style="margin-top: 19px;color:black;font-weight: bold;">
                                                    Ukuran</th>
                                                <th style="margin-top: 19px;color:black;font-weight: bold;">
                                                    Jenis</th>
                                                <th style="margin-top: 19px;color:black;font-weight: bold;">
                                                    Tipe</th>
                                                <th style="margin-top: 19px;color:black;font-weight: bold;">
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

                        {{-- <!-- Modal -->
                        <div id="myModal6" class="modal" data-backdrop="static" data-keyboard="false"
                            style="display: none;">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="modal-form">
                                    <input type="hidden" id="editIndex3" value="">
                                    <label for="nama">Seri</label>
                                    <input type="text" class="form-control" id="seriDokumen3" name="seriKemasan[]"
                                        value="{{ old('seriDokumen3') }}" readonly>

                                    <label for="usaha">Nomor</label>
                                    <input type="text" class="form-control" id="nomor2" name="nomor2"
                                        value="{{ old('nomor2') }}">

                                    <div class="form-group">
                                        <label for="alamat">Ukuran</label>
                                        <select class="form-control" name="ukuran" id="select-field6" required
                                            style="border: 1px solid #313131;">
                                            <option selected disabled>Pilih
                                                Ukuran</option>
                                            <option value="1A - DRUM, STEEL" {{ old('ukuran') == '1' ? 'selected' : '' }}>
                                                20 - 20 FEET</option>
                                            <option value="1B - DRUM, ALUMUNIUM"
                                                {{ old('ukuran') == '2' ? 'selected' : '' }}>
                                                40 - 40 FEET</option>
                                            <option value="1D - DRUM, PLYWOOD"
                                                {{ old('ukuran') == '3' ? 'selected' : '' }}>
                                                45 - 45 FEET</option>
                                            <option value="1F - CONTAINER, FLEXIBLE"
                                                {{ old('ukuran') == '4' ? 'selected' : '' }}>
                                                60 - 60 FEET</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="alamat">Jenis</label>
                                        <select class="form-control" name="jenis" id="select-field7" required
                                            style="border: 1px solid #313131;">
                                            <option selected disabled>Pilih
                                                Ukuran</option>
                                            <option value="4 - Empty" {{ old('jenis') == '1' ? 'selected' : '' }}>
                                                4 - Empty</option>
                                            <option value="7 - LCL" {{ old('jenis') == '2' ? 'selected' : '' }}>
                                                7 - LCL </option>
                                            <option value="8 - FCL" {{ old('jenis') == '2' ? 'selected' : '' }}>
                                                8 - FCL</option>
                                        </select>
                                    </div>
                                    <BR>
                                    <label for="usaha">Tipe</label>
                                    <input type="text" class="form-control" id="Tipe" name="Tipe"
                                        value="{{ old('Tipe') }}">
                                    <br>
                                    <!-- Tombol Simpan & Batal -->
                                    <div class="button-group">
                                        <button type="button" class="btn-save" id="btn-save3">Simpan</button>
                                        <button type="button" class="btn btn-cancel" id="cancelBtn">Batal</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

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
                        <input type="text" class="form-control" id="kodeValuta" name="kodeValuta"
                            value="{{ old('kodeValuta', 'USD - US DOLLAR') }}" readonly
                            style="border: 1px solid #313131;">
                    </div>
                    <div class="col-md-6">
                        <label for="ndpbm" class="form-label">NDPBM</label>
                        <input type="number" class="form-control" id="ndpbm" name="ndpbm"
                            value="{{ is_array(old('ndpbm')) ? old('ndpbm')[0] ?? '' : old('ndpbm') }}"
                            style="border: 1px solid #313131;" oninput="hitungNilaiPabean()">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="cif" class="form-label">CIF</label>
                        <input type="text" class="form-control" id="cif" name="cif"
                            value="{{ is_array(old('cif')) ? implode(', ', old('cif')) : old('cif') }}"
                            style="border: 1px solid #313131;" oninput="hitungNilaiPabean()">
                    </div>

                    {{-- gatau ini --}}
                    <div class="col-md-6 mt-3">
                        <label for="nilai_pabean" class="form-label">Nilai Pabean</label>
                        <input type="text" class="form-control" id="nilai_pabean" name="nilai_pabean" readonly
                            style="border: 1px solid #313131;">
                    </div>
                    {{-- --}}
                    <div class="col-md-6 mt-3">
                        <label for="harga_penyerahan" class="form-label">Harga
                            Penyerahan/Harga Jual/Harga Barang</label>
                        <input type="text" class="form-control" id="harga_penyerahan" name="hargaPenyerahan"
                            value="{{ old('harga_penyerahan') }}" style="border: 1px solid #313131;">
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
                           {{-- gatau ini --}}
                <div class="col-md-6">
                    <label for="nomorIdentitas" class="form-label">Uang Muka</label>
                    <input type="text" class="form-control" id="uang_maku" name="uang_maku"
                        value="{{ old('uang_maku', '0.00') }}" style="border: 1px solid #313131;">
                </div>
                           {{--  --}}
                           <div class="col-md-6">
                            <label for="nomorNpwp" class="form-label">Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon"
                                value="{{ is_array(old('diskon')) ? implode(', ', old('diskon')) : old('diskon', '0.00') }}"
                                style="border: 1px solid #313131;">
                        </div>

                <div class="col-md-12 mt-3">
                    <label for="pengenaan_pajak" class="form-label">Dasar Pengenaan
                        Pajak</label>
                    <input type="text" class="form-control" id="pengenaan_pajak" name="dasarPengenaanPajak[]"
                        style="border: 1px solid #313131;" oninput="hitungPPNBM(); hitungPPN();">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="namaEntitas2" class="form-label">PPN Yang Dipungut
                        (Tarif & Nilai)</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="ppn_tarif" name="tarifPpnPajak[]"
                                value="11.00%" style="border: 1px solid #313131;" oninput="hitungPPN()">
                        </div>

                        <div class="col-md-8">
                            <input type="text" class="form-control" id="ppn_hasil" name="ppnPajak[]" readonly
                                style="border: 1px solid #313131;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="namaEntitas3" class="form-label">PPnBM Yang Dipungut
                        (Tarif & Nilai)</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="ppnb_tarif" name="tarifPpnbmPajakp[]"
                                value="00.00%" style="border: 1px solid #313131;" oninput="hitungPPNBM()">
                        </div>

                        <div class="col-md-8">
                            <input type="text" class="form-control" id="ppnb_hasil" name="ppnbmPajak[]" readonly
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
                        <input type="text" class="form-control" id="berat_kotor" name="bruto[]"
                            value="{{ old('berat_kotor') }}" style="border: 1px solid #313131;">
                    </div>
                    <div class="col-md-6">
                        <label for="nomorNpwp" class="form-label">Berat Bersih
                            (KGM)</label>
                        <input type="text" class="form-control" id="berat_bersih" name="netto[]"
                            value="{{ old('berat_bersih') }}" style="border: 1px solid #313131;">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--
    Barang --}}
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
                                                <select class="form-control" name="hs" id="select-field12" required
                                                    style="border: 1px solid #313131;">
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

    {{-- <!-- Pungutan -->
    <div class="tab-pane fade" id="pungutan" role="tabpanel" aria-labelledby="pungutan-tab">
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
        window.onload = calculateTotal;
    </script>



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
                                <input type="text" class="form-control" name="kotaTtd[]"
                                    value="{{ old('tempat') }}" style="border: 1px solid #313131;">
                            </div>
                            <div class="col-md-6">
                                <label for="cif" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggalTtd[]"
                                    value="{{ old('tanggal') }}" style="border: 1px solid #313131;">
                            </div>
                        </div>
                    </div>
                    <!-- Nama -->
                    <div class="row mb-4 p-3 border rounded shadow-sm bg-light">
                        <h5 class="text-primary">Nama</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="uang_muka" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="idPengguna[]"
                                    value="{{ old('nama') }}" style="border: 1px solid #313131;">
                            </div>
                            <div class="col-md-6">
                                <label for="diskon" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatanTtd[]"
                                    value="{{ old('jabatan') }}" style="border: 1px solid #313131;">
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    {{-- {{-- <div class="row mb-4 p-3">
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <!-- Atau Anda bisa menggunakan elemen input -->
                            <!-- <input type="submit" class="btn btn-primary" value="Kirim"> -->
                        </div>
                    </div>
                    <div class="right_content">
                        <div class="col-lg-12 text-start mb-6">
                            <button type="submit" class="btn btn-primary mb-3" ><span
                                    ></span>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{--
                        <div class="row mb-4 p-3">
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <!-- Atau Anda bisa menggunakan elemen input -->
                            <!-- <input type="submit" class="btn btn-primary" value="Kirim"> -->
                        </div>
                    </div> --}}

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
    </script>


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
    </script>

    <style>
        .btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

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
            $('#dataTable1, #dataTable2, #dataTable3').DataTable();
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
        // Function to open the modal when the "Tambah" button is clicked
        document.getElementById("myBtn4").addEventListener("click", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            var nextSeriDokumen = getNextSeriDokumen(nomorAju);
            document.getElementById("seriDokumen").value = nextSeriDokumen;
            document.getElementById("myModal4").style.display = "block";
        });

        function closeModal() {
            document.getElementById("myModal4").style.display = "none";
            document.getElementById("seriDokumen").value = "";
            document.getElementById("select-field4").value = "";
            document.getElementById("kodeDokumen").value = "";
            document.getElementById("tanggalDokumen").value = "";
            document.getElementById("editIndex").value = "";
        }

        // Function to get the next seriDokumen number
        function getNextSeriDokumen(nomorAju) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju)) || [];
            return storedData.length + 1;
        }

        // Function to save data to localStorage
        function saveToLocalStorage(nomorAju, data) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju)) || [];
            storedData.push(data);
            localStorage.setItem(nomorAju, JSON.stringify(storedData));
        }

        // Function to render the table from stored data
        function renderTable(nomorAju) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju)) || [];
            let tableBody = document.querySelector("#Table tbody");
            tableBody.innerHTML = "";

            storedData.forEach((item, index) => {
                let newRow = document.createElement("tr");
                newRow.innerHTML = `
                <td>${item.seriDokumen}</td>
                <td>${item.jenisDokumen}</td>
                <td>${item.kodeDokumen}</td>
                <td>${item.tanggalDokumen}</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>
                    <button class="btn btn-edit" data-index="${index}">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-delete" data-index="${index}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            `;
                tableBody.appendChild(newRow);
            });

            // Adding event listeners for edit and delete buttons
            document.querySelectorAll(".btn-edit").forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault(); // Prevent page refresh or default behavior
                    editData(nomorAju, this.getAttribute("data-index"));
                });
            });

            document.querySelectorAll(".btn-delete").forEach(button => {
                button.addEventListener("click", function() {
                    deleteData(nomorAju, this.getAttribute("data-index"));
                });
            });
        }

        // Function to open the edit modal and populate it with existing data
        function editData(nomorAju, index) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju)) || [];
            let dataToEdit = storedData[index];

            if (dataToEdit) {
                // Isi form modal dengan data yang akan diedit
                document.getElementById("seriDokumen").value = dataToEdit.seriDokumen;
                document.getElementById("select-field4").value = dataToEdit.jenisDokumen;
                document.getElementById("kodeDokumen").value = dataToEdit.kodeDokumen;
                document.getElementById("tanggalDokumen").value = dataToEdit.tanggalDokumen;

                // Simpan indeks data yang sedang diedit
                document.getElementById("editIndex").value = index;

                // Tampilkan modal
                document.getElementById("myModal4").style.display = "block";
            } else {
                alert("Data tidak ditemukan!");
            }
        }

        // Function to delete data
        function deleteData(nomorAju, index) {
            let storedData = JSON.parse(localStorage.getItem(nomorAju)) || [];
            storedData.splice(index, 1);

            // Reassign seriDokumen to maintain sequential order
            storedData.forEach((item, idx) => {
                item.seriDokumen = idx + 1;
            });

            localStorage.setItem(nomorAju, JSON.stringify(storedData));
            renderTable(nomorAju);
        }
        document.querySelector(".btn-save").addEventListener("click", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            var seriDokumen = document.getElementById("seriDokumen").value;
            var jenisDokumen = document.getElementById("select-field4").value;
            var kodeDokumen = document.getElementById("kodeDokumen").value;
            var tanggalDokumen = document.getElementById("tanggalDokumen").value;
            var editIndex = document.getElementById("editIndex").value;

            if (jenisDokumen && kodeDokumen && tanggalDokumen) {
                let storedData = JSON.parse(localStorage.getItem(nomorAju)) || [];

                if (editIndex) {
                    // Mode edit: update existing data
                    storedData[editIndex] = {
                        seriDokumen: seriDokumen,
                        jenisDokumen: jenisDokumen,
                        kodeDokumen: kodeDokumen,
                        tanggalDokumen: tanggalDokumen
                    };
                } else {
                    // Mode add: create new entry
                    storedData.push({
                        seriDokumen: seriDokumen,
                        jenisDokumen: jenisDokumen,
                        kodeDokumen: kodeDokumen,
                        tanggalDokumen: tanggalDokumen
                    });
                }

                // Save updated data to localStorage
                localStorage.setItem(nomorAju, JSON.stringify(storedData));

                // Re-render the table to reflect changes
                renderTable(nomorAju);

                // Close the modal
                closeModal();
            } else {
                alert("Please complete all fields.");
            }
        });


        // Load data and render table when the page loads
        window.addEventListener("load", function() {
            var nomorAju = document.getElementById("nomorAju").value;
            renderTable(nomorAju);
        });
    </script>

    {{-- Fungsi MODAL PETI --}}
    <script>
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
    </script>

    {{-- Fungsi MODAL PETI KEMASAN --}}
    <script>
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
    </script>
@endsection
