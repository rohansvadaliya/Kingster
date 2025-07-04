<?php $page = 'warranty-status-lookup'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Warranty Status Lookup
        @endslot
        @slot('li_1')
            /
        @endslot
        @slot('li_2')
            Warranty Status Lookup
        @endslot
    @endcomponent

<style>
    hr{
        border-color: #203066 !important;
    }

    @media (max-width: 1200px) {
        #warrantyResultContainer{
            width: 70% !important;
        }
    }
    @media (max-width: 768px) {
        #warrantyResultContainer{
            width: 100% !important;
        }
        .form-section.shadow.p-4 {
            width: 100% !important;
        }
    }

    .card-body{
        padding: 15px 20px !important;
    }
    .card-body p{
        color: #000;
        margin-bottom: 5px;
    }
    .card-body strong{
        font-weight: 600;
        color: black;
    }

    .warranty-active{
        background: #00a94a54;
        border: 3px solid #0cbe58;
    }

    .warranty-rejected {
        background: #ffccd1;
        border: 3px solid #e74c3c;
    }

    .warranty-expired {
        background: #fff3cd;
        border: 3px solid #ffc107;
    }

    .warranty-not-found {
        background: #e2e3e5;
        border: 3px solid #bcbec0;
        color: #6c757d;
    }

    .warranty-pending {
        background: #cce5ff;
        border: 3px solid #339af0;
        color: #004085;
    }
</style>

<div class="page-wrapper">
    <div class="container my-5">
        <div class="form-section shadow p-4" style="border-radius: .8rem; width: 70%; margin: 0 auto;">
            <h5 class="mb-3 text-center">Check Warranty Status</h5>
            <form>
                @csrf
                <div class="mb-3">
                    <label for="checkSerialNumber" class="form-label">Serial Number</label>
                    <input type="text" class="form-control" id="checkSerialNumber" placeholder="Enter serial number">
                    <div class="text-danger error-message" id="error-checkSerialNumber"></div>
                </div>
                <div class="mb-3">
                    <label for="checkMobileNumber" class="form-label">Mobile Number</label>
                    <input type="tel" class="form-control" id="checkMobileNumber" placeholder="Enter mobile number"
                        pattern="[0-9]{10}" maxlength="10" minlength="10" required
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    />
                    <div class="text-danger error-message" id="error-checkMobileNumber"></div>
                </div>
                <div class="text-center">
                    <button type="button" id="checkStatusFormSubmit" class="btn btn-primary" data-url="{{ route('store.warranty.details', ['type' => 'status']) }}" >Check Status</button>
                </div>
            </form>
        </div>

        <div id="warrantyResultContainer" class="mt-5" style="width: 55%; margin: 0 auto;"></div>

        <div class="card front-face mt-3 d-none warranty-tile-template" style="border-radius: 30px;">
            <div class="card-body">
                <h5 class="text-uppercase text-center text-dark mt-2 receiptHeading">Warranty Status</h5>
                <hr>
                <div class="receiptDesc">
                    <p><strong>Buyer Name:</strong> <span class="buyerName"></span></p>
                    <p><strong>Mobile Number:</strong> <span class="mobileNumber"></span></p>
                    <p><strong>Email:</strong> <span class="Email"></span></p>
                    <p><strong>Purchase Source:</strong> <span class="purchaseSource"></span></p>
                    <p><strong>Product Name:</strong> <span class="productName"></span></p>
                    <p><strong>Serial Number:</strong> <span class="productSerialNo"></span></p>
                    <p><strong>Purchase Date:</strong> <span class="purchaseDate"></span></p>
                    <p><strong>Expiry Date:</strong> <span class="expiryDate"></span></p>
                </div>
                <p class="not-found-msg m-0 text-center"></p>
            </div>
        </div>


    </div>
</div>



@endsection

