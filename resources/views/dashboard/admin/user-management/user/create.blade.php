@extends('layouts.dashboard.app')

@section('title')
    Add User Ciesa | Indorama
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add User</h4>
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
                        <form class="row g-3 needs-validation" method="POST" action="{{ route('user.store') }}"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Full Name</label>
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
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Roles</label>
                                <select class="form-select @error('roles') is-invalid @enderror" name="roles[]"
                                    id="select-field" required>
                                    <option selected disabled> Select Role </option>
                                    @foreach ($roles as $item)
                                        @if ($item == 'Super Admin')
                                        @else
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('roles')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">No Handphone/Telephone</label>
                                <input type="tel" class="form-control @error('no_hp') is-invalid @enderror"
                                    id="no_hp" name="no_hp" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!--end col-->
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Gender</label>
                                <select class="form-select @error('jk') is-invalid @enderror" name="jk" id="select-field2"
                                    required>
                                    <option selected disabled> Select Gender </option>
                                    <option value="Man">Man</option>
                                    <option value="Woman">Woman</option>
                                </select>
                                @error('jk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <br>
                            <hr>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Photo</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <div class="d-grid">
                                            <p class="text-muted">
                                                Upload your photo profile here, Please click "Upload
                                                Image" Button.
                                            </p>
                                            <div
                                                class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                            </div>
                                            <input type="file" id="input-file" name="photo" accept="image/*"
                                                onchange={handleChange()} hidden />
                                            <label class="btn-upload btn btn-primary" for="input-file">
                                                Upload Image
                                            </label>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Letter of assignment</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <div class="d-grid">
                                            <p class="text-muted">
                                                Your decision letter here, please click "decision" Button "Upload File".
                                            </p>
                                            <label class="custom-file-upload btn btn-primary">
                                                <input type="file" name="surat_tugas" style="display:none;" accept=".pdf">
                                                Upload File
                                            </label>

                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div> --}}

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->

    <script>
        $('#select-field').select2({
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


@endsection
