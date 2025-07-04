<!-- jQuery -->
<script src="{{ URL::asset('/assets/js/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- select JS -->
<script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>

@if (Route::is(['user-signup', 'provider-signup','index-4','provider-dashboard','provider-security-settings','verification','provider-register','register']))
    <!-- Mobile CSS-->
    <script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>
@endif
@if (Route::is(['index','index-2','index-3']))
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/ityped/index.js')}}"></script>
@endif
@if (Route::is(['account-settings','customer-list','provider-payout','provider-offers','provider-accounts-settings','provider-transaction','service-request']))
<!-- Datepicker Core JS -->
<script src="{{ URL::asset('/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endif

@if (Route::is(['provider-enquiry','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','customer-details']))
<!-- Datetimepicker JS -->
<script src="{{ URL::asset('/assets/js/moment.js')}}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endif

<!-- Wow JS -->
<script src="{{ URL::asset('/assets/js/wow.min.js')}}"></script>




<!-- Owlcarousel Js -->
<script src="{{ URL::asset('/assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

@if (Route::is(['index']))
<script src="{{ URL::asset('/assets/plugins/ityped/index.js')}}"></script>
@endif
@if (Route::is(['service-details2']))
<!-- Slick Slider -->
<script src="{{URL::asset('/assets/plugins/slick/slick.min.js')}}"></script>
@endif
<!-- counterup JS -->
<script src="{{ URL::asset('/assets/js/cursor.js')}}"></script>

@if (Route::is(['reset-password','security-settings','provider-security-settings','index','index-3','index-2','index-4','index-5','index-6','index-8','index-9','index-10']))
    <!-- Validation-->
    <script src="{{ URL::asset('/assets/js/validation.js') }}"></script>
@endif
@if (Route::is(['services-grid','search','blogs','services-list']))
<!-- Rangeslider JS -->
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
@endif
<!-- counterup JS -->
<script src="{{ URL::asset('/assets/plugins/countup/jquery.counterup.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/countup/jquery.waypoints.min.js')}}"> </script>

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
        'provider-subscription',
        'provider-addons',
        'provider-offers',
        'provider-reviews',
        'provider-earnings',
        'provider-chat',
        'provider-appointment-settings',
        'provider-profile-settings',
        'provider-social-profile',
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
        'user-chat',
        'user-booking',
        'provider-dashboard',
        'staff-list',
        'provider-leave-history',
        'staff-details',
        'staff-grid',
        'user-bookings-calendar',
        'provider-booking-calendar'
    ]))
    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
@endif


@if (Route::is([
        'blog-details',
        'services-grid',
        'services-list',
        'search',
        'customer-dashboard',
        'customer-booking',
        'customer-favourite',
        'customer-wallet',
        'customer-reviews',
        'customer-profile',
        'security-settings',
        'customer-notifications',
        'connected-apps',
        'provider-appointment-settings',
        'provider-profile-settings',
        'provider-social-profile',
        'payment-settings',
        'search-list',
        'customer-booking-calendar',
        'service-details',
        'blog-list',
        'service-details2',
        'device-management',
        'providers',
        'provider-details',
        'blogs',
        'booking',
        'installer',
        'service-request',
        'user-dashboard',
        'user-booking-list',
        'favourites',
        'customer-wallet',
        'customer-reviews',
        'account-settings',
        'notification-settings'
    ]))
    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
@endif

@if (Route::is(['service-grid', 'service-list', 'search', 'search-list']))
    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
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
       
        'index-5',
        'index-6',
        'index-8',
        'index-9',
        'index-10',
        'blogs'
    ]))
    <!-- Mobile Input -->
    <script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>
@endif

@if (Route::is(['create-service', 'provider-edit-service','services-grid','search','blogs','verification','services-list']))
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('/assets/plugins/ckeditor/ckeditor.js') }}"></script>
@endif

@if (Route::is([
        'customer-profile',
        'provider-appointment-settings',
        'provider-profile-settings',
        'provider-social-profile',
        'payment-settings',
        'account-settings',
        'provider-dashboard',
        'provider-services',
        'provider-coupons',
        'provider-accounts-settings',
        'provider-social-profile',
        'provider-security-settings',
        'provider-plan',
        'payment-settings',
        'provider-notifcations',
        'provider-connected-apps',
        'verification'
    ]))
    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
@endif

@if (Route::is([
        'provider-payout',
        'provider-coupons',
        'provider-subscription',
        'provider-offers',
        'provider-earnings',
        'provider-security-settings',
        
        'provider-notifcations',
        'provider-connected-apps',
        'add-subscription',
        'login-activity',
        'provider-device-management',
        'provider-login-activity',
        'device-management',
        'staff-list',
        'customer-list',
        'provider-payout',
        'provider-offers',
        'provider-leave-history',
        'customer-details',
        'provider-transaction',
        'customer-grid'
        
    ]))
    <!-- Datatables JS -->
    <script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js') }}"></script>
@endif

@if (Route::is(['provider-holiday', 'provider-book-details', 'customer-booking-calendar','customer-list','provider-payout','provider-offers','provider-leave-history','customer-details','provider-transaction','user-bookings-calendar','provider-booking-calendar','customer-grid']))
    <!-- Fullcalendar JS -->
    <script src="{{ URL::asset('/assets/plugins/fullcalendar/main.min.js') }}"></script>
@endif


@if (Route::is(['service-details','service-details2','provider-details']))
    <!-- Fancybox JS -->
    <script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
@endif
@if (Route::is(['provider-dashboard','provider-services','provider-payout','provider-coupons','provider-social-profile','provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','verification']))
 <!-- Apexchart JS -->
 <script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}" ></script>
 <script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}" ></script>
 @endif
 @if (Route::is(['provider-dashboard','provider-services','provider-coupons','provider-accounts-settings','provider-social-profile','provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','verification']))
  <!-- Calendar Js -->
  <script src="{{ URL::asset('/assets/plugins/simple-calendar/jquery.simple-calendar.min.js')}}"></script>
  <script src="{{ URL::asset('/assets/js/calender.js')}}"></script>
  @endif
  @if (Route::is(['provider-dashboard',
   'provider-services',
        'provider-booking',
        'provider-payout',
        'provider-availability',
        'provider-holiday',
        'provider-coupons',
        'provider-subscription',
        'provider-addons',
        'provider-offers',
        'provider-reviews',
        'provider-earnings',
        'provider-chat',
        'provider-appointment-settings',
        'provider-profile-settings',
        'provider-social-profile',
        'provider-security-settings',
        'provider-plan',
        'payment-settings',
        'provider-notifcations',
        'provider-connected-apps',
        'add-subscription',
        'provider-book-details',
        'provider-services-list',
        'verification',
        'provider-edit-service',
        'provider-device-management',
        'provider-login-activity',
        'staff-list',
        'customer-list',
        'provider-payout',
        'provider-enquiry',
        'provider-accounts-settings',
        'provider-leave-history',
        'customer-details',
        'provider-payment-methods',
        'provider-service-list',
        'provider-subscribtion',
        'provider-transaction',
        'staff-details',
        'staff-grid',
        'provider-booking-calendar',
        'customer-grid'
       

  ]))
   <!-- Slimscroll JS -->
	<script src="{{ URL::asset('/assets/js/jquery.slimscroll.min.js')}}"></script>
@endif

@if (Route::is(['index-2', 'index-3','index-4','index-6','index-8','index-9']))
    <!-- Slick JS -->
    <script src="{{ URL::asset('/assets/js/slick.js') }}"></script>
@endif
@if (Route::is(['index-3','index-2','index-4','index-5','index-6','index-7','index-8','index-9','index-10']))
<!-- Aos -->
<script src="{{ URL::asset('/assets/plugins/aos/aos.js') }}"></script>
@endif

@if (Route::is(['index-8', 'index-9','index-7']))
    <!-- counterup JS -->
    <script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>
@endif
@if (Route::is(['provider-dashboard',
'provider-services',
'provider-booking',
'staff-list',
'customer-list',
'provider-payout',
'provider-holiday',
'provider-coupons',
'provider-offers',
'provider-reviews',
'provider-enquiry',
'provider-enquiry',
'provider-earnings',
'provider-earnings',
'provider-chat',
'provider-appointment-settings',
'provider-accounts-settings',
'provider-social-profile',
'provider-security-settings',
'provider-plan',
'payment-settings',
'provider-notifcations',
'provider-connected-apps',
'verification',
'provider-leave-history',
'customer-details',
'provider-device-management',
'provider-login-activity',
'provider-payment-methods',
'provider-service-list',
'provider-transaction',
'staff-details',
'staff-grid',
'provider-booking-calendar',
'customer-grid'



]))
 <!-- Themescript -->
 <script src="{{ URL::asset('/assets/js/theme-script.js')}}"></script>
 @endif
<!-- custom JS -->
<script src="{{ URL::asset('/assets/js/script.js') }}"></script>
