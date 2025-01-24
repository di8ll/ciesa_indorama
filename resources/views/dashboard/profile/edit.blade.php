@extends('layouts.dashboard.app')

@section('title')
    Profile Account | PLN ICON Plus
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
                            <li class="breadcrumb-item active">Profile Account</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile Account</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="col">
            <div class="col-12">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane p-3 active" id="Settings" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="row">
                                                    <h4 class="card-title">Personal Information</h4>
                                                </div><!--end col-->
                                            </div> <!--end row-->
                                        </div><!--end card-header-->
                                        <form class="row g-3 needs-validation" method="POST"
                                            action="{{ route('user-profile-information.update', Auth::user()->id) }}"
                                            enctype="multipart/form-data" novalidate>
                                            @method('PUT')
                                            @csrf

                                            <div class="card-body">
                                                @if ($errors->updateProfileInformation->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->updateProfileInformation->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                @empty($user->photo)
                                                    <center>
                                                        <!-- Existing user photo -->
                                                        <img id="preview-image" class="btn-upload btn"
                                                            src="{{ asset('template/assets/images/users/user-1.png') }}"
                                                            width="170px" height="170px" style="border-radius: 20%"
                                                            onclick="triggerFileInput()" />

                                                        <input type="file" id="input-file" name="photo" accept="image/*"
                                                            style="display: none" onchange="previewImage(this)" />
                                                    </center>
                                                @else
                                                    <center>
                                                        <!-- Existing user photo -->
                                                        <img id="preview-image" class="btn-upload btn"
                                                            src="{{ url($user->photo) }}" width="170px" height="170px"
                                                            style="border-radius: 20%" onclick="triggerFileInput()" />

                                                        <!-- Input file for photo upload -->
                                                        <input type="file" id="input-file" name="photo" accept="image/*"
                                                            style="display: none" onchange="previewImage(this)" />
                                                    </center>
                                                @endempty

                                                <br>

                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        Name
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input class="form-control" type="text" name="name"
                                                            @error('name', 'updateProfileInformation') is-invalid @enderror
                                                            value="{{ old('name', Auth::user()->name) }}">
                                                    </div>

                                                    @error('name', 'updateProfileInformation')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        Contact Phone
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                                <i class="las la-phone"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control @error('no_hp', 'updateProfileInformation') is-invalid @enderror"
                                                                value="{{ old('no_hp', Auth::user()->no_hp) }}"
                                                                placeholder="Phone" aria-describedby="basic-addon1"
                                                                name="no_hp">
                                                        </div>
                                                    </div>
                                                    @error('no_hp', 'updateProfileInformation')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        Email Address
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                                <i class="las la-at"></i>
                                                            </span>
                                                            <input type="text"
                                                                class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror"
                                                                value="{{ old('email', Auth::user()->email) }}"
                                                                placeholder="Email" aria-describedby="basic-addon1"
                                                                name="email">
                                                        </div>
                                                    </div>
                                                    @error('email', 'updateProfileInformation')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        Gender
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <select
                                                            class="form-select @error('jk', 'updateProfileInformation') is-invalid @enderror"
                                                            name="jk" id="default" required>
                                                            <option selected disabled> Select Gender </option>
                                                            @if ($user->jk == 'Man')
                                                                <option value="Man" selected>Man</option>
                                                                <option value="Woman">Woman</option>
                                                            @else
                                                                <option value="Woman" selected>Woman</option>
                                                                <option value="Man">Man</option>
                                                            @endif
                                                        </select>
                                                        @error('jk', 'updateProfileInformation')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <script>
                                                function triggerFileInput() {
                                                    document.getElementById('input-file').click();
                                                }

                                                function previewImage(input) {
                                                    var preview = document.getElementById('preview-image');
                                                    var file = input.files[0];
                                                    var reader = new FileReader();

                                                    reader.onloadend = function() {
                                                        preview.src = reader.result;
                                                    }

                                                    if (file) {
                                                        reader.readAsDataURL(file);
                                                    } else {
                                                        preview.src = "{{ asset('template/assets/images/users/user-1.png') }}";
                                                    }
                                                }
                                            </script>

                                        </form>
                                    </div>
                                </div> <!--end col-->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Change Password</h4>
                                        </div><!--end card-header-->
                                        <form class="row g-3 needs-validation" method="POST"
                                            action="{{ route('user-password.update', Auth::user()->id) }}"
                                            enctype="multipart/form-data" novalidate>
                                            @method('PUT')
                                            @csrf
                                            <div class="card-body">

                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        Current Password
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input
                                                            class="form-control @error('current_password', 'update_password') is-invalid @enderror"
                                                            type="password" placeholder="Password"
                                                            name="current_password">
                                                    </div>


                                                </div>
                                                @error('current_password', 'updatePassword')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        New Password
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input
                                                            class="form-control @error('password', 'update_password') is-invalid @enderror"
                                                            type="password" placeholder="New Password" name="password">
                                                    </div>
                                                </div>
                                                @error('password', 'updatePassword')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="form-group mb-3 row">
                                                    <label
                                                        class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">
                                                        Confirm Password
                                                    </label>
                                                    <div class="col-lg-9 col-xl-8">
                                                        <input class="form-control" type="password"
                                                            placeholder="Re-Password" name="password_confirmation">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Password</button>

                                                    </div>
                                                </div>

                                            </div><!--end card-body-->
                                        </form>
                                    </div><!--end card-->

                                </div> <!-- end col -->
                            </div><!--end row-->
                        </div>

                        <script>
                            function triggerFileInput() {
                                document.getElementById('input-file').click();
                            }

                            function previewImage(input) {
                                const preview = document.getElementById('preview-image');
                                const file = input.files[0];
                                const reader = new FileReader();

                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                };

                                if (file) {
                                    reader.readAsDataURL(file);
                                }
                            }
                        </script>

                    </div>
                </div> <!--end card-body-->

            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->
@endsection
