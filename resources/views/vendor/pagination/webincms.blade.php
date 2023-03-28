@if ($paginator->hasPages())
    <div class="flex justify-between items-center mt-6 space-x-1">
        
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <!-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li> -->
                <span class="flex justify-self-start items-center px-3 py-1 text-gray-500 hover:bg-gray-200 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                    </svg>
                    Prev
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="flex justify-self-start items-center px-3 py-1 text-gray-500 hover:bg-gray-200 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                    </svg>
                    Prev
                </a>
            @endif

            <div class="flex justify-center items-center gap-2">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <!-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> -->
                            <span aria-current="page" class="px-3 py-1 text-gray-700 bg-gray-200 font-medium rounded-md hover:bg-gray-200">
                            {{ $page }}
                            </span>
                        @else
                            <!-- <li><a href="{{ $url }}">{{ $page }}</a></li> -->
                            <a href="{{ $url }}" class="px-3 py-1 text-gray-400 font-medium rounded-md hover:bg-gray-200 hover:text-gray-700">
                            {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
            </div>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <!-- <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li> -->
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="px-3 py-1 flex items-center text-gray-500 hover:bg-gray-200 rounded-md">
                    Next
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            @else
                <!-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li> -->
                <span class="px-3 py-1 flex items-center text-gray-500 hover:bg-gray-200 rounded-md" aria-hidden="true">
                    Next
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </span>
            @endif
        
    </div>
@endif
