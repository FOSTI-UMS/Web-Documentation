@if ($paginator->hasPages())
    <nav>
        <ul class="pagination modal-6">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <a class="prev disable fa fa-arrow-left"></a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="prev fa fa-arrow-left" rel="prev" aria-label="@lang('pagination.previous')"></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"><a class="active">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="next fa fa-arrow-right" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"></a>
                </li>
            @else
                <li>
                    <a class="next disable fa fa-arrow-right" aria-hidden="true"></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
