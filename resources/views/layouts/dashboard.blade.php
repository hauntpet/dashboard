<x-haunt::layouts.screen class="p-6 md:relative">

    @includeComponent('haunt-framework::layouts._nav')

    <div class="md:ml-16 md:pl-6">
        @includeComponent('haunt-framework::layouts._topbar')

        <x-haunt::errors only="other" />

        {{ $slot }}
    </div>

</x-haunt::layouts.screen>
