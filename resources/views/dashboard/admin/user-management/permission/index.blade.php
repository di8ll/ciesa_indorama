@extends('layouts.dashboard.app')

@section('title')
    Permissions | PLN ICON Plus
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li> --}}
                            <li class="breadcrumb-item active">Permission</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Permission</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @can('Create Permission')
                        <a href="{{ route('permission.create') }}" class="btn btn-primary mb-3">
                            <span data-feather="plus"></span>
                            Add New Permission
                        </a>
                        @endcan
                    </div>
                    <!--end card-header-->

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">#</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Permission</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Role</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Created at</th>
                                        @can('Edit Permission')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @elsecan('Delete Permission')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @elsecan('Show Permission')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @else
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($permissions->count())
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>
                                                    @foreach ($permission->getRoleNames() as $roles)
                                                        @if ($roles == 'Super Admin')
                                                            <a href="role" class="badge bg-primary">
                                                                {{ $roles }}
                                                            </a>
                                                        @elseif ($roles == 'Admin')
                                                            <a href="role" class="badge bg-success">
                                                                {{ $roles }}
                                                            </a>
                                                        @elseif ($roles == 'Manager')
                                                            <a href="role" class="badge bg-warning">
                                                                {{ $roles }}
                                                            </a>
                                                        @elseif ($roles == 'Vendor')
                                                            <a href="role" class="badge bg-info">
                                                                {{ $roles }}
                                                            </a>
                                                        @else
                                                            <a href="role" class="badge bg-danger">
                                                                {{ $roles }}
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{ date('d F Y', strtotime($permission->created_at)) }}</td>
                                                <td>
                                                    @can('Edit Permission')
                                                    <a href="{{ route('permission.edit', $permission->id) }}"
                                                        class="text-decoration-none text-success">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    @endcan
                                                    @can('Delete Permission')
                                                    <span role="button" class="text-decoration-none text-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalDanger{{ $permission->id }}">
                                                        <span data-feather="x-circle"></span>
                                                    </span>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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

    @foreach ($permissions as $permission)
    <div class="modal fade" id="exampleModalDanger{{ $permission->id }}"
        tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">
                        Delete Modal
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 text-center align-self-center">
                            {{-- <img src="{{ asset($user->photo ? $user->photo : 'template/assets/images/users/user-1.png') }}"
                                alt="" class="img-fluid"> --}}
                        </div><!--end col-->
                        <div class="col-lg-9">
                            <h5>You sure want delete this permission?</h5>
                            <span class="badge bg-soft-secondary">
                                Disable Services
                            </span>
                            <small
                                class="text-muted ml-2">{{ date('d F Y', strtotime(Carbon\Carbon::now())) }}</small>
                            <ul class="mt-3 mb-0">

                                <li>{{ $permission->name }}</li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <form
                        action="{{ route('permission.destroy', $permission->id) }}"
                        method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-de-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
    @endforeach
@endsection
