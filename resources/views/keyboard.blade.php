<?php $page = 'kingster-keyboard'; ?>
@extends('layout.mainlayout')
@section('content')

    @component('components.breadcrumb')
        @slot('title')
			Gaming Keyboard
        @endslot
        @slot('li_1')
            /
        @endslot
        @slot('li_2')
			Gaming Keyboard
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
				<div class="row">
					<div class="col-xl-8">
						<div class="card border-0">
							<div class="card-body">
								<div class="service-head mb-2">
									<div class="d-flex align-items-center justify-content-between flex-wrap">
										<h3 class="mb-2">Gaming Keyboard <span class="font-size-14"><i class="ti ti-star-filled text-warning me-2"></i><span class="text-gray-9">4.9</span>(255 reviews)</span></h3>
										<span class="badge badge-purple-transparent mb-2"><i class="ti ti-calendar-check me-1"></i>2000+ Sold</span>
									</div>
								</div>

								<div class="service-wrap mb-4">
									<div class="slider-wrap">
										<div class="owl-carousel service-carousel nav-center mb-3" id="large-img">
											<div class="service-img"><img src="{{ URL::asset('/assets/img/products/keyboard/1.jpg') }}" class="img-fluid" alt="Slider Img"></div>
											<div class="service-img"><img src="{{ URL::asset('/assets/img/products/keyboard/2.jpg') }}" class="img-fluid" alt="Slider Img"></div>
											<div class="service-img"><img src="{{ URL::asset('/assets/img/products/keyboard/3.jpg') }}" class="img-fluid" alt="Slider Img"></div>
										</div>
										<a href="{{URL::asset('assets/img/services/service-slider-01.jpg')}}" data-fancybox="gallery" class="btn btn-white btn-sm view-btn d-none"><i class="feather-image me-1"></i>View all 20 Images</a>
									</div>
									<div class="owl-carousel slider-nav-thumbnails nav-center d-none" id="small-img">
										<div><img src="{{ URL::asset('/assets/img/products/keyboard/1.jpg') }}" class="img-fluid" alt="Slider Img"></div>
										<div><img src="{{ URL::asset('/assets/img/products/keyboard/2.jpg') }}" class="img-fluid" alt="Slider Img"></div>
										<div><img src="{{ URL::asset('/assets/img/products/keyboard/3.jpg') }}" class="img-fluid" alt="Slider Img"></div>
									</div>
								</div>

								<div class="accordion service-accordion">
									<div class="accordion-item mb-4">
										<h2 class="mb-2">Service Overview</h2>
										<div class="px-2">
											<p>⚙️ Product Setup & Configuration Get your wireless keyboard and mouse combo properly connected and optimized for gaming.</p>
											<p>🎮 Custom Key Mapping & DPI Settings Customize key functions and mouse sensitivity to match your gaming style.</p>
											<p>💡 RGB Lighting Configuration Personalize your gear's lighting with effects, colors, and profiles</p>
											<p>📶 Wireless Connectivity Optimization Ensure smooth, interference-free performance with strong wireless signals.</p>
											<p>🖥️ Compatibility Checks Make sure your gaming setup is fully compatible with your PC, console, or device.</p>
											<p>🛠️ Troubleshooting & Repairs Fix lag, disconnection, or unresponsive key/button issues quickly.</p>
											<p>📚 User Guidance & After-Sales Support Learn how to get the most out of your gear and enjoy ongoing support from our team.</p>
										</div>
									</div>
									<div class="accordion-item mb-4">
										<h2 class="accordion-header">Includes</h2>
										<div class="bg-light-200 p-3 pb-2 br-10">
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>🎮 Wireless keyboard & mouse setup</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>🛠️ Key mapping & macro programming</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>🖱️ Mouse DPI & sensitivity adjustment</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>🔋 Battery setup & power tips</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>📶 Wireless lag reduction & signal boost</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>💡 RGB lighting customization</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>🖥️ Compatibility check with devices</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>🛠️ Troubleshooting & quick fixes</strong></p>
											<p class="d-inline-flex align-items-center mb-2 me-4"><i class="feather-check-circle text-success me-2"></i><strong>📚 User guidance & pro tips</strong></p>
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
											<p class="fs-14 mb-0">Starts From</p>
											<h4><span class="display-6 fw-bold">₹1500</span><span class="text-decoration-line-through text-default"> ₹1800</span></h4>
										</div>
									</div>
									<span class="badge bg-success mb-3 d-inline-flex align-items-center fw-medium"><i class="ti ti-circle-percentage me-1"></i>16.67% Offer</span>
								</div>
								<a href="https://api.whatsapp.com/send?phone=918866513744&text=Hello Kingster Team!!" target="_blank"  class="btn btn-lg btn-outline-light d-flex align-items-center justify-content-center w-100"><i class="ti ti-brand-whatsapp me-2"></i>Send Enquiry</a>
							</div>
						</div>
						<div class="card border-0">
							<div class="card-body">
								<h4 class="mb-3">Business Hours</h4>
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
