@extends('layouts.web.master')

@section('title') Details @endsection

@section('content')

    <div class="container-lg">
        <div class="row pt-4">
            <section class="col-lg-4 col-12mb-sm-3">
                <div class="row">
                    <div class="col-12">
                        <!-- Company Section -->
                        <article class="card p-4 mb-3 shadow-sm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rounded d-flex justify-content-center shadow-sm mt-2">
                                        <img class="img-fluid" src="/images/company/career.png" width="30%" alt="microsoft">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center flex-column pb-2">
                                                <h3 class="my-3"><a class="text-primary fs-3" href="#">Career Hunters</a></h3>
                                                <p class="fs-6 text-black mb-0">General Engineering Consultancy</p>
                                                <span class="fs-6 text-black-50 mb-0">Al Kuwait </span>
                                                <button type="button" class="btn btn-primary text-light my-3">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12">
                        <!-- Similar Jobs -->
                        <article class="card p-2 mb-3 shadow-sm d-lg-block d-none">
                            <div class="card-header bg-transparent">
                                <h1 class="fs-5">People who applied to this job also applied to</h1>
                            </div>
                            <!-- Single Job -->
                            <div class="row">
                                <div class="col-3">
                                    <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                        <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="microsoft">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center flex-column">
                                                <h3 class="mb-0"><a class="text-primary fs-5" href="#">Area Sales Manager</a></h3>
                                                <p class="fs-7 text-black mb-0">Rawabi Holding Company</p>
                                                <span class="fs-8 text-black-50 mb-0">Eastern Province, Saudi Arabia</span>
                                                <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><hr>
                            <!-- Single Job -->
                            <div class="row">
                                <div class="col-3">
                                    <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                        <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="microsoft">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center flex-column">
                                                <h3 class="mb-0"><a class="text-primary fs-5" href="#">Area Sales Manager</a></h3>
                                                <p class="fs-7 text-black mb-0">Rawabi Holding Company</p>
                                                <span class="fs-8 text-black-50 mb-0">Eastern Province, Saudi Arabia</span>
                                                <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><hr>
                            <!-- Single Job -->
                            <div class="row">
                                <div class="col-3">
                                    <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                        <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="microsoft">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center flex-column">
                                                <h3 class="mb-0"><a class="text-primary fs-5" href="#">Area Sales Manager</a></h3>
                                                <p class="fs-7 text-black mb-0">Rawabi Holding Company</p>
                                                <span class="fs-8 text-black-50 mb-0">Eastern Province, Saudi Arabia</span>
                                                <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- Details Job Section -->
            <section class="col-lg-8 col-12">
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <h3 class="mb-2"><a class="text-primary fs-5 fw-bold">Information Technology Consulting Manager</a></h3>
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Information Technology</a>
                        </div>
                        <div class="p-1 rounded d-flex justify-content-center mt-2 ml-5">
                            <span>Date Posted: Dec 29</span>
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="d-flex align-items-center gap-3 mt-2">
                            <div class="d-inline-block">
                                <button class="btn btn-light text-primary">Apply Now</button>
                            </div>
                            <div class="d-inline-block px-1">
                                <i class="bi bi-heart text-primary"></i>
                            </div>
                            <div class="d-inline-block px-1">
                                <i class="bi bi-bell text-primary"></i>
                            </div>
                            <div class="d-inline-block px-1">
                                <i class="bi bi-share text-primary"></i>
                            </div>
                            <div class="d-inline-block px-1">
                                <i class="bi bi-download text-primary"></i>
                            </div>
                        </div>

                        <div class="my-2">
                            <a href="../templates/detailsJob.html">
                                <!-- <p class="fw-light fs-6 text-secondary">As a sales / senior sales executive, you will be working as part of our sales team in order to create a pleasant shopping experience for our customers, create a positive workplace environmen</p> -->
                            </a>
                        </div>
                    </div>
                </article>
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-header d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Job Description</a>
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="my-2">
                            <p class="fw-light fs-6 text-secondary">Report to : Director, IT Consulting Department or his deputy.   Key Responsibilities To implement firm engagements with clients in…Report to: Director, IT Consulting Department or his deputy.  ... framework as per SWIFT Standards, IT-related regulations issued by the ... for the Professional Practice of Internal</p>
                        </div>
                    </div>
                </article>
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-header d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Key Responsibilities</a>
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="my-2">
                            <p class="fw-light fs-6 text-secondary">
                                To implement firm engagements with clients in relation to cyber security audit, networks audit and establishing ICT process, policies and procedures manuals for ICT departments.
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                ·       Experience of Cyber security framework as per Central Bank of Kuwait instructions, SWIFT framework as per SWIFT Standards, IT-related regulations issued by the regulatory authorities.
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                ·       Experience in International Standards for the Professional Practice of Internal Auditing related to auditing IT functions within business entities.
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                ·       Experience in Laws, instructions and regulations issued by Central Bank of Kuwait regarding FinTech and cyber security.
                            </p>
                        </div>
                    </div>
                </article>
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-header d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Skills</a>
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="my-2">
                            <p class="fw-light fs-6 text-secondary">
                                1.     Requirement open for all nationals.
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                2.     Bachelor’s degree in information technology.
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                3.     Certified Lead Auditor ISO 27001.
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                4.     Certified in Information Technology Audit (CISA).
                            </p>
                            <p class="fw-light fs-6 text-secondary">
                                5.     Certified in cyber security audit.
                            </p>
                        </div>
                    </div>
                </article>
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-header d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Job Details..</a>
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="my-2">
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Job Location</b><span class="col-9">Al Kuwait, Kuwait</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Company Industry</b><span class="col-9">Recruitment & Employee Placement Agency; Accounting</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Company Type</b><span class="col-9">Recruitment Agency</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Job Role</b><span class="col-9">Information Technology</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Employment Type</b><span class="col-9">Unspecified</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Monthly Salary</b><span class="col-9">$2000 - $1000</span>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- Similar Jobs -->
                <article class="card p-2 mb-3 shadow-sm d-lg-none d-block">
                    <div class="card-header bg-transparent">
                        <h1 class="fs-5">People who applied to this job also applied to</h1>
                    </div>
                    <!-- Single Job -->
                    <div class="row">
                        <div class="col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="microsoft">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center flex-column">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Area Sales Manager</a></h3>
                                        <p class="fs-7 text-black mb-0">Rawabi Holding Company</p>
                                        <span class="fs-8 text-black-50 mb-0">Eastern Province, Saudi Arabia</span>
                                        <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <!-- Single Job -->
                    <div class="row">
                        <div class="col-3">
                            <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="microsoft">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center flex-column">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Area Sales Manager</a></h3>
                                        <p class="fs-7 text-black mb-0">Rawabi Holding Company</p>
                                        <span class="fs-8 text-black-50 mb-0">Eastern Province, Saudi Arabia</span>
                                        <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <!-- Single Job -->
                    <div class="row">
                        <div class="col-3">
                            <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="microsoft">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center flex-column">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Area Sales Manager</a></h3>
                                        <p class="fs-7 text-black mb-0">Rawabi Holding Company</p>
                                        <span class="fs-8 text-black-50 mb-0">Eastern Province, Saudi Arabia</span>
                                        <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>

@endsection
