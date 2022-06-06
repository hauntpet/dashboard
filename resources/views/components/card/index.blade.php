@php
$classes = Str::squish("
    {$applyElevation()}
    {$applyOverflow('overflow-hidden')}
    {$applyRounded('rounded-lg')}
    {$applyShowBorder('border')}
    {$applyShowMargin('mb-6')}
    {$applyTheme('100')}
");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
