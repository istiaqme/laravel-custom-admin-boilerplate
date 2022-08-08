@extends('dashboard/layouts/CommonLayout')
@section('title', 'title')
 
@section('pageTitle', 'User List')

@section('MAIN_PAGE_CONTENT')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-xl-8">
                        <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Search</label>
                                <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                            </div>
                        </form>                            
                    </div>
                    <div class="col-xl-4">
                        <div class="text-xl-end mt-xl-0 mt-2">
                            <button type="button" class="btn btn-danger mb-2 me-2" data-bs-toggle="modal" data-bs-target="#create-user-modal">
                                <i class="mdi mdi-basket me-1"></i> Create New User
                            </button>
                           
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                        @include('dashboard/widgets/forms/CreateUserModal')
                    </div><!-- end col-->
                </div>
                @include('dashboard/widgets/alerts/AppMessageAlert')
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Kind</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $key => $row)
                                <tr>
                                    <td>{{ count($users) - $key }}</td>
                                    <td>
                                        <b>{{ $row->name }}</b>
                                    </td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->kind }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#edit-user-modal{{$row->id}}"> 
                                            <i class="mdi mdi-square-edit-outline"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#edit-user-password-modal{{$row->id}}"> 
                                            <i class="mdi mdi-lock-remove-outline"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#showcase-user-details-modal{{$row->id}}"> 
                                            <i class="mdi mdi-application-settings-outline"></i>
                                        </a>
                                        
                                    </td>
                                </tr>
                                @include('dashboard/widgets/forms/UpdateUserModal')
                                @include('dashboard/widgets/forms/UpdateUserPasswordModal')
                                @include('dashboard/widgets/showcase/UserDetailsModal')
                            @endforeach
                                                      
                          
                           
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection