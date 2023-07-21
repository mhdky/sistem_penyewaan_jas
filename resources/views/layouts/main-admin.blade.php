<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>
        body {
            background-color: #E4E4E7;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="w-full h-screen overflow-hidden lg-1365:flex lg-1365:justify-center">
        {{-- container navigasi & content --}}
        <div class="w-full h-full flex lg-1000:p-5 lg-1365:w-[1365px]">
            {{-- navigasi --}}
            <div class="containerAdminNavigation fixed top-0 right-0 bottom-0 left-0 z-10 -translate-x-full duration-300 lg-1000:relative lg-1000:translate-x-0">
                <div class="relative w-full h-full">
                    <div class="adminNavigation bg-violet-600 w-[230px] h-full absolute z-[10] transition-all duration-300 lg-1000:w-[144px] lg-1000:relative lg-1000:rounded-2xl">
                        {{-- profile --}}
                        <div class="w-full flex flex-col items-center">
                            <div class="bg-white w-[60px] h-[60px] mt-7 rounded-full overflow-hidden">
                                <img src="{{ $profil }}" alt="profil" class="w-full h-full object-cover">
                            </div>
        
                            <p class="text-white text-sm font-bold mt-3">{{ Str::title(Str::limit(Auth::user()->name, 14)) }}</p>
                        </div>
        
                        {{-- list navigasi --}}
                        <div class="flex justify-center mt-10">
                            <ul class="w-max">
                                <li class="mb-3 duration-300 -ml-20 hover:translate-x-1 lg-1000:-ml-0"><a href="/" class="text-zinc-200 text-[13px] font-bold">Beranda</a></li>
                                <li class="mb-3 duration-300 -ml-20 hover:translate-x-1 lg-1000:-ml-0"><a href="#" class="{{ Request::is('dashboard/penyewaan*') ? 'text-violet-950' : 'text-zinc-200' }} text-[13px] font-bold">Penyewaan</a></li>
                                <li class="mb-3 duration-300 -ml-20 hover:translate-x-1 lg-1000:-ml-0"><a href="#" class="text-zinc-200 text-[13px] font-bold">Jas</a></li>
                                <li class="mb-3 duration-300 -ml-20 hover:translate-x-1 lg-1000:-ml-0"><a href="#" class="text-zinc-200 text-[13px] font-bold">Informasi Toko</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="closeAdminNavigation bg-black-transparent fixed top-0 right-0 bottom-0 left-0 opacity-0 duration-300 lg-1000:hidden"></div>
                </div>
            </div>

            {{-- content --}}
            <div class="bg-white w-full h-full p-4 flex-[2] flex flex-col overflow-x-hidden lg-1000:p-7 lg-1000:ml-5 lg-1000:rounded-2xl">
                @yield('content')

                {{-- burger btn --}}
                <div class="adminBurgerBtn bg-[#151525e5] backdrop-blur-sm w-9 h-9 rounded-md fixed bottom-5 right-5 flex flex-col justify-between px-2 py-[10px] sm-460:top-2 sm-460:rigth-3 lg-1000:hidden">
                    <span class="bg-white w-full h-0.5"></span>
                    <span class="bg-white w-full h-0.5"></span>
                    <span class="bg-white w-full h-0.5"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin/admin-navigation.js') }}"></script>
    @stack('btn-action-penyewaan')
    @stack('about')
    @stack('countdown')
    @stack('form-rental')
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>