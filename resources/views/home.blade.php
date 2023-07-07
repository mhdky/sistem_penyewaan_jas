@extends('layouts.main')

@section('main')
    @include('partials.navbar.list-nav-mobile')

    <div class="containerContent w-full absolute z-20 transition-all duration-300">
        @include('partials.navbar.btn-nav-mobile')
        @include('partials.jumbotron.index')
        @include('partials.card-product.index')
        @include('partials.choose-us.index')

        <div class="bg-white h-screen mx-auto"></div>
    </div>
@endsection