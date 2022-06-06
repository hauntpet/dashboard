@php
$classes = Str::squish("
");
@endphp

<tbody {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</tbody>
