<?php $page = 'error-404'; ?>
@extends('layout.mainlayout')
@section('content')

<!-- Error -->
<section class="error-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="error-img">
                    <img src="@prodImage('assets/img/bg/bg-07.png')" alt="img" class="img-fluid">
                </div>
                <div class="error-content text-center">
                    <div class="error-logo">
                        <img src="@prodImage(isset($generalSettings) && $generalSettings->brand_logo ? $generalSettings->brand_logo : 'assets/img/kingster-logo.png')" alt="logo">
                    </div>
                    <h1>404</h1>
                    <h2>Oops! Page Not Found</h2>
                    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <div class="error-btn">
                        <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="error-img-bottom">
        <img src="@prodImage('assets/img/bg/error-404.png')" alt="Img" class="img-fluid">
    </div>
</section>
<!-- /Error -->

@endsection
