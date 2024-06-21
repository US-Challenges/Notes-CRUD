@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show container mx-auto my-2" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
