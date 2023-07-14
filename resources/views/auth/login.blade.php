<x-guest-layout>
    <x-authentication-card>
        {{-- logo --}}
        <a href="/" class="w-full flex justify-center text-2xl text-blue-primary font-hanuman font-bold">Ky-Jas</a>

        <x-validation-errors class="my-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="text-white text-lg font-bold my-5 sm-580:mt-[27px] sm-580:mb-[19px]">Welcome back! please Login</h1>

        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/at.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="email" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/lock.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="inputPassword" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                
                {{-- password show and hide --}}
                <div class="w-5 h-5 relative flex justify-between items-center">
                    <img src="{{ asset('img/eye.svg') }}" alt="eye" class="w-5 h-5">
                    <div class="lineEyePass absolute z-[2] right-2 -rotate-45 flex transition-all duration-300 overflow-hidden">
                        <div class="bg-violet-600 w-[2px] h-5"></div>
                        <div class="bg-white w-[2px] h-5"></div>
                    </div>

                    <input type="checkbox" class="opacity-0 absolute z-[3] right-[3px] lg-1000:cursor-pointer" onclick="checkPassword()">
                </div>
            </div>

            <div class="flex justify-between items-center mt-4 sm-580:mb-6">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white font-bold">{{ __('Remember me') }}</span>
                </label>

                {{-- <a href="/forgot-password" class="text-white text-sm font-bold">Forgot password</a> --}}
                @if (Route::has('password.request'))
                    <a class="text-white text-sm font-bold hover:text-slate-100" href="{{ route('password.request') }}">
                        {{ __('Forgot password') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-4 sm-580:mb-6">
                <x-button class="bg-[#DEDEDE] w-full h-[35px] rounded-lg">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <p class="text-white text-sm mt-4 text-center">Don't have an acount? <a href="/register" class="font-bold hover:text-slate-100">Register</a></p>
        </form>
    </x-authentication-card>
    
    @push('show-password')
        <script src="{{ asset('js/show-password.js') }}"></script>
    @endpush
</x-guest-layout>
