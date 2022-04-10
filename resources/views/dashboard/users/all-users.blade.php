@extends('layouts.dashboard.master')
@php use App\Enum\RoleEnum @endphp
@section('title') Users @stop

@section('content')

    <div class="card">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h5 class="card-header">All Users</h5>
            <a class="dt-button inline text-light create-new btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#create">
            <span>
                <i class="bx bx-plus me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New User</span>
            </span>
            </a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if(isset($users))
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{ route('dashboard.profile', $user->id) }}"><strong>{{ $user->name }}</strong></a></td>
                            <td>{{ $user->email }}</td>
                            <td>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $role)
                                    @if($role === RoleEnum::SUPER_ADMIN)
                                        <span class="badge bg-label-primary me-1"> Super Admin</span>
                                    @elseif($role === \App\Enum\RoleEnum::ADMIN)
                                        <span class="badge bg-label-primary me-1"> Admin</span>
                                    @elseif($role === \App\Enum\RoleEnum::SEEKER)
                                        <span class="badge bg-label-primary me-1"> Seeker</span>
                                    @elseif($role === \App\Enum\RoleEnum::COMPANY)
                                        <span class="badge bg-label-primary me-1"> Company</span>
                                    @endif
                                @endforeach
                            @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="javascript:void(0);"
                                           data-bs-toggle="modal"
                                           data-bs-target="#modal-update-{{ $user->id, $user->name,
                                           $user->full_name, $user->email, $user->getRoleNames() }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <a class="dropdown-item"
                                           href="javascript:void(0);"
                                           data-bs-toggle="modal"
                                           data-bs-target="#modal-delete-{{ $user->id }}">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        @include('dashboard.users.modals.update')

                        <!-- Modal Delete -->
                        @include('dashboard.users.modals.delete')

                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal create -->
    @include('dashboard.users.modals.create')

@stop
