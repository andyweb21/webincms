@props([
    'bgicon' => 'bg-red-500'    
])
<div class="w-full lg:w-6/12 xl:w-3/12">
<div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow-lg">
    <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">{{ $title }}</h5>
            <span class="font-bold text-xl">{{ $value }}</span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div {{ $icon->attributes->class(['text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full', $bgicon]) }}>
            {{ $icon }}
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-500 mt-4"><span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span><span class="whitespace-nowrap">Since last month</span></p>
    </div>
</div>
</div>