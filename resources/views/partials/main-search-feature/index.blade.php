<div class="mainSearch bg-[rgb(0,0,0,0.92)] fixed z-30 top-0 right-0 bottom-0 left-0 h-screen overflow-hidden hidden">
    <div class="w-full h-full px-4 pb-5 flex flex-col md-768:px-6 lg-1000:px-10 lg-1240:px-[60px] lg-1365:w-[1239px] lg-1365:mx-auto lg-1365:px-1">
        {{-- search input --}}
        <div class="w-full py-4">
            {{-- search color and close --}}
            <div class="w-full flex justify-between items-center">
                {{-- color --}}
                <div class="flex items-center">
                    <p class="text-neutral-200 font-bold mr-2 hidden md-768:block">Search the color</p>
                    <span class="bg-black w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#FF000F] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#FF7A00] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#FFE500] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#05FF00] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#0500FF] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#8F00FF] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#964B00] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-[#D3D3D3] w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                    <span class="bg-white w-[15px] h-[15px] border border-neutral-200 rounded-full mr-1 cursor-pointer"></span>
                </div>

                {{-- close search --}}
                <p class="btnCloseMainSearch text-neutral-200 font-bold cursor-pointer">Close</p>
            </div>

            {{-- input search --}}
            <div class="bg-neutral-200 w-full h-[50px] mt-4 pr-2 rounded-md flex justify-between items-center overflow-hidden relative">
                <input type="text" name="search" id="search" placeholder="Search" autocomplete="off" class="inputMainSearch bg-transparent w-full flex-[2] border-none outline-none focus:ring-0 lg-1000:pl-5">
                <div class="bg-violet-600 w-[32px] h-[32px] rounded-md flex justify-center items-center">
                    <i class="fas fa-search text-neutral-200"></i>
                </div>
                <div class="bg-violet-600 w-[32px] h-[32px] rounded-md hidden justify-center items-center absolute right-[9px]">
                    <img src="{{ asset('img/loading.gif') }}" alt="">
                </div>
            </div>
        </div>

        <div class="container-card-product-search w-full h-full mt-5 pr-2 flex-[2] overflow-auto">
            <div class="w-full grid gap-10 grid-cols-2 sm-460:grid-cols-3 md-600:grid-cols-4 md-800:grid-cols-5 lg-1000:grid-cols-6">
                
            </div>
        </div>
    </div>
</div>