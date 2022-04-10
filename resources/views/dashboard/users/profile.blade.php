@extends('layouts.dashboard.master')
@php use App\Enum\UserEnum @endphp
@section('title') Users @stop

@section('content')

    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top">
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="@if ($user->avatar) {{ asset(UserEnum::USER_AVATAR_PATH.$user->avatar) }} @else {{ asset(UserEnum::USER_AVATAR_DEFAULT) }} @endif" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ $user->name }}</h4>
                                <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item fw-semibold">
                                        <i class='bx bx-user'></i> {{ $user->full_name }}
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class='bx bx-link-alt'></i> {{ $user->email }}
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class='bx bx-calendar-alt'></i> Joined {{ $user->created_at->format('Y-m-d') }}
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary text-nowrap"
                               data-bs-toggle="modal"
                               data-bs-target="#modal-update-{{ $user->id, $user->name,
                                           $user->full_name, $user->email, $user->getRoleNames() }}">
                                <i class='bx bx-edit'></i> update
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Header -->

    <!-- Navbar pills -->
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <ul class="nav nav-pills flex-column flex-sm-row mb-4">--}}
{{--                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-user'></i> Profile</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="pages-profile-teams.html"><i class='bx bx-group'></i> Teams</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="pages-profile-projects.html"><i class='bx bx-grid-alt'></i> Projects</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="pages-profile-connections.html"><i class='bx bx-link-alt'></i> Connections</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--/ Navbar pills -->

    <!-- User Profile Content -->
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5">
            <!-- About User -->
            <div class="card mb-4">
                <div class="card-body">
                    <small class="text-muted text-uppercase">About</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span> <span>{{ $user->full_name }}</span></li>
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>@if($user->is_active === 1) Active @else DeActive @endif</span></li>
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>{{ $user->getRoleNames()}}</span></li>
                    </ul>
                    <small class="text-muted text-uppercase">Contacts</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span> <span>{{ $user->phone }}</span></li>
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>{{ $user->email }}</span></li>
                    </ul>
                </div>
            </div>
            <!--/ About User -->
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
            <!-- Activity Timeline -->
            <div class="card card-action mb-4">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0"><i class='bx bx-list-ul me-2'></i>Activity Timeline</h5>
                    <div class="card-action-element">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="timeline ms-2">
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-warning"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Client Meeting</h6>
                                    <small class="text-muted">Today</small>
                                </div>
                                <p class="mb-2">Project meeting with john @10:15am</p>
                                <div class="d-flex flex-wrap">
                                    <div class="avatar me-3">
                                        <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                        <span>CEO of Infibeam</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Create a new project for client</h6>
                                    <small class="text-muted">2 Day Ago</small>
                                </div>
                                <p class="mb-0">Add files to new design folder</p>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Shared 2 New Project Files</h6>
                                    <small class="text-muted">6 Day Ago</small>
                                </div>
                                <p class="mb-2">Sent by Mollie Dixon <img src="../../assets/img/avatars/4.png" class="rounded-circle ms-3" alt="avatar" height="20" width="20"></p>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="javascript:void(0)" class="me-3">
                                        <img src="../../assets/img/icons/misc/pdf.png" alt="Document image" width="20" class="me-2">
                                        <span class="h6">App Guidelines</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <img src="../../assets/img/icons/misc/doc.png" alt="Excel image" width="20" class="me-2">
                                        <span class="h6">Testing Results</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-success"></span>
                            <div class="timeline-event pb-0">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0">Project status updated</h6>
                                    <small class="text-muted">10 Day Ago</small>
                                </div>
                                <p class="mb-0">Woocommerce iOS App Completed</p>
                            </div>
                        </li>
                        <li class="timeline-end-indicator">
                            <i class="bx bx-check-circle"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ Activity Timeline -->
        </div>
    </div>
    <!--/ User Profile Content -->

    @include('dashboard.users.modals.update')


@stop
