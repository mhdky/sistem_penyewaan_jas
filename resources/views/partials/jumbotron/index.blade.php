<div class="jumbotron bg-violet-600 w-full pt-24 pb-12 flex justify-center items-center overflow-hidden md-768:h-[450px] md-768:justify-between md-768:py-0 md-768:px-6 lg-1000:h-screen lg-1000:px-10 lg-1240:px-[60px]">
    {{-- welcome text --}}
    <div class="relative">
        <div class="bg-violet-500 w-64 h-64 rounded-full absolute -top-10 -left-40 md-768:w-80 md-768:h-80 md-768:-top-14 md-768:-left-24 lg-1000:w-[500px] lg-1000:h-[500px] lg-1000:-top-32 lg-1000:-left-52"></div>
        <div class="flex flex-col items-center px-3 relative md-768:items-start md-768:px-0">
            <h1 class="text-white font-hanuman font-bold text-3xl lg-1000:text-[48px] lg-1000:mb-6">KY-JAS</h1>
            <h3 class="text-violet-300 font-hanuman font-bold text-lg text-center leading-6 my-4 md-768:text-white lg-1000:text-xl lg-1000:mb-8">Jual & Sewa Jas Keren, Lengkap, Harga Bersahabat</h3>
            <p class="text-violet-300 text-sm text-center font-bold hidden md-768:block md-768:mb-6 lg-1000:text-base">Jl. Binjai Km 9,5 Gg Balai Desa Pria Laut Satu, Sumatera Utara</p>
            <a href="#adult-suit" class="bg-blue-primary text-white text-sm font-bold px-3 py-2 rounded hover:bg-blue-primary-hover lg-1000:px-4">Lihat Jas</a>
        </div>
    </div>

    {{-- image store --}}
    <div class="mt-20 relative hidden md-900:block lg-1365:mt-14">
        <img src="{{ asset('img/dot-grid.svg') }}" alt="dot grid" class="absolute -right-20 -top-6 lg-1000:-top-8 lg-1240:-top-10">

        {{-- card image --}}
        <div class="relative z-10">
            <div class="bg-pink-100 w-[350px] h-[280px] rounded-md flex overflow-hidden lg-1000:w-[38vw] lg-1000:h-[30vw] lg-1365:w-[525px] lg-1365:h-[400px]">
                
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <img src="{{ asset('img/265177529_922796225334083_7639691792226053207_n.jfif') }}" alt="image sore" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide">
                        <img src="{{ asset('img/241770847_384361253446153_6479483033071960731_n.jfif') }}" alt="image sore" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide">
                        <img src="{{ asset('img/264682617_591053765316969_5596991100838867849_n.jfif') }}" alt="image sore" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide">
                        <img src="{{ asset('img/265400433_427526075658452_4422759034790857474_n.jfif') }}" alt="image sore" class="w-full h-full object-cover">
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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