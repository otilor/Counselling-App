@if ($paginator->hasPages())

    <ul class="pagination pagination-rounded mb-0">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"></li>
        @else 
        <li>
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                <i class="mdi mdi-chevron-left"></i>
            </a>
        </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
            <li class="page-item disabled"><span>{{ $element }}</span><a></a></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
    <li class="page-item active"><a class = "page-link" href="#">{{ $page }}</a></li>
                    @else
                    <li class="page-item"><a class = "page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
                
        @if ($paginator->hasMorePages())
            <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <i class="mdi mdi-chevron-right"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled"><i class="mdi mdi-chevron-right"></i></li>
            
            
                
            
        @endif
    </ul>
    
@endif