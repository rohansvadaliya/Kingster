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

    .nav-link.active{
        height: -webkit-fill-available;
        display: flex;
        align-items: center;
        width: auto;
        font-size: 13.5px;
        color: rgb(255, 255, 255);
        cursor: pointer;
        line-height: 22px;
        background: linear-gradient(135deg, rgb(102, 126, 234) 0%, rgb(118, 75, 162) 100%) rgb(13, 110, 253);
        border-width: initial;
        border-style: none;
        border-color: initial;
        border-image: initial;
        border-radius: 0.6rem;
        gap: 0.5rem;
        padding: 0.375rem 1rem;
        transition: background-color 0.2s;
    }

    .nav-link.active {
        color: #fff !important;
    }
    .nav-link {
        padding: 0.38rem 1rem !important;
        color: #000 !important;
    }

    .nav-item .nav-link span {
        text-wrap: nowrap;
    }
</style>
    <div class="page-wrapper" style="margin-left: 0px !important;">
        <div class="content">

            <div class="row">
                <h5 class="text-uppercase tab-heading" id="addNewProductLabel">General Settings</h5>
            </div>


            <div class="card p-2">
                <div class="card-body">
                    <form id="formGeneralSetting" class="needs-validation" novalidate enctype="multipart/form-data" method="POST" action="{{ route('general.setting.save') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="brand_logo" class="form-label mt-3">Logo</label><br>
                                    @if(isset($generalSettings) && $generalSettings->brand_logo)
                                        <img src="@prodImage($generalSettings->brand_logo)" alt="Brand Logo" width="100"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="brand_logo" name="brand_logo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="brand_white_logo" class="form-label mt-3">White Logo</label><br>
                                    @if(isset($generalSettings) && $generalSettings->brand_white_logo)
                                        <img src="@prodImage($generalSettings->brand_white_logo)" alt="Brand White Logo" width="100" style="background-color: darkgray;"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="brand_white_logo" name="brand_white_logo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="brand_fevicon" class="form-label mt-3">Favicon</label><br>
                                    @if(isset($generalSettings) && $generalSettings->brand_fevicon)
                                        <img src="@prodImage($generalSettings->brand_fevicon)" alt="Brand Favicon" width="32"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="brand_fevicon" name="brand_fevicon">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="header_banner_1" class="form-label mt-3">Header Banner 1</label><br>
                                    @if(isset($generalSettings) && $generalSettings->header_banner_1)
                                        <img src="@prodImage($generalSettings->header_banner_1)" alt="Header Banner 1" width="100"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="header_banner_1" name="header_banner_1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="header_banner_2" class="form-label mt-3">Header Banner 2</label><br>
                                    @if(isset($generalSettings) && $generalSettings->header_banner_2)
                                        <img src="@prodImage($generalSettings->header_banner_2)" alt="Header Banner 2" width="100"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="header_banner_2" name="header_banner_2">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="header_banner_3" class="form-label mt-3">Header Banner 3</label><br>
                                    @if(isset($generalSettings) && $generalSettings->header_banner_3)
                                        <img src="@prodImage($generalSettings->header_banner_3)" alt="Header Banner 3" width="100"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="header_banner_3" name="header_banner_3">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="header_banner_4" class="form-label mt-3">Header Banner 4</label><br>
                                    @if(isset($generalSettings) && $generalSettings->header_banner_4)
                                        <img src="@prodImage($generalSettings->header_banner_4)" alt="Header Banner 4" width="100"><br>
                                    @endif
                                    <input type="file" accept="image/*" class="form-control" id="header_banner_4" name="header_banner_4">
                                </div>
                            </div>
                        </div>


                        <hr>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="customer_support_mobile" class="form-label">Customer Support Mobile</label>
                                    <input type="text" class="form-control" name="customer_support_mobile" id="customer_support_mobile" placeholder="Enter our service mobile number" value="{{ old('customer_support_mobile', $generalSettings->customer_support_mobile ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="customer_support_email" class="form-label">Customer Support Email</label>
                                    <input type="email" class="form-control" name="customer_support_email" id="customer_support_email" placeholder="Enter our service email" value="{{ old('customer_support_email', $generalSettings->customer_support_email ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="office_time" class="form-label">Head Office Time</label>
                                    <input type="text" class="form-control" name="office_time" id="office_time" placeholder="Enter office time" value="{{ old('office_time', $generalSettings->office_time ?? '') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="active_clients" class="form-label">Active Clients</label>
                                    <input type="number" class="form-control" name="active_clients" id="active_clients" placeholder="Enter active clients" value="{{ old('active_clients', $generalSettings->active_clients ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="expert_mechanics" class="form-label">Expert Mechanics</label>
                                    <input type="number" class="form-control" name="expert_mechanics" id="expert_mechanics" placeholder="Enter expert mechanics" value="{{ old('expert_mechanics', $generalSettings->expert_mechanics ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="reputation_years" class="form-label">Years Reputation</label>
                                    <input type="number" class="form-control" name="reputation_years" id="reputation_years" placeholder="Enter reputation in years" value="{{ old('reputation_years', $generalSettings->reputation_years ?? '') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="footer_about_us_1" class="form-label">Footer about us content</label>
                                    <input type="text" class="form-control" name="footer_about_us_1" id="footer_about_us_1" placeholder="Enter about us content" value="{{ old('footer_about_us_1', $generalSettings->footer_about_us_1 ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="footer_about_us_2" class="form-label">&nbsp;</label>
                                    <input type="text" class="form-control" name="footer_about_us_2" id="footer_about_us_2" placeholder="Enter about us content" value="{{ old('footer_about_us_2', $generalSettings->footer_about_us_2 ?? '') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="ig_link" class="form-label">Instagram Profile</label>
                                    <input type="text" class="form-control" name="ig_link" id="ig_link" placeholder="Enter Instagram profile link" value="{{ old('ig_link', $generalSettings->ig_link ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="wp_link" class="form-label">Whatsapp Connect Link</label>
                                    <input type="text" class="form-control" name="wp_link" id="wp_link" placeholder="Enter Instagram profile link" value="{{ old('wp_link', $generalSettings->wp_link ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="footer_copyright" class="form-label">Copyright</label>
                                    <input type="text" class="form-control" name="footer_copyright" id="footer_copyright" placeholder="Enter copyright line" value="{{ old('footer_copyright', $generalSettings->footer_copyright ?? '') }}" required>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="first_reviewer_name" class="form-label">Reviewer Name</label>
                                    <input type="text" class="form-control" id="first_reviewer_name" name="first_reviewer_name" placeholder="Enter reviewer name" value="{{ old('first_reviewer_name', $generalSettings->first_reviewer_name ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="first_reviewer_msg" class="form-label">Reviewer Msg</label>
                                    <input type="text" class="form-control" id="first_reviewer_msg" name="first_reviewer_msg" placeholder="Enter reviewer msg" value="{{ old('first_reviewer_msg', $generalSettings->first_reviewer_msg ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="second_reviewer_name" class="form-label">Reviewer Name</label>
                                    <input type="text" class="form-control" id="second_reviewer_name" name="second_reviewer_name" placeholder="Enter reviewer name" value="{{ old('second_reviewer_name', $generalSettings->second_reviewer_name ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="second_reviewer_msg" class="form-label">Reviewer Msg</label>
                                    <input type="text" class="form-control" id="second_reviewer_msg" name="second_reviewer_msg" placeholder="Enter reviewer msg" value="{{ old('second_reviewer_msg', $generalSettings->second_reviewer_msg ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="third_reviewer_name" class="form-label">Reviewer Name</label>
                                    <input type="text" class="form-control" id="third_reviewer_name" name="third_reviewer_name" placeholder="Enter reviewer name" value="{{ old('third_reviewer_name', $generalSettings->third_reviewer_name ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="third_reviewer_msg" class="form-label">Reviewer Msg</label>
                                    <input type="text" class="form-control" id="third_reviewer_msg" name="third_reviewer_msg" placeholder="Enter reviewer msg" value="{{ old('third_reviewer_msg', $generalSettings->third_reviewer_msg ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn gradientBTN">Save Changes</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
