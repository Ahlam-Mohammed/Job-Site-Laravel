@extends('layouts.dashboard.master')
@php use App\Enum\UserEnum @endphp
@section('title') Users @stop

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Account Settings /</span> Account
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
                <li class="nav-item"><a class="nav-link" href="pages-account-settings-security.html"><i class="bx bx-lock-alt me-1"></i> Security</a></li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="@if ($user->avatar) {{ asset(UserEnum::USER_AVATAR_PATH.$user->avatar) }} @else {{ asset(UserEnum::USER_AVATAR_DEFAULT) }} @endif" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <button data-bs-toggle="modal" data-bs-target="#editImg" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <form action="{{ route('dashboard.users.update', Auth::id()) }}" id="formAccountSettings" method="POST">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="firstName" name="name" value="{{ Auth::user()->name }}" autofocus />
                            </div>
                            @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Full Name</label>
                                <input class="form-control" type="text" name="full_name" id="lastName" value="{{ Auth::user()->full_name }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label @error('email') is-invalid @enderror">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="john.doe@example.com" />
                            </div>
                            @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            <div class="mb-3 col-md-6">
                                <label class="form-label @error('phone') is-invalid @enderror" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="phoneNumber" value="{{ Auth::user()->phone }}" name="phone" class="form-control" placeholder="202 555 0111" />
                                </div>
                            </div>
                            @error('phone') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                            <div class="col-md-6 mb-4">
                                <label for="selectpickerMultiple" class="form-label">Multiple</label>
                                <select name="roles[]" id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                                    @if(isset($roles))
                                        @foreach($roles as $role)
                                            <option
                                                @foreach($user->getRoleNames() as $r)
                                                @if($r === $role) selected @endif
                                                @endforeach

                                            >{{ $role }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form action="{{ route('dashboard.users.destroy', Auth::id()) }}" method="post">
                        @csrf @method('DELETE')
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.users.modals.upload-image')

@stop
