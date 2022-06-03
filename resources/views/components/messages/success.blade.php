<x-haunt::alert theme="success">
    @if($attributes['only'] ?? null)
        {{ session()->get('success')[$attributes['only']] ?? null }}
    @else
        {{ session()->get('success') ?? null }}
    @endif
</x-haunt::alert>
