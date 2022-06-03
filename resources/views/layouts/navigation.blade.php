<x-haunt::card buffer="small" class="md:bottom-0 md:fixed md:px-0 md:w-16 md:top-0" :showRounded="false">
    <x-haunt::card.content class="flex items-center justify-center space-x-1 md:flex-col md:justify-start md:space-x-0 md:space-y-1">
        <x-haunt::button.nav :active="true" :href="route('index')">
            <x-dynamic-component :component="'heroicon-o-home'" class="w-6 h-6" />
        </x-haunt::button.nav>
        <x-haunt::button.nav :active="false" :href="route('index')">
            <x-dynamic-component :component="'heroicon-o-home'" class="w-6 h-6" />
        </x-haunt::button.nav>
    </x-haunt::card.content>
</x-haunt::card>
