@extends('medical_officer.medical_officer_dashboard')
@section('medical_officer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

@php
$formattedRole = strtolower($profileData->role);
@endphp

<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">User Profile</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-0">
            <div class="row align-items-center">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="d-flex align-items-center justify-content-around m-4">
                        <div class="text-center">
                            <i class="ti ti-file-description fs-6 d-block mb-2"></i>
                            <h4 class="mb-0 fw-semibold lh-1">938</h4>
                            <p class="mb-0 fs-4">Posts</p>
                        </div>
                        <div class="text-center">
                            <i class="ti ti-user-circle fs-6 d-block mb-2"></i>
                            <h4 class="mb-0 fw-semibold lh-1">3,586</h4>
                            <p class="mb-0 fs-4">Followers</p>
                        </div>
                        <div class="text-center">
                            <i class="ti ti-user-check fs-6 d-block mb-2"></i>
                            <h4 class="mb-0 fw-semibold lh-1">2,659</h4>
                            <p class="mb-0 fs-4">Following</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                    <div class="mt-n5">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle"
                                style="width: 110px; height: 110px;" ;>
                                <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden"
                                    style="width: 100px; height: 100px;" ;>
                                    <img src="{{ (!empty($profileData->photo)) ? url('upload/' . $formattedRole . '_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                                        alt="" class="w-100 h-100">

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="fs-5 mb-0 fw-semibold">{{ $profileData->name }}</h5>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0 fs-4">@</p>
                                <p class="mb-0 fs-4">{{ $profileData->username }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-last">
                    <ul
                        class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 gap-3">
                        <li class="position-relative">
                            <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle"
                                href="javascript:void(0)" width="30" height="30">
                                <i class="ti ti-brand-facebook"></i>
                            </a>
                        </li>
                        <li><button class="btn btn-primary">Add To Story</button></li>
                    </ul>
                </div>
            </div>
            <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-light-info rounded-2" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="true">
                        <i class="ti ti-user-circle me-2 fs-6"></i>
                        <span class="d-none d-md-block">Profile</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                        id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button"
                        role="tab" aria-controls="pills-friends" aria-selected="false">
                        <i class="ti ti-user-circle me-2 fs-6"></i>
                        <span class="d-none d-md-block">Hierarchy</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-none border">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-5">Profile Information</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex col align-items-center gap-3 mb-4">
                                    <i class="ti ti-user text-dark fs-6"></i>
                                    <div class="row">
                                        <h6 class="mb-0 fw-semibold">Name</h6>
                                        <span class="fs-3">{{ ucwords($profileData->name) }}</span>
                                    </div>
                                </li>
                                <li class="d-flex col align-items-center gap-3 mb-4">
                                    <i class="ti ti-at text-dark fs-6"></i>
                                    <div class="row">
                                        <h6 class="mb-0 fw-semibold">Username</h6>
                                        <div class="d-flex">
                                            <p class="mb-0 fs-3">@</p>
                                            <span class="fs-3">{{ strtolower($profileData->username) }}</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex col align-items-center gap-3 mb-4">
                                    <i class="ti ti-briefcase text-dark fs-6"></i>
                                    <div class="row">
                                        <h6 class="mb-0 fw-semibold">Role</h6>
                                        <span class="fs-3">{{ ucwords($profileData->role) }}</span>
                                    </div>
                                </li>
                                <li class="d-flex col align-items-center gap-3 mb-4">
                                    <i class="ti ti-mail text-dark fs-6"></i>
                                    <div class="row">
                                        <h6 class="mb-0 fw-semibold">Email</h6>
                                        <span class="fs-3">{{ $profileData->email }}</span>
                                    </div>
                                </li>
                                <li class="d-flex col align-items-center gap-3 mb-4">
                                    <i class="ti ti-phone text-dark fs-6"></i>
                                    <div class="row">
                                        <h6 class="mb-0 fw-semibold">Phone</h6>
                                        <span class="fs-3">@if($profileData->phone !== null)
                                            {{ $profileData->phone }}
                                            @else
                                            N/A
                                            @endif</span>
                                    </div>
                                </li>
                                <li class="d-flex col align-items-center gap-3 mb-4">
                                    <i class="ti ti-map-pin text-dark fs-6"></i>
                                    <div class="row">
                                        <h6 class="mb-0 fw-semibold">Address</h6>
                                        <span class="fs-3">@if($profileData->address !== null)
                                            {{ ucwords($profileData->address) }}
                                            @else
                                            N/A
                                            @endif</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Update {{ ucwords($formattedRole) }} Information</h5>
                            <p class="card-subtitle mb-3">
                                made with bootstrap elements
                            </p>
                            <form class="" method="POST" action="{{ route('medical_officer.profile.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $profileData->name }}">
                                    <label><i class="ti ti-user me-2 fs-4"></i>Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control"
                                        value="{{ $profileData->username }}">
                                    <label><i class="ti ti-at me-2 fs-4"></i>Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ $profileData->email }}">
                                    <label><i class="ti ti-mail me-2 fs-4"></i>Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="phone" class="form-control"
                                        value="{{ $profileData->phone }}">
                                    <label><i class="ti ti-phone me-2 fs-4"></i>Phone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $profileData->address }}">
                                    <label><i class="ti ti-map-pin me-2 fs-4"></i>Address</label>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-10">
                                        <label class="mb-1 fs-3"><i class="ti ti-photo-plus me-2 fs-4"></i>Photo</label>
                                        <input class="form-control" name="photo" type="file" id="image">
                                    </div>
                                    <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 80px; height: 80px;" ;>
                                        <div class="col-2 border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden"
                                            style="width: 75px; height: 75px;">
                                            <img src="{{ (!empty($profileData->photo)) ? url('upload/' . $formattedRole . '_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                                                alt="" class="w-70 h-70" id="showImage">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex align-items-center">
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <button type="submit" class="btn btn-primary font-medium rounded-pill px-4">
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-send me-2 fs-4"></i>
                                                Submit
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab" tabindex="0">
            <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Friends <span
                        class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">2</span></h3>
                <form class="position-relative">
                    <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                        placeholder="Search Friends">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card hover-img">
                        <div class="card-body p-4 text-center border-bottom">
                            <img src="../../dist/images/profile/user-2.jpg" alt="" class="rounded-circle mb-3"
                                width="80" height="80">
                            <h5 class="fw-semibold mb-0">Inez Lyons</h5>
                            <span class="text-dark fs-2">Medical Technician</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
