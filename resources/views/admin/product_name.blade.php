<?php $page = 'product_name'; ?>
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
                <h5 class="text-uppercase tab-heading" id="addNewProductLabel">Product Name Management</h5>
            </div>


            <div class="row mb-3 align-items-center">
                <div class="col-md-6">
                    <label for="products_name_status_filter" class="form-label">Status Filter</label>
                    <select class="form-control" name="products_name_status_filter" id="products_name_status_filter">
                        <option value="0">Active</option>
                        <option value="1">Deleted</option>
                    </select>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{ route('product.index') }}" class="btn gradientBTN">Products Management</a>
                </div>
            </div>

            <div class="row">
                <form action="{{ route('product.name.store') }}" method="POST" id="productNameForm" class="needs-validation" novalidate>
                    @csrf
                    <input type="hidden" class="form-control" id="product_name_id" name="product_name_id" value="">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter your product name" value="" required autocomplete="off">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label  class="form-label extra_space">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <button type="submit" class="btn w-100 d-inline form-control gradientBTN" id="productNameSaveBtn">Insert</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="row">
                <div class="card p-0">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table id="datatable_3" class="table align-middle table-nowrap table-striped display nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Product Name</th>
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
