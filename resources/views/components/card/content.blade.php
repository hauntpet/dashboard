@aware(['buffer' => 'medium'])

@php
$classes = Str::squish("
    {$applyBuffer($buffer)}
");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
