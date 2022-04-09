@extends('layouts.web.master')

@section('title') Jobs @endsection

@php use App\Enum\CompanyEnum @endphp
@section('content')

    <!-- Banner Section -->
    @include('banner.all-jobs')

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
                @foreach($jobs as $job)
                    <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                            <div class="card-title d-flex justify-content-between align-items-center m-0">
                                <div class="px-2 s">
                                    <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details.job',$job->id) }}">{{ $job->job_title }} / {{ $job->career_field	 }}</a></h3>
                                    <a class="text-secondary fs-5 fw-bold mb-0" href="#">@if(isset($job->user->company->name)) {{ $job->user->company->name }} @else Job.com @endif <span class="fw-light fs-6">- @if(isset($job->user->company->country)) {{ $job->user->company->country }} @endif</span></a>
                                </div>
                                <div class="p-1 rounded d-flex justify-content-center logo-lg shadow-sm mt-2 ml-5">
                                    <img class="img-fluid" src="@if (isset($job->user->company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$job->user->company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="100%" alt="microsoft">
                                </div>
                            </div>
                            <div class="card-body p-md-2">
                                <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                                    <div class="col-12 fs-7">
                                        <div class="d-inline-block px-1">
                                            <a href="{{ route('details.job', $job->id) }}">
                                                <i class="bi bi-briefcase text-primary"></i>
                                                <span class="text-secondary">{{ $job->professional_level }}</span>
                                            </a>
                                        </div>
                                        <div class="d-inline-block px-1">
                                            <a href="{{ route('details.job', $job->id) }}">
                                                <i class="bi bi-hourglass text-primary"></i>
                                                <span class="text-secondary">{{ $job->type }}</span>
                                            </a>
                                        </div>
                                        <div class="d-inline-block px-1">
                                            <a href="{{ route('details.job', $job->id) }}">
                                                <i class="bi bi-cash-stack text-primary"></i>
                                                <span class="text-secondary">${{ $job->max_salary }} - ${{ $job->min_salary }}</span>
                                            </a>
                                        </div>
                                        <div class="d-inline-block px-1">
                                            <a href="{{ route('details.job', $job->id) }}">
                                                <i class="bi bi-clock text-primary"></i>
                                                <span class="text-secondary">{{ $job->created_at->format('Y-m-d') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                                    <div class="col-12 fs-7 text-end">
                                        <div class="d-inline-block px-1">
                                            <a>
                                                @if($job->is_active === 1)
                                                    <span class="badge bg-success p-2 fs-7 fw-normal"> Active</span>
                                                @else
                                                    <span class="badge bg-secondary p-2 fs-7 fw-normal"> DeActive</span>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                @endforeach
                {{-- Pagination --}}
                <div class="d-flex justify-content-center">
                    {!! $jobs->links() !!}
                </div>
{{--                <footer>--}}
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination justify-content-center">--}}
{{--                            <li class="page-item disabled">--}}
{{--                                <a class="page-link">Previous</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#">Next</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </footer>--}}
            </section>
        </div>
    </div>

@endsection
