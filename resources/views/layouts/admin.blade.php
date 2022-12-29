<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <!-- CSS -->
    
        <link rel="stylesheet" href="{{ asset ('admin/css/black-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset ('admin/css/custom.css') }}">
    
</head>
<body>
    
    <div class="wrapper">
        @include('layouts.inc.sidebar')

        <div class="main-panel">
            @include('layouts.inc.adminnav')

            <div class="content">
                @yield('content')
            </div>

            @include('layouts.inc.adminfooter')
        </div>

    </div>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/black-dashboard.min.js') }}" defer></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if(session('status'))
            <script>
                swal.fire("{{ session('status') }}");
            </script>
        @endif
    @yield('scripts')
</body>
</html>
