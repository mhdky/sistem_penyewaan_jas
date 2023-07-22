@extends('layouts.main-admin')

@section('content')
    {{-- tombol kembali --}}
    <div class="w-full flex items-center gap-x-4">
        <a href="/dashboard/penyewaan" class="w-max flex items-center gap-x-2">
            <img src="{{ asset('img/left-arrow.svg') }}" alt="icon" class="w-[22px] h-[22px]">
            <p class="text-blue-primary text-[13px] font-bold">Kembali</p>
        </a>
    </div>


    <div class="w-full h-full overflow-auto mt-3 md-768:mt-10">
        <div class="w-full flex flex-col md-768:flex-row md-768:gap-x-14">
            {{-- kontainer gambar jas, ukuran jas, dan deskripsi --}}
            <div class="w-full flex overflow-hidden md-768:w-[300px] md-768:order-2 md-900:w-[427px] md-900:border-l md-900:border-gray-300 md-900:pl-7 md-900:pr-3">
                {{-- gambar jas & ukuran jas --}}
                <div class="gambarJas w-full transition-all duration-300">
                    {{-- gambar jas --}}
                    <div class="w-full flex flex-col md-900:flex-row md-900:justify-between">
                        {{-- gambar utama --}}
                        <div class="bg-zinc-200 w-full p-7 rounded-sm md-768:w-[170px] md-900:w-[150px]"><img src="/{{ $suit->main_picture }}" alt="jas" class="w-full"></div>
                    
                        {{-- gambar lain --}}
                        <div class="w-full mt-5 grid grid-cols-3 gap-4 md-900:w-[220px] md-900:h-max md-900:mt-0">
                            @if ($suit->picture_1 !== null)
                                <div class="bg-zinc-100 p-4 flex justify-between items-center rounded-sm"><img src="/{{ $suit->picture_1 }}" alt="jas" class="w-full"></div>
                            @endif
                            @if($suit->picture_2 !== null)
                                <div class="bg-zinc-100 p-4 flex justify-between items-center rounded-sm"><img src="/{{ $suit->picture_2 }}" alt="jas" class="w-full"></div>
                            @endif
                            @if($suit->picture_3 !== null)
                                <div class="bg-zinc-100 p-4 flex justify-between items-center rounded-sm"><img src="/{{ $suit->picture_3 }}" alt="jas" class="w-full"></div>
                            @endif
                            @if($suit->picture_4 !== null)
                                <div class="bg-zinc-100 p-4 flex justify-between items-center rounded-sm"><img src="/{{ $suit->picture_4 }}" alt="jas" class="w-full"></div>
                            @endif
                            @if($suit->picture_5 !== null)
                                <div class="bg-zinc-100 p-4 flex justify-between items-center rounded-sm"><img src="/{{ $suit->picture_5 }}" alt="jas" class="w-full"></div>
                            @endif
                            <div class="bg-zinc-100 p-4 flex justify-between items-center rounded-sm"><img src="/{{ $suit->main_picture }}" alt="jas" class="w-full"></div>
                        </div>
                    </div>

                    {{-- ukuran jas --}}
                    <div class="w-full mt-7">
                        {{-- kode jas --}}
                        <h1 class="font-bold pb-2 border-b border-gray-300">{{ $suit->name . ' - ' . $suit->code }}</h1>

                        {{-- ukuran --}}
                        <div class="w-full mt-7">
                            <div class="flex items-center">
                                <p class="w-36 text-[13px] font-bold">Ukuran</p>
                                <p class="text-zinc-500 text-[13px] font-bold">{{ $suit->size }}</p>
                            </div>
                            <div class="flex items-center mt-5">
                                <p class="w-36 text-[13px] font-bold">Bahan</p>
                                <p class="text-zinc-500 text-[13px] font-bold">{{ $suit->material }}</p>
                            </div>
                            <div class="flex items-center mt-5">
                                <p class="w-36 text-[13px] font-bold">Status</p>
                                <p class="text-zinc-500 text-[13px] font-bold">{{ 'Tersedia' }}</p>
                            </div>
                            <div class="btnDeskripsi flex items-center mt-5 group md-800:cursor-pointer">
                                <p class="w-36 text-[13px] font-bold">Deskripsi</p>
                                <p class="text-zinc-500 text-[13px] font-bold duration-300 group-hover:translate-x-1"><img src="{{ asset('img/right-arrow.svg') }}" alt="jas" class="w-5 h-5"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deskripsi w-full translate-x-full transition-all duration-300 hidden">
                    <div class="tutup text-sm font-bold mb-5 mt-3 flex items-center gap-x-1 md-768:mt-0 md-800:cursor-pointer">
                        <img src="{{ asset('img/left-arrow.svg') }}" alt="jas" class="w-5 h-5">
                        Tutup
                    </div>
                    <div class="text-[13px]">{!! $suit->description !!}</div>
                </div>
            </div>

            {{-- form penyewaan --}}
            <form method="POST" action="/dashboard/penyewaan/{{ $suit->id }}" autocomplete="off" class="w-full mt-12 md-768:w-full md-768:flex-[2] md-768:order-1 md-768:mt-0">
                {{-- jika sewaan belum berakhir --}}
                @if (session()->has('sewaBelumSelesai'))
                    <p class="bg-red-400 w-full py-2 border border-red-500 mb-3 text-white text-sm text-center font-bold">{{ session('sewaBelumSelesai') }}</p>
                @endif
                
                @csrf
                {{-- nama penyewa --}}
                <div class="w-full flex flex-col">
                    <label for="name" class="text-zinc-500 text-sm font-bold">Nama Penyewa</label>
                    <div class="w-full mt-2 pb-1 border-b border-gray-300">
                        <input type="text" name="name" id="name" placeholder="Nama" required minlength="1" maxlength="50" value="{{ old('name') }}" class="w-full border-none p-0 text-zinc-500 text-[13px] font-semibold placeholder:text-zinc-400 focus:ring-0">
                    </div>
                    @error('name')
                        <p class="text-red-500 text-[12px] font-bold mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- email penyewa --}}
                <div class="w-full mt-10 flex flex-col">
                    <label for="email" class="text-zinc-500 text-sm font-bold">Email Penyewa</label>
                    <div class="w-full mt-2 pb-1 border-b border-gray-300 relative">
                        <input type="email" name="email" onkeyup="inputEmail()" id="email" placeholder="example@mail.com" required value="{{ old('email') }}" class="w-full border-none p-0 text-zinc-500 text-[13px] font-semibold placeholder:text-zinc-400 focus:ring-0">
                        {{-- hasil pencarian email --}}
                        <div class="containerPencarianEmail w-full absolute left-0 top-7 hidden">
                            <div class="searchResult bg-zinc-100 w-full max-h-32 overflow-auto border border-gray-300"></div>
                            <p class="closeContainerPencarianEmail w-full bg-red-50 py-2 text-red-700 text-[12px] font-semibold text-center border-x border-b border-gray-300 md-800:cursor-pointer">Tutup</p>
                        </div>
                    </div>
                    @error('email')
                        <p class="text-red-500 text-[12px] font-bold mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- tanggal penyewaan --}}
                <div class="w-full mt-10 flex flex-col">
                    <label for="rental_date" class="text-zinc-500 text-sm font-bold">Mulai Penyewaan</label>
                    <div class="w-full mt-2 pb-1 border-b border-gray-300">
                        <input type="datetime-local" name="rental_date" id="rental_date" required value="{{ old('rental_date') }}" class="w-full border-none p-0 text-zinc-400 text-[13px] font-semibold placeholder:text-zinc-400 focus:ring-0">
                    </div>
                    @error('rental_date')
                        <p class="text-red-500 text-[12px] font-bold mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- tanggal akhir penyewaan --}}
                <div class="w-full mt-10 flex flex-col">
                    <label for="finish_rental_date" class="text-zinc-500 text-sm font-bold">Akhir Penyewaan</label>
                    <div class="w-full mt-2 pb-1 border-b border-gray-300">
                        <input type="datetime-local" name="finish_rental_date" id="finish_rental_date" required value="{{ old('finish_rental_date') }}" class="w-full border-none p-0 text-zinc-400 text-[13px] font-semibold placeholder:text-zinc-400 focus:ring-0">
                    </div>
                    @error('finish_rental_date')
                        <p class="text-red-500 text-[12px] font-bold mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-primary w-full h-[37px] mt-10 text-white text-sm font-semibold rounded-[5px]">Sewa</button>
            </form>
        </div>
    </div>
@endsection

@push('form-rental')
    <script src="{{ asset('js/admin/form-rental.js') }}"></script>
@endpush