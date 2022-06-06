@php
$classes = Str::squish("font-bold
    {$applyShowMargin('mb-6')}
    {$applyLevel()}
");
@endphp

<h{{ $level }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $content ?: $slot }}
</h{{ $level }}>
