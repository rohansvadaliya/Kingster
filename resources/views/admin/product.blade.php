<?php $page = 'product'; ?>
@extends('layout.mainlayout_admin')
@section('content')

@php
    $isEdit = isset($product) && $product;
@endphp

<style>
    .dataTables_info {
        font-size: 14px;
        font-weight: 500 !important;
    }

    .swal2-select {
        border-radius: 10px;
        border: 2px solid #00000075;
    }
    .select2-container {
        width: 100% !important;
    }
    .select2-selection {
        min-height: 38px;
    }
    #sortable-products { min-height: 50px; }
    #sortable-products .list-group-item { cursor: move; }
    .ui-state-highlight { height: 2.5em; background: #f0f0f0; border: 1px dashed #aaa; }
</style>
    <div class="page-wrapper" style="margin-left: 0px !important;">
        <div class="content">

            <div class="row">
                <h5 class="text-uppercase tab-heading">Product Management</h5>
            </div>

            <div class="row mb-3 align-items-center">
                <div class="col-md-6">
                    <label for="products_management_status_filter" class="form-label">Status Filter</label>
                    <select class="form-control" name="products_management_status_filter" id="products_management_status_filter">
                        <option value="0">Active</option>
                        <option value="1">Deleted</option>
                    </select>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="javascript:void(0)" class="btn gradientBTN me-3" id="product_indexing">Indexing</a>
                    <a href="{{ route('create.product.view') }}" class="btn gradientBTN me-3">Add New Product</a>
                    <a href="{{ route('create.product.name.view') }}" class="btn gradientBTN">Product Name Management</a>
                </div>
            </div>

            <div class="row">
                <div class="card p-0">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table id="datatable_1" class="table align-middle table-nowrap table-striped display nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Product Name</th>
                                        <th>Offer Price</th>
                                        <th>Original Price</th>
                                        <th>Rating</th>
                                        <th>Review Count</th>
                                        <th>Sold Count</th>
                                        <th>Created By</th>
                                        <th>Modified By</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
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

<div class="modal fade" id="indexingModal" tabindex="-1" aria-labelledby="indexingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="indexingForm" method="POST" action="{{ route('admin.product.updateIndexing') }}">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="indexingModalLabel">Product Indexing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <ul id="sortable-products" class="list-group mb-3">
                        @foreach($products as $product)
                            <li class="list-group-item d-flex align-items-center" data-id="{{ $product->id }}">
                                <span class="me-2">&#9776;</span>
                                <input type="checkbox" checked class="d-none form-check-input me-2" name="product_indexes[]" value="{{ $product->id }}" id="product_{{ $product->id }}">
                                <label for="product_{{ $product->id }}" class="mb-0">{{ $product->product_name }}</label>
                            </li>
                        @endforeach
                    </ul>
                    <div id="indexing-message" class="mt-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closeIndexingModalBtn">Close</button>
                    <button type="submit" class="btn gradientBTN" id="saveIndexingBtn">Save Indexing</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('prouctpage-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<script>
    $(function() {
        $('#product_indexes').select2({
            width: '100%',
            placeholder: "Select products"
        });

        // Only initialize once
        let sortableInitialized = false;

        $('#indexingModal').on('shown.bs.modal', function () {
            if (!sortableInitialized) {
                $("#sortable-products").sortable({
                    placeholder: "ui-state-highlight"
                });
                sortableInitialized = true;
            }
        });

        // AJAX form submit for indexing
        $('#indexingForm').on('submit', function(e) {
            e.preventDefault();
            var $form = $(this);
            var url = $form.attr('action');
            var formData = $form.serialize();
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Indexing saved successfully!');
                    var modalEl = document.getElementById('indexingModal');
                    var modal = bootstrap.Modal.getInstance(modalEl);
                    if (modal) modal.hide();
                },
                error: function(xhr) {
                    let msg = 'An error occurred. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        msg = xhr.responseJSON.message;
                    }
                    toastr.error(msg);
                }
            });
        });
    });

    document.getElementById('product_indexing').addEventListener('click', function() {
        var modal = new bootstrap.Modal(document.getElementById('indexingModal'));
        modal.show();
    });
</script>
@endsection