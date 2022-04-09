@extends('layouts.web.seeker.master')
@php
    use App\Enum\CompanyEnum;
    use App\Enum\JobEnum;
@endphp
@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card shadow p-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="fs-3 fw-bold text-primary">Jobs</h1>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#create"><i class="bi bi-plus fw-bold fs-3 text-primary"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if(isset($jobs))
                            @foreach($jobs as $job)
                                <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                                    <div class="card-title d-flex justify-content-between align-items-center m-0">
                                        <div class="px-2 s">
                                            <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details.job', $job->id) }}">{{ $job->job_title }} / {{ $job->career_field }}</a></h3>
                                            <a class="text-secondary fs-5 fw-bold mb-0" href="{{ route('details.job', $job->id) }}">{{ $job->user->company->name }}<span class="fw-light fs-6">- {{ $job->user->company->country }}</span></a>
                                        </div>
                                        <div class="p-1 rounded d-flex justify-content-center">
                                            <div>
                                                <div class="dropdown">
                                                    <a role="button" class="" id="drop" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu" aria-labelledby="drop">
                                                        <li class="p-2">
                                                            <a class="dropdown-item" role="button" data-bs-toggle="modal"
                                                               data-bs-target="#modal-update-{{ $job->id, $job->job_title, $job->career_field, $job->description, $job->type, $job->max_salary, $job->min_salary, $job->professional_level, $job->skills}}">
                                                                <i class="bi bi-pencil-square text-primary"></i>
                                                                <span class="d-inline-block"> Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="p-2">
                                                            <a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $job->id }}">
                                                                <i class="bi bi-trash text-danger"></i>
                                                                <span class="d-inline-block"> Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                                    <a href="{{ route('company.job.active', $job->id) }}">
                                                        @if($job->is_active === 1)
                                                            <span class="badge bg-success p-2 fs-7 fw-normal"> Active</span>
                                                        @else
                                                            <span class="badge bg-secondary p-2 fs-7 fw-normal"> DeActive</span>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="d-inline-block px-1">
                                                    @if($job->status === JobEnum::STATUS_UNDER_APPROVAL)
                                                        <span class="badge bg-light text-dark p-2 fs-7 fw-normal"> {{ $job->status }}</span>
                                                    @elseif($job->status === JobEnum::STATUS_APPROVED)
                                                        <span class="badge bg-primary p-2 fs-7 fw-normal"> {{ $job->status }}</span>
                                                    @elseif($job->status === JobEnum::STATUS_DISAPPROVAL)
                                                        <span class="badge bg-danger p-2 fs-7 fw-normal"> {{ $job->status }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <!-- Modal Delete -->
                                @include('web.company.dashboard.job.model.delete')
                                <!-- Modal Update -->
                                @include('web.company.dashboard.job.model.update')
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal create -->
    @include('web.company.dashboard.job.model.create')

@endsection
