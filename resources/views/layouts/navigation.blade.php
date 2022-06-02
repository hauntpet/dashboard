<x-haunt::card class="flex items-center justify-center p-3 rounded-b-none space-x-1 md:bottom-0 md:fixed md:flex-col md:justify-start md:mb-6 md:mt-6 md:px-0 md:rounded-b-lg md:space-x-0 md:space-y-1 md:w-16 md:top-0">
    <x-haunt::button.nav :active="true" :href="route('index')">
        <x-dynamic-component :component="'heroicon-o-home'" class="w-6 h-6" />
    </x-haunt::button.nav>
    <x-haunt::button.nav :active="false" :href="route('index')">
        <x-dynamic-component :component="'heroicon-o-home'" class="w-6 h-6" />
    </x-haunt::button.nav>
</x-haunt::card>
