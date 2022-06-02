@if($content !== null || $slot->toHtml() !== '')
    <div {{ $attributes->merge(['class' => "p-3 rounded text-sm whitespace-no-wrap {$applyTheme()} {$applyMargin()}"]) }}>
        {{ $content ?? $slot }}
    </div>
@endif
