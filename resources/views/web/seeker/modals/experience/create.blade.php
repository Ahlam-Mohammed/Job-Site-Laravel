<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Create Experience</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.experiences.store') }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <input hidden name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-12">
                        <label for="job_title" class="form-label">What is the job of this positio?</label>
                        <input name="job_title" value="{{ old('job_title') }}" type="text" class="form-control @error('job_title') is-invalid @enderror rounded-pill" id="job_title" placeholder="Ex. Head of Human Resources">
                        @error('job_title') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="career_field" class="form-label">Which job field does this title fall under?</label>
                        <input name="career_field" value="{{ old('career_field') }}" type="text" class="form-control @error('career_field') is-invalid @enderror rounded-pill" id="career_field" placeholder="Ex. Human Resources">
                        @error('career_field') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="company_name" class="form-label">Job location</label>
                        <input name="company_name" value="{{ old('company_name') }}" type="text" class="form-control @error('company_name') is-invalid @enderror rounded-pill" id="company_name" placeholder="Choose location">
                        @error('company_name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="start_date" class="form-label">Choose city</label>
                        <input name="start_date" value="{{ old('start_date') }}" type="date" class="form-control @error('start_date') is-invalid @enderror rounded-pill" id="start_date" placeholder="Citu">
                        @error('start_date') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="end-date" class="form-label">End Date</label>
                        <div class="form-check">
                            <input name="is_work" class="form-check-input" type="checkbox" checked value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I still work here
                            </label>
                        </div>
                        <input name="end_date" type="date" class="form-control rounded-pill" id="end-date" placeholder="end-date">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
