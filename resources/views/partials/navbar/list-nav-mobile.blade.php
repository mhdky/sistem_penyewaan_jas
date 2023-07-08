<div class="bg-blue-primary w-full h-screen fixed z-10 top-0 right-0 bottom-0 left-0">
    {{-- container profile & list navbar --}}
    <div class="w-full mt-20 px-7">
        {{-- profile --}}
        <div class="flex items-center">
            <div class="w-12 h-12 bg-violet-600 rounded-full overflow-hidden">
                <img src="{{ asset('img/profile.jpeg') }}" alt="profule" class="w-full h-full object-cover">
            </div>
            <p class="text-white text-lg font-bold ml-5">Muhammad Rizki</p>
        </div>

        {{-- list navbar --}}
        <ul class="mt-14">
            <li>
                <div class="btnShowMainSearchMbl bg-blue-primary-hover w-[240px] mb-5 -ml-1 px-4 py-2 rounded-md border-none outline-none text-white focus:border-none focus:ring-0 placeholder:text-slate-200">Search</div>
            </li>
            <li><a href="/" class="text-white font-bold">Home</a></li>
            <li class="btnCategories my-3 flex items-center select-none">
                <p class="text-white font-bold">Categories</p>
                <i class="arrowRight fa-solid fa-caret-right text-white ml-2"></i>
            </li>
            <div class="listCategory hidden">
                <li class="mb-3 ml-3"><a href="#adult-suit" class="text-violet-200 font-bold">Adult Suit</a></li>
                <li class="mb-3 ml-3"><a href="#kids-suit" class="text-violet-200 font-bold">Kid's Suit</a></li>
            </div>
            <li class="mb-3"><a href="#" class="text-white font-bold">Rute</a></li>
            <li><a href="#" class="text-white font-bold">About</a></li>
        </ul>
    </div>
</div>