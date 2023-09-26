<!DOCTYPE html>
<html lang="en">
  
<head>
  @include('include.head')
</head>

  <body>

    <!-- Preloader -->
    @include('include.preloader')

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-lg-6 col-xl-8 col-xxl-9">
              <a href="/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="{{ asset('dark-logo.png') }}" width="180" alt="">
              </a>
              <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="https://i.ibb.co/NZ7NRx0/login-security.png" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body">
                    <div class="mb-5">
                      <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
                      <p class="mb-0 ">   
                        Please enter the email address associated with your account and We will email you a link to reset your password.                
                      </p>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                      @csrf

                      <div class="mb-3">
                          <x-input-label class="form-label" for="email" :value="__('Email')" />
                          <x-text-input  class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus />
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>

                      <div class="flex items-center justify-end mt-4">
                          <x-primary-button class="btn btn-primary w-100 py-8 mb-3">
                              {{ __('Email Password Reset Link') }}
                          </x-primary-button>
                      </div>

                      <a href="{{ route('login') }}" class="btn btn-light-primary text-primary w-100 py-8">Back to Login</a>
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
    <!-- core files -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('dist/js/custom.js') }}"></script>

  </body>

<!-- authentication-forgot-password.html  Fri, 22 Sep 2023 01:37:00 GMT -->
</html>