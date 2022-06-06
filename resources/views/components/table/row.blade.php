@php
$classes = Str::squish("
");

if($head) {
    $classes .= " bg-gray-200 text-gray-600 text-sm";
}
@endphp

<tr {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</tr>
