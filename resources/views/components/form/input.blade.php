@php
$classes = Str::squish("h-10 px-3 py-2 rounded text-sm w-full
    {$applyInputStyles()}
    {$applyShowMargin('mb-3')}
");
@endphp

<input
    {{ $attributes->merge(['class' => $classes]) }}
    @disabled($disabled ?? false)
    @readonly($readonly ?? false)
/>
