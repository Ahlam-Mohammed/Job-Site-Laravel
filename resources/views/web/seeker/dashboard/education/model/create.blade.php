{{--@php use App\Enum\ \App\Enum\EducationEnum @endphp--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">إضافة مؤهل دراسي</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.educations.store') }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <input hidden name="user_id" value="{{ Auth::id() }}">
                    <!-- Education details -->
                    <div class="col-12">
                        <label for="academic_spec" class="form-label">التخصص الدراسي</label>
                        <input name="academic_spec" type="text" class="form-control @error('academic_spec') is-invalid @enderror rounded-pill" id="country" placeholder="مثال: علوم مالية ومصرفية">
                        @error('academic_spec') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="type" class="form-label">نوع الشهادة</label>
                        <select name="type" class="form-select @error('type') is-invalid @enderror rounded-pill" aria-label="Default select example" id="type">
                            <option selected disabled>حدد نو الشهادة الحاصل عليها</option>
                            <option value="{{ \App\Enum\EducationEnum::HIGH_SCHOOL }}">الثانوية العامة أو ما يعادلها</option>
                            <option value="{{  \App\Enum\EducationEnum::DIPLOMA }}">شهادة دبلوم</option>
                            <option value="{{  \App\Enum\EducationEnum::BACHELORS_DEGREE }}">درجة البكالريوس</option>
                            <option value="{{  \App\Enum\EducationEnum::HIGHER_DIPLOMA }}">دبلوم عالي</option>
                            <option value="{{  \App\Enum\EducationEnum::MASTERS_DEGREE }}">ماجيستير</option>
                            <option value="{{  \App\Enum\EducationEnum::DOCTORATE }}">دكتوراه</option>
                        </select>
                        @error('type') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="university" class="form-label">الجامعة أو المؤسسة</label>
                        <input name="university" type="text" class="form-control @error('university') is-invalid @enderror rounded-pill" id="university" placeholder="مثال: جامعة هارفرد">
                        @error('university') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="graduat_date" class="form-label">تاريخ التخرج</label>
                        <input name="graduat_date" type="date" class="form-control @error('graduat_date') is-invalid @enderror rounded-pill" id="graduat_date">
                        @error('graduat_date') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="average" class="form-label">المعدل الدراسي</label>
                        <select name="average" class="form-select rounded-pill" aria-label="Default select example" id="average">
                            <option selected disabled>...</option>
                            <option value="{{  \App\Enum\EducationEnum::EXCELLENT }}">ممتاز</option>
                            <option value="{{  \App\Enum\EducationEnum::VERY_WELL }}">جيد جداً</option>
                            <option value="{{  \App\Enum\EducationEnum::GOOD }}">جيد</option>
                            <option value="{{  \App\Enum\EducationEnum::WEAK }}">ضعيف</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
