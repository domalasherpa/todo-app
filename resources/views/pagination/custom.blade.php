@if ($paginator->hasPages())
<ul class="pager text-green-600 flex justify-center space-x-3 my-3">
    @if ($paginator->onFirstPage())
        <li class="disabled inline"><span>← Previous</span></li>
    @else
        <li class="inline"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif
    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled inline"><span>{{ $element }}</span></li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active inline text-green-700 font-bold"><span>{{ $page }}</span></li>
                @else
                    <li class="inline"><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
        <li class="inline"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
        <li class="disabled inline"><span>Next →</span></li>
    @endif
</ul>
@endif 