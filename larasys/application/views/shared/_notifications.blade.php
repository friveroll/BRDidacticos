@foreach (array('error', 'alert', 'success', 'info') as $type)
    @if (Session::get($type))
        <div class="alert alert-{{ $type }}">
            <a class="close" data-dismiss="alert">×</a>
            <p>{{ Session::get($type) }}</p>
        </div>
    @endif
@endforeach
