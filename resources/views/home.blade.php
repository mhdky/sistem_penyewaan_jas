@extends('layouts.main')

@section('main')
    @include('partials.navbar.list-nav-mobile')

    <div class="containerContent w-full absolute z-20 transition-all duration-300">
        @include('partials.navbar.btn-nav-mobile')
        @include('partials.jumbotron.index')
        @include('partials.card-product.adult')
        @include('partials.card-product.kids')
        @include('partials.choose-us.index')
        @include('partials.their-opinion.index')
        @include('partials.footer.index')
        {{-- <div class="bg-white h-screen mx-auto"></div> --}}
    </div>
    
    @include('partials.main-search-feature.index')
@endsection

@push('swiper-style')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
@endpush

@push('swiper-js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush