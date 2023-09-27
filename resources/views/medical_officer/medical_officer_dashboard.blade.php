<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('medical_officer.containers.head')
</head>

<body>

    @include('include.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('medical_officer.containers.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">

            @include('medical_officer.containers.header')

            <div class="container-fluid">

                @yield('medical_officer')

            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Mobile Navbar -->
    @include('medical_officer.containers.mobile')
    <!--  Search Bar -->
    @include('medical_officer.containers.search')
    <!-- Customizer -->
    @include('include.customize')
    <!-- Js -->
    @include('medical_officer.containers.js')
    <!-- Toaster -->
    @include('medical_officer.containers.toastr')
</body>

</html>
