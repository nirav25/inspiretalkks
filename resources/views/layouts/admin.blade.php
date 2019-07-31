<!doctype html>
<html lang="en">

<!-- Mirrored from bootadmin.net/demo by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 12:48:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('includes.cssfiles')
    @yield('css')
    <title>Dashboard | BootAdmin</title>
</head>
<body class="bg-light">
    @include('includes.header')

    <div class="d-flex">
        @auth
        @include('includes.sidenav')
        @endauth
        
        <div class="content p-4">
            @yield('content')
        </div>
    </div>
    @include('includes.jsfiles')
    @yield('script')
</body>

<!-- Mirrored from bootadmin.net/demo by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 12:48:38 GMT -->
</html>