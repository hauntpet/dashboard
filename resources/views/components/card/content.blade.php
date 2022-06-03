@aware(['buffer' => 'medium'])

<div {{ $attributes->merge(['class' => "{$applyBuffer($buffer)}"]) }}>
    {{ $slot }}
</div>
