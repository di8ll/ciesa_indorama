@extends('layouts.dashboard.app')

@section('title')
    Companies | PLN ICON Plus
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
                                {{-- <form action="{{ route('device.index') }}" method="GET" class="d-flex align-items-center"> --}}
                            <a href="{{ route('dokumen_pabean') }}" class="btn btn-primary mb-3">
                                    <span data-feather="plus"></span>
                                    Tambah Dokumen Baru
                                </a>
                    </header>

                    <div class="card-body">
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

                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>


@endsection
