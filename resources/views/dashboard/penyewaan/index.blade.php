@extends('layouts.main-admin')

@section('content')
    {{-- cek ketersedian --}}
    <div class="w-full flex justify-between">
        {{-- cek ketersedian & jas --}}
        <div class="w-full flex items-center gap-x-4">
            <p class="text-blue-primary text-sm border-b border-blue-primary md-800:cursor-pointer">Cek ketersedian jas</p>
            <p class="text-blue-primary text-sm border-b border-blue-primary md-800:cursor-pointer">Cek jas yang disewa</p>
        </div>
    </div>

    <div class="container-table w-full h-full mt-4 flex-[2] overflow-y-auto overflow-x-hidden">
        <div class="container-table w-full overflow-auto lg-1355:overflow-x-hidden">
            {{-- judul table --}}
            <div class="bg-gray-400 min-w-max h-max flex border-b-2 border-white sticky top-0 z-[2]">
                <h1 class="w-[309px] py-3 flex justify-center text-white text-[13px] font-bold">Kode Jas</h1>
                <h1 class="w-[243px] py-3 flex justify-center text-white text-[13px] font-bold">Masa Penyewaan</h1>
                <h1 class="w-[294px] py-3 flex justify-center text-white text-[13px] font-bold">Tenggat Penyewaan</h1>
                <h1 class="w-[258px] py-3 flex justify-center text-white text-[13px] font-bold">Aksi</h1>
            </div>
            @foreach ($adults as $adult)
                <div class="bg-zinc-100 min-w-max h-max flex border-b-2 border-white sticky top-0 shadow-xl">
                    <div class="w-[309px] py-3 flex items-center gap-x-3 text-white text-[13px] font-bold">
                        <img src="{{ asset($adult->main_picture) }}" alt="jas" class="w-[65px] ml-5">
                        <p class="w-full flex-[2] text-zinc-500 text-[13px] text-center font-bold">{{ Str::title($adult->name) . ' - ' . Str::lower($adult->code) }}</p>
                    </div>
                    <div class="w-[243px] py-3 flex flex-col justify-center items-center gap-y-2">
                        <p class="text-zinc-500 text-[13px] font-bold">17 September 2023  09.00 WIB</p>
                        <p class="text-zinc-500 text-[13px] font-bold">Sampai</p>
                        <p class="text-zinc-500 text-[13px] font-bold">17 November 2023  09.00 WIB</p>
                    </div>
                    <h1 class="w-[294px] py-3 flex justify-center items-center text-zinc-500 text-[13px] font-bold">
                        1 Hari 3 Jam 30 Menit 20 Detik
                    </h1>
                    <div class="w-[258px] py-3 flex justify-center items-center gap-[5px]">
                        <div class="bg-green-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer">
                            <img src="{{ asset('img/eye.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                        <div class="bg-blue-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer">
                            <img src="{{ asset('img/edit.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                        <div class="bg-yellow-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer">
                            <img src="{{ asset('img/ok.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                        <div class="bg-red-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer">
                            <img src="{{ asset('img/delete.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection