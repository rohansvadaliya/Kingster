<div class="card user-sidebar mb-4 mb-lg-0">
    <div class="card-header user-sidebar-header mb-4">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <span class="user rounded-circle avatar avatar-xxl mb-2">
                <img src="{{URL::asset('assets/img/profiles/avatar-21.jpg')}}" class="img-fluid rounded-circle" alt="Img">
            </span>
            <h6 class="mb-2">John Smith</h6>
            <p class="fs-14">Member Since Sep 2021</p>
        </div>
    </div>
    <div class="card-body user-sidebar-body pt-0">
        <ul>
            <li class="mb-4">
                <a href="{{url('user-dashboard')}}" class="d-flex align-items-center">
                    <i class="ti ti-layout-grid me-2"></i>
                    Dashboard
                </a>
            </li>
           
            <li class="mb-0">
                <a href="{{url('login')}}" class="d-flex align-items-center">
                    <i class="ti ti-logout me-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>