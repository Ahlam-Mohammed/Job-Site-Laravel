@php use App\Enum\JobEnum @endphp
<div class="modal fade" id="modal-update-{{ $job->id, $job->job_title, $job->career_field, $job->description, $job->type, $job->max_salary, $job->min_salary, $job->professional_level, $job->skills}}"" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Create New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('company.job.update', $job->id) }}" method="post">
                @csrf @method('PUT')
                <div class="modal-body p-3">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Job Title</label>
                            <input name="job_title" value="{{ $job->job_title }}" type="text" id="nameWithTitle" class="form-control @error('job_title') is-invalid @enderror" placeholder="Enter Job Title">
                            @error('job_title') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Career Field</label>
                            <input name="career_field" value="{{ $job->career_field }}" type="text" id="nameWithTitle" class="form-control @error('career_field') is-invalid @enderror" placeholder="Enter Career Field">
                            @error('career_field') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-6 mb-4">
                            <label for="selectBasic" class="form-label">Type</label>
                            <select name="type" id="selectBasic" class="select2 form-select form-select @error('type') is-invalid @enderror " data-allow-clear="true">
                                <option @if($job->type === JobEnum::TYPE_FULL_TIME) selected @endif value="{{ JobEnum::TYPE_FULL_TIME }}">{{ JobEnum::TYPE_FULL_TIME }}</option>
                                <option @if($job->type === JobEnum::TYPE_PART_TIME) selected @endif value="{{ JobEnum::TYPE_PART_TIME }}">{{ JobEnum::TYPE_PART_TIME }}</option>
                            </select>
                            @error('type') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="select2Basic" class="form-label">Professional Level</label>
                            <select name="professional_level" id="select2Basic" class="select2 form-select form-select" data-allow-clear="true">
                                <option selected disabled>Select Professional Level</option>
                                <option @if($job->professional_level === JobEnum::LEVEL_ENTRY) selected @endif value="{{ JobEnum::LEVEL_ENTRY }}">{{ JobEnum::LEVEL_ENTRY }}</option>
                                <option @if($job->professional_level === JobEnum::LEVEL_MID) selected @endif value="{{ JobEnum::LEVEL_MID }}">{{ JobEnum::LEVEL_MID }}</option>
                                <option @if($job->professional_level === JobEnum::LEVEL_SENIOR) selected @endif value="{{ JobEnum::LEVEL_SENIOR }}">{{ JobEnum::LEVEL_SENIOR }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailWithTitle" class="form-label">Max Salary</label>
                            <input name="max_salary" value="{{ $job->max_salary }}" type="text" id="emailWithTitle" class="form-control @error('max_salary') is-invalid @enderror" placeholder="$">
                            @error('max_salary') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col mb-0">
                            <label for="emailWithTitle" class="form-label">Min Salary</label>
                            <input name="min_salary" value="{{ $job->min_salary }}" type="text" id="emailWithTitle" class="form-control @error('min_salary') is-invalid @enderror" placeholder="$">
                            @error('min_salary') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Skills</label>
                            <textarea name="skills" class="form-control @error('skills') is-invalid @enderror" id="exampleFormControlTextarea1" rows="5">{{ $job->skills }}</textarea>
                            @error('skills') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="5">{{ $job->description }}</textarea>
                            @error('description') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
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
