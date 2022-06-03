@if($content !== null || $slot->toHtml() !== '')
    <div {{ $attributes->merge(['class' => "text-sm whitespace-no-wrap {$applyBuffer($buffer)} {$applyRounded($showRounded)} {$applyTheme()} {$applyShowMargin('mb-3')}"]) }}>
        {{ $content ?? $slot }}
    </div>
@endif
