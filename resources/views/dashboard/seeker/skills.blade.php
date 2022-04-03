@extends('layouts.dashboard.seeker.master')

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
                        <div class="col-12 mb-5">
                            <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Photoshop</h4>
                                    <div>
                                        <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                            <i class="bi bi-pencil-square text-primary"></i>
                                        </a>
                                        <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                            <i class="bi bi-trash text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">65%</div>
                                </div>
                            </div>
                        </div>
                        <!-- single skill -->
                        <div class="col-12 mb-5">
                            <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Photoshop</h4>
                                    <div>
                                        <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                            <i class="bi bi-pencil-square text-primary"></i>
                                        </a>
                                        <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                            <i class="bi bi-trash text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>
                        </div>
                        <!-- single skill -->
                        <div class="col-12 mb-5">
                            <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Photoshop</h4>
                                    <div>
                                        <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                            <i class="bi bi-pencil-square text-primary"></i>
                                        </a>
                                        <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                            <i class="bi bi-trash text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
