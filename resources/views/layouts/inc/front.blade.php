<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <!-- CSS -->
    
    <link rel="stylesheet" href="{{ asset ('frontend/css/black-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset ('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset ('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('frontend/css/owl.theme.default.min.css') }}">    
    
</head>
<body>

   @include('layouts.inc.frontnavbar')
   
    <div class="content">
         @yield('content')
    </div>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="{{ asset('frontend/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/black-dashboard.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/jquery-3.6.3.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
        @if(session('status'))
            <script>
                swal.fire("{{ session('status') }}");
            </script>
        @endif
    @yield('scripts')
</body>
</html>
