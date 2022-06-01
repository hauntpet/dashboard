@if($href === null)
    <button {{ $attributes->merge(['class' => "border inline-flex font-bold h-10 items-center justify-center px-6 rounded-full text-sm tracking-wide uppercase {$applyTheme()} {$applyThemeHover()} {$applyFullWidth()}"]) }}>
        {{ $content === null ? $slot : $content }}
    </button>
@else
    <a {{ $attributes->merge(['class' => "border inline-flex font-bold h-10 items-center justify-center px-6 rounded-full text-sm tracking-wide uppercase {$applyTheme()} {$applyThemeHover()} {$applyFullWidth()}"]) }} href="{{ $href }}" style="appearance: button">
        {{ $content === null ? $slot : $content }}
    </a>
@endif
