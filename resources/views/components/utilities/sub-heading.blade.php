<div {{ $attributes->merge(['class' => "text-gray-500 {$applyMargin('-mt-4')} {$applySubLevel()}"]) }}>
    {{ $content ?: $slot }}
</div>
