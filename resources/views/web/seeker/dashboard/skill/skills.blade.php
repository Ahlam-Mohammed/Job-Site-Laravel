@extends('layouts.web.seeker.master')

@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card shadow p-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="fs-3 fw-bold text-primary">Skills</h1>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill"><i class="bi bi-plus fw-bold fs-3 text-primary"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- single skill -->
                        @foreach($skills as $skill)
                            <div class="col-12 mb-5">
                                <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="text-primary">{{ $skill->name }}</h4>
                                        <div>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#modal-update-{{ $skill->id, $skill->name, $skill->level }}">
                                                <i class="bi bi-pencil-square text-primary"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $skill->id }}">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $skill->level }}%;" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100">{{ $skill->level }}%</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Delete -->
                            @include('web.seeker.dashboard.skill.model.delete')
                            <!-- Modal Update -->
                            @include('web.seeker.dashboard.skill.model.update')

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    @include('web.seeker.dashboard.skill.model.create')

@endsection
