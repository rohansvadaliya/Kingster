<?php $page = 'warranty'; ?>
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
                <h5 class="text-uppercase tab-heading">Warranty Management</h5>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="warranty_status" class="form-label">Select Warranty Status</label>
                        <select class="form-control" name="warranty_status" id="warranty_status">
                            <option value="All">All</option>
                            <option value="Pending">Pending</option>
                            <option value="Active">Active</option>
                            <option value="Expired">Expired</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="status_filter" class="form-label">Status Filter</label>
                        <select class="form-control" name="status_filter" id="status_filter">
                            <option value="0">Active</option>
                            <option value="1">Deleted</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card p-0">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table id="datatable" class="table align-middle table-nowrap table-striped display nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Warranty Status</th>
                                        <th>Buyer Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Source</th>
                                        <th>Product Name</th>
                                        <th>Serial Number</th>
                                        <th>Purchase Date</th>
                                        <th>Expiry Date</th>
                                        <th>Purchase Place / Store Name</th>
                                        <th>Created By</th>
                                        <th>Modified By</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            @csrf
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
