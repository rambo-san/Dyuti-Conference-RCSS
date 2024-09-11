@if (Session::has('error'))
    <div class="alert alert-danger show_sessions">
        <strong>{!!Session::get('error')!!}</strong>.
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger show_sessions">
        <strong><p>{!! implode('</p>,<p>',$errors->all(':message')); !!}</p></strong>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success show_sessions">
        <strong>{!!Session::get('success')!!}</strong>.
    </div>
@endif