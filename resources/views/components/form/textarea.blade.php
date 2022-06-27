@php
$classes = Str::squish("px-3 py-2 rounded text-sm w-full
    {$applyInputStyles()}
    {$applyShowMargin('mb-3')}
");
@endphp

<textarea
    {{ $attributes->merge(['class' => $classes]) }}
    @disabled($disabled ?? false)
    @readonly($readonly ?? false)
>{{ $slot }}</textarea>
