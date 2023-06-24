<div class="bg-violet-600 w-full px-4 py-3 flex justify-between items-center fixed top-0">
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