@extends('layouts.web.seeker.master')

@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card shadow p-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="fs-3 fw-bold text-primary">Your Information</h1>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill"><i class="bi bi-plus fw-bold fs-3 text-primary"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- single skill -->
                        @foreach($seeker as $data)
                            <div class="col-12 mb-5">
                                <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="text-primary">{{ $data->job_title }}</h4>
                                        <div>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#modal-update-{{ $data->id, $data->career_field, $data->job_title, $data->professional_level }}">
                                                <i class="bi bi-pencil-square text-primary"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $data->id }}">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="text-secondary fs-5 fw-bold mb-0" href="#">{{ $data->career_field }}<span class="fw-light fs-6">- {{ $data->professional_level }}</span></a>
                                </div>
                            </div>

                            <!-- Modal Delete -->
                            @include('web.seeker.dashboard.information.model.delete')
                            <!-- Modal Update -->
                            @include('web.seeker.dashboard.information.model.update')

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    @include('web.seeker.dashboard.information.model.create')

@endsection
