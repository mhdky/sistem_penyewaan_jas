<div class="about bg-black-transparent fixed z-40 w-screen min-h-screen hidden">
    <div class="w-full h-screen relative flex justify-center items-center px-4">
        {{-- close about --}}
        <div class="closeAbout w-full h-full absolute z-[2]"></div>
        
        {{-- container about --}}
        <div class="containerAbout w-[92%] absolute z-[3] bg-violet-700 border border-violet-500 p-5 rounded-xl hidden translate-y-10 transition-all duration-300 sm-460:w-[440px] sm-460:p-8">
            {{-- about --}}
            <p class="text-white text-sm text-justify leading-6">Ky-Jas adalah sebuah platform penyewaan Jas berkualitas tinggi. Melalui platform ini, Anda dapat menemukan beragam pilihan Jas yang tersedia dan mendapatkan informasi secara real-time tentang ketersediaan Jas yang Anda inginkan. Dengan demikian, Anda dapat menghindari kekecewaan jika Jas yang Anda inginkan sedang dalam masa penyewaan.</p>
        
            {{-- sosmed --}}
            <div class="w-full flex items-center mt-4">
                {{-- instagram --}}
                <a href="#" class="bg-violet-secondary border border-violet-500 w-[100px] h-[26px] mr-2 px-2 flex items-center rounded-xl hover:bg-violet-600">
                    <img src="{{ asset('img/instagram.svg') }}" alt="icon" class="w-[15px] h-[15px] mr-[6px]">
                    <p class="text-white text-[12px] font-bold">Instagram</p>
                </a>

                {{-- facebook --}}
                <a href="#" class="bg-violet-secondary border border-violet-500 w-[100px] h-[26px] px-2 flex items-center rounded-xl hover:bg-violet-600">
                    <img src="{{ asset('img/facebook.svg') }}" alt="icon" class="w-[15px] h-[15px] mr-[6px]">
                    <p class="text-white text-[12px] font-bold">Facebook</p>
                </a>
            </div>
        </div>
    </div>
</div>