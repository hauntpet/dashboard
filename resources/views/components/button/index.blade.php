<?php
$classes = Str::squish("font-bold inline-flex text-sm tracking-wide uppercase
    {$applyBuffer($buffer, '2-1', '3-2', '4-3')}
    {$applyPill()}
    {$applyTheme('500', $theme, true)}
    {$applyFullWidth()}
");
?>

@if($href === null)
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $content ?? $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }} href="{{ $href }}">
        {{ $content ?? $slot }}
    </a>
@endif
