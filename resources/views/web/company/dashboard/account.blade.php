@extends('layouts.web.seeker.master')
@php use App\Enum\UserEnum @endphp
@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card  shadow p-3">
                <div class="card-header">
                    <h1 class="fs-3 fw-bold text-primary">بيانات شخصية</h1>
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
                            <form action="{{ route('company.account.update')}}" method="post" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-12">
                                    <div class="input-group flex-nowrap">
                                        <input name="name" value="{{ Auth::user()->name }}" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" placeholder="Name" aria-label="الاسم" aria-describedby="addon-wrapping" required>
                                    </div>
                                    @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <div class="input-group flex-nowrap">
                                        <input  name="full_name" value="{{ Auth::user()->full_name }}" type="text" class="form-control rounded-pill" placeholder="الاسم الكامل" aria-label="lName" aria-describedby="addon-wrapping" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input  name="email" value="{{ Auth::user()->email }}" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="البريد الإلكتروني" aria-label="email" aria-describedby="addon-wrapping" required>
                                    </div>
                                    @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group flex-nowrap">
                                        <input  name="phone" value="{{ Auth::user()->phone }}" type="text" class="form-control @error('phone') is-invalid @enderror rounded-pill" placeholder="phone" aria-label="email" aria-describedby="addon-wrapping" required>
                                    </div>
                                    @error('phone') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
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
                    <form action="{{ route('company.update.avatar') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
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
@endsection
