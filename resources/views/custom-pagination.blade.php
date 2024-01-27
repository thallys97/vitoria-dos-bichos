@if ($paginator->hasPages())
    <ul class="pagination">
        <!-- Botão "anterior" -->
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">Anterior</span></li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" style="color: #6C3593; font-weight: bold;">Anterior</a></li>
        @endif

        <!-- Links das páginas numeradas -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link" style="background-color: #9D5A00; border-color: #9D5A00;">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link" style="color: #6C3593; font-weight: bold;">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Botão "próximo" -->
        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" style="color: #6C3593; font-weight: bold;">Próximo</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">Próximo</span></li>
        @endif
    </ul>
@endif