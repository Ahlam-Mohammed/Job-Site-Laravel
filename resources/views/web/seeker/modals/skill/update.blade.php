@php
    use App\Enum\SkillEnum;
@endphp
<div class="modal fade" id="modal-update-{{ $skill->id, $skill->name, $skill->level }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('seeker.skills.update', $skill->id) }}" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <input hidden name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-12">
                        <input value="{{$skill->name}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" id="skill" placeholder="اسم المهارة">
                        @error('name') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <select name="level" class="form-select" aria-label="Default select example">
                            <option @if($skill->level === SkillEnum::ADVANCED) selected @endif value="{{ SkillEnum::ADVANCED }}">متقدم</option>
                            <option @if($skill->level === SkillEnum::INTERMEDIATE) selected @endif value="{{ SkillEnum::INTERMEDIATE }}">متوسط</option>
                            <option @if($skill->level === SkillEnum::LOW) selected @endif value="{{ SkillEnum::LOW }}">مبتدئ</option>
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
