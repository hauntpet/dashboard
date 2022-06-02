<x-haunt::card class="flex rounded-b-none space-x-1 items-center justify-center py-3 md:flex-col md:justify-start md:rounded-b-lg md:space-x-0 md:space-y-1 md:fixed md:top-0 md:bottom-0 md:mt-6 md:mb-6 md:w-16">
    @foreach(AdminDashboard::getNavigation() as $item)
        <x-haunt::button.nav :active="AdminDashboard::isActive($item)" :href="AdminDashboard::getRoute($item)">
            <x-dynamic-component :component="'heroicon-o-'.$item['icon']" class="w-6 h-6" />
        </x-haunt::button.nav>
    @endforeach
</x-haunt::card>
