@extends('layouts.web.seeker.master')

@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card  shadow p-3">
                <div class="card-header">
                    <h1 class="fs-3 fw-bold text-primary">Acount</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-0">
                            <div class="d-lg-flex d-none justify-content-center align-items-center position-relative">
                                <img src="/images/me2.jpg" width="100%" class="img-fluid rounded-circle" alt="">
                                <button data-bs-toggle="modal" data-bs-target="#editImg" class="position-absolute btn btn-primary" style="bottom:0;left:0;"><i class="bi bi-pencil-square"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control rounded-pill" placeholder="First Name" aria-label="fName" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control rounded-pill" placeholder="Last Name" aria-label="lName" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group flex-nowrap">
                                        <select class="form-select rounded-pill" aria-label="Default select example" required>
                                            <option selected>+967</option>
                                            <option value="1">+965</option>
                                            <option value="2">+965</option>
                                            <option value="3">+965</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control rounded-pill" placeholder="Phone Number" aria-label="phone" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group flex-nowrap">
                                        <input type="email" class="form-control rounded-pill" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <select class="form-select rounded-pill" aria-label="Default select example" required>
                                            <option selected>Gender</option>
                                            <option value="1">Female</option>
                                            <option value="2">Male</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="date" name="" id="" class="form-control rounded-pill">
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <button class="btn btn-primary d-block w-100 rounded-pill" type="submit">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
