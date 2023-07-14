<x-guest-layout>
    <x-authentication-card>
        {{-- logo --}}
        <a href="/" class="w-full flex justify-center text-2xl text-blue-primary font-hanuman font-bold mb-5 sm-580:mb-[19px]">Ky-Jas</a>

        <div class="mb-4 text-sm text-white">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="my-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="w-full mb-5 flex justify-between items-center border-b border-white sm-580:mb-6">
                <img src="{{ asset('img/at.svg') }}" alt="logo" class="w-5 h-5">
                <x-input id="email" class="w-full flex-[2] text-white text-sm font-bold placeholder:text-white bg-transparent focus:border-none focus:ring-0" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="bg-[#DEDEDE] w-full h-[35px] rounded-lg mt-7">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
