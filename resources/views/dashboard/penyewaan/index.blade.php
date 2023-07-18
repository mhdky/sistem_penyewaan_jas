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
            <div class="bg-gray-400 min-w-max h-max flex border-b-4 border-white sticky top-0 z-[2]">
                <h1 class="w-[309px] py-3 flex justify-center text-white text-[13px] font-bold">Kode Jas</h1>
                <h1 class="w-[243px] py-3 flex justify-center text-white text-[13px] font-bold">Masa Penyewaan</h1>
                <h1 class="w-[294px] py-3 flex justify-center text-white text-[13px] font-bold">Tenggat Penyewaan</h1>
                <h1 class="w-[258px] py-3 flex justify-center text-white text-[13px] font-bold">Aksi</h1>
            </div>
            {{-- table jas --}}
            @foreach ($adults as $adult)
                <div class="{{ ($loop->index % 2 == 0) ? 'bg-zinc-100' : 'bg-zinc-50' }} min-w-max h-[113px] flex border-b-4 border-white sticky top-0 shadow-xl">
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
                        <div class="btnDetailPenyewaan bg-green-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer relative">
                            <p class="detailPenyewaan hidden opacity-0 bg-[#0000007e] px-2 py-0.5 rounded-[3px] text-white text-[12px] absolute -top-9 -right-[10px] translate-y-1 duration-300">Detail</p>
                            <img src="{{ asset('img/eye.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                        <div class="btnDetailPenyewaan bg-blue-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer relative">
                            <p class="detailPenyewaan hidden opacity-0 bg-[#0000007e] px-2 py-0.5 rounded-[3px] text-white text-[12px] absolute -top-9 -right-[5px] translate-y-1 duration-300">Edit</p>
                            <img src="{{ asset('img/edit.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                        <div class="btnDetailPenyewaan btnFinishPenyewaan bg-yellow-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer relative">
                            <p class="detailPenyewaan hidden opacity-0 w-[150px] bg-[#0000007e] px-2 py-0.5 rounded-[3px] text-white text-[12px] absolute -top-9 -right-[60px] translate-y-1 duration-300">Jas Telah Dikembalikan</p>
                            <img src="{{ asset('img/ok.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                        <div class="btnDetailPenyewaan btnDeletePenyewaan bg-red-500 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] md-800:cursor-pointer relative">
                            <p class="detailPenyewaan hidden opacity-0 bg-[#0000007e] px-2 py-0.5 rounded-[3px] text-white text-[12px] absolute -top-9 -right-[10px] translate-y-1 duration-300">Hapus</p>
                            <img src="{{ asset('img/delete.svg') }}" alt="icon" class="w-[15px] h-[15px]">
                        </div>
                    </div>
                </div>

                {{-- delete penyewaan --}}
                <div class="containerDeletePenyewaan bg-[#1515250e] backdrop-blur-[2px] fixed z-20 top-0 right-0 bottom-0 left-0 hidden justify-center items-center">
                    <div class="deletePenyewaan bg-white w-[85%] rounded-md p-5 translate-y-7 opacity-0 duration-300 sm-460:w-[340px]">
                        <p class="text-sm font-bold text-center">PERHATIAN!</p>
                        <p class="text-sm font-bold text-zinc-700 text-center my-6">Kamu akan menghapus sewaan <br> {{ Str::title($adult->name) . ' - ' . Str::lower($adult->code) }}</p>
                        <div class="w-full flex justify-end items-center gap-x-3">
                            <p class="noDeltePenyewaan bg-violet-600 px-3 py-2 rounded-md text-white text-sm font-bold md-800:cursor-pointer">Tidak</p>
                            <button type="submit" class="text-blue-primary text-sm font-bold">Hapus</button>
                        </div>
                    </div>
                </div>

                {{-- jas telah dikembalikan --}}
                <div class="containerFinishPenyewaan bg-[#1515250e] backdrop-blur-[2px] fixed z-20 top-0 right-0 bottom-0 left-0 hidden justify-center items-center">
                    <div class="finishPenyewaan bg-white w-[85%] rounded-md p-5 translate-y-7 opacity-0 duration-300 sm-460:w-[340px]">
                        <p class="text-sm text-center font-bold">PERHATIAN!</p>
                        <p class="text-zinc-700 text-sm font-bold text-center my-6">Penyewaan jas {{ Str::title($adult->name) . ' - ' . Str::lower($adult->code) }} telah dikembalikan?</p>
                        <div class="w-full flex justify-end gap-x-3">
                            <p class="noFinishPenyewaan bg-violet-600 px-3 py-2 rounded-md text-white text-sm font-bold md-800:cursor-pointer">Belum</p>
                            <button type="submit" class="text-blue-primary text-sm font-bold">Sudah</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('btn-action-penyewaan')
    <script src="{{ asset('js/admin/btn-action-penyewaan.js') }}"></script>
@endpush