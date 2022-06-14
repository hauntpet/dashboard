<x-haunt::card :applyOverflow="false" buffer="small" :level="0" :showBorder="true" :showMargin="false" :applyRounded="false">
    <x-haunt::card.content class="flex items-center px-6 rounded-none">
        <div class="flex flex-grow font-bold space-x-3 text-gray-400 text-sm uppercase">
            @foreach(AdminDashboard::getActive()['children'] as $item)
                <x-haunt::link class="hover:text-blue-500" :content="$item['title']" :href="AdminDashboard::handleRoute($item['route'])" />
            @endforeach
        </div>
        <div class="flex items-center space-x-2">
            <div class="leading-3 text-right">
                <div>{{ auth()->user()->username }}</div>
                <a class="block text-blue-500 text-xs" href="{{ AdminDashboard::getLogoutRoute() }}">logout?</a>
            </div>
            <x-haunt::avatar class="h-9 w-9" :src="auth()->user()->profile_image" />
        </div>
    </x-haunt::card.content>
</x-haunt::card>
