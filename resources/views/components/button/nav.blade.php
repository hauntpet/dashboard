@if($href === null)
    <button {{ $attributes->merge(['class' => "p-2 rounded {$applyActive('bg-gray-100 text-blue-500', 'text-gray-500 hover:text-blue-500')}"]) }}>
        {{ $slot }}
    </button>
@else
    <a type="button" href="{{ $href }}" {{ $attributes->merge(['class' => "p-2 rounded {$applyActive('bg-gray-100 text-blue-500', 'text-gray-500 hover:text-blue-500')}"]) }}>
        {{ $slot }}
    </a>
@endif
