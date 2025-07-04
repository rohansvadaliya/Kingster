<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kingster® India | Official Website</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ isset($generalSettings) && $generalSettings->brand_fevicon ? asset($generalSettings->brand_fevicon) : asset('assets/img/favicon.svg') }}">

    <script>
        const adminDashboardURL = "{{ route('admin.warranty.management') }}";
        window.appData = {
            csrfToken: '{{ csrf_token() }}',
        };
    </script>

    @include('layout.partials.head')
</head>

<body class="{{ Route::is(['index-3']) ? 'body-one' : '' }}">
    @if (!Route::is(['error-404', 'error-500', 'session-expired']))
        <div class="main-wrapper">
            @include('layout.partials.header')
            @yield('content')
        </div>
    @endif

    @include('layout.partials.footer')
    @include('layout.partials.cursor')
    @include('layout.partials.footer-scripts')

    @yield('productfile-js')
</body>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</html>
