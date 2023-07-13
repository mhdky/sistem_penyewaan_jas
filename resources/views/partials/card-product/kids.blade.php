{{-- kids suit --}}
<div class="{{ (Request::is('suit*') ? 'flex-grow pt-24 lg-1000:pt-12' : 'pt-12') }} bg-white w-full px-4 md-768:px-6 lg-1000:px-10 lg-1240:px-[60px] lg-1365:px-0">
    <div class="w-full lg-1365:w-[1239px] lg-1365:mx-auto lg-1365:px-1">
        {{-- name saction --}}
        <div class="w-full flex justify-center items-center lg-1000:mt-14">
            <span class="bg-blue-primary w-full h-[1px] flex-[2] -mt-1"></span>
            <h1 class="text-blue-primary text-lg font-hanuman font-bold mx-3 md-768:text-xl">KID'S SUIT</h1>
            <span class="bg-blue-primary w-full h-[1px] flex-[2] -mt-1"></span>
        </div>

        {{-- card product --}}
        <div class="w-full mt-8 grid gap-10 grid-cols-2 sm-460:grid-cols-3 md-600:grid-cols-4 md-800:grid-cols-5 lg-1000:grid-cols-6 lg-1000:mt-[75px]">
            <a href="/this/suit" class="flex flex-col justify-between">
                {{-- img product --}}
                <img src="{{ asset('img/product-7.png') }}" alt="jas" class="w-full hfull">
                {{-- name product --}}
                <p class="h-16 font-bold mt-3 text-center">{{ Str::title('Dusky Lavender - ') . '3pkbt72' }}</p>
            </a>
            <a href="/this/suit" class="flex flex-col justify-between">
                {{-- img product --}}
                <img src="{{ asset('img/product-8.png') }}" alt="jas" class="w-full hfull">
                {{-- name product --}}
                <p class="h-16 font-bold mt-3 text-center">{{ Str::title('Midnight Blue - ') . '5lnmf32' }}</p>
            </a>
            <a href="/this/suit" class="flex flex-col justify-between">
                {{-- img product --}}
                <img src="{{ asset('img/product-9.png') }}" alt="jas" class="w-full hfull">
                {{-- name product --}}
                <p class="h-16 font-bold mt-3 text-center">{{ Str::title('Cobalt Blue - ') . '8cdku69' }}</p>
            </a>
            <a href="/this/suit" class="flex flex-col justify-between">
                {{-- img product --}}
                <img src="{{ asset('img/product-10.png') }}" alt="jas" class="w-full hfull">
                {{-- name product --}}
                <p class="h-16 font-bold mt-3 text-center">{{ Str::title('Dusty Brown - ') . '4plcz08' }}</p>
            </a>
            <a href="/this/suit" class="flex flex-col justify-between">
                {{-- img product --}}
                <img src="{{ asset('img/product-11.png') }}" alt="jas" class="w-full hfull">
                {{-- name product --}}
                <p class="h-16 font-bold mt-3 text-center">{{ Str::title('Steel Blue - ') . '8lmcu88' }}</p>
            </a>
            <a href="/this/suit" class="flex flex-col justify-between">
                {{-- img product --}}
                <img src="{{ asset('img/product-12.png') }}" alt="jas" class="w-full hfull">
                {{-- name product --}}
                <p class="h-16 font-bold mt-3 text-center">{{ Str::title('Burnt Orange - ') . '3llvz43' }}</p>
            </a>
        </div>
    </div>

    @if (Request::is('suit*'))
        <div class="bg-slate-100 w-[115px] h-[38px] border border-slate-200 rounded-md mt-[30px] text-slate-600 text-[14px] text-center font-bold leading-[35px] mx-auto block hover:bg-slate-200 md-900:cursor-pointer lg-1000:mt-[55px]">Load</div>
    @else
        <a href="/suit/kids" class="bg-slate-100 w-[115px] h-[38px] border border-slate-200 rounded-md mt-[30px] text-slate-600 text-[14px] text-center font-bold leading-[35px] mx-auto block hover:bg-slate-200 lg-1000:mt-[55px]">See More</a>
    @endif
</div>