@extends('layouts.web.seeker.master')

@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card shadow p-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="fs-3 fw-bold text-primary">Education</h1>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#addEducation"><i class="bi bi-plus fw-bold fs-3 text-primary"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- single education -->
                        <div class="col-12 mb-5">
                            <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="../templates/detailsExp.html"><h4><b>Information Technology</b> <span class="fs-5">, Bachelor's degree</span></h4></a>
                                    <div>
                                        <div class="dropdown">
                                            <a role="button" class="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li class="p-2">
                                                    <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#addEducation">
                                                        <i class="bi bi-pencil-square text-primary"></i>
                                                        <span class="d-inline-block"> Edit</span>
                                                    </a>
                                                </li>
                                                <li class="p-2">
                                                    <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                        <i class="bi bi-trash text-danger"></i>
                                                        <span class="d-inline-block"> Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../templates/detailsExp.html" class="text-black-50 fs-6 d-flex flex-column">
                                        <h6 class="text-black">University of Science and Technology</h6>
                                        <span>Yemen - Sanaa</span>
                                        <span>May 2021</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single education -->
                        <div class="col-12 mb-5">
                            <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="../templates/detailsExp.html"><h4><b>Information Technology</b> <span class="fs-5">, Bachelor's degree</span></h4></a>
                                    <div>
                                        <div class="dropdown">
                                            <a role="button" class="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li class="p-2">
                                                    <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#addEducation">
                                                        <i class="bi bi-pencil-square text-primary"></i>
                                                        <span class="d-inline-block"> Edit</span>
                                                    </a>
                                                </li>
                                                <li class="p-2">
                                                    <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                        <i class="bi bi-trash text-danger"></i>
                                                        <span class="d-inline-block"> Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../templates/detailsExp.html" class="text-black-50 fs-6 d-flex flex-column">
                                        <h6 class="text-black">University of Science and Technology</h6>
                                        <span>Yemen - Sanaa</span>
                                        <span>May 2021</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
