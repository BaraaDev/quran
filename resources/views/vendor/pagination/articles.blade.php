@if ($paginator->hasPages())
    <div class="d-flex justify-content-center mt-3 mb-3">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a href="{{ $paginator->previousPageUrl() }}" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
            @else
                <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
            @endif

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
                            <li class="page-item active"><a href="#" class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item "><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
            @else
                <li class="page-item disabled"><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
            @endif
        </ul>
    </div>
@endif
