<x-guest-layout>
    <x-authentication-card>
        {{-- logo --}}
        <a href="/" class="w-full flex justify-center text-2xl text-blue-primary font-hanuman font-bold">Ky-Jas</a>

        <x-validation-errors class="my-4" />

        <h1 class="text-white text-lg font-bold my-5 sm-580:mt-[27px] sm-580:mb-[19px]">Register</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/user.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="name" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/at.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="email" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
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

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-8 sm-580:mb-6">
                <x-button class="bg-[#DEDEDE] w-full h-[35px] rounded-lg">
                    {{ __('Register') }}
                </x-button>
            </div>

            <p class="text-white text-sm mt-4 text-center">Have an acount? <a href="/login" class="font-bold hover:text-slate-100">Login</a></p>
        </form>
    </x-authentication-card>

    @push('show-password')
        <script src="{{ asset('js/show-password.js') }}"></script>
    @endpush
    @push('show-confirm-password')
        <script src="{{ asset('js/show-confirm-password.js') }}"></script>
    @endpush
</x-guest-layout>