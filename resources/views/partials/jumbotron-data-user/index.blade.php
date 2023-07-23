{{-- container data user --}}
<div class="bg-violet-600 w-full pt-28 pb-5 px-4 md-768:px-6 lg-1000:px-10 lg-1000:pt-[150px] lg-1240:px-16">
    <div class="w-full flex">
        {{-- foto profil --}}
        <div class="w-max h-max">
            <img src="{{ $profil }}" alt="Profil" class="w-[55px] h-[55px] rounded-full md-768:w-[60px] md-768:h-[60px]">
        </div>

        {{-- data nama, email & total penyewaan --}}
        <div class="ml-3">
            {{-- name user --}}
            <h2 class="text-white text-sm font-bold md-768:text-base">{{ Str::title(Str::limit(Auth::user()->name, 14)) }}</h2>
            {{-- user email --}}
            <h2 class="bg-violet-500 w-max mt-1 py-0.5 px-2 block rounded-xl text-white text-[12px] md-768:py-1 md-768:px-3">{{ Str::limit(Auth::user()->email, 35) }}</h2>
            {{-- user penyewaan --}}
            <p class="mt-3 text-white text-[12px] flex items-center md-768:text-[13px]">
                Sedang disewa <span class="font-bold block ml-1"> {{ $userRentals->count() }}</span> <span class="bg-violet-300 w-[1px] h-3 mx-2 block"></span> Selesai disewa <span class="font-bold block ml-1"> 0</span>
            </p>
        </div>
    </div>
</div>