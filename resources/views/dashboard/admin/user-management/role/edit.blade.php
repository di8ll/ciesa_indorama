@extends('layouts.dashboard.app')

@section('title')
    Edit Role | PLN ICON Plus
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Roles</a></li>
                            <li class="breadcrumb-item active">Edit Role</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Role</h4>
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
                        <form class="row g-3 needs-validation" method="POST" action="{{ route('role.update', $role->id) }}"
                            enctype="multipart/form-data" novalidate>
                            @method('PUT')
                            @csrf

                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Role</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $role->name) }}" autofocus required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!--begin::Input group Permission-->
                            <div class="col-md-9">
                                <div class="role-permissions">
                                    <div class="row">
                                        @if (count($permission))
                                        @foreach ($permission as $item)
                                            <!-- Assuming you want 3 permissions per row -->
                                            <div class="col-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="permission[]"
                                                    id="inlineCheckbox{{ $item->id }}" value="{{ $item->id }}"
                                                    {{ in_array($item->id, $rolePermissions) ? 'checked="checked"' : '' }}>
                                                <label class="form-check-label"
                                                    for="inlineCheckbox{{ $item->id }}">{{ $item->name }}</label>
                                            </div>
                                            </div>
                                            @if ($loop->index % 3 == 2)
                                    </div>
                                    <div class="row">
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Permission-->

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('role.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->

@endsection
