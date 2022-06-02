<div {{ $attributes->merge(['class' => "-mt-1 text-sm dark:text-gray-400"]) }}>
    {{ $content === '' ? $slot : $content }}
</div>
