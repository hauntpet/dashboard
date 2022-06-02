<div class="lg:flex">
    <div class="p-6 flex-grow lg:flex-none lg:w-1/3">
        <x-haunt::heading :class="$attributes['titleClass'] ?? ''" :content="$title" :level="4" />
        <x-haunt::sub-heading :class="$attributes['subtitleClass'] ?? ''" :content="$subtitle" :level="5" />
    </div>
    <x-haunt::card class="lg:w-96 lg:flex-grow">
        {{ $slot }}
    </x-haunt::card>
</div>
