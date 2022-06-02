<select {{ $attributes->merge(['class' => "px-3 py-2 rounded text-sm w-full {$applyInputStyles()} {$applyMargin('mb-3')} {$applyMultiple()}"]) }} {{ $multiple ? 'multiple' : '' }}>
    {{ $slot }}
</select>
