<form method="POST" {{ $attributes }}>
    @csrf

    @if($type === 'POST')
        @method('POST')
    @elseif($type === 'PATCH')
        @method('PATCH')
    @elseif($type === 'DELETE')
        @method('DELETE')
    @endif

     {{ $slot }}
</form>
