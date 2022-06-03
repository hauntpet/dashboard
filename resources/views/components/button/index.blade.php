<?php
    $classes = "font-bold inline-flex tracking-wide uppercase {$applyBuffer($buffer, 'px-2 py-1 text-xs', 'px-3 py-2 text-sm', 'px-4 py-3')} {$applyPill()} {$applyTheme('500', $theme, true)} {$applyFullWidth()}";
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
