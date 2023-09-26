<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.containers.head')
</head>

<body>

    @include('include.core.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('admin.containers.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">

            @include('admin.containers.header')

            <div class="container-fluid">

                @yield('admin')

            </div>
            
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Mobile Navbar -->
    @include('admin.containers.mobile')
    <!--  Search Bar -->
    @include('admin.containers.search')
    <!-- Customizer -->
    @include('include.core.customize')
    <!-- Js -->
    @include('admin.containers.js')
</body>

</html>
