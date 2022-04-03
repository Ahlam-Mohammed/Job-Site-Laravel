@extends('layouts.web.master')

@section('title') Jobs @endsection

@section('content')

    <div class="container-lg">
        <div class="row pt-4 mt-5">
            <!-- header of page -->

            <!-- Filter Section -->
            <section class="col-lg-4 col-md-4 col-sm-12 mb-3">
                <div class="card shadow p-3">
                    <div class="card-header bg-transparent mb-4">
                        <h1 class="fs-4 fw-bold text-primary">
                            <i class="bi bi-funnel fs-5 "></i>
                            <span>Filter</span>
                        </h1>
                    </div>
                    <form class="d-flex flex-column gap-3">
                        <div class="col-12 input-group flex-nowrap position-relative">
                            <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 999; margin-right: 14px;">
                                <i class="bi bi-search text-black-50"></i>
                            </div>
                            <input type="search" id="" class="form-control rounded-pill" placeholder="search" aria-label="email" aria-describedby="addon-wrapping">
                            <!-- </div>
                            <div>
                                <h6 class="text-primary">الشركة</h6>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>وميض</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <h6 class="text-primary">المدينة</h6>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>صنعاء</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <h6 class="text-primary">التصنيفات</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-primary">المهارات</h6>
                            </div> -->
                    </form>
                </div>
            </section>
            <!-- All Job Section -->
            <section class="col-lg-8 col-md-8 col-sm-12">
                <!-- Single Job -->
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details') }}">Sales Executive / Senior Sales Executive</a></h3>
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Hassans Optician <span class="fw-light fs-6">- Al Kuwait</span></a>
                        </div>
                        <div class="p-1 rounded d-flex justify-content-center logo-lg shadow-sm mt-2 ml-5">
                            <img class="img-fluid" src="/images/company/hassanis.png" width="100%" alt="microsoft">
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                            <div class="col-12 fs-7">
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-briefcase text-primary"></i>
                                        <span class="text-secondary">Entry Level</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-hourglass text-primary"></i>
                                        <span class="text-secondary">Full-time</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-cash-stack text-primary"></i>
                                        <span class="text-secondary">$2000 - $1000</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-clock text-primary"></i>
                                        <span class="text-secondary">Feb 01</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <a href="{{ route('details') }}">
                                <p class="fw-light fs-6 text-secondary">As a sales / senior sales executive, you will be working as part of our sales team in order to create a pleasant shopping experience for our customers, create a positive workplace environmen</p>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Single Job -->
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details') }}">Driver</a></h3>
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">360 Nautica <span class="fw-light fs-6">- Dubai</span></a>
                        </div>
                        <div class="p-1 rounded d-flex justify-content-center logo-lg shadow-sm mt-2 ml-5">
                            <img class="img-fluid" src="/images/company/360nautica.png" width="100%" alt="360nautica">
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                            <div class="col-12 fs-7">
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-briefcase text-primary"></i>
                                        <span class="text-secondary">Mid Career</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-hourglass text-primary"></i>
                                        <span class="text-secondary">Full-time</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-cash-stack text-primary"></i>
                                        <span class="text-secondary">$500 - $1000</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-clock text-primary"></i>
                                        <span class="text-secondary">Feb 01</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <a href="{{ route('details') }}">
                                <p class="fw-light fs-6 text-secondary">As a sales / senior sales executive, you will be working as part of our sales team in order to create a pleasant shopping experience for our customers, create a positive workplace environmen</p>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Single Job -->
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                        <div class="px-2">
                            <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details') }}">Area Sales Manager</a></h3>
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">Rawabi Holding Company <span class="fw-light fs-6">- Eastern Province, Saudi Arabia </span></a>
                        </div>
                        <div class="p-1 rounded d-flex justify-content-center logo-lg shadow-sm mt-2 ml-5">
                            <img class="img-fluid" src="/images/company/rawabiHolding.png" width="100%" alt="rawabiHolding">
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                            <div class="col-12 fs-7">
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-briefcase text-primary"></i>
                                        <span class="text-secondary"> Senior Executive</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-hourglass text-primary"></i>
                                        <span class="text-secondary">part-time</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-clock text-primary"></i>
                                        <span class="text-secondary">Feb 01</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <a href="{{ route('details') }}">
                                <p class="fw-light fs-6 text-secondary">The main purpose of the Area Sales Manager job is to be responsible for implementing the company's </p>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Single Job -->
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                        <div class="px-2">
                            <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details') }}">Database Specialist Engineer</a></h3>
                            <a class="text-secondary fs-5 fw-bold mb-0" href="#">PROVEN <span class="fw-light fs-6">- Riyadh</span></a>
                        </div>
                        <div class="p-1 rounded d-flex justify-content-center logo-lg shadow-sm mt-2 ml-5">
                            <img class="img-fluid" src="/images/company/PROVEN.png" width="100%" alt="PROVEN">
                        </div>
                    </div>
                    <div class="card-body p-md-2">
                        <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                            <div class="col-12 fs-7">
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-briefcase text-primary"></i>
                                        <span class="text-secondary">Mid Career</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-hourglass text-primary"></i>
                                        <span class="text-secondary">Full-time</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-cash-stack text-primary"></i>
                                        <span class="text-secondary">$500 - $1000</span>
                                    </a>
                                </div>
                                <div class="d-inline-block px-1">
                                    <a href="{{ route('details') }}">
                                        <i class="bi bi-clock text-primary"></i>
                                        <span class="text-secondary">Feb 01</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <a href="{{ route('details') }}">
                                <p class="fw-light fs-6 text-secondary">Experience in data warehousing, ETL, and data modeling Experience working with SQL and NoSQL databases Experience with data modeling…</p>
                            </a>
                        </div>
                    </div>
                </article>
                <footer>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </footer>
            </section>
        </div>
    </div>

@endsection
