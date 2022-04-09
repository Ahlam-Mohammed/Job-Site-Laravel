@extends('layouts.web.master')

@section('title') Companies @endsection
@php use App\Enum\CompanyEnum @endphp
@section('content')

    <!-- Banner Section -->
    @include('banner.companies')

    <div class="container-lg pt-4">
        <!-- Companies Section -->
        <section class="row py-5">
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
        </section>
    </div>

@endsection
