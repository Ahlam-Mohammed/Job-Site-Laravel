@php
    use \App\Enum\LevelEnum;
@endphp
<div class="modal fade" id="addSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.skills.store') }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <input hidden name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                    <div class="col-12">
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <input name="level" type="range" class="form-range @error('level') is-invalid @enderror" id="customRange1">
                    </div>
                    @error('level') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
