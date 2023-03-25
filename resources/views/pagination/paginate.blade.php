@if ($paginator->hasPages())
    <!-- Pagination -->    
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                </li>
                <li class="disabled">
                    <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                </li>                
            @else
                <li>
                    <a href="{{ $paginator->toArray()['first_page_url'] }}">
                        <span><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </a>
                </li>
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
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ $paginator->toArray()['last_page_url'] }}">
                        <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                    </a>
                </li>
            @else
                <li class="disabled">
                    <span>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="disabled">
                    <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                </li>
            @endif
        </ul>    
    <!-- Pagination -->
@endif