@extends('layouts.web.master')

@section('title') About @endsection

@section('content')

    <div class="container-lg">
        <!-- About Us Section -->
        <section class="mb-5">
            <header class="d-flex justify-content-center mt-5 mb-lg-4">
                <h1 class="text-primary fw-bold d-inline-block">About Us</span></h1>
            </header>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                    <div >
                        <img src="/images/circle/about.svg" class="img-fluid p-lg-0 p-5" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div>
                        <p class="fs-5">
                            Job.com is Yemen’s national employment service, available as a website and mobile app. We help Yemenies find work and plan their careers, and we make it easier for employers to recruit and hire across the country.
                        </p>
                        <p class="fs-5">
                            job.com strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. Every day, we connect millions of people to new opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="pt-5">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                    <article class="card p-2">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h1 class="text-primary fw-bold fs-2">250M</h1>
                            <p class="text-black-50">unique monthly visitors2</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                    <article class="card p-2">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h1 class="text-primary fw-bold fs-2">250M</h1>
                            <p class="text-black-50">unique monthly visitors2</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                    <article class="card p-2">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h1 class="text-primary fw-bold fs-2">250M</h1>
                            <p class="text-black-50">unique monthly visitors2</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
                    <article class="card p-2">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h1 class="text-primary fw-bold fs-2">250M</h1>
                            <p class="text-black-50">unique monthly visitors2</p>
                        </div>
                    </article>
                </div>
            </div>
        </section><hr class="mt-5">

        <!-- Salary Section -->
        <section>
            <div class="container-fluid">
                <header class="d-flex justify-content-center mt-5">
                    <h1 class="text-primary fw-bold d-inline-block">Salaries <span class="text-dark"> at Job.com</span></h1>
                </header>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                        <!-- Single Salary -->
                        <article class="card p-lg-5 p-md-5">
                            <div class="card-title p-3 d-flex flex-column gap-5 justify-content-center align-items-center m-0">
                                <h3 class="mb-0"><a class="text-primary fs-5" href="#">Monthly Salary Range</a></h3>
                                <p class="text-black-50 mb-0">$1,461-4,179</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-12 mt-4">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <!-- Single Salary -->
                                <article class="card p-3">
                                    <div class="card-title d-flex flex-column gap-3 justify-content-center align-items-center m-0">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Monthly Salary Range</a></h3>
                                        <p class="text-black-50 mb-0">$1,461-4,179</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 mb-3">
                                <!-- Single Salary -->
                                <article class="card p-3">
                                    <div class="card-title d-flex flex-column gap-3 justify-content-center align-items-center m-0">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Monthly Salary Range</a></h3>
                                        <p class="text-black-50 mb-0">$1,461-4,179</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 mb-3">
                                <!-- Single Salary -->
                                <article class="card p-3">
                                    <div class="card-title d-flex flex-column gap-3 justify-content-center align-items-center m-0">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Monthly Salary Range</a></h3>
                                        <p class="text-black-50 mb-0">$1,461-4,179</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 mb-3">
                                <!-- Single Salary -->
                                <article class="card p-3">
                                    <div class="card-title d-flex flex-column gap-3 justify-content-center align-items-center m-0">
                                        <h3 class="mb-0"><a class="text-primary fs-5" href="#">Monthly Salary Range</a></h3>
                                        <p class="text-black-50 mb-0">$1,461-4,179</p>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
