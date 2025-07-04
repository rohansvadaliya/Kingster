<?php $page = 'warranty-application-form'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Warranty Application Form
        @endslot
        @slot('li_1')
            /
        @endslot
        @slot('li_2')
            Warranty Application Form
        @endslot
    @endcomponent
<style>
    hr{
        border-color: #203066 !important;
    }

    @media (max-width: 768px) {
        .form-section.shadow.p-4 {
            width: 100% !important;
        }
    }

    #warrantyFormSubmit{
        width: -webkit-fill-available;
    }
</style>

<div class="page-wrapper">
    <div class="container my-5">
        <div class="form-section shadow p-4" style="border-radius: .8rem; width: 70%; margin: 0 auto;">
            <h4 class="mb-3 text-center">Warranty Application Form</h4>
            <form>
                @csrf
                <div class="mb-3">
                    <label for="buyerName" class="form-label">Enter Buyer Name <label class="text-danger">*</label></label>
                    <input type="text" class="form-control" id="buyerName" placeholder="Enter buyer name">
                    <div class="text-danger error-message" id="error-buyerName"></div>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number <label class="text-danger">*</label></label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number"
                        pattern="[0-9]{10}" maxlength="10" minlength="10" required
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    />
                    <div class="text-danger error-message" id="error-mobile"></div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="purchaseSource" class="form-label">Purchase Source <label class="text-danger">*</label></label>
                    <select class="form-select" id="purchaseSource">
                        <option selected disabled value="">Select source</option>
                        <option>Online</option>
                        <option>Retail Store</option>
                        <option>Other</option>
                    </select>
                    <div class="text-danger error-message" id="error-purchaseSource"></div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Purchase Place / Store Name</label>
                    <textarea class="form-control" id="address" rows="2" placeholder="Enter purchase place / store name"></textarea>
                    <select class="form-control d-none" id="addressSelect" name="address">
                        <option value="">Select platform</option>
                        <option value="Amazon">Amazon</option>
                        <option value="Flipkart">Flipkart</option>
                        <option value="Other Platform">Other Platform</option>
                    </select>
                    <div class="text-danger error-message" id="error-address"></div>
                </div>

                @php
                    use App\Models\ProductName;
                    $products = ProductName::where('is_deleted', 0)->get();
                @endphp

                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name <label class="text-danger">*</label></label><br />
                    <select class="form-control" id="productName" name="productName">
                        <option value="">Select product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->name }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger error-message" id="error-productName"></div>
                </div>
                <div class="mb-3">
                    <label for="serialNumber" class="form-label">Product Serial Number <label class="text-danger">*</label></label>
                    <input type="text" class="form-control" id="serialNumber" placeholder="Enter product serial number" oninput="this.value = this.value.toUpperCase()">
                    <div class="text-danger error-message" id="error-serialNumber"></div>
                </div>
                <div class="mb-3">
                    <label for="purchaseDate" class="form-label">Purchase Date <label class="text-danger">*</label></label>
                    <input type="date" class="form-control" id="purchaseDate">
                    <div class="text-danger error-message" id="error-purchaseDate"></div>
                </div>

                <button type="button" id="warrantyFormSubmit" class="btn btn-primary" data-url="{{ route('store.warranty.details', ['type' => 'application']) }}">Submit</button>

            </form>
         </div>
    </div>
</div>


<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title w-100" id="successModalLabel">Warranty Submitted</h5>
            </div>
            <div class="modal-body p-0">
                <p class="mb-2 text-success fw-bold">Your warranty application has been submitted successfully!</p>
                <p>Enjoy our 24×7 customer service and peace of mind with your purchase.</p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Already Modal -->
<div class="modal fade" id="serialModal" tabindex="-1" aria-labelledby="serialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title w-100" id="serialModalLabel">Duplicate Serial Number</h5>
            </div>
            <div class="modal-body p-0">
                <p class="mb-2 text-danger fw-bold" id="duplicate_msg"></p>
                <p>Please check the number and try again with a different serial.</p>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
