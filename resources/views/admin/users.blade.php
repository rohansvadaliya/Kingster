<?php $page = 'users'; ?>
@extends('layout.mainlayout_admin')

@section('content')

<style>
    .dataTables_info {
        font-size: 14px;
        font-weight: 500 !important;
    }

    .swal2-select {
        border-radius: 10px;
        border: 2px solid #00000075;
    }
</style>

<div class="page-wrapper" style="margin-left: 0px !important;">
    <div class="content">

        <div class="row">
            <h5 class="text-uppercase tab-heading">User Management</h5>
        </div>

        <div class="row mb-3 justify-content-between align-items-center">
            <div class="col-4">
                <label for="user_status_filter" class="form-label">Status Filter</label>
                <select class="form-control" name="user_status_filter" id="user_status_filter">
                    <option value="0">Active Users</option>
                    <option value="1">Deleted Users</option>
                </select>
            </div>
            <button type="button" class="btn btn-lg text-white px-4 py-2 w-auto d-flex align-items-center gap-2"
            style="height: -webkit-fill-available; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 0.6rem; box-shadow: 0 4px 12px rgba(0,0,0,0.2); transition: all 0.3s ease;"
            data-bs-toggle="modal" data-bs-target="#userCreateModal" onclick="onOpenCreateUserModal()">Create New User</button>
        </div>

        <!-- Hidden field for current user ID -->
        <input type="hidden" id="current_user_id" value="{{ Auth::id() }}">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-striped display nowrap w-100" id="datatable_2">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be loaded via AJAX -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- User Creation Modal -->
<div class="modal fade" id="userCreateModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body pt-0">
                <form id="userCreationForm" method="POST" action="#">
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="" autocomplete="off">

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="user_name" class="form-label">Username</label>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter username" autocomplete="off">
                            <div class="invalid-feedback" id="usernameError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="user_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter email" autocomplete="off">
                            <div class="invalid-feedback" id="emailError"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="user_role" class="form-label">Role</label><br>
                            <select class="form-select" id="user_role" name="user_role" required>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Sub Admin">Sub Admin</option>
                            </select>
                            <div class="invalid-feedback" id="roleError"></div>
                        </div>
                        <div class="col-md-6">

                            <div class="d-flex justify-content-between">
                                <label for="user_password" class="form-label">Password</label>
                                <div id="changePasswordWrapper" style="display:none;">
                                    <input type="checkbox" id="change_password_checkbox">
                                    <label for="change_password_checkbox" style="margin-left: 4px;">Change Password</label>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter password" autocomplete="off">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" tabindex="-1">
                                    <i class="fa fa-eye" id="togglePasswordIcon"></i>
                                </button>
                                <div class="invalid-feedback" id="passwordError"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn gradientBTN" form="userCreationForm">Submit</button>
            </div>
        </div>
    </div>
</div>


@endsection
