<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('include.core.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>
    <div class="page-wrapper p-0 overflow-hidden">
        <header class="header mt-3" data-aos="fade-down" data-aos-delay="200"
                                    data-aos-duration="1000">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container">
                    <a class="navbar-brand me-0 py-0" href="/">
                        <img src="{{ asset('dark-logo.png') }}" alt="img-fluid">
                    </a>
                    <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Support</a>
                            </li>
                            <li class="nav-item ms=3">
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 d-flex gap-1">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center"><i class="ti ti-dashboard fs-4 me-2"></i>Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center"><i class="ti ti-login fs-4 me-2"></i>Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center"><i class="ti ti-writing fs-4 me-2"></i>Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="body-wrapper overflow-hidden">
            <section class="hero-section position-relative overflow-hidden mb-0 mb-lg-11">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mt-5 mb-5">
                            <div class="hero-content my-11 my-xl-0">
                                <h1 class="fw-bolder mb-8 mt-5 fs-13" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000"> NutriCare System for
                                    <span class="text-primary"> <br> School Health Care</span> <br>
                                    Services</h1>
                                <h6 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-3 mt-5" data-aos="fade-up"
                                    data-aos-delay="400" data-aos-duration="1000"><i
                                        class="ti ti-rocket text-secondary fs-6"></i>Kick start your contribution for the elementary pupils with</h6>
                                <p class="fs-5 mb-5 text-dark fw-normal" data-aos="fade-up" data-aos-delay="600"
                                    data-aos-duration="1000">The software named <span class="text-primary">NutriCare</span> designed to enhance the efficiency and
                                    effectiveness of school health services and provides a user-friendly interface
                                    and a range of tools and features tailored to
                                    the unique needs of class advisers, school nurses, administrator, and healthcare
                                    professionals.</p>
                                <div class="d-sm-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="800"
                                    data-aos-duration="1000">
                                    <a class="btn btn-primary px-5 btn-hover-shadow d-block mb-3 mb-sm-0"
                                        href="#more">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mb-5" data-aos="fade-left" data-aos-delay="400"
                                    data-aos-duration="1000">
                            <div class="text-center text-lg-end">
                                <img src="https://i.ibb.co/Ptqk1SQ/business-woman-checking-her-mail.png" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>

            </section>
            <section class="bg-primary mt-2" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-duration="1000">
                <div class="container" id="more">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 col-xl-5 pt-lg-5 mt-5 mb-lg-0">
                            <h2 class="fs-8 text-white text-center text-lg-start fw-bolder mb-8">Give Us Feedback to
                                Support the upcoming developments and updates</h2><br><br>
                            <p class="text-white">In tender youth, as buds unfurl with grace,<br>
                                Bright pupils learn, in health, to find their place. <br>
                                Their future's canvas, blank and yet untamed,<br>
                                With care we nurture, hopes and dreams inflamed.<br>
                                <br><br>
                                With wholesome fare and exercise each day,<br>
                                Their bodies strong, their spirits light as fey.<br>
                                In classrooms filled with wisdom's endless stream,<br>
                                We forge a path where Shakespeare's dreams may gleam.</p>
                        </div>
                        <div class="col-lg-5 col-xl-5">
                            <div class="text-center text-lg-end">
                                <img src="https://i.ibb.co/0QCqt5x/download-1.png" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <footer class="footer-part pt-8 pb-5 mt-5" data-aos="fade-up" data-aos-delay="800"
                                    data-aos-duration="1000">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="#">
                                <img src="{{ asset('favicon.ico') }}" alt="" class="img-fluid pb-3">
                            </a>
                            <p class="mb-0 text-dark">All rights reserved by NutriCare. Designed & Developed by <a
                                    class="text-dark text-hover-primary border-bottom border-primary" href="#">NutriCare
                                    Team.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header p-4">
                <img src="{{ asset('favicon.ico') }}" alt="" class="img-fluid" width="150">
            </div>
        </div>
    </div>
    <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>
