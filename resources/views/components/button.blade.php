<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-[#DEDEDE] w-full h-[35px] rounded-lg text-sm font-bold']) }}>
    {{ $slot }}
</button>
