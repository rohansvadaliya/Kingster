<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head_admin')
</head>
<style>
    .scrollable-menu {
        height: auto;
        max-height: 500px;
        overflow-x: hidden;
    }
    ::-webkit-scrollbar {
        width: 20px;
    }
    ::-webkit-scrollbar-track {
        background-color: transparent;
    }
    ::-webkit-scrollbar-thumb {
        background-color: #C7C7C7;
        border-radius: 20px;
        border: 4px solid transparent;
        background-clip: content-box;
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: #a8bbbf;
    }
    .pos-middle {
        vertical-align: middle;
    }
    div#datatable_1_wrapper .row:first-child,
    div#datatable_2_wrapper .row:first-child,
    div#datatable_3_wrapper .row:first-child,
    div#datatable_4_wrapper .row:first-child,
    div#datatable_5_wrapper .row:first-child,
    div#datatable_6_wrapper .row:first-child,
    div#datatable_7_wrapper .row:first-child,
    div#datatable_wrapper .row:first-child{
        margin-bottom: 7px;
    }
    div#datatable_1_wrapper .row:first-child .col-sm-12,
    div#datatable_2_wrapper .row:first-child .col-sm-12,
    div#datatable_3_wrapper .row:first-child .col-sm-12,
    div#datatable_4_wrapper .row:first-child .col-sm-12,
    div#datatable_5_wrapper .row:first-child .col-sm-12,
    div#datatable_6_wrapper .row:first-child .col-sm-12,
    div#datatable_7_wrapper .row:first-child .col-sm-12,
    div#datatable_wrapper .row:first-child .col-sm-12 {
        width: 50%;
    }
    .dataTables_length{
        margin-top: 0 !important;
    }
    .form-select {
        --bs-form-select-bg-img: unset !important;
    }
    .page-item .page-link{
        width: unset !important;
        height: unset !important;
    }
    div.dataTables_wrapper div.dataTables_paginate ul.pagination{
        margin-top: 15px !important;
        justify-content: center !important;
    }
</style>

<body>
    <div class="main-wrapper">
        @include('layout.partials.header_admin')
        @yield('content')
    </div>

    @if (Route::is(['index_admin']))
        <div id="overlayer">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
    @endif

    <script>

        // datatable ajax url
        var ajaxURL = "{{ route('warranty.ajax') }}";
        var changeUserStatusURL = "{{ route('warranty.change.status') }}";
        var deleteUser = "{{ route('delete.warranty') }}";
        var restoreUser = "{{ route('restore.warranty') }}";

        // datatable_1 PRODUCTS
        var productIndexUrl = "{{ route('product.index') }}";
        var createProductView = "{{ route('create.product.view') }}";
        var productStore = "{{ route('product.store') }}";
        var productAjax = "{{ route('product.ajax') }}";
        var productDeleteURL = "{{ route('product.delete') }}";
        var productRestoreURL = "{{ route('product.restore') }}";

        // datatable_2 USER RELATED URLS
        var userAjaxURL = "{{ route('user.ajax') }}";
        var userSaveURL = "{{ route('user.save') }}";
        var getUserDetails = "{{ route('get.user.details') }}";

        // datatable_3 PRODUCT NAMES
        var productNameAjaxURL = "{{ route('product.name.ajax') }}";
        var productNameSaveURL = "{{ route('product.name.store') }}";
        var getProductNameDetailURL = "{{ route('product.name.details') }}";
        var deleteProductNameURL = "{{ route('delete.product.name') }}";
        var restoreProductNameURL = "{{ route('restore.product.name') }}";
        
        
        var generalSettingSave = "{{ route('general.setting.save') }}";
        var deleteProductImageURL = "{{ route('delete.product.image') }}";

    </script>

    @include('layout.partials.footer_admin-script')

    @yield('prouctpage-js')
</body>

</html>
