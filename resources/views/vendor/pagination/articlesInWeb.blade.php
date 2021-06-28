@if ($paginator->hasPages())
<div class="col-lg-12">
    <ul class="pagination justify-content-center d-flex pt-5">
        @if ($paginator->onFirstPage())
            <li class="page-item m-1"><a class="page-link rounded-lg btn-round-md p-0 fw-600 shadow-xss bg-white text-grey-900 border-0" href="javascript:void(0);" tabindex="-1" aria-disabled="true"><i class="ti-angle-right"></i></a></li>
        @else
            <li class="page-item m-1"><a class="page-link rounded-lg btn-round-md p-0 fw-600 shadow-xss bg-white text-grey-900 border-0" href="{{ $paginator->previousPageUrl() }}" tabindex="-1" aria-disabled="true"><i class="ti-angle-right"></i></a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item m-1"><a class="page-link rounded-lg btn-round-md p-0 fw-600 shadow-xss bg-primary text-white border-0" href="javascript:void(0);">{{$page}}</a></li>
                    @else
                        <li class="page-item m-1"><a class="page-link rounded-lg btn-round-md p-0 fw-600 shadow-xss bg-white text-grey-900 border-0" href="{{ $url }}">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item m-1"><a class="page-link rounded-lg btn-round-md p-0 fw-600 shadow-xss bg-white text-grey-900 border-0" href="{{ $paginator->nextPageUrl() }}"><i class="ti-angle-left"></i></a></li>
        @else
            <li class="page-item m-1"><a class="page-link rounded-lg btn-round-md p-0 fw-600 shadow-xss bg-white text-grey-900 border-0" href="javascript:void(0);"><i class="ti-angle-left"></i></a></li>
        @endif
    </ul>
</div>
@endif


