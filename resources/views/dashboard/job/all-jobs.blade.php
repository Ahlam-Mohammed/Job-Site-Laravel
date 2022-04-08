@extends('layouts.dashboard.master')
@php use App\Enum\JobEnum@endphp
@section('title') Jobs @stop

@section('content')

    <div class="card">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h5 class="card-header">All Jobs</h5>
            <a class="dt-button inline text-light create-new btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#create">
            <span>
                <i class="bx bx-plus me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Job</span>
            </span>
            </a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Type</th>
                    <th>Professional Level</th>
                    <th>Is Active</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if(isset($jobs))
                    @foreach($jobs as $job)
                        <tr>
                            <td><strong>{{ $job->job_title }}</strong></td>
                            <td>{{ $job->type }}</td>
                            <td>{{ $job->professional_level }}</td>
                            <td>
                                @if($job->is_active === 1)
                                    <a href="{{ route('dashboard.jobs.active', $job->id) }}">
                                        <span class="badge bg-label-primary me-1"> Active</span>
                                    </a>
                                @else
                                    <a href="{{ route('dashboard.jobs.active', $job->id) }}">
                                        <span class="badge bg-label-warning me-1"> DeActive</span>
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($job->status === JobEnum::STATUS_UNDER_APPROVAL)
                                    <span class="badge bg-label-success me-1"> {{ $job->status }}</span>
                                @elseif($job->status === JobEnum::STATUS_APPROVED)
                                    <span class="badge bg-label-primary me-1"> {{ $job->status }}</span>
                                @else
                                    <span class="badge bg-label-warning me-1"> {{ $job->status }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="javascript:void(0);"
                                           data-bs-toggle="modal"
                                           data-bs-target="#modal-update-{{ $job->id , $job->job_title, $job->career_field, $job->description, $job->type, $job->max_salary, $job->min_salary, $job->professional_level, $job->skills }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <a class="dropdown-item"
                                           href="javascript:void(0);"
                                           data-bs-toggle="modal"
                                           data-bs-target="#modal-delete-{{ $job->id }}">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                        @if($job->status === JobEnum::STATUS_UNDER_APPROVAL)
                                            <a class="dropdown-item"
                                               href="{{ route('dashboard.jobs.status', [ 'id' => $job->id, 'status' => JobEnum::STATUS_APPROVED ]) }}">
                                                <i class='bx bx-check me-1 text-primary'></i> Approval
                                            </a>
                                            <a class="dropdown-item"
                                               href="{{ route('dashboard.jobs.status', [ 'id' => $job->id, 'status' => JobEnum::STATUS_DISAPPROVAL ]) }}">
                                                <i class='bx bx-x me-1 text-danger'></i> Disapproval
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        @include('dashboard.job.modals.update')

                        <!-- Modal Delete -->
                        @include('dashboard.job.modals.delete')

                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal create -->
    @include('dashboard.job.modals.create')

@stop
