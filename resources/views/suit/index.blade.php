@extends('layouts.main')

@section('main')
    @include('partials.navbar.list-nav-mobile')

    <div class="containerContent w-full min-h-screen flex flex-col absolute z-20 transition-all duration-300">
        @include('partials.navbar.btn-nav-mobile')
        @if (Request::is('suit/adult'))
            @include('partials.card-product.adult')
        @elseif(Request::is('suit/kids'))
            @include('partials.card-product.kids')
        @endif
        @include('partials.footer.index')
    </div>

    @include('partials.main-search-feature.index')
@endsection