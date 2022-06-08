@php
$classes = Str::squish("
    {$applyShowMargin('mb-6')}
");
@endphp

<img src="{{ $src }}" {{ $attributes->merge(['class' => $classes]) }} />
