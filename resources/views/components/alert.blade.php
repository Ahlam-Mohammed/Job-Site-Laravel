@if ($message = Session::get('success'))
    <div class="alert alert-primary alert-dismissible" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif
