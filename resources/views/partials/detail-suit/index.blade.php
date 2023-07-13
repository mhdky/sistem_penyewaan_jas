<div class="bg-white w-full flex-grow px-4 pt-20 md-768:pt-24 lg-1000:pt-[110px] lg-1000:px-10 lg-1200:">
    {{-- container gambar dan deskrisi jas --}}
    <div class="w-full flex flex-col md-768:flex-row md-768:gap-x-8 lg-1020:w-[1003px] lg-1020:m-auto lg-1200:gap-[89px]">
        {{-- container gambar --}}
        <div class="w-full md-768:flex-1">
            {{-- gambar utama --}}
            <div class="bg-neutral-200 w-full p-4 md-768:p-8 lg-1200:p-[70px]">
                <img src="{{ asset('img/product-1.png') }}" alt="Jas" class="w-full">
            </div>

            {{-- gambar lain --}}
            <div class="w-full mt-2 columns-2 gap-2 space-y-2 lg-1200:mt-[26px] lg-1200:gap-[26px] lg-1200:space-y-[26px]">
                <div class="bg-neutral-200 p-3 break-inside-avoid-column md-768:p-7">
                    <img src="{{ asset('img/detail-1.jfif') }}" alt="Jas" class="w-full">
                </div>
                <div class="bg-neutral-200 p-3 break-inside-avoid-column md-768:p-7">
                    <img src="{{ asset('img/detail-2.jfif') }}" alt="Jas" class="w-full">
                </div>
                <div class="bg-neutral-200 p-3 break-inside-avoid-column md-768:p-7">
                    <img src="{{ asset('img/detail-3.jfif') }}" alt="Jas" class="w-full">
                </div>
                <div class="bg-neutral-200 p-3 break-inside-avoid-column md-768:p-7">
                    <img src="{{ asset('img/product-1.png') }}" alt="Jas" class="w-full">
                </div>
            </div>
        </div>

        {{-- container deskripsi jas --}}
        <div class="w-full h-max mt-5 flex-1 md-768:sticky md-768:top-[115px] lg-1000:top-[130px]">
            {{-- nama jas --}}
            <h1 class="text-2xl font-bold border-b border-black pb-2">Black - 8ikje98</h1>

            {{-- container ukuran, bahan dll --}}
            <div class="w-full mt-7">
                {{-- ukuran --}}
                <div class="flex items-center mb-5">
                    {{-- keterangan --}}
                    <p class="w-[117px] font-bold">Ukuran</p>
                    <p>XL</p>
                </div>

                {{-- bahan --}}
                <div class="flex items-center mb-5">
                    {{-- keterangan --}}
                    <p class="w-[117px] font-bold">Bahan</p>
                    <p>Wool</p>
                </div>

                {{-- status --}}
                <div class="flex items-center mb-5">
                    {{-- keterangan --}}
                    <p class="w-[117px] font-bold">Status</p>
                    <p>Masih dalam pemesanan</p>
                </div>

                {{-- deskripsi --}}
                <div class="flex items-center mb-8">
                    {{-- keterangan --}}
                    <p class="w-[117px] font-bold">Deskripsi</p>
                    <i class="fas fa-chevron-right text-sm"></i>
                </div>

                {{-- tombol simpan ke sewa nanti --}}
                <p class="w-full h-10 border border-black rounded-md text-sm flex justify-center items-center font-medium hover:bg-[#0000000a] lg-1000:cursor-pointer">Simpan ke sewa nanti</p>
            </div>
        </div>
    </div>
</div>