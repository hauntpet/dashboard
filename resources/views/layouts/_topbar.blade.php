<x-haunt::card class="flex items-center mb-3 px-6 py-3 rounded-t-none md:rounded-t-lg">
    <div class="flex flex-grow font-bold space-x-3 text-gray-400 text-sm uppercase">
        @foreach(AdminDashboard::getActive()['children'] ?? [] as $child)
            <a class="hover:text-blue-500" href="{{ AdminDashboard::getRoute($child) }}">{{ $child['title'] ?? 'Untitled' }}</a>
        @endforeach
    </div>
    <div class="flex items-center space-x-2">
        <x-haunt::avatar class="h-8 w-8" :src="'https://eu.ui-avatars.com/api/?name='.auth()->user()->username" />
        <div>{{ auth()->user()->username }}</div>
    </div>
</x-haunt::card>