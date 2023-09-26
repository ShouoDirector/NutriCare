
<!-- --------------------------------------------------- -->
<!-- Sidebar -->
<!-- --------------------------------------------------- -->

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="index-2.php" class="text-nowrap logo-img">
                <img id="darkLogo" src="{{ asset('dark-logo.png') }}"
                    class="dark-logo" width="180" alt="" />
                <img id="lightLogo" src="{{ asset('light-logo.png') }}"
                    class="light-logo" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                
                <!-- ============================= -->
                <!-- Apps -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-calendar.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-calendar"></i>
                        </span>
                        <span class="hide-menu">Calendar</span>
                    </a>
                </li>
                                
                <!-- ============================= -->
                <!-- PAGES -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PAGES</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="page-account.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="page-account-settings.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-cog"></i>
                        </span>
                        <span class="hide-menu">Account Setting</span>
                    </a>
                </li>
                
                <!-- ============================= -->
                <!-- OTHER -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">OTHER</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link link-disabled" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-ban"></i>
                        </span>
                        <span class="hide-menu">Disabled</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-star"></i>
                        </span>
                        <div class="lh-base">
                            <span class="hide-menu">SubCaption</span>
                            <span class="hide-menu fs-2">This is the sutitle</span>
                        </div>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-award"></i>
                            </span>
                            <span class="hide-menu">Chip</span>
                        </div>
                        <div class="hide-menu">
                            <span
                                class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center round-20 p-0">9</span>
                        </div>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                            <span class="d-flex">
                                <i class="ti ti-mood-smile"></i>
                            </span>
                            <span class="hide-menu">Outlined</span>
                        </div>
                        <span
                            class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-star"></i>
                        </span>
                        <span class="hide-menu">Documentation</span>
                    </a>
                </li>
            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                <div class="d-flex">
                    <div class="unlimited-access-title">
                        <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Get A VIP Access</h6>
                        <button class="btn btn-primary fs-2 fw-semibold lh-sm">Rocket</button>
                    </div>
                    <div class="unlimited-access-img">
                        <img src="../../dist/images/backgrounds/rocket.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40"
                        alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                    aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->