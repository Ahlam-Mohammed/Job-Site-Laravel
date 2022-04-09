<div class="modal fade" id="modal-delete-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('seeker.info.destroy', $data->id) }}" method="post">
                @csrf
                <div class="modal-body fw-bold d-flex justify-content-lg-center align-items-center flex-column">
                    <i class="bi bi-exclamation-circle fs-1 text-danger"></i>
                    <h3 class="fs-4">Do you want to delete?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
