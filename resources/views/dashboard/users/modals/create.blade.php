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
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Full Name</label>
                            <input name="full_name" value="{{ old('full_name') }}" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="col mb-0">
                            <label for="emailWithTitle" class="form-label">Email</label>
                            <input name="email" value="{{ old('email') }}" type="email" id="emailWithTitle" class="form-control @error('email') is-invalid @enderror" placeholder="xxxx@xxx.xx">
                            @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailWithTitle" class="form-label">Phone</label>
                            <input name="phone" value="{{ old('phone') }}" type="text" id="emailWithTitle" class="form-control @error('phone') is-invalid @enderror" placeholder="+967 777 777 777">
                            @error('phone') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
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
