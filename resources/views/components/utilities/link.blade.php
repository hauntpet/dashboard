@php
$classes = Str::squish("
");
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} href="{{ $href }}">
    {{ $content ?? $slot }}
</a>
