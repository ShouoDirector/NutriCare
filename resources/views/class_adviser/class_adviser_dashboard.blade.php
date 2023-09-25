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

                <!-- Put anything here -->

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

    <!--Minimal Required JS Files -->
    @include('include.core.js_files')

</body>

</html>
