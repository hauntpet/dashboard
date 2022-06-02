<x-haunt::alert theme="error">
    @if($attributes['only'] ?? null)
        @foreach(collect($errors->messages())->only($attributes['only']) as $errors)
            @foreach($errors as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endforeach
    @elseif($attributes['except'] ?? null)
        @foreach(collect($errors->messages())->except(explode('|', $attributes['except'] ?? [])) as $errors)
            @foreach($errors as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endforeach
    @endif
</x-haunt::alert>
