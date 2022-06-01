@includeComponent('haunt-framework::layouts._head', ['title' => $title ?? ''])

    <div {{ $attributes->merge(['class' => "bg-gray-200 min-h-screen"]) }}>
        {{ $slot }}
    </div>

@includeComponent('haunt-framework::layouts._foot')
