<x-haunt::card class="flex p-3 rounded-b-none space-x-1 justify-center md:flex-col md:justify-start md:rounded-b-lg md:space-x-0 md:space-y-1">
    @foreach(AdminDashboard::getNavigation() as $item)
        <x-haunt::button.nav :active="AdminDashboard::isActive($item)" :href="AdminDashboard::getRoute($item)">
            <x-dynamic-component :component="'heroicon-o-'.$item['icon']" class="w-6 h-6" />
        </x-haunt::button.nav>
    @endforeach
</x-haunt::card>
