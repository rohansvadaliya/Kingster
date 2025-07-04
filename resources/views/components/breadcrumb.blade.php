<!-- Breadcrumb -->
<div class="breadcrumb-bar text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">{{ $title }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{$li_1}}"><i class="ti ti-home-2"></i></a></li>
                        @if (Route::is(['create-service','user-booking-list','customer-wallet','customer-reviews','user-chat','account-settings','user-dashboard','favourites','user-booking','booking-payment','booking-success','booking-details','blog-grid','blogs','user-bookings-calendar','connected-apps',
                        'service-request']))
                        <li class="breadcrumb-item">{{ $li_3}}</li>
                        @endif
                        <li class="breadcrumb-item active" aria-current="page">{{ $li_2 }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="breadcrumb-bg">
            <img src="@prodImage('/assets/img/bg/breadcrumb-bg-01.png')" class="breadcrumb-bg-1" alt="Img">
            <img src="@prodImage('/assets/img/bg/breadcrumb-bg-02.png')" class="breadcrumb-bg-2" alt="Img">
        </div>
    </div>
</div>
<!-- /Breadcrumb -->





