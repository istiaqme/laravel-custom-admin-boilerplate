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
                            <div class="col-auto">
                                <div class="d-flex align-items-center">
                                    <label for="status-select" class="me-2">Status</label>
                                    <select class="form-select" id="status-select">
                                        <option selected="">Choose...</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Awaiting Authorization</option>
                                        <option value="3">Payment failed</option>
                                        <option value="4">Cash On Delivery</option>
                                        <option value="5">Fulfilled</option>
                                        <option value="6">Unfulfilled</option>
                                    </select>
                                </div>
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

                            @foreach ($users as $row)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->kind }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#edit-user-modal{{$row->id}}"> 
                                            <i class="mdi mdi-square-edit-outline"></i>
                                        </a>
                                        {{-- <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#edit-user-modal"> 
                                            <i class="mdi mdi-delete"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                                @include('dashboard/widgets/forms/UpdateUserModal')
                            @endforeach
                                                      
                          
                           
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection