<x-haunt::card class="flex items-center mb-6 px-6 py-3 rounded-t-none md:rounded-t-lg">
    <div class="flex flex-grow font-bold space-x-3 text-gray-400 text-sm uppercase">
        <a class="hover:text-blue-500" :href="route('index')">Title</a>
    </div>
    <div class="flex items-center space-x-2">
        <div class="leading-3 text-right">
            <div>{{ auth()->user()->username }}</div>
            <a class="block text-blue-500 text-xs" href="logout">logout?</a>
        </div>
        <x-haunt::avatar class="h-9 w-9" :src="auth()->user()->profile_image" />
    </div>
</x-haunt::card>
