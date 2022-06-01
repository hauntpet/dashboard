<x-haunt::layouts.screen class="md:flex p-3 md:space-x-3">

    @includeComponent('haunt-framework::layouts._nav')

    <div class="flex-grow">
        @includeComponent('haunt-framework::layouts._topbar')

        {{ $slot }}
    </div>

</x-haunt::layouts.screen>
