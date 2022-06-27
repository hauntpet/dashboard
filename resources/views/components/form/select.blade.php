@php
$classes = Str::squish("h-10 px-3 py-2 rounded text-sm w-full
    {$applyInputStyles()}
    {$applyShowMargin('mb-3')}
    {$applyMultiple()}
");
@endphp

<select {{ $attributes->merge(['class' => $classes]) }} {{ $multiple ? 'multiple' : '' }}>
    {{ $slot }}
</select>
