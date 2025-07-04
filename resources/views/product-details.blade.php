<?php $page = 'product-details'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
			{{ $product->product_name }}
        @endslot
        @slot('li_1')
            /
        @endslot
        @slot('li_2')
			{{ $product->product_name }}
        @endslot
    @endcomponent

	<style>
		span.font-size-14 {
			font-size: 14px;
			font-weight: 600;
		}
	</style>

	@php
		$variants = [];
		if ($product->variant_1_name) {
			$variants[] = [
				'id' => 'variant1',
				'name' => $product->variant_1_name,
				'selling_price' => $product->variant_1_price,
				'offer_price' => $product->variant_1_oprice,
			];
		}
		if ($product->variant_2_name) {
			$variants[] = [
				'id' => 'variant2',
				'name' => $product->variant_2_name,
				'selling_price' => $product->variant_2_price,
				'offer_price' => $product->variant_2_oprice,
			];
		}
		if ($product->variant_3_name) {
			$variants[] = [
				'id' => 'variant3',
				'name' => $product->variant_3_name,
				'selling_price' => $product->variant_3_price,
				'offer_price' => $product->variant_3_oprice,
			];
		}
	@endphp

    <div class="page-wrapper">
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="card border-0">
							<div class="card-body">
								<div class="service-head mb-2">
									<div class="d-flex align-items-center justify-content-between flex-wrap">
										<h4 class="mb-2">{{ $product->product_name }} <span class="font-size-14"><i class="ti ti-star-filled text-warning me-2"></i><span class="text-gray-9">{{ $product->rating }}</span>({{ $product->review_count }} reviews)</span></h4>
										<span class="badge badge-purple-transparent mb-2"><i class="ti ti-calendar-check me-1"></i>{{ $product->sold_count }}+ Sold</span>
									</div>
								</div>

								<!-- Slider -->
								<div class="service-wrap mb-4">
									<div class="slider-wrap">
										<div class="owl-carousel service-carousel nav-center mb-3" id="large-img">
											@if($product->img_1)
												<div class="service-img"><img src="@prodImage($product->img_1)" class="img-fluid" alt="Slider Img"></div>
											@endif
											@if($product->img_2)
												<div class="service-img"><img src="@prodImage($product->img_2)" class="img-fluid" alt="Slider Img"></div>
											@endif
											@if($product->img_3)
												<div class="service-img"><img src="@prodImage($product->img_3)" class="img-fluid" alt="Slider Img"></div>
											@endif
											@if($product->img_4)
												<div class="service-img"><img src="@prodImage($product->img_4)" class="img-fluid" alt="Slider Img"></div>
											@endif
											@if($product->img_5)
												<div class="service-img"><img src="@prodImage($product->img_5)" class="img-fluid" alt="Slider Img"></div>
											@endif
											@if($product->img_6)
												<div class="service-img"><img src="@prodImage($product->img_6)" class="img-fluid" alt="Slider Img"></div>
											@endif
										</div>
										@if($product->default_img || $product->img_1 || $product->img_2 || $product->img_3 || $product->img_4 || $product->img_5 || $product->img_6)
											<a href="{{ asset($product->default_img ?? $product->img_1) }}" data-fancybox="gallery" class="btn btn-white btn-sm view-btn d-none"><i class="feather-image me-1"></i>View all Images</a>
										@endif
									</div>
									<div class="owl-carousel slider-nav-thumbnails nav-center d-none" id="small-img">
										@if($product->default_img)
											<div><img src="@prodImage($product->default_img)" class="img-fluid" alt="Slider Img"></div>
										@endif
										@if($product->img_1)
											<div><img src="@prodImage($product->img_1)" class="img-fluid" alt="Slider Img"></div>
										@endif
										@if($product->img_2)
											<div><img src="@prodImage($product->img_2)" class="img-fluid" alt="Slider Img"></div>
										@endif
										@if($product->img_3)
											<div><img src="@prodImage($product->img_3)" class="img-fluid" alt="Slider Img"></div>
										@endif
										@if($product->img_4)
											<div><img src="@prodImage($product->img_4)" class="img-fluid" alt="Slider Img"></div>
										@endif
										@if($product->img_5)
											<div><img src="@prodImage($product->img_5)" class="img-fluid" alt="Slider Img"></div>
										@endif
										@if($product->img_6)
											<div><img src="@prodImage($product->img_6)" class="img-fluid" alt="Slider Img"></div>
										@endif
									</div>
								</div>
								<!-- /Slider -->

								<div class="accordion service-accordion">
									<div class="accordion-item mb-4">
										<h4 class="mb-2">Product Overview</h4>
										<div class="px-2">
											{!! nl2br(e($product->description)) !!}
										</div>
									</div>
									<div class="accordion-item mb-4">
										<h4 class="accordion-header">Product Features</h4>
										<div class="bg-light-200 p-3 pb-2 br-10">
											@if($product->features)
												@php
													$features = explode(',', $product->features);
												@endphp
												@foreach($features as $feature)
													<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>{{ trim($feature) }}</strong></p>
												@endforeach
											@else
												<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>High Quality Product</strong></p>
												<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>1 Year Warranty</strong></p>
												<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>Fast Delivery</strong></p>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 theiaStickySidebar">
						<div class="card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between border-bottom mb-3">
									<div class="d-flex align-items-center">
										<div class="mb-3">
											<p class="fs-14 mb-2">Starts From</p>
											<h4><span class="display-6 fw-bold" id="selling-pricing">₹{{ number_format($product->offer_price, 2) }}</span><span class="text-decoration-line-through text-default display-7" id="offer-pricing"> ₹{{ number_format($product->original_price, 2) }}</span></h4>
										</div>
									</div>
									@php
										$discount = round((($product->original_price - $product->offer_price) / $product->original_price) * 100);
									@endphp
									<span class="badge bg-success mb-3 d-inline-flex align-items-center fw-medium"><i class="ti ti-circle-percentage me-1"></i><span id="offer-discount">{{ $discount }}</span>% Offer</span>
								</div>

								@if($product->is_variant && count($variants))
									<div class="d-flex align-items-center justify-content-between mb-3">
										@foreach($variants as $variant)
											<button type="button"
													class="w-100 btn btn-outline-primary me-2 variant-btn"
													data-id="{{ $variant['id'] }}"
													data-price="{{ $variant['selling_price'] }}"
													data-oprice="{{ $variant['offer_price'] }}">
												{{ $variant['name'] }}
											</button>
										@endforeach
									</div>
								@endif

								@if(isset($generalSettings) && $generalSettings->wp_link)
									<a href="{{ $generalSettings->wp_link }}" target="_blank" class="btn btn-lg btn-outline-light d-flex align-items-center justify-content-center w-100"><i class="ti ti-brand-whatsapp me-2"></i>Send Enquiry</a>
								@else
									<a href="https://api.whatsapp.com/send?phone=918866513744&text=Hello Kingster Team!!" target="_blank" class="btn btn-lg btn-outline-light d-flex align-items-center justify-content-center w-100"><i class="ti ti-brand-whatsapp me-2"></i>Send Enquiry</a>
								@endif
							</div>
						</div>

						<div class="card border-0">
							<div class="card-body">
								<h5 class="mb-3 text-center">We’re Available At</h4>
								@if(isset($generalSettings) && $generalSettings->office_time)
									<div class="d-flex align-items-center justify-content-between mb-1">
										<h6 class="fs-16 fw-medium mb-0">Call Now</h6>
										<p>{{ $generalSettings->customer_support_mobile }}</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<h6 class="fs-16 fw-medium mb-0">Working Hours</h6>
										<p>{{ $generalSettings->office_time }}</p>
									</div>
								@else
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h6 class="fs-16 fw-medium mb-0">Monday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h6 class="fs-16 fw-medium mb-0">Tuesday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h6 class="fs-16 fw-medium mb-0">Wednesday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h6 class="fs-16 fw-medium mb-0">Thursday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h6 class="fs-16 fw-medium mb-0">Friday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3">
										<h6 class="fs-16 fw-medium mb-0">Saturday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-0">
										<h6 class="fs-16 fw-medium mb-0">Sunday</h6>
										<p>9:00 AM - 9:00 PM</p>
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
     @endcomponent

@endsection


@section('productfile-js')
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Store original product prices
			let originalSellingPrice = {{ $product->offer_price }};
			let originalOfferPrice = {{ $product->original_price }};
			let originalDiscount = {{ round((($product->original_price - $product->offer_price) / $product->original_price) * 100) }};
			
			// Function to update pricing display
			function updatePricing(sellingPrice, offerPrice) {
				// Update selling price
				document.getElementById('selling-pricing').textContent = '₹' + parseFloat(sellingPrice).toLocaleString('en-IN', {
					minimumFractionDigits: 2,
					maximumFractionDigits: 2
				});
				
				// Update original price
				document.getElementById('offer-pricing').textContent = ' ₹' + parseFloat(offerPrice).toLocaleString('en-IN', {
					minimumFractionDigits: 2,
					maximumFractionDigits: 2
				});
				
				// Calculate and update discount
				let discount = Math.round(((offerPrice - sellingPrice) / offerPrice) * 100);
				document.getElementById('offer-discount').textContent = discount;
			}
			
			// Function to reset to original pricing
			function resetToOriginalPricing() {
				updatePricing(originalSellingPrice, originalOfferPrice);
			}
			
			// Handle variant button clicks
			document.querySelectorAll('.variant-btn').forEach(function(button) {
				button.addEventListener('click', function() {
					// Remove active class from all variant buttons
					document.querySelectorAll('.variant-btn').forEach(function(btn) {
						btn.classList.remove('btn-primary');
						btn.classList.add('btn-outline-primary');
					});
					
					// Add active class to clicked button
					this.classList.remove('btn-outline-primary');
					this.classList.add('btn-primary');
					
					// Get variant data
					let sellingPrice = parseFloat(this.getAttribute('data-price'));
					let offerPrice = parseFloat(this.getAttribute('data-oprice'));
					
					// Update pricing
					updatePricing(sellingPrice, offerPrice);
				});
			});
			
			// Initialize with first variant selected (if variants exist)
			let firstVariant = document.querySelector('.variant-btn');
			if (firstVariant) {
				firstVariant.click();
			}
		});
	</script>
@endsection
