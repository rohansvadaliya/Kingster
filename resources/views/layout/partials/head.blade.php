<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}">

<!-- Fearther CSS -->
<link rel="stylesheet" href="{{ url('assets/css/feather.css') }}">

<!-- select CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}">


@if (Route::is(['user-signup', 'provider-signup','index','index-3','index-4','index-5','index-6','index-8','provider-services','customer-list','provider-coupons','provider-plan','payment-settings','verification','provider-register','register','provider-booking-calendar','customer-grid']))
    <!-- Mobile CSS-->
    <link rel="stylesheet" href="{{ url('assets/plugins/intltelinput/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/intltelinput/css/demo.css') }}">
@endif

@if (Route::is([
        'booking',
        'create-service',
        'customer-profile',
        'security-settings',
        'customer-notifications',
        'connected-apps',
        'provider-services',
        'provider-booking',
        'provider-payout',
        'provider-availability',
        'provider-holiday',
        'provider-coupons',
        'provider-addons',
        'provider-offers',
        'provider-reviews',
        'provider-earnings',
        'provider-chat',
        'provider-appointment-settings',
        'provider-profile-settings',
        'provider-social-profile',
        'provider-security-settings',
        'payment-settings',
        'provider-notifcations',
        'provider-connected-apps',
        'add-subscription',
        'provider-book-details',
        'customer-booking-calendar',
        'provider-edit-service',
        'provider-services-list',
        'index-3',
        'index-6',
        'booking-2',
        'service-details2',
        'customer-booking',
        'notification',
        'index-4',
        'index-6',
        'index-9',
        'index-10',
        'user-booking-list',
        'account-settings',
        'user-booking',
        'provider-dashboard',
        'staff-list',
        'customer-list',
        'provider-coupons',
        'provider-enquiry',
        'provider-accounts-settings',
        'provider-plan',
        'provider-notifcations',
        'provider-connected-apps',
        'provider-leave-history',
        'staff-details',
        'staff-grid',
        'service-request'
    ]))
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}">
@endif

@if (Route::is(['services-grid', 'services-list', 'search', 'search-list','search','blogs']))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{url('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{ url('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
@endif

@if (Route::is(['create-service', 'provider-edit-service','create-service','verification']))
    <!-- Ckeditor CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/ckeditor/ckeditor.css') }}">
@endif
@if (Route::is(['provider-dashboard','provider-services','staff-list','customer-list','provider-payout','provider-coupons','provider-offers','provider-social-profile','provider-security-settings','provider-plan','provider-notifcations','provider-connected-apps','verification','customer-details','customer-grid']))
 <!-- Calendar CSS -->
 <link rel="stylesheet" href="{{ url('assets/plugins/simple-calendar/simple-calendar.css')}}">
 @endif

<!-- Animation CSS -->
<link rel="stylesheet" href="{{ url('assets/css/animate.css')}}">





<!-- Tabler Icon CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/tabler-icons/tabler-icons.css')}}">


<!-- Owlcarousel CSS -->
<link rel="stylesheet" href="{{ url('assets/plugins/owlcarousel/owl.carousel.min.css')}}">


@if (Route::is([
        'customer-profile',
        'provider-appointment-settings',
        'provider-profile-settings',
        'provider-social-profile',
        'payment-settings',
        'account-settings',
        'provider-dashboard',
        'provider-services',
        'staff-list',
        'customer-list',
        'provider-payout',
        'provider-coupons',
        'provider-offers',
        'provider-social-profile',
        'provider-security-settings',
        'provider-plan',
        'provider-notifcations',
        'provider-connected-apps',
        'verification',
        'customer-details',
        'provider-booking-calendar',
        'customer-grid'
    ]))
    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
@endif

@if (Route::is([
        'security-settings',
        'provider-security-settings',
        'provider-plan',
        'login-phone',
        'login-phone1',
        'provider-signup-payment',
        'provider-signup-subscription',
        'index',
        'index-2',
        'index-3',
        'index-9',
        'blogs',
        'provider-dashboard',
        'staff-list',
        'provider-payout',
        'provider-offers',
        'provider-accounts-settings',
        'provider-social-profile',
        'provider-security-settings',
        'provider-notifcations',
        'provider-connected-apps',
        'customer-details'
    ]))
    <!-- Mobile CSS-->
    <link rel="stylesheet" href="{{ url('assets/plugins/intltelinput/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/intltelinput/css/demo.css') }}">
@endif

@if (Route::is([
        'provider-payout',
        'provider-coupons',
        'provider-offers',
        'provider-earnings',
        'provider-security-settings',
        'provider-plan',
        'provider-notifcations',
        'provider-connected-apps',
        'add-subscription',
        'login-activity',
        'provider-device-management',
        'provider-login-activity',
        'device-management',
        'account-settings',
        'customer-list',
        'provider-payout'
        
    ]))
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/datatables/datatables.min.css') }}">
@endif
@if (Route::is(['account-settings','customer-list','provider-payout']))
<link rel="stylesheet" href="{{ url('assets/plugins/datatables/datatables.css')}}">
@endif

@if (Route::is(['provider-holiday', 'provider-book-details', 'customer-booking-calendar','customer-list','provider-payout','provider-holiday','provider-offers','user-bookings-calendar','provider-booking-calendar']))
    <!-- Fullcalendar CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fullcalendar/main.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/fullcalendar/bootstrap-icons.css') }}">
@endif
@if (Route::is(['service-details2']))
<!-- Slick CSS -->
<link rel="stylesheet" href="{{URL('assets/plugins/slick/slick.css')}}">
@endif
@if (Route::is(['provider-services','staff-list','customer-list','provider-payout','provider-offers','provider-social-profile','provider-security-settings','provider-plan','provider-notifcations','provider-connected-apps','verification','customer-details','customer-grid']))
<!-- Mobile Input -->
<script src="{{URL('assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>
@endif

@if (Route::is(['service-details','service-details2','provider-details']))
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
@endif
@if (Route::is(['index', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-9','index-10']))
    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/aos/aos.css') }}">
@endif

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
