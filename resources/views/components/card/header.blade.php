@aware(['buffer' => 'medium', 'theme' => 'light'])

<div {{ $attributes->merge(['class' => "flex {$applyBuffer($buffer, 'p-3', 'px-6 py-3', 'px-12 py-6')} {$applyShowBorder('border-b border-inherit')} {$applyTheme('200', $theme)}"]) }}>
    {{ $slot }}
</div>
