@if ($paginator->hasPages())
    <ul class="pagination custom-pagination">
        <!-- Botão "anterior" -->
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">Anterior</span></li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link">Anterior</a></li>
        @endif

        <!-- Links das páginas numeradas -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Botão "próximo" -->
        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link">Próximo</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">Próximo</span></li>
        @endif
    </ul>
@endif