@php
$classes = Str::squish("border border-collapse border-gray-200 w-full
");
@endphp

<table {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</table>
