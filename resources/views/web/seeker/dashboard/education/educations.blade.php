@extends('layouts.web.seeker.master')

@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card shadow p-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="fs-3 fw-bold text-primary">Experience</h1>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus fw-bold fs-3 text-primary"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($education as $edu)
                            <div class="col-12 mb-5">
                                <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a><h4>{{ $edu->academic_spec }}</h4></a>
                                        <div>
                                            <button class="btn p-0" data-bs-toggle="modal"
                                                    data-bs-target="#modal-update-{{ $edu->id, $edu->academic_spec, $edu->type, $edu->university, $edu->graduat_date, $edu->average }}">
                                                <i class="bi bi-pencil-square text-primary"></i>
                                            </button>
                                            <button class="btn p-0 m-2" data-bs-toggle="modal"
                                                    data-bs-target="#modal-delete-{{ $edu->id }}">
                                                <i class="bi bi-trash text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="" class="text-black-50 fs-6 d-flex flex-column">
                                            <div class="d-flex gap-4">
                                                <span>{{ $edu->type }}</span> / <span>{{ $edu->university }}</span>
                                            </div>
                                            <div class="d-flex gap-4">
                                                <span>{{ $edu->graduat_date }}</span> - <span>{{ $edu->average }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete -->
                            @include('web.seeker.dashboard.education.model.delete')
                        <!-- Modal Update -->
                            @include('web.seeker.dashboard.education.model.update')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal create -->
    @include('web.seeker.dashboard.education.model.create')

@endsection
