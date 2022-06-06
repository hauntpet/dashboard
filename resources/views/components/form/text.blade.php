@php
$classes = Str::squish("-mt-3 text-sm
");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $content === '' ? $slot : $content }}
</div>
