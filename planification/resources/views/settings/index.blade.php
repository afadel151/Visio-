@extends('default')
@push('header')
    @stack('settings.styles')
@endpush
@section('content')
    <div class="w-[100%] h-screen flex">
        <div class="h-screen ">
            @include('settings.sidebar')
        </div>
        <div class="w-[100%]">
            @yield('settings')
        </div>
    </div>


@endsection

@push('scripts')
    @stack('settings.scripts')
@endpush