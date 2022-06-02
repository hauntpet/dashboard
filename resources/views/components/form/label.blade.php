<label {{ $attributes->merge(['class' => "font-bold {$applyInline()}"]) }}>
    {{ $content === '' ? $slot : $content }}
</label>
