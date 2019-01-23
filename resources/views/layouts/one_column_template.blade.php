<!doctype html>
<html lang="en" dir="ltr">
<head>
    <title>Servicelist - @yield('title')</title>
    @include('layouts.components.meta.basic_meta')
    @include('layouts.components.meta.basic_styles')
    @include('layouts.components.meta.basic_scripts')
    @yield('custom_styles')
    @yield('custom_scripts')
</head>
<body class="">

<div class="page">
    <div class="page-main">
        @yield('header')
        <div class="container-fluid" style="height: 70vh">
            @yield('content')
        </div>
    </div>
    @yield('footer')
</div>
</body>
</html>
