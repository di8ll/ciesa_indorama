@extends('layouts.dashboard.app')

@section('title')
    Roles | PLN ICON Plus
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
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Roles</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @can('Create Role')
                        <a href="{{ route('role.create') }}" class="btn btn-primary mb-3">
                            <span data-feather="plus"></span>
                            Add New Role
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
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Role</th>
                                        @can('Edit Role')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @elsecan('Delete Role')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @elsecan('Show Role')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @else
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($roles->count())
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                @if ($role->name == 'Super Admin')
                                                    <td>
                                                        <p class="badge bg-primary">{{ $role->name }}</p>
                                                    </td>
                                                @elseif ($role->name == 'Admin')
                                                    <td>
                                                        <p class="badge bg-success">{{ $role->name }}</p>
                                                    </td>
                                                @elseif ($role->name == 'Manager')
                                                    <td>
                                                        <p class="badge bg-warning">{{ $role->name }}</p>
                                                    </td>
                                                @elseif ($role->name == 'Vendor')
                                                    <td>
                                                        <p class="badge bg-danger">{{ $role->name }}</p>
                                                    </td>
                                                @elseif ($role->name == 'Project Manager')
                                                    <td>
                                                        <p class="badge bg-info">{{ $role->name }}</p>
                                                    </td>
                                                @elseif ($role->name == 'Direksi')
                                                    <td>
                                                        <p class="badge bg-secondary">{{ $role->name }}</p>
                                                    </td>
                                                @elseif ($role->name == 'Vice President')
                                                    <td>
                                                        <p class="badge bg-black">{{ $role->name }}</p>
                                                    </td>
                                                @else
                                                    <td>
                                                        <p class="badge bg-danger">{{ $role->name }}</p>
                                                    </td>
                                                @endif
                                                <td>
                                                    @can('Edit Role')
                                                    <a href="{{ route('role.edit', $role->id) }}"
                                                        class="text-decoration-none text-success">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    @endcan
                                                    @can('Delete Role')
                                                    <span role="button" class="text-decoration-none text-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalDanger{{ $role->id }}">
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
    @foreach ($roles as $role)
    <div class="modal fade" id="exampleModalDanger{{ $role->id }}"
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
                            <h5>You sure want delete this role?</h5>
                            <span class="badge bg-soft-secondary">
                                Disable Services
                            </span>
                            <small
                                class="text-muted ml-2">{{ date('d F Y', strtotime(Carbon\Carbon::now())) }}</small>
                            <ul class="mt-3 mb-0">

                                <li>{{ $role->name }}</li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <form action="{{ route('role.destroy', $role->id) }}"
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
