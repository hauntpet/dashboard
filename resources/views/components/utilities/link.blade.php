@php
$classes = Str::squish("text-blue-500
");
@endphp

<a class="{{ $classes }}" href="{{ $href }}">
    {{ $content ?? $slot }}
</a>
