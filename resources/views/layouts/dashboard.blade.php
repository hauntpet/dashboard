<x-haunt::layouts.screen class="md:flex p-6 md:space-x-6">

    @includeComponent('haunt-framework::layouts._nav')

    <div class="flex-grow">
        @includeComponent('haunt-framework::layouts._topbar')

        {{ $slot }}
    </div>

</x-haunt::layouts.screen>
