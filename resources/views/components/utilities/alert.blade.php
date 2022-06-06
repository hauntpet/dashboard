@php
$classes = Str::squish("text-sm whitespace-no-wrap
    {$applyBuffer()}
    {$applyRounded()}
    {$applyShowMargin('mb-3')}
    {$applyTheme()}
");
@endphp

@if($content !== null || $slot->toHtml() !== '')
    <div {{ $attributes->merge(['class' => $classes]) }}>
        {{ $content ?? $slot }}
    </div>
@endif
