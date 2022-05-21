{{-- @if ($paginator->hasPages())

<nav aria-label="Page navigation example">

    <ul class="pagination justify-content-end">

        @if ($paginator->onFirstPage())

            <li class="page-item disabled">

                <a class="page-link" href="#" tabindex="-1">Previous</a>

            </li>

        @else

            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>

        @endif

      

        @foreach ($elements as $element)

            @if (is_string($element))

                <li class="page-item disabled">{{ $element }}</li>

            @endif

            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <li class="page-item active">

                            <a class="page-link">{{ $page }}</a>

                        </li>

                    @else

                        <li class="page-item">

                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>

                        </li>

                    @endif

                @endforeach

            @endif

        @endforeach

        

        @if ($paginator->hasMorePages())

            <li class="page-item">

                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>

            </li>

        @else

            <li class="page-item disabled">

                <a class="page-link" href="#">Next</a>

            </li>

        @endif

    </ul>

@endif --}}

@if ($paginator->hasPages())
    <ul class="pagination pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">‹</span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">‹</a></li>
        @endif

        @if($paginator->currentPage() > 2)
            <li class="page-item hidden-xs"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
        @endif
        @if($paginator->currentPage() > 3)
            <li class="page-item"><span class="page-link">...</span></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
                @if ($i == $paginator->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="page-item"><span class="page-link">...</span></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 1)
            <li class="page-item hidden-xs"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">›</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">›</span></li>
        @endif
    </ul>
@endif
