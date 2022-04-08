@php
    use \App\Enum\LevelEnum;
@endphp
<div class="modal fade" id="addSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add language</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.languages.store') }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <input hidden name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-12">
                        <input name="language" value="{{ old('language') }}" type="text" class="form-control @error('language') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم اللغة">
                        @error('language') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <select name="level" class="form-select @error('level') is-invalid @enderror" aria-label="Default select example">
                            <option disabled selected>اختر المستوى</option>
                            <option value="{{ LevelEnum::ADVANCED }}">متقدم</option>
                            <option value="{{ LevelEnum::INTERMEDIATE }}">متوسط</option>
                            <option value="{{ LevelEnum::LOW }}">مبتدئ</option>
                        </select>
                        @error('level') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
