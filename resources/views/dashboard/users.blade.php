@extends('layouts.dashboard.master')
@php use App\Enum\RoleEnum @endphp
@section('title') Users @stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

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
                            <td><strong>{{ $user->name }}</strong></td>
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
                        <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameWithTitle" class="form-label">Name</label>
                                                    <input name="name" value="{{ old('name') }}" type="text" id="nameWithTitle" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                                                    @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameWithTitle" class="form-label">Full Name</label>
                                                    <input name="full_name" value="{{ old('full_name') }}" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Full Name">
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="emailWithTitle" class="form-label">Email</label>
                                                    <input name="email" value="{{ old('email') }}" type="email" id="emailWithTitle" class="form-control @error('email') is-invalid @enderror" placeholder="xxxx@xxx.xx">
                                                    @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div>
                                                        <label for="select2Multiple" class="form-label @error('roles') is-invalid @enderror">Role</label>
                                                        <select name="roles[]" id="select2Multiple" class="select2 form-select" multiple>
                                                            @if(isset($roles))
                                                                @foreach($roles as $role)
                                                                    <option>{{ $role }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        @error('roles') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="emailWithTitle" class="form-label">Password</label>
                                                    <input name="password" type="password" id="emailWithTitle" class="form-control @error('password') is-invalid @enderror" placeholder="***********">
                                                    @error('password') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="dobWithTitle" class="form-label">Confirm Password</label>
                                                    <input name="confirm-password" type="password" id="dobWithTitle" class="form-control @error('confirm-password') is-invalid @enderror" placeholder="***********">
                                                    @error('confirm-password') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Delete -->
                        <div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('dashboard.users.destroy', $user->id) }}" method="post">
                                        @csrf @method('DELETE')
                                        <div class="modal-body">
                                            <h3 class="fs-4">Do you want to delete?</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal create -->
    <div class="modal fade" id="create" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Create New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('dashboard.users.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input name="name" value="{{ old('name') }}" type="text" id="nameWithTitle" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                                @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Full Name</label>
                                <input name="full_name" value="{{ old('full_name') }}" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Email</label>
                                <input name="email" value="{{ old('email') }}" type="email" id="emailWithTitle" class="form-control @error('email') is-invalid @enderror" placeholder="xxxx@xxx.xx">
                                @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <div>
                                    <label for="select2Multiple" class="form-label @error('roles') is-invalid @enderror">Role</label>
                                    <select name="roles[]" id="select2Multiple" class="select2 form-select" multiple>
                                        @if(isset($roles))
                                            @foreach($roles as $role)
                                                <option>{{ $role }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('roles') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Password</label>
                                <input name="password" type="password" id="emailWithTitle" class="form-control @error('password') is-invalid @enderror" placeholder="***********">
                                @error('password') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">Confirm Password</label>
                                <input name="confirm-password" type="password" id="dobWithTitle" class="form-control @error('confirm-password') is-invalid @enderror" placeholder="***********">
                                @error('confirm-password') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
