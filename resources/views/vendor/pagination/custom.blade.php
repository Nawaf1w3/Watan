@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-6">
        <ul class="pagination flex space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <span class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-xl">←</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="w-12 h-12 flex items-center justify-center rounded-full bg-gold text-white text-xl hover:bg-gold-dark">←</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled">
                        <span class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-xl">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="w-12 h-12 flex items-center justify-center rounded-full bg-gold text-white text-xl font-bold">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="w-12 h-12 flex items-center justify-center rounded-full bg-white text-black text-xl hover:bg-gold hover:text-white transition font-bold">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="w-12 h-12 flex items-center justify-center rounded-full bg-gold text-white text-xl hover:bg-gold-dark">→</a>
                </li>
            @else
                <li class="disabled">
                    <span class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-xl">→</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
