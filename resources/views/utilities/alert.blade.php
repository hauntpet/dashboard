@if($slot->toHtml() !== '')
    <div {{ $attributes->merge(['class' => "p-3 rounded text-sm whitespace-no-wrap {$applyTheme()} {$applyMargin()}"]) }}>
        {{ $slot }}
    </div>
@endif
