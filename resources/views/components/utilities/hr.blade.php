@php
$classes = Str::squish("my-3
");
@endphp

<hr {{ $attributes->merge(['class' => $classes]) }} />
