@php
$classes = Str::squish("bg-gray-100 border border-gray-200 flex items-center p-2 text-left text-sm w-full
    {$applyToggle()}
");
@endphp

<div x-data="{ open: false }" x-on:click.outside="open = false">
    <div {{ $attributes->merge(['class' => $classes]) }} x-on:click="open = !open">
        {{ $title }}
    </div>
    @if($toggle)
        <div x-show="open" x-transition.delay.100ms>
            {{ $slot }}
        </div>
    @endif
</div>
