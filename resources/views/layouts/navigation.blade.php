<x-haunt::card buffer="small" class="md:bottom-0 md:fixed md:px-0 md:w-16 md:top-0" :applyRounded="false">
    <x-haunt::card.content class="flex items-center justify-center space-x-1 md:flex-col md:justify-start md:space-x-0 md:space-y-1">
        @foreach(AdminDashboard::getNavigation() as $item)
            @if($item['show'] === null || $item['show']())
                <x-haunt::button.nav :active="AdminDashboard::isParentActive($item)" :href="AdminDashboard::handleRoute($item['route'])">
                    <x-dynamic-component :component="'heroicon-o-'.$item['icon']" class="w-6 h-6" />
                </x-haunt::button.nav>
            @endif
        @endforeach
    </x-haunt::card.content>
</x-haunt::card>
