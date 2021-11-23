<nav>
    <ul class="pagination theme-colored">
        <li>
        @if ($paginator->onFirstPage())
            <span aria-hidden="true">&laquo;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="Өмнөх"><span aria-hidden="true">«</span></a>
        @endif
        </li>



        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        <li>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="Дараах"><span aria-hidden="true">»</span></a>
            @else
                <span aria-hidden="true">»</span>
            @endif
    </ul>
</nav>
