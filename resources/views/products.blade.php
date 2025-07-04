<?php $page = 'products'; ?>
@extends('layout.mainlayout')
@section('content')

	@component('components.breadcrumb')
        @slot('title')
			Our Products
        @endslot
        @slot('li_1')
            /
        @endslot
        @slot('li_2')
		Our Products
        @endslot
    @endcomponent

	<style>
		span.font-size-14 {
			font-size: 14px;
			font-weight: 600;
		}
	</style>

    <div class="page-wrapper">
		<div class="content">
			<div class="container">
				<!-- Feature Section -->
				<section class="feature-section-two pt-0">
					<div class="container">
						<div class="row">
							@foreach($latestProducts as $product)
								<div class="col-md-6 col-lg-4">
									<div class="feature-widget-main">
										<div class="feature-widget">
											<div class="feature-img">
												<a href="{{ route('product.details', $product->id) }}">
													@if($product->default_img)
														<img src="@prodImage($product->default_img)" class="img-fluid" alt="{{ $product->product_name }}">
													@else
														<img src="@prodImage('assets/img/products/placeholder.jpg')" class="img-fluid" alt="{{ $product->product_name }}">
													@endif
												</a>
											</div>
										</div>
										<div class="feature-icon">
											<div class="feature-title">
												<h5>{{ $product->product_name }}</h5>
												<p>₹{{ number_format($product->offer_price, 2) }}</p>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</section>
				<!-- /Feature Section -->
			</div>
		</div>
	</div>
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
     @endcomponent

@endsection
