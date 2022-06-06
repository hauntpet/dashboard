@aware(['buffer' => 'medium', 'theme' => 'light'])

<?php
$classes = Str::squish("flex
    {$applyBuffer($buffer, '3', '6-3', '12-6')}
    {$applyShowBorder('border-t border-inherit')}
    {$applyTheme('200', $theme)}
");
?>

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
