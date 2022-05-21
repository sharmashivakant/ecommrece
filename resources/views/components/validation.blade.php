@if($errors->count())
    @foreach($errors->all() as $message)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><!-- alert -->
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success mt-20" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><!-- alert -->
@endif

@if(session('error'))
    <div class="alert alert--danger  mt-20" role="alert">
        <strong>{{ session('error') }}</strong>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><!-- alert -->
@endif


