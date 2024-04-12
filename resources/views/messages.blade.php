@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{ $message }}</strong>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button> --}}
    </div>
@endif
