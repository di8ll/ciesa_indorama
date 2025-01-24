@extends('layouts.dashboard.app')

@section('title')
    Daftar Dokumen
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

    .table-container {
        margin-top: 20px;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .table-header .btn-group {
        margin-right: 10px;
    }

    .table-header .btn {
        margin-right: 5px;
    }

    .table-body {
        margin-top: 20px;
    }

    .table-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .table-cell {
        width: 20%;
        text-align: left;
    }

    .table-cell:first-child {
        width: 10%;
    }

    .table-cell:last-child {
        width: 20%;
        text-align: right;
    }

    .table-cell input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
    }

    .table-cell input:disabled {
        background-color: #f2f2f2;
    }

    .table-cell button {
        padding: 5px 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
</style>

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
                <h4 class="page-title">Daftar Dokumen</h4>
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
                        <script>
                            function applyCompanyFilter() {
                                var selectedCompany = document.getElementById('select-field1').value;
                                window.location.href = '{{ route('user.index') }}?company_id=' + selectedCompany;
                            }
                        </script>
                    </div>
                    @can('Create User')
                    <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addDocumentModal">
                        Tambah Dokumen Baru
                    </a>
                    @endcan
                </header>

                <div class="card-header">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">#</th>
                                    <th style="width: 300px;margin-top: 19px;color:black;font-weight: bold;">Kode Dokumen</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Nomor Pengajuan</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Nomor / Tanggal Pendaftaran</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Nama Respon</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Tanggal Respon</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Jalur</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Kantor Pabean</th>
                                    <th style="margin-top: 19px;color:black;font-weight: bold;">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addDocumentModal" tabindex="-1" aria-labelledby="addDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- Tambahkan 'modal-dialog-centered' -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDocumentModalLabel">Tambah Dokumen Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('dokumen-baru.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="entitas" class="form-label">Entitas</label>
                        <select class="form-select" id="entitas" name="entitas" required>
                            <option value="" selected disabled>Pilih Entitas</option>
                            <option value="TPB">TPB</option>
                            <!-- Tambahkan opsi lain jika diperlukan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                        <select class="form-select" id="jenis_dokumen" name="jenis_dokumen" required>
                            <option value="" selected disabled>Pilih jenis dokumen</option>
                            <option value="BC 2.5">BC 2.5</option>
                            <!-- Tambahkan opsi lain jika diperlukan -->
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
