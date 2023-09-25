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

          <!-- Include login/register widgets -->
            @include('include.widgets.login_register_page')

            <div class="col-xl-5 col-xxl-4">
              <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div class="col-sm-8 col-md-6 col-xl-9">
                  <h2 class="mb-3 fs-7 fw-bolder text-center">Welcome to NutriCare</h2>

                  <!-- Commented out Google sign-in option
                  <div class="row">
                    <div class="col-12 mb-2 mb-sm-0">
                      <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                      </a>
                    </div>
                  </div> -->

                  <div class="position-relative text-center my-4">
                    <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">Log In</p>
                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                  </div>

                  <!-- Display session status -->
                  <x-auth-session-status class="mb-4" :status="session('status')" />

                  <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-3">
                      <x-input-label for="login" class="form-label" :value="__('Email')"/>
                      <x-text-input id="login" class="form-control" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                      <x-input-label for="password" :value="__('Password')" class="form-label"/>
                      <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                        <label for="remember_me" class="form-check-label text-dark">
                            <input id="remember_me" type="checkbox" class="form-check-input primary" name="remember" checked>
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                      </div>
                      @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                      @endif
                    </div>

                    <x-primary-button class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                        {{ __('Log in') }}
                    </x-primary-button>

                    <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-medium">Want to Register?</p>
                      <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Create an account</a>
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

<!-- authentication-login.html  Fri, 22 Sep 2023 01:37:00 GMT -->
</html>