@extends('layouts.web.master')

@section('title') Details @stop
@php use App\Enum\CompanyEnum; @endphp
@section('content')

    <!-- Banner Section -->
    @include('banner.details-job')
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
                                        <img class="img-fluid" src="@if (isset($job->user->company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$job->user->company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="30%" alt="microsoft">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center flex-column pb-2">
                                                <h3 class="my-3"><a class="text-primary fs-3" href="#">@if(isset($job->user->company->name)) {{ $job->user->company->name }} @else Job.com @endif</a></h3>
                                                <p class="fs-6 text-black mb-0">@if(isset($job->user->company->industry)) {{ $job->user->company->industry }} @endif</p>
                                                <span class="fs-6 text-black-50 mb-0">@if(isset($job->user->company->country)) {{ $job->user->company->country }} @endif </span>
{{--                                                <button type="button" class="btn btn-primary text-light my-3">Follow</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12">
                        <!-- Similar Jobs -->
                        @if(!(empty($similar)))
                            <article class="card p-2 mb-3 shadow-sm d-lg-block d-none">
                                <div class="card-header bg-transparent">
                                    <h1 class="fs-5">People who applied to this job also applied to</h1>
                                </div>
                            @foreach($similar as $j)
                                <!-- Single Job -->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                                <img class="img-fluid" src="@if (isset($j->user->company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$j->user->company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="100%" alt="microsoft">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-center flex-column">
                                                        <h3 class="mb-0"><a class="text-primary fs-5" href="{{ route('details.job', $j->id) }}">{{ $j->job_title }}</a></h3>
                                                        <p class="fs-7 text-black mb-0">{{ $j->career_field	 }}</p>
                                                        <span class="fs-8 text-black-50 mb-0">@if(isset($j->user->company->name)) {{ $j->user->company->name }} @else Job.com @endif, @if(isset($j->user->company->country)) {{ $j->user->company->country }}  @endif</span>
                                                        <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><hr>
                                @endforeach
                            </article>
                        @endif
                    </div>
                </div>
            </section>
            <!-- Details Job Section -->
            <section class="col-lg-8 col-12">
                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                        <div class="px-2 s">
                            <h3 class="mb-2"><a class="text-primary fs-5 fw-bold">{{ $job->job_title }}</a></h3>
                            <a class="text-secondary fs-5 fw-bold mb-0">{{ $job->career_field }}</a>
                        </div>
                        <div class="p-1 rounded d-flex justify-content-center mt-2 ml-5">
                            <span>Date Posted: {{ $job->created_at->format('Y-m-d') }}</span>
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
                            <p class="fw-light fs-6 text-secondary">{{ $job->description }}</p>
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
                                {{ $job->skills }}
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
                                <b class="col-3">Job Location</b><span class="col-9">@if(isset($job->user->company->country)) {{ $job->user->company->country }} @endif</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Company Industry</b><span class="col-9">@if(isset($job->user->company->industry)) {{ $job->user->company->industry }} @endif</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Job Role</b><span class="col-9">{{ $job->career_field }}</span>
                            </p>
                            <p class="fs-6 text-secondary row">
                                <b class="col-3">Monthly Salary</b><span class="col-9">${{ $job->max_salary }} - ${{ $job->min_salary }}</span>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- Similar Jobs -->
                @if(!(empty($similar)))
                    <article class="card p-2 mb-3 shadow-sm d-lg-none d-block">
                        <div class="card-header bg-transparent">
                            <h1 class="fs-5">People who applied to this job also applied to</h1>
                        </div>
                        @foreach($similar as $j)
                            <!-- Single Job -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-2 col-sm-2 col-3">
                                        <div class="rounded d-flex justify-content-center logo-lg shadow-sm mt-2">
                                            <img class="img-fluid" src="@if (isset($j->user->company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$j->user->company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="100%" alt="microsoft">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-10 col-sm-10 col-9">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-center flex-column">
                                                    <h3 class="mb-0"><a class="text-primary fs-5" href="{{ route('details.job', $j->id) }}">{{ $j->job_title }}</a></h3>
                                                    <p class="fs-7 text-black mb-0">{{ $j->career_field	 }}</p>
                                                    <span class="fs-8 text-black-50 mb-0">@if(isset($j->user->company->name)) {{ $j->user->company->name }} @else Job.com @endif, @if(isset($j->user->company->country)) {{ $j->user->company->country }}  @endif</span>
                                                    <button type="button" class="btn btn-light text-primary mt-2">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>
                        @endforeach
                    </article>
                @endif

            </section>
        </div>
    </div>

@endsection
