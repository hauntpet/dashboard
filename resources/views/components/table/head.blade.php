@php
$classes = Str::squish("
");
@endphp

<thead {{ $attributes->merge(['class' => $classes]) }}>
    <x-haunt::table.row :head="true">
        {{ $slot }}
    </x-haunt::table.row>
</thead>
