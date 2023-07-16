{{-- adult suit --}}
<div class="{{ (Request::is('suit*') ? 'flex-grow pt-24 lg-1000:pt-12' : 'pt-12') }} bg-white w-full px-4 md-768:px-6 lg-1000:px-10 lg-1240:px-[60px] lg-1365:px-0" id="adult-suit">
    <div class="w-full lg-1365:w-[1239px] lg-1365:mx-auto lg-1365:px-1">
        {{-- name saction --}}
        <div class="w-full flex justify-center items-center lg-1000:mt-14">
            <span class="bg-blue-primary w-full h-[1px] flex-[2] -mt-1"></span>
            <h1 class="text-blue-primary text-lg font-hanuman font-bold mx-3 md-768:text-xl">ADULT SUIT</h1>
            <span class="bg-blue-primary w-full h-[1px] flex-[2] -mt-1"></span>
        </div>

        {{-- card product --}}
        <div class="w-full mt-8 grid gap-10 grid-cols-2 sm-460:grid-cols-3 md-600:grid-cols-4 md-800:grid-cols-5 lg-1000:grid-cols-6 lg-1000:mt-[75px]">
            @foreach ($adults as $adult)
                <a href="/this/suit/{{ Str::lower($adult->name) . '/' . Str::lower($adult->code)}}" class="flex flex-col justify-between">
                    {{-- img product --}}
                    <img src="{{ asset($adult->main_picture) }}" alt="jas" class="w-full hfull">
                    {{-- name product --}}
                    <p class="h-16 font-bold mt-3 text-center">{{ Str::title($adult->name . ' - ') . Str::lower($adult->code) }}</p>
                </a>
            @endforeach
        </div>
    </div>

    @if (Request::is('suit*'))
        <div class="bg-slate-100 w-[115px] h-[38px] border border-slate-200 rounded-md mt-[30px] text-slate-600 text-[14px] text-center font-bold leading-[35px] mx-auto block hover:bg-slate-200 md-900:cursor-pointer lg-1000:mt-[55px]">Load</div>
    @else
        <a href="/suit/adult" class="bg-slate-100 w-[115px] h-[38px] border border-slate-200 rounded-md mt-[30px] text-slate-600 text-[14px] text-center font-bold leading-[35px] mx-auto block hover:bg-slate-200 lg-1000:mt-[55px]">See More</a>
    @endif
</div>