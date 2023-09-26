<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('class_adviser.containers.head')
</head>

<body>

    @include('include.core.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('class_adviser.containers.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">

            @include('class_adviser.containers.header')

            <div class="container-fluid">

                @yield('class_adviser')

            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Mobile Navbar -->
    @include('class_adviser.containers.mobile')
    <!--  Search Bar -->
    @include('class_adviser.containers.search')
    <!-- Customizer -->
    @include('include.core.customize')
    <!-- Js -->
    @include('class_adviser.containers.js')

</body>

</html>
