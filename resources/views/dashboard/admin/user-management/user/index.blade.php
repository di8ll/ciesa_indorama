@extends('layouts.dashboard.app')

@section('title')
    Data User Ciesa | PLN ICON Plus
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
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Users</h4>
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
                        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">
                            <span data-feather="plus"></span>
                            Add new user
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
                                        <th style="width: 300px;margin-top: 19px;color:black;font-weight: bold;">User</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Email</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Gender</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Role</th>
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Email Terverifikasi</th>
                                        @can('Edit User')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @elsecan('Delete User')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @elsecan('Show User')
                                        <th style="margin-top: 19px;color:black;font-weight: bold;">Action</th>
                                        @else
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->count())
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($user->jk == 'Man')
                                                        <img src="{{ asset($user->photo ? $user->photo : 'template/assets/images/users/user-1.png') }}"
                                                            class="rounded-circle thumb-xs me-1" alt="">
                                                        {{ $user->name }}
                                                    @else
                                                        <img src="{{ asset($user->photo ? $user->photo : 'template/assets/images/users/user-12.jpg') }}"
                                                            class="rounded-circle thumb-xs me-1" alt="">
                                                        {{ $user->name }}
                                                    @endif
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->jk }}</td>
                                                <td>
                                                    @foreach ($user->getRoleNames() as $roles)
                                                        @if ($roles == 'Super Admin')
                                                            <a href="role" class="badge bg-primary">
                                                                {{ $roles }}
                                                            </a>
                                                        @elseif ($roles == 'Admin')
                                                            <a href="role" class="badge bg-success">
                                                                {{ $roles }}
                                                            </a>
                                                        @elseif ($roles == 'User')
                                                            <a href="role" class="badge bg-warning">
                                                                {{ $roles }}
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                @if ($user->email_verified_at)
                                                    <td>
                                                        <p style="color: green">
                                                            {{ date('d F Y', strtotime($user->email_verified_at)) }}</p>
                                                    </td>
                                                @else
                                                    <td>
                                                        <p style="color: red">Unverified email</p>
                                                    </td>
                                                @endif
                                                <td>
                                                    @can('Edit User')
                                                    <a href="{{ route('user.edit', $user->id) }}"
                                                        class="text-decoration-none text-success">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    @endcan
                                                    @can('Delete User')
                                                    <span role="button" class="text-decoration-none text-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalDanger{{ $user->id }}">
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

    @foreach ($users as $user)
    <div class="modal fade" id="exampleModalDanger{{ $user->id }}"
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
                            <img src="{{ asset($user->photo ? $user->photo : 'template/assets/images/users/user-1.png') }}"
                                alt="" class="img-fluid">
                        </div><!--end col-->
                        <div class="col-lg-9">
                            <h5>You sure want delete this user?</h5>
                            <span class="badge bg-soft-secondary">
                                Disable Services
                            </span>
                            <small
                                class="text-muted ml-2">{{ date('d F Y', strtotime(Carbon\Carbon::now())) }}</small>
                            <ul class="mt-3 mb-0">
                                <li>{{ $user->name }}</li>
                                <li>{{ $user->email }}</li>
                                <li>
                                    {{ $user->email_verified_at ? 'Email user is verified' : 'Email user unverified' }}
                                </li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <form action="{{ route('user.destroy', $user->id) }}"
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


    <div class="modal fade" id="exampleModalCenter{{ $user->id }}"
        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">
                        Letter of assignment</h6>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    <center>
                        @if ($user->surat_tugas == null)
                            <h2>Assignment letter missing </h2>
                        @else
                            <iframe src="{{ $user->surat_tugas }}"
                                style="width: 100%; height: 560px;"></iframe>
                        @endif


                    </center>
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
    @endforeach

    <script>
        $('#select-field1').select2({
            theme: 'bootstrap-5'
        });
    </script>

@endsection
