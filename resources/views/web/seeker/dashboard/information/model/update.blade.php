@php
    use App\Enum\JobEnum;
@endphp
<div class="modal fade" id="modal-update-{{ $data->id, $data->career_field, $data->job_title, $data->professional_level }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.info.update', $data->id) }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <input name="job_title" value="{{ $data->job_title }}" type="text" class="form-control @error('job_title') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('job_title') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <input name="career_field" value="{{ $data->career_field }}" type="text" class="form-control @error('career_field') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('career_field') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <select name="professional_level" class="form-select @error('professional_level') is-invalid @enderror" aria-label="Default select example">
                            <option disabled selected>professional_level</option>
                            <option @if ($data->professional_level === JobEnum::LEVEL_SENIOR) selected @endif>{{ JobEnum::LEVEL_SENIOR }}</option>
                            <option @if ($data->professional_level === JobEnum::LEVEL_MID) selected @endif>{{ JobEnum::LEVEL_MID }}</option>
                            <option @if ($data->professional_level === JobEnum::LEVEL_ENTRY) selected @endif>{{ JobEnum::LEVEL_ENTRY }}</option>
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
