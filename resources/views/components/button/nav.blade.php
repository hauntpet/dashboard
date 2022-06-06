<?php
$classes = Str::squish("
    {$applyActive('bg-gray-100 text-blue-500', 'hover:text-blue-500')}
");
?>

<x-haunt::button :class="$classes" :href="$href" theme="light">
    {{ $slot }}
</x-haunt::button>
