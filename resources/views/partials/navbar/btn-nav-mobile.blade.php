{{-- nav mobile  --}}
<div class="navbar bg-violet-600 w-full px-4 py-3 border-b border-slate-200 flex justify-between items-center fixed z-20 top-0 md-768:hidden">
    {{-- burger btn --}}
    <div class="burgerBtn w-7 h-6 flex flex-col justify-between relative">
        <span class="line bg-white w-full h-1 rounded-sm"></span>
        <span class="line bg-white w-full h-1 rounded-sm"></span>
        <span class="line bg-white w-full h-1 rounded-sm"></span>
    </div>

    {{-- logo --}}
    <a href="/" class="font-hanuman font-bold text-blue-primary text-xl">KY-JAS</a>

    {{-- profile picture --}}
    <div class="w-9 h-9 bg-violet-600 rounded-full overflow-hidden">
        <img src="{{ asset('img/profile.jpeg') }}" alt="profule" class="w-full h-full object-cover">
    </div>
</div>

{{-- nav desktop --}}
<div class="bg-violet-600 w-full px-6 py-3 hidden justify-between items-center fixed z-20 top-0 md-768:flex lg-1000:px-10 lg-1240:px-[60px]">
    {{-- container logo & list nav desktop --}}
    <div class="flex items-center">
        {{-- logo --}}
        <a href="/" class="text-blue-primary text-2xl font-hanuman font-bold mr-10">KY-JAS</a>

        {{-- list desktop --}}
        <ul class="flex items-center -mt-2">
            <li class="flex items-center"><i class="fas fa-search text-white text-sm mr-5"></i></li>
            <li><a href="/" class="text-white text-sm font-bold mr-5">Home</a></li>
            <li class="text-white text-sm font-bold mr-5 select-none">Categories</li>
            <li><a href="/" class="text-white text-sm font-bold mr-5">Rute</a></li>
            <li><a href="/" class="text-white text-sm font-bold mr-5">About</a></li>
        </ul>
    </div>

    {{-- container register & login --}}
    <div class="flex items-center">
        {{-- login --}}
        <a href="/login" class="text-white text-sm font-bold mr-3">Login</a>
        {{-- register --}}
        <a href="/register" class="bg-blue-primary px-4 py-2 rounded text-white text-sm font-bold">Register</a>
    </div>
</div>