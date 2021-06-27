@if ($paginator->hasPages())
<div class="navbar-text ml-lg-auto">

    <span class="font-weight-semibold">{{ $paginator->firstItem() }}-{{ $paginator->lastItem() }}</span> من
    <span class="font-weight-semibold">{{ $paginator->total() }}</span>
</div>

<div class="ml-lg-3 mb-3 mb-lg-0">
    <div class="btn-group">
        @if ($paginator->onFirstPage())
            <a href="#" class="btn btn-light btn-icon disabled"><i class="icon-arrow-left12"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-light btn-icon"><i class="icon-arrow-right13"></i></a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"     class="btn btn-light btn-icon "><i class="icon-arrow-left12"></i></a>
        @else
            <a href="#" class="btn btn-light btn-icon disabled"><i class="icon-arrow-right13"></i></a>
        @endif
    </div>
</div>
@endif

