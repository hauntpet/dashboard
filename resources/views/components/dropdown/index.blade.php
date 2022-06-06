@php
$classes = "absolute {$alignment}-0 mt-1 w-{$width}";
@endphp

<div class="relative z-50" x-data="{ open: false }" x-on:click.outside="open = false">
    <button x-on:click="open = !open">
        {{ $slot }}
        @if($showIcon)
            <x-heroicon-o-chevron-up class="inline-block w-4 h-4" x-show="open" />
            <x-heroicon-o-chevron-down class="inline-block w-4 h-4" x-show="!open" />
        @endif
    </button>
    <div x-show="open" x-transition.delay.100ms>
        <x-haunt::card buffer="small" :class="$classes" :showBorder="true">
            {{ $dropdown }}
        </x-haunt::card>
    </div>
</div>
