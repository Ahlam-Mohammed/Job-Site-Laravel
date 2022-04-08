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
                        @foreach($experiences as $experience)
                            <div class="col-12 mb-5">
                                <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a><h4>{{ $experience->job_title }}</h4></a>
                                        <div>
                                            <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#modal-update-{{ $experience->id, $experience->job_title, $experience->career_field, $experience->company_name, $experience->start_date, $experience->end_date, $experience->is_work }}"><i class="bi bi-pencil-square text-primary"></i></button>
                                            <button class="btn p-0 m-2" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $experience->id }}""><i class="bi bi-trash text-danger"></i></button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="" class="text-black-50 fs-6 d-flex flex-column">
                                            <span>{{ $experience->career_field }} - {{ $experience->company_name }}</span>
                                            <div class="d-flex gap-4">
                                                <span>{{ $experience->start_date }}</span> - <span>{{ $experience->end_date }}</span>
                                            </div>
                                            <p></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete -->
                            @include('web.seeker.dashboard.experience.model.delete')
                            <!-- Modal Update -->
                            @include('web.seeker.dashboard.experience.model.update')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal create -->
   @include('web.seeker.dashboard.experience.model.create')

@endsection
