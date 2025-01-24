@extends('layouts.dashboard.app')

@section('title')
    Edit User Ciesa | Indorama
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
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit User</h4>
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
                        <h4 class="card-title">Edit User</h4>
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
                        <form class="row g-3 needs-validation" method="POST" action="{{ route('user.update', $user->id) }}"
                            enctype="multipart/form-data" novalidate>
                            @method('PUT')
                            @csrf
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $user->name) }}" autofocus required>

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
                                    id="email" name="email" value="{{ old('email', $user->email) }}" autofocus
                                    required>

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
                                    id="password" name="password" autofocus>

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
                                    id="password_confirmation" autofocus>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Roles</label>
                                <select class="form-select @error('roles') is-invalid @enderror" name="roles[]"
                                    id="default" required>
                                    <option selected disabled> Select Role </option>
                                    @foreach ($roles as $item)
                                        <option value="{{ $item }}"
                                            @if ($user->hasRole($item)) selected @endif>{{ $item }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="no_hp" class="form-label">No Handphone/Telephone</label>
                                <input
                                    type="tel"
                                    class="form-control @error('no_hp') is-invalid @enderror"
                                    id="no_hp"
                                    name="no_hp"
                                    value="{{ old('no_hp', isset($user) ? $user->no_hp : '') }}"
                                    required
                                    placeholder="Masukkan nomor telepon"
                                >

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
                                <select class="form-select @error('jk') is-invalid @enderror" name="jk" id="default"
                                    required>
                                    <option selected disabled> Select Gender </option>
                                    @if ($user->jk == 'Man')
                                        <option value="Man" selected>Man</option>
                                        <option value="Woman">Woman</option>
                                    @else
                                        <option value="Woman" selected>Woman</option>
                                        <option value="Man">Man</option>
                                    @endif
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

                                            @empty($user->photo)
                                                <span class="badge badge-danger"> Tidak ada </span>
                                            @else
                                                <center>
                                                    <img src="{{ url('/' . $user->photo) }}" width="110px" height="140px"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalScrollable{{ $user->id }}">
                                                </center>
                                            @endempty

                                            @if (empty($user->photo))
                                                <!-- Tampilkan pesan jika tidak ada foto yang sudah ada -->
                                            @else
                                                <input type="hidden" name="pathfoto" value="{{ $user->photo }}">
                                            @endif

                                            @error('photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                <br>
                                            @enderror
                                            <br>
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
                                            <br>
                                            <center>
                                                @if ($user->surat_tugas == null)
                                                    <h2>Assignment letter missing </h2>
                                                @else
                                                    <img src="{{ asset('template/img/PDF.png') }}" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter{{ $user->id }}"
                                                        width="150px" height="180px">
                                                @endif

                                            </center>
                                            <br>
                                            <label class="custom-file-upload btn btn-primary">
                                                <input type="file" name="surat_tugas" style="display:none;"
                                                    accept=".pdf">
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

    <div class="modal fade" id="exampleModalCenter{{ $user->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">
                        Letter of assignment</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    <center>
                        @if ($user->surat_tugas == null)
                            <h2>Assignment letter missing </h2>
                        @else
                            <iframe src="{{ url('/' . $user->surat_tugas) }}"
                                style="width: 100%; height: 560px;"></iframe>
                        @endif


                    </center>
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->

    <div class="modal fade" id="exampleModalScrollable{{ $user->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="exampleModalScrollableTitle">
                        Letter of assignment</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    <center>
                        @empty($user->photo)
                            <span class="badge badge-danger"> Tidak ada </span>
                        @else
                            <center>
                                <img src="{{ url('/' . $user->photo) }}" width="400px" height="450px">
                            </center>
                        @endempty
                    </center>
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->

@endsection
