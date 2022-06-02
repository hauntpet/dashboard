@extends('haunt-dashboard::screen')

@section('main')
    <div class="p-6">
        @include('haunt-dashboard::navigation')

        <div class="md:ml-16 md:pl-6">
            @include('haunt-dashboard::topbar')

            @yield('content')
        </div>
    </div>
@endsection
