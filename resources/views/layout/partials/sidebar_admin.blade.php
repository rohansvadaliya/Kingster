<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header justify-content-center">
        <div class="sidebar-logo">
            <a href="{{ url('admin/index_admin') }}"><img src="{{ isset($generalSettings) && $generalSettings->brand_white_logo ? asset($generalSettings->brand_white_logo) : asset('assets/img/kingster-white-logo.png') }}" class="img-fluid logo" alt="Logo"></a>
            <a href="{{ url('admin/index_admin') }}"><img src="{{ isset($generalSettings) && $generalSettings->brand_white_logo ? asset($generalSettings->brand_white_logo) : asset('assets/img/kingster-white-logo.png') }}" class="img-fluid logo-small" alt="Logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title m-0">
                    <h6>Home</h6>
                </li>
                <li><a href="{{ route('admin.warranty.management') }}" class="active"><i class="fe fe-grid"></i><span>Dashboard</span></a></li>
            </ul>
        </div>
    </div>
</div>
