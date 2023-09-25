<!DOCTYPE html>
<html lang="en">
  
<head>
  @include('include.core.head')
</head>

  <body>
    <!-- Preloader -->
    @include('include.core.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">

          <div class="col-xl-7 col-xxl-8">
            <a href="/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="{{ asset('dark-logo.png') }}" width="180" alt="">
            </a>
            <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="https://i.ibb.co/NZ7NRx0/login-security.png" alt="" class="img-fluid" width="500">
            </div>
          </div>


            <div class="col-xl-5 col-xxl-4">
              <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div class="col-sm-8 col-md-6 col-xl-9">
                  <h2 class="mb-3 fs-7 fw-bolder text-center">Welcome to <span class="text-primary">NutriCare</span></h2>
                  <div class="row">

                    <!-- <div class="col-12 mb-2 mb-sm-0">
                      <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                      </a>
                    </div> -->

                  </div>
                  <div class="position-relative text-center my-4">
                    <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">Register Now</p>
                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                  </div>

                  <div id="registrationForm">
                    <form method="POST" action="{{ route('register') }}">
                      @csrf

                      <!-- Name -->
                      <div class="mb-3">
                        <x-input-label class="form-label" for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                      </div>

                      <!-- Email  -->
                      <div class="mb-3">
                        <x-input-label class="form-label" for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                      </div>

                      <!-- Password -->
                      <div class="mb-4">
                          <x-input-label class="form-label" for="password" :value="__('Password')" />

                          <x-text-input id="password" class="form-control"
                                          type="password"
                                          name="password"
                                          required autocomplete="new-password" />
                          <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                      </div>

                      <!-- Confirm Password -->
                      <div class="mb-4">
                          <x-input-label class="form-label" for="password_confirmation" :value="__('Confirm Password')" />

                          <x-text-input id="password_confirmation" class="form-control"
                                          type="password"
                                          name="password_confirmation" required autocomplete="new-password" />
                          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                      </div>

                      <x-primary-button class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                          {{ __('Register') }}
                      </x-primary-button>

                      <div class="d-flex align-items-center">
                        <p class="fs-4 mb-0 me-2 text-dark">Already have an Account?</p>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Log In') }}
                        </a>
                      </div>
                    </form>
                  </div>

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

<!-- authentication-register.html  Fri, 22 Sep 2023 01:37:00 GMT -->
</html>