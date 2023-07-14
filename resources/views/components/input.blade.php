@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-transparent flex-[2] border-none focus:border-none focus:ring-0']) !!}>
{{-- <div class="bg-transparent"></div> --}}