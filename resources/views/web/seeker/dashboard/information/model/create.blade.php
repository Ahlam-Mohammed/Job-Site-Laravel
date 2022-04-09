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
                <form action="{{ route('seeker.info.store') }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <input hidden name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-12">
                        <input name="job_title" value="{{ old('job_title') }}" type="text" class="form-control @error('job_title') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('job_title') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <input name="career_field" value="{{ old('career_field') }}" type="text" class="form-control @error('career_field') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('career_field') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <select name="professional_level" class="form-select @error('professional_level') is-invalid @enderror" aria-label="Default select example">
                            <option disabled selected>professional_level</option>
                            <option>{{ \App\Enum\JobEnum::LEVEL_SENIOR }}</option>
                            <option>{{ \App\Enum\JobEnum::LEVEL_MID }}</option>
                            <option>{{ \App\Enum\JobEnum::LEVEL_ENTRY }}</option>
                        </select>
                        @error('professional_level') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
