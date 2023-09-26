<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('include.core.head')
</head>

<body>

    @include('include.core.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('include.core.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">

            @include('include.core.header')

            <div class="container-fluid">

                @yield('medical_officer')

            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Mobile Navbar -->
    @include('include.core.mobile_navbar')
    <!--  Search Bar -->
    @include('include.core.search_bar')
    <!-- Customizer -->
    @include('include.core.customize')

    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="{{ asset('dist/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('dist/js/forms/bootstrap-switch.js') }}"></script>

    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard2.js') }}"></script>
</body>

</html>
