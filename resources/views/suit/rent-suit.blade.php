@extends('layouts.main')

@section('main')
    @include('partials.navbar.list-nav-mobile')

    <div class="containerContent w-full min-h-screen flex flex-col absolute z-20 transition-all duration-300">
        @include('partials.navbar.btn-nav-mobile')

        @include('partials.jumbotron-data-user.index')

        <div class="bg-white w-full flex-grow pt-7 flex flex-col items-center">
            {{-- button sedang disewa & selesai disewa --}}
            <div class="bg-zinc-100 w-[240px] h-[34px] border border-zinc-200 rounded-2xl relative">
                {{-- bg active --}}
                <div class="bgActive bg-violet-600 w-1/2 h-full rounded-2xl absolute z-[2] top-0 left-0 duration-300"></div>

                {{-- btn name --}}
                <p class="btnSdgSwa text-white text-[12px] font-semibold absolute z-[3] left-4 top-[7px] md-800:cursor-pointer">Sedang disewa</p>
                <p class="btnSdhSwa text-zinc-500 text-[12px] font-semibold absolute z-[3] right-4 top-[7px] md-800:cursor-pointer">Selesai disewa</p>
            </div>

            {{-- sedang disewa --}}
            <div class="containerSdgPenyewaan w-full max-w-[800px] mt-7 duration-300">
                {{-- container card penyewaan --}}
                @foreach ($userRentals as $userRental)
                    <div class="bg-zinc-50 w-full p-4 mb-5 shadow-md md-800:rounded-[10px]">
                        {{-- card penyewaan --}}
                        <div class="w-full flex justify-between items-center border-b pb-4 md-768:border-zinc-300">
                            {{-- gambar dan code jas --}}
                            <div class="flex items-center gap-x-4 sm-580:gap-x-8">
                                {{-- gambar --}}
                                <img src="{{ asset($userRental->suit->main_picture) }}" alt="jas" class="w-[51px]">
                                {{-- code jas --}}
                                <h1 class="text-zinc-800 text-[12px] font-semibold flex-[2] sm-580:text-sm">{{ $userRental->suit->name . ' - ' . $userRental->suit->code }}</h1>
                            </div>

                            {{-- harga --}}
                            <div class="ml-2 flex flex-col items-end gap-y-1">
                                <p class="text-zinc-800 text-[12px]">Rp. {{ number_format($userRental->rental_fee,0,'','.') }}</p>
                                <p class="text-zinc-800 text-[12px]">Rp. {{ number_format($userRental->warranty_fee,0,'','.') }}</p>
                            </div>
                        </div>

                        {{-- masa penyewaan --}}
                        <div class="sewa-item w-full mt-4 py-4 border-l border-zinc-600 md-768:flex md-768:justify-around md-768:py-0 md-768:border-l-0 md-768:mt-0">
                            {{-- mulai penyewaan --}}
                            <div class="md-768:flex md-768:flex-col md-768:items-center">
                                <div class="flex items-center md-768:flex-col">
                                    <span class="w-[5px] h-[5px] bg-zinc-600 rounded-full md-768:bg-zinc-400"></span>
                                    <p class="text-zinc-800 text-[12px] font-bold ml-2 md-768:ml-0 md-768:mt-3">Mulai Penyewaan</p>
                                </div>

                                <p class="mulaiSewa text-zinc-800 text-[12px] ml-3 mt-1 md-768:mt-[10px] md-768:ml-0">{{ Carbon\Carbon::parse($userRental->rental_date)->translatedFormat('d F Y H.i'); }} WIB</p>
                            </div>

                            {{-- Akhir penyewaan --}}
                            <div class="mt-4 md-768:flex md-768:flex-col md-768:items-center md-768:mt-0">
                                <div class="flex items-center md-768:flex-col">
                                    <span class="w-[5px] h-[5px] bg-zinc-600 rounded-full md-768:bg-zinc-400"></span>
                                    <p class="text-zinc-800 text-[12px] font-bold ml-2 md-768:ml-0 md-768:mt-3">Akhir Penyewaan</p>
                                </div>

                                <p class="akhirSewa text-zinc-800 text-[12px] ml-3 mt-1 md-768:mt-[10px] md-768:ml-0">{{ Carbon\Carbon::parse($userRental->finish_rental_date)->translatedFormat('d F Y H.i'); }} WIB</p>
                            </div>

                            {{-- Tenggat penyewaan --}}
                            <div class="mt-4 md-768:flex md-768:flex-col md-768:items-center md-768:mt-0 md-768:relative">
                                <div class="flex items-center md-768:flex-col">
                                    <span class="w-[5px] h-[5px] bg-zinc-600 rounded-full md-768:bg-zinc-400"></span>
                                    <p class="text-zinc-800 text-[12px] font-bold ml-2 md-768:ml-0 md-768:mt-3">Tenggat Penyewaan</p>
                                </div>

                                <p class="countdown text-zinc-800 text-[12px] ml-3 mt-1 md-768:absolute md-768:top-10 md-768:w-max md-768:ml-0"></p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($userRentals->count() < 1)
                    <div class="w-full py-[50px] text-zinc-700 text-center font-bold">Kamu belum melakukan penyewaan</div>
                @endif
            </div>

            {{-- selesai disewa --}}
            <div class="containerSelesaiPenyewaan w-full max-w-[800px] mt-7 duration-300 hidden translate-y-3 opacity-0">
                {{-- container card penyewaan --}}
                @foreach ($userFinishRentals as $userFinishRental)
                    <div class="bg-zinc-50 w-full p-4 mb-5 shadow-md md-800:rounded-[10px]">
                        {{-- card penyewaan --}}
                        <div class="w-full flex justify-between items-center border-b pb-4 md-768:border-zinc-300">
                            {{-- gambar dan code jas --}}
                            <div class="flex items-center gap-x-4 sm-580:gap-x-8">
                                {{-- gambar --}}
                                <img src="{{ asset($userFinishRental->suit->main_picture) }}" alt="jas" class="w-[51px]">
                                {{-- code jas --}}
                                <h1 class="text-zinc-800 text-[12px] font-semibold flex-[2] sm-580:text-sm">{{ $userFinishRental->suit->name . ' - ' . $userFinishRental->suit->code }}</h1>
                            </div>

                            {{-- harga --}}
                            <div class="w-max ml-2 flex flex-col items-end gap-y-1">
                                <p class="text-zinc-800 text-[12px]">Rp. {{ number_format($userFinishRental->rental_fee,0,'','.') }}</p>
                                <p class="text-zinc-800 text-[12px]">Rp. {{ number_format($userFinishRental->warranty_fee,0,'','.') }}</p>
                                <div class="bg-zinc-400 w-full h-[1px]"></div>
                                <p class="text-zinc-600 font-bold text-[12px]">Rp. {{ number_format($userFinishRental->total_cost,0,'','.') }}</p>
                            </div>
                        </div>

                        {{-- masa penyewaan --}}
                        <div class="w-full mt-4 py-4 border-l border-zinc-600 md-768:flex md-768:justify-around md-768:py-0 md-768:border-l-0 md-768:mt-0">
                            {{-- mulai penyewaan --}}
                            <div class="md-768:flex md-768:flex-col md-768:items-center">
                                <div class="flex items-center md-768:flex-col">
                                    <span class="w-[5px] h-[5px] bg-zinc-600 rounded-full md-768:bg-zinc-400"></span>
                                    <p class="text-zinc-800 text-[12px] font-bold ml-2 md-768:ml-0 md-768:mt-3">Mulai Penyewaan</p>
                                </div>

                                <p class="text-zinc-800 text-[12px] ml-3 mt-1 md-768:mt-[10px] md-768:ml-0">{{ Carbon\Carbon::parse($userFinishRental->rental_date)->translatedFormat('d F Y H.i'); }} WIB</p>
                            </div>

                            {{-- Akhir penyewaan --}}
                            <div class="mt-4 md-768:flex md-768:flex-col md-768:items-center md-768:mt-0">
                                <div class="flex items-center md-768:flex-col">
                                    <span class="w-[5px] h-[5px] bg-zinc-600 rounded-full md-768:bg-zinc-400"></span>
                                    <p class="text-zinc-800 text-[12px] font-bold ml-2 md-768:ml-0 md-768:mt-3">Akhir Penyewaan</p>
                                </div>

                                <p class="text-zinc-800 text-[12px] ml-3 mt-1 md-768:mt-[10px] md-768:ml-0">{{ Carbon\Carbon::parse($userFinishRental->finish_rental_date)->translatedFormat('d F Y H.i'); }} WIB</p>
                            </div>

                            {{-- Tenggat penyewaan --}}
                            <div class="mt-4 md-768:flex md-768:flex-col md-768:items-center md-768:mt-0 md-768:relative">
                                <div class="flex items-center md-768:flex-col">
                                    <span class="w-[5px] h-[5px] bg-zinc-600 rounded-full md-768:bg-zinc-400"></span>
                                    <p class="text-zinc-800 text-[12px] font-bold ml-2 md-768:ml-0 md-768:mt-3">Tanggal Pengembalian Jas</p>
                                </div>

                                <p class="countdown text-zinc-800 text-[12px] ml-3 mt-1 md-768:absolute md-768:top-10 md-768:w-max md-768:ml-0"> {{ Carbon\Carbon::parse($userFinishRental->updated_at)->translatedFormat('d F Y H.i'); }} WIB</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($userFinishRentals->count() < 1)
                    <div class="w-full py-[50px] text-zinc-700 text-sm text-center font-bold">Kamu belum pernah melakukan penyewaan</div>
                @endif
            </div>
        </div>
    
        @include('partials.footer.index')
    </div>

    @include('partials.main-search-feature.index')

    {{-- about --}}
    @include('partials.about.index')
@endsection

@push('about')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
@push('live-search')
    <script src="{{ asset('js/live-search.js') }}"></script>
@endpush
@push('btn-sewa-active')
    <script src="{{ asset('js/btn-sewa-active.js') }}"></script>
@endpush
@push('countdown')
    <script src="{{ asset('js/countdown.js') }}"></script>
@endpush