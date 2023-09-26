@extends('medical_officer.medical_officer_dashboard')
@section('medical_officer')
<div class="row">
    <div class="col-12 d-flex align-items-stretch">
        <div class="card w-100 bg-light-info overflow-hidden shadow-none">
            <div class="card-body position-relative">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="d-flex align-items-center mb-7">
                            <div class="rounded-circle overflow-hidden me-6 border border-5 border-primary">
                                <img class="rounded-circle m-1" src="../../dist/images/profile/user-1.jpg" alt=""
                                    width="60" height="60">
                            </div>
                            <h5 class="fw-semibold mb-0 ms-2 fs-5">Welcome back Mathew Anderson!</h5>
                        </div>
                        <div class="position-relative">
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="border-end pe-4 border-muted border-opacity-10">
                                <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">$2,340<i
                                        class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                <p class="mb-0 text-dark">Today’s Sales</p>
                            </div>
                            <div class="ps-4">
                                <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">35%<i
                                        class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                <p class="mb-0 text-dark">Overall Performance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="welcome-bg-img mb-n7 text-end">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/welcome-bg.svg"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
