@aware(['buffer' => 'medium', 'theme' => 'light'])

<?php
$classes = Str::squish("flex
    {$applyBuffer($buffer, '3', '6-3', '12-6')}
    {$applyShowBorder('border-b border-inherit')}
    {$applyTheme('200', $theme)}
");
?>

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($level > 0)
        <x-haunt::heading :content="$content ?? $slot" :level="$level" :showMargin="false" />
    @else
        {{ $content ?? $slot }}
    @endif
</div>
