<style>
    .subscription-logout a{
        padding: 10px 10px 4px 10px !important;
        font-weight: 500;
        margin-top: 10px;
    }
    .sub-menu-tablist a{
        color: #000 !important;
        transition: all 0.3s ease !important;
    }
    .sub-menu-tablist a:hover{
        color: #2e2e2e !important;
    }
    .sub-menu-tablist{
        padding: 4px 10px !important;
        text-decoration: none !important;
    }

    .subscription-logout{
        position: relative;
    }

    .subscription-logout::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 75%;
        border-top: 2px solid #f05050db;
    }
</style>

<div class="header" style="left: 0 !important;">
    <div class="header-split">
        <a href="{{ route('admin.warranty.management') }}" class="logo">
            <img src="{{ isset($generalSettings) && $generalSettings->brand_logo ? asset($generalSettings->brand_logo) : asset('assets/img/kingster-logo.png') }}" alt="Logo" height="45">
        </a>
        <ul class="nav user-menu">
            <li class="nav-item d-none">
                <a href="{{ route('index-3') }}" class="viewsite" target="_blank">
                    <i class="fe fe-globe me-2"></i>Visit Site
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="user-link nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="{{ asset('assets/img/india.jpg') }}" width="40" alt="Admin">
                        <span class="animate-circle"></span>
                    </span>
                    <span class="user-content">
                        <span class="user-name">{{ Auth::user()->username }}</span>
                        <span class="user-details">{{ Auth::user()->role }}</span>
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilemenu py-2 px-1">
                        @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'CEO')
                            <div class="sub-menu-tablist">
                                <a href="{{ route('user.index') }}">User Management</a>
                            </div>
                        @endif
                            <div class="sub-menu-tablist">
                                <a href="{{ route('admin.warranty.management') }}">Warranty Management</a>
                            </div>
                        @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'CEO')
                            <div class="sub-menu-tablist">
                                <a href="{{ route('product.index') }}">Product Management</a>
                            </div>
                            <div class="sub-menu-tablist">
                                <a href="{{ route('general.setting') }}">General Setting</a>
                            </div>
                        @endif

                        <div class="subscription-logout">
                            <a href="{{ route('signout') }}" class="text-danger text-uppercase text-center">
                                <i class="fas fa-sign-out-alt me-1"></i> Log Out
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

