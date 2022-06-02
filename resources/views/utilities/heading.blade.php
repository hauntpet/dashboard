<h{{ $level }} {{ $attributes->merge(['class' => "font-bold {$applyMargin('mb-3')} {$applyLevel()}"]) }}>
    {{ $content ?? $slot }}
</h{{ $level }}>
