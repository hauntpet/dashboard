@if($errors->has($attributes['name']))
    <div class="-mt-3 text-red-500 text-xs">
        @foreach($errors->get($attributes['name']) as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
