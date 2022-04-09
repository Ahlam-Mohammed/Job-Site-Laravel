@extends('layouts.web.seeker.master')

@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card shadow p-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="fs-3 fw-bold text-primary">Languages</h1>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill"><i class="bi bi-plus fw-bold fs-3 text-primary"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- single skill -->
                        @foreach($languages as $language)
                            <div class="col-6 mb-5">
                                <div class="bg-light border-primary border-3 border-start shadow-sm p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="text-primary">{{ $language->language }}</h4>
                                        <div>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#modal-update-{{ $language->id, $language->language, $language->level }}">
                                                <i class="bi bi-pencil-square text-primary"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $language->id }}">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h6 class="text-black">{{ $language->level }}</h6>
                                </div>
                            </div>

                            <!-- Modal Delete -->
                            @include('web.seeker.dashboard.language.model.delete')
                        <!-- Modal Update -->
                            @include('web.seeker.dashboard.language.model.update')

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    @include('web.seeker.dashboard.language.model.create')

@endsection
