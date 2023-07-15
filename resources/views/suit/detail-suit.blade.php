@extends('layouts.main')

@section('main')
    @include('partials.navbar.list-nav-mobile')

    <div class="containerContent w-full min-h-screen flex flex-col absolute z-20 transition-all duration-300">
        @include('partials.navbar.btn-nav-mobile')
        @include('partials.detail-suit.index')
        @include('partials.footer.index')
    </div>

    @include('partials.main-search-feature.index')

    {{-- about --}}
    @include('partials.about.index')
@endsection

@push('about')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush