@extends('layouts.web.seeker.master')
@php use App\Enum\UserEnum @endphp
@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card  shadow p-3">
                <div class="card-header">
                    <h1 class="fs-3 fw-bold text-primary">Account Setting</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-0">
                            <div class="d-lg-flex d-none justify-content-center align-items-center position-relative">
                                <img src="@if (Auth::user()->avatar) {{ asset(UserEnum::USER_AVATAR_PATH.Auth::user()->avatar) }} @else {{ asset(UserEnum::USER_AVATAR_DEFAULT) }} @endif" width="100%" class="img-fluid rounded-circle" alt="">
                                <button data-bs-toggle="modal" data-bs-target="#editImg" class="position-absolute btn btn-primary" style="bottom:0;left:0;"><i class="bi bi-pencil-square"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <form action="{{ route('seeker.account.update')}}" method="post" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-12">
                                    <div class="input-group flex-nowrap">
                                        <input name="name" value="{{ Auth::user()->name }}" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" placeholder="Name" aria-describedby="addon-wrapping" required>
                                    </div>
                                    @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input  name="full_name" value="{{ Auth::user()->full_name }}" type="text" class="form-control rounded-pill" placeholder="Full Name " aria-label="lName" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input  name="phone" value="{{ Auth::user()->phone }}" type="text" class="form-control @error('phone') is-invalid @enderror rounded-pill" placeholder="phone" aria-label="email" aria-describedby="addon-wrapping" required>
                                    </div>
                                    @error('phone') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input  name="email" value="{{ Auth::user()->email }}" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="البريد الإلكتروني" aria-label="email" aria-describedby="addon-wrapping" required>
                                    </div>
                                    @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <button type="button" class="btn btn-outline-primary d-block rounded-pill" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group flex-nowrap">
                                                <input  name="birth" @if (isset($personal->birth)) value="{{ $personal->birth }}" @endif type="date" class="form-control rounded-pill" placeholder="تاريخ الميلاد" aria-label="birth" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group flex-nowrap">
                                                <select name="gender" class="form-select rounded-pill" aria-label="Default select example">
                                                    <option disabled selected value="">الجنس</option>
                                                    <option @if (isset($personal->gender) && $personal->gender === \App\Enum\UserEnum::GENDER_FEMALE) selected  @endif value="{{ \App\Enum\UserEnum::GENDER_FEMALE }}">أنثى</option>
                                                    <option @if (isset($personal->gender) && $personal->gender === \App\Enum\UserEnum::GENDER_MALE) selected  @endif value="{{ \App\Enum\UserEnum::GENDER_MALE }}">ذكر</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input name="residence_country" @if (isset($personal->residence_country)) value="{{ $personal->residence_country }}" @endif type="text" class="form-control rounded-pill" placeholder="residence_country" aria-label="birth" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input name="nationality" @if (isset($personal->nationality)) value="{{ $personal->nationality }}" @endif type="text" class="form-control rounded-pill" placeholder="الجنسية" aria-label="birth" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <button class="btn btn-primary d-block w-100 rounded-pill" type="submit">حفظ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Image Profile -->
    <div class="modal fade" id="editImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Edit image profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('seeker.update.avatar') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input name="avatar" type="file" class="form-control" id="inputGroupFile02">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Change Password -->
    <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Change Password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update-password') }}" method="POST" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror rounded-pill" placeholder="Old Password" aria-describedby="addon-wrapping" required>
                            </div>
                            @error('old_password') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror rounded-pill" placeholder="New Password" aria-label="الاسم" aria-describedby="addon-wrapping" required>
                            </div>
                            @error('new_password') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="new_password_confirmation"  type="password" class="form-control rounded-pill" placeholder="Confirm New Password" aria-label="الاسم" aria-describedby="addon-wrapping" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
