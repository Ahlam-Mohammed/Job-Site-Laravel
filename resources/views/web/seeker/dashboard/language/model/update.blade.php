@php
    use App\Enum\LevelEnum;
@endphp
<div class="modal fade" id="modal-update-{{ $language->id, $language->name, $language->level }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.languages.update', $language->id) }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <input hidden name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-12">
                        <input value="{{$language->language}}" name="name" type="text" class="form-control @error('language') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('language') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <select name="level" class="form-select" aria-label="Default select example">
                            <option @if($language->level === LevelEnum::ADVANCED) selected @endif value="{{ LevelEnum::ADVANCED }}">متقدم</option>
                            <option @if($language->level === LevelEnum::INTERMEDIATE) selected @endif value="{{ LevelEnum::INTERMEDIATE }}">متوسط</option>
                            <option @if($language->level === LevelEnum::LOW) selected @endif value="{{ LevelEnum::LOW }}">مبتدئ</option>
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
