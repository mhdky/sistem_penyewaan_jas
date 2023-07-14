<x-guest-layout>
    <x-authentication-card>
        {{-- logo --}}
        <a href="/" class="w-full flex justify-center text-2xl text-blue-primary font-hanuman font-bold">Ky-Jas</a>

        <x-validation-errors class="my-4" />

        <form method="POST" action="{{ route('password.update') }}" class="my-5 sm-580:mt-[27px] sm-580:mb-[19px]">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/at.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="email" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="email" name="email" placeholder="Email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/lock.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="inputPassword" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
            
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

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/lock.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="confirmPassword" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
            
                {{-- password show and hide --}}
                <div class="w-5 h-5 relative flex justify-between items-center">
                    <img src="{{ asset('img/eye.svg') }}" alt="eye" class="w-5 h-5">
                    <div class="lineEyeConfirmPass absolute z-[2] right-2 -rotate-45 flex transition-all duration-300 overflow-hidden">
                        <div class="bg-violet-600 w-[2px] h-5"></div>
                        <div class="bg-white w-[2px] h-5"></div>
                    </div>

                    <input type="checkbox" class="opacity-0 absolute z-[3] right-[3px] lg-1000:cursor-pointer" onclick="checkConfirmPassword()">
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    
    @push('show-password')
        <script src="{{ asset('js/show-password.js') }}"></script>
    @endpush
    @push('show-confirm-password')
        <script src="{{ asset('js/show-confirm-password.js') }}"></script>
    @endpush
</x-guest-layout>
