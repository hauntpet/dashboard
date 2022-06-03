<div {{ $attributes->merge(['class' => "overflow-hidden {$applyRounded($showRounded, 'rounded-lg')} {$applyLevel()} {$applyShowBorder('border')} {$applyShowMargin('mb-3')} {$applyTheme('100')}"]) }}>
    {{ $slot }}
</div>
