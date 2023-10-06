<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('class_adviser.containers.head')
</head>

<body>
    <!-- Preloader -->
    @include('include.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">

                    <!-- Include login/register widgets -->
                    <div class="col-xl-7 col-xxl-8">
                        <a href="/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="{{ asset('dark-logo.png') }}" width="180" alt="">
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="https://i.ibb.co/NZ7NRx0/login-security.png" alt="" class="img-fluid" width="500">
                        </div>
                    </div>


                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-3 fs-7 fw-bolder text-center">Welcome to <span
                                        class="text-primary">NutriCare</span></h2>
                                <div class="position-relative text-center my-4">
                                    <p
                                        class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">
                                        Log In</p>
                                    <span
                                        class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>

                                <!-- Display session status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">

                                    @csrf

                                    <div class="mb-3">
                                        <x-input-label for="login" class="form-label" :value="__('Email')" />
                                        <x-text-input id="login" class="form-control" type="text" name="login"
                                            :value="old('login')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                    </div>

                                    <div class="mb-4">
                                        <x-input-label for="password" :value="__('Password')" class="form-label" />
                                        <x-text-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <label for="remember_me" class="form-check-label text-dark">
                                                <input id="remember_me" type="checkbox" class="form-check-input primary"
                                                    name="remember" checked>
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                        @endif
                                    </div>

                                    <x-primary-button class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                                        {{ __('Log in') }}
                                    </x-primary-button>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">Want to Register?</p>
                                        <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Create an
                                            account</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Import Js Files -->
    <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core files -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('dist/js/custom.js') }}"></script>

</body>

</html>
