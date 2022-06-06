@php
$classes = Str::squish("bg-{$position} bg-cover flex relative
");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} style="background-image:url({{ $src }})">
    @if($showOverlay)
        <div class="absolute bg-{{ $color }} h-full flex items-center justify-center opacity-{{ $opacity }} w-full"></div>
    @endif

    <div class="p-6 relative z-10">{{ $slot }}</div>
</div>
