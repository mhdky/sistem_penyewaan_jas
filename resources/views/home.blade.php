@extends('layouts.main')

@section('main')
    @include('partials.navbar.list-nav-mobile')

    <div class="containerContent bg-white w-full h-screen absolute z-20 transition-all duration-300">
        @include('partials.navbar.btn-nav-mobile')
    </div>
@endsection