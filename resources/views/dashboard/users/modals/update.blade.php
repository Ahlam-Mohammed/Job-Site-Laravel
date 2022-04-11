<div class="modal fade"
     id="modal-update-{{ $user->id, $user->name,
       $user->full_name, $user->email, $user->getRoleNames() }}"
     tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Create New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('dashboard.users.update', $user->id) }}" method="post">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Name</label>
                            <input name="name" value="{{ $user->name }}" type="text" id="nameWithTitle" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                            @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Full Name</label>
                            <input name="full_name" value="{{ $user->full_name }}" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="col mb-0">
                            <label for="emailWithTitle" class="form-label">Email</label>
                            <input name="email" value="{{ $user->email }}" type="email" id="emailWithTitle" class="form-control @error('email') is-invalid @enderror" placeholder="xxxx@xxx.xx">
                            @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailWithTitle" class="form-label">Phone</label>
                            <input name="phone" value="{{ $user->phone }}" type="text" id="emailWithTitle" class="form-control @error('phone') is-invalid @enderror" placeholder="+967 777 77">
                            @error('phone') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <!-- Multiple -->
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
