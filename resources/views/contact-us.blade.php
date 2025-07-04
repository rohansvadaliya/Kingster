<?php $page = 'contact-us'; ?>
@extends('layout.mainlayout')
@section('content')

@component('components.breadcrumb')
    @slot('title')
        Contact Us
    @endslot
    @slot('li_1')
        /
    @endslot
    @slot('li_2')
        Contact Us
    @endslot
@endcomponent

<style>
    .single-location-area-contact{
        text-align: center;
    }
    .single-location-area-contact p{
        color: #28283C;
        margin-bottom: 5px;
    }
    .rounded-circle i{
        font-size: 24px;
    }
</style>

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="d-none map-grid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d119001.32467160505!2d72.79542804070601!3d21.240119091735234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be04fd5f354037d%3A0x9649d0a8bb47d4d8!2sD1%2C%20govardhan%20squre%2C%20Abc%20Cir%2C%20Khodiyar%20Nagar%2C%20Mota%20Varachha%2C%20Surat%2C%20Gujarat%20394101!3m2!1d21.2401391!2d72.87782969999999!5e0!3m2!1sen!2sin!4v1743747690429!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact-map"></iframe>
    </div>	

    <div class="content">
        <div class="container">
            <div class="contacts">
                <div class="contact-details">
                    <div class="row mb-5">
                        <h6 class="text-center">We’re here to help! If you have any questions, concerns,<br>or need assistance, feel free to reach out to our support team.</h5>
                    </div>
                    <hr class="mb-5 mt-3" style="border-color: #4999ea;">
                    <div class="row section-seperator-b pb--90 g-5">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-location-area-contact">
                                <span class="rounded-circle"><i class="ti ti-phone text-primary"></i></span>

                                <p>Customer Support</p>
                                <span>{{ isset($generalSettings) && $generalSettings->customer_support_mobile ? $generalSettings->customer_support_mobile : '+91 88665 13744' }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-location-area-contact">
                                <span class="rounded-circle"><i class="ti ti-mail text-primary"></i></span>
                                <p>Email Support</p>
                                <span>{{ isset($generalSettings) && $generalSettings->customer_support_email ? $generalSettings->customer_support_email : '+support@kingster.info' }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-location-area-contact">
                                <span class="rounded-circle"><i class="ti ti-map-pin text-primary"></i></span>
                                <p>Office Hours</p>
                                <span>{{ isset($generalSettings) && $generalSettings->office_time ? $generalSettings->office_time : 'Mon-Sun 9am to 9pm.' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@component('components.scrollToTop')
@endcomponent

@endsection
