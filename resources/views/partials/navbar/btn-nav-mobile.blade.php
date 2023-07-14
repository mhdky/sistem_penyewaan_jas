{{-- nav mobile  --}}
<div class="navbar bg-violet-600 w-full px-4 py-3 border-b border-violet-500 flex justify-between items-center fixed z-20 top-0 md-768:hidden">
    {{-- burger btn --}}
    <div class="burgerBtn w-7 h-6 flex flex-col justify-between relative">
        <span class="line bg-white w-full h-1 rounded-sm"></span>
        <span class="line bg-white w-full h-1 rounded-sm"></span>
        <span class="line bg-white w-full h-1 rounded-sm"></span>
    </div>

    {{-- logo --}}
    <a href="/" class="font-hanuman font-bold text-blue-primary text-xl">KY-JAS</a>

    @auth
        {{-- profile picture --}}
        <div class="flex items-center relative">
            <p class="text-white test-sm font-bold hidden">{{ Str::title(Str::limit('Muhammad Rizki', 14)) }}</p>

            <div class="showListUserMobile w-9 h-9 bg-violet-600 rounded-full overflow-hidden">
                <img src="{{ asset('img/profile.jpeg') }}" alt="profule" class="w-full h-full object-cover">
            </div>

            {{-- container list user --}}
            <div class="listUserMobile absolute z-30 top-0 right-0 hidden">
                <div class="relative">
                    {{-- close list user mobile --}}
                    <div class="closeListUserMobile bg-[#0000004d] fixed z-20 top-0 right-0 bottom-0 left-0"></div>

                    {{-- list user mobile --}}
                    <div class="bg-violet-700 w-[232px] border border-violet-500 py-2 rounded-lg absolute z-30 top-14 right-0 overflow-hidden">
                        <a href="#" class="w-full flex justify items-center gap-x-3 px-4 py-3 hover:bg-violet-600">
                            <img src="{{ asset('img/setting.svg') }}" alt="icon" class="w-6 h-6">
                            <p class="text-white text-sm font-bold">Pengaturan akun</p>
                        </a>

                        <a href="#" class="w-full flex justify items-center gap-x-3 px-4 py-3 hover:bg-violet-600">
                            <img src="{{ asset('img/suit-tie.svg') }}" alt="icon" class="w-6 h-6">
                            <p class="text-white text-sm font-bold">Jas yang disewa</p>
                        </a>

                        <a href="#" class="w-full flex justify items-center gap-x-3 px-4 py-3 hover:bg-violet-600">
                            <img src="{{ asset('img/watch-later.svg') }}" alt="icon" class="w-6 h-6">
                            <p class="text-white text-sm font-bold">Sewa nanti</p>
                        </a>

                        <span class="bg-violet-500 w-full h-[1px] block mt-2"></span>

                        <form action="/logout" method="post" class="mt-2">
                            @csrf
                            <button type="submit" class="w-full flex justify items-center gap-x-3 px-4 py-3 hover:bg-violet-600">
                                <img src="{{ asset('img/logout.svg') }}" alt="icon" class="w-6 h-6">
                                <p class="text-white text-sm font-bold">Log out</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="flex items-center">
            <a href="/login" class="text-white text-sm font-bold">Login</a>
        </div>
    @endauth

</div>

{{-- nav desktop --}}
<div class="bg-violet-600 w-full px-6 py-3 hidden justify-between items-center fixed z-20 top-0 md-768:flex lg-1000:px-10 lg-1240:px-[60px]">
    {{-- container logo & list nav desktop --}}
    <div class="flex items-center">
        {{-- logo --}}
        <a href="/" class="text-blue-primary text-2xl font-hanuman font-bold mr-10 md-768:mt-[6px]">KY-JAS</a>

        {{-- list desktop --}}
        <ul class="flex items-center -mt-2 relative">
            <li class="btnShowMainSearchDst flex items-center"><i class="fas fa-search text-white text-sm mr-5 cursor-pointer hover:text-slate-100 md-768:mt-2"></i></li>
            <li class="md-768:mt-1"><a href="/" class="text-white text-sm font-bold mr-5 hover:text-slate-100">Home</a></li>
            <li class="showDropDown text-white text-sm font-bold mr-5 select-none md-768:mt-[6px] cursor-pointer hover:text-slate-100">Categories</li>
            <li class="md-768:mt-1"><a href="/" class="text-white text-sm font-bold mr-5 hover:text-slate-100">Rute</a></li>
            <li class="md-768:mt-1"><a href="/" class="text-white text-sm font-bold mr-5 hover:text-slate-100">About</a></li>

            {{-- category drop down --}}
            <div class="listDropDown absolute top-8 left-24 hidden">
                <div class="relative">
                    {{-- close dorop down desktop --}}
                    <div class="closeDropDown fixed top-0 right-0 bottom-0 left-0"></div>

                    {{-- list drop down desktop --}}
                    <ul class="bg-violet-700 w-32 px-4 py-2 border border-violet-500 absolute z-[2] rounded-md">
                        <li class="py-1"><a href="/suit/adult" class="text-white text-sm font-bold hover:text-slate-100">Adult Suit</a></li>
                        <li class="py-1"><a href="/suit/kids" class="text-white text-sm font-bold hover:text-slate-100">Kid's Suit</a></li>
                    </ul>
                </div>                
            </div>
        </ul>
    </div>

    {{-- container register & login --}}
    <div class="flex items-center">
        {{-- login --}}
        <a href="/login" class="text-white text-sm font-bold mr-3 hover:text-slate-100">Login</a>
        {{-- register --}}
        <a href="/register" class="bg-blue-primary px-4 py-2 rounded text-white text-sm font-bold hover:bg-blue-primary-hover">Register</a>
    </div>
</div>