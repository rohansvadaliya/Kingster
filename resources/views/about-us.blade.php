<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')


@component('components.breadcrumb')
    @slot('title')
        About Us
    @endslot
    @slot('li_1')
        /
    @endslot
    @slot('li_2')
        About Us
    @endslot
@endcomponent



<div class="page-wrapper">
    <div class="content p-0">

        <!-- About -->
        <div class="about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img d-none d-md-block">
                            <div class="about-exp">
                                <span>7+ years of experiences</span>
                            </div>
                            <div class="abt-img">
                                <img src="{{URL::asset('assets/img/providers/provider-23.png')}}" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h6>ABOUT OUR COMPANY</h6>
                            <h3 class="mb-3">Kingster is one of India’s fastest-growing tech brand</h3>
                            <p><strong>Kingster</strong> is one of India’s fastest-growing tech brands, renowned for its top-selling external hard drives and a wide range of computer accessories on Amazon. With a strong online presence and the trust of thousands of satisfied customers, we’ve made a mark by consistently delivering cutting-edge technology at unbeatable prices.</p>
                            <p>Now, we’re excited to expand our footprint offline—bringing our best-in-class products even closer to you through retail stores and other distribution channels. Whether you're a tech enthusiast, a professional, or someone who simply values performance and reliability, Kingster offers products designed to meet your needs.</p>
                            <p>Our journey is powered by a 24x7 dedicated support team, ensuring a seamless experience for our users across the country. Loved by customers nationwide, Kingster stands as a symbol of quality, innovation, and exceptional value. Join us as we continue to redefine the tech experience for every Indian household.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>We prioritize quality and reliability</li>
                                        <li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>We save your time and effort</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>Clear, detailed service listings & reviews</li>
                                        <li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>Smooth and satisfactory experience.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Choose Us Section -->
        <div class="chooseus-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="choose-content">
                            <h2>Why Choose Us</h2>
                            <p>Choose us for reliable, personalized service and exceptional results.</p>
                            <div class="accordion" id="faq_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        24/7 Supports
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Client’s reviews
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Professional Team
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Best Services
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chooseus-img">
                            <img src="{{URL::asset('assets/img/services/service-75.jpg')}}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
