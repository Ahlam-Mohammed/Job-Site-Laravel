@extends('layouts.web.master')

@section('title') Home @endsection

@php use App\Enum\CompanyEnum @endphp
@section('content')

    <div class="container-lg pt-5">
        <div class="row">
            <!-- Last Job Section -->
            <section class="col-12">
                <header class="d-flex justify-content-center mb-lg-4">
                    <h1 class="text-primary fw-bold d-inline-block">Featured <span class="text-dark"> Job Circulars</span></h1>
                </header>
                <div class="row">
                    @if(isset($jobs))
                        @foreach($jobs as $job)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
                                <!-- Single Job -->
                                <article class="card p-2 search-job" style="max-height: 250px; height: 250px">
                                    <div class="card-title d-flex align-items-center m-0">
                                        <div class="p-1 rounded d-flex justify-content-center logo shadow-sm mt-2">
                                            <img class="img-fluid" src="@if (isset($job->user->company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$job->user->company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="100%" alt="microsoft">
                                        </div>
                                        <div class="px-2">
                                            <h3 class="mb-0"><a class="text-primary fs-5" href="@if(isset($job->user->company->id)){{ route('company.profile', $job->user->id) }}@endif">@if(isset($job->user->company->name)) {{ $job->user->company->name }} @else Job.com @endif</a></h3>
                                            <p class="fs-8 text-black-50 mb-0">@if(isset($job->user->company->country)) {{ $job->user->company->country }} @endif</p>
                                        </div>
                                    </div>
                                    <div class="card-body p-md-2">
                                        <div class="mt-2">
                                            <h1 class="fs-5 fw-bold mb-0"><a href="{{ route('details.job', $job->id) }}">{{ substr($job->job_title,0,30) }}</a></h1>
                                            <span class="fs-8 fw-bold text-muted">{{ $job->type }}</span>
                                        </div>
                                        <div class="my-2">
                                            <p class="fw-light fs-6 text-black-50">{{ substr($job->description, 0,50) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- <h5 class="fw-bold">$6700<span class="fs-8 text-black-50">/month</span></h5> -->
                                            <button type="button" class="btn btn-light text-primary" trigger="hover">Apply Now</button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center my-4">
                        <button class="btn btn-outline-primary rounded-pill text-capitalize"><a href="{{ route('all.job') }}">find more job</a></button>
                    </div>
                </div>
            </section>
            <!-- Advertisement Section -->
            <section class="col-12">
                <div >
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <img src="/images/banner/2_4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <img src="/images/banner/2_6.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Companies Section -->
            <section class="col-12 py-5">
                <header class="d-flex justify-content-center mb-lg-4">
                    <h1 class="text-primary fw-bold d-inline-block">Our <span class="text-dark"> Partenters</span></h1>
                </header>
                <div class="row">
                    @if(isset($companies))
                        @foreach($companies as $company)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <article class="card p-2 mb-3 shadow-sm search-job">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="rounded d-flex justify-content-center shadow-sm mt-2">
                                                <img class="img-fluid" src="@if (isset($company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="100%" alt="microsoft">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-center flex-column">
                                                        <h3 class="mb-0">
                                                            <a class="text-primary fs-5" href="@if(isset($company->id)){{ route('company.profile', $company->user->id) }}@endif">
                                                                @if(isset($company->name)) {{ $company->name }} @else Job.com @endif
                                                            </a>
                                                        </h3>
                                                        <p class="fs-7 text-black mb-0">
                                                            @if(isset($company->industry)) {{ $company->industry }} @endif
                                                        </p>
                                                        <span class="fs-8 text-black-50 mb-0">@if(isset($company->country)) {{ $company->country }} @endif</span>
                                                        <button type="button" class="btn btn-light text-primary">Follow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection
