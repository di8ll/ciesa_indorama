@extends('layouts.dashboard.app')

@section('title')
    Add Permission | PLN ICON Plus
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('permission.index') }}">Permission</a></li>
                            <li class="breadcrumb-item active">Add Permission</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Permission</h4>
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
                        <h4 class="card-title">Bootstrap Custom styles</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <!--begin::Error-->
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!--end::Error-->
                        <form class="row g-3 needs-validation" method="POST" action="{{ route('permission.store') }}"
                            enctype="multipart/form-data" novalidate>
                            @csrf

                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Permission</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('permission.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->

@endsection
