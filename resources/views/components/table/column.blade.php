@aware(['head' => true])

@php
$classes = Str::squish("border px-4 py-2 whitespace-nowrap w-{$width}
");

if($head) {
    $classes .= " border-b-0";
} else {
    $classes .= " text-left";
}
@endphp

<{{ $head ? 'th' : 'td'}} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $content ?? $slot }}
</{{ $head ? 'th' : 'td'}}>
