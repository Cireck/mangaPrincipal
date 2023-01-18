@if ($paginator->hasPages())

    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a id="previousPage" class="page-item disabled" aria-disabled="true">
            <span class="page-link"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="15"
                    fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg></span>
        </a>
    @else
        <a id="previousPage" class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="15" fill="currentColor" class="bi bi-chevron-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
        </a>
    @endif

    <select name="pagination" id="pagination" onchange="window.location.href=this.value;">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <option value="{{ $url }}" selected><span
                                class="page-link">{{ $page }}</span></option>
                    @else
                        <option value="{{ $url }}">{{ $page }}</option>
                    @endif
                @endforeach
            @endif
        @endforeach

    </select>


    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a id="nextPage" class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="15" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </a>
    @else
        <a id="nextPage" class="page-item disabled" aria-disabled="true">
            <span class="page-link"> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="15"
                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></span>
        </a>
    @endif

@endif
