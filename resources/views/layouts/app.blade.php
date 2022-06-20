@extends('haunt-dashboard::screen')

@section('main')
    <div>
        @include('haunt-dashboard::navigation')

        <div class="md:ml-16">
            @include('haunt-dashboard::topbar')

            <div class="p-6">
                <x-haunt::messages.errors only="global" />
                <x-haunt::messages.success only="global" />

                @yield('content')
            </div>
        </div>
    </div>
@endsection
