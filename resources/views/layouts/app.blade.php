@extends('haunt-dashboard::screen')

@section('main')
    <div>
        @include('haunt-dashboard::navigation')

        <div class="md:ml-16">
            @include('haunt-dashboard::topbar')

            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
