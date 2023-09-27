<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('school_nurse.containers.head')
</head>

<body>

    @include('include.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('school_nurse.containers.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">

            @include('school_nurse.containers.header')

            <div class="container-fluid">

                @yield('school_nurse')

            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Mobile Navbar -->
    @include('school_nurse.containers.mobile')
    <!--  Search Bar -->
    @include('school_nurse.containers.search')
    <!-- Customizer -->
    @include('include.customize')
    <!-- Js -->
    @include('school_nurse.containers.js')
    <!-- Toaster -->
    @include('school_nurse.containers.toastr')
</body>

</html>
