<?php error_reporting(0); ?>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Request::is('provider-dashboard') ? 'active' : '' }}">
                    <a href="{{url('provider-dashboard')}}"><i class="ti ti-layout-grid"></i><span>Dashboard</span></a>
                </li>
                <li class="{{ Request::is('provider-services','provider-service-list') ? 'active' : '' }}">
                    <a href="{{url('provider-services')}}"><i class="ti ti-briefcase"></i><span>My Services</span></a>
                </li>
                <li class="{{ Request::is('provider-booking') ? 'active' : '' }}">
                    <a href="{{url('provider-booking')}}"><i class="ti ti-calendar-month"></i><span>Sold </span></a>
                </li>
                <li class="{{ Request::is('staff-list','staff-details','staff-grid') ? 'active' : '' }}">
                    <a href="{{url('staff-list')}}"><i class="ti ti-users"></i><span>Staffs</span></a>
                </li>
                <li class="{{ Request::is('customer-list','customer-details','customer-grid') ? 'active' : '' }}">
                    <a href="{{url('customer-list')}}"><i class="ti ti-user"></i><span>Customers</span></a>
                </li>
                <li class="{{ Request::is('provider-payout','provider-transaction') ? 'active' : '' }}">
                    <a href="{{url('provider-payout')}}"><i class="ti ti-wallet"></i><span>Payout</span></a>
                </li>
                <li class="{{ Request::is('provider-holiday') ? 'active' : '' }}">
                    <a href="{{url('provider-holiday')}}"><i class="feather-calendar"></i><span>Holidays & Leave</span></a>
                </li>
                <li class="{{ Request::is('provider-coupons') ? 'active' : '' }}">
                    <a href="{{url('provider-coupons')}}"><i class="ti ti-ticket"></i><span>Coupons</span></a>
                </li>
                <li class="{{ Request::is('provider-offers') ? 'active' : '' }}">
                    <a href="{{url('provider-offers')}}"><i class="ti ti-square-percentage"></i><span>Offers</span></a>
                </li>
                <li class="{{ Request::is('provider-reviews') ? 'active' : '' }}">
                    <a href="{{url('provider-reviews')}}"><i class="ti ti-star"></i><span>Reviews</span></a>
                </li>
                <li  class="{{ Request::is('provider-enquiry') ? 'active' : '' }}">
                    <a href="{{url('provider-enquiry')}}"><i class="ti ti-mail"></i><span>Enquiries</span></a>
                </li>
                <li class="{{ Request::is('provider-earnings') ? 'active' : '' }}">
                    <a href="{{url('provider-earnings')}}"><i class="ti ti-cash-banknote"></i><span>Earnings</span></a>
                </li>
                <li  class="{{ Request::is('provider-chat') ? 'active' : '' }}">
                    <a href="{{url('provider-chat')}}"><i class="ti ti-messages"></i><span>Chat</span></a>
                </li>					
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="ti ti-settings"></i><span>Settings</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li >
                            <a href="{{url('provider-appointment-settings')}}"  class="{{ Request::is('provider-appointment-settings') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Appointment</a>
                        </li>
                        <li>
                            <a href="{{url('provider-accounts-settings')}}" class="{{ Request::is('provider-accounts-settings') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Account</a>
                        </li>
                        <li>
                            <a href="{{url('provider-social-profile')}}" class="{{ Request::is('provider-social-profile') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Social Profiles</a>
                        </li>
                        <li>
                            <a href="{{url('provider-security-settings')}}"  class="{{ Request::is('provider-security-settings') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Security</a>
                        </li>
                        <li>
                            <a href="{{url('provider-plan')}}" class="{{ Request::is('provider-plan','provider-subscribtion') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Plan & Billings</a>
                        </li>
                        <li>
                            <a href="{{url('payment-settings')}}"  class="{{ Request::is('payment-settings') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Payment</a>
                        </li>
                        <li>
                            <a href="{{url('provider-notifcations')}}" class="{{ Request::is('provider-notifcations') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Notifications</a>
                        </li>
                        <li>
                            <a href="{{url('provider-connected-apps')}}"  class="{{ Request::is('provider-connected-apps') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Connected Apps</a>
                        </li>
                        <li>
                            <a href="{{url('verification')}}" class="{{ Request::is('verification') ? 'active' : '' }}"><i class="ti ti-chevrons-right me-2"></i>Profile Verification</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#del-account"><i class="ti ti-chevrons-right me-2"></i>Delete Account</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('login')}}"><i class="ti ti-logout-2"></i><span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->