@if ($paginator->hasPages())
    <div class="wrapper">
        <div class="container">
            <nav class="pagination">
                <ul>
                    <li class="item">
                        @if ($paginator->onFirstPage())
                            <a class="link disabled" href="#">Primeira</a>
                        @else
                            <a class="link" href="{{ $paginator->url(1) }}">Primeira</a>
                        @endif
                    </li>
                    <li class="item">
                        @if ($paginator->onFirstPage())
                            <a class="link disabled" href="#">Anterior</a>
                        @else
                            <a class="link" href="{{ $paginator->previousPageUrl() }}">Anterior</a>
                        @endif
                    </li>
                    <li class="item">
                        <a
                            class="link"
                            aria-label="Vai pra página {{ $paginator->currentPage() }}"
                            href="#"
                        >
                            {{ $paginator->currentPage() }}
                        </a>
                    </li>
                    <li class="item">
                        @if (!$paginator->hasMorePages())
                            <a class="link disabled" href="#">Próxima</a>
                        @else
                            <a class="link" href="{{ $paginator->nextPageUrl() }}">Próxima</a>
                        @endif
                    </li>
                    <li class="item">
                        @if (!$paginator->hasMorePages())
                            <a class="link disabled" href="#">Última</a>
                        @else
                            <a class="link" href="{{ $paginator->url($paginator->lastPage()) }}">Última</a>
                        @endif
                    </li>
                </ul>
                <p class="count">
                    Mostrando
                    @if ($paginator->firstItem())
                        <span>{{ $paginator->firstItem() }}</span>
                        até
                        <span>{{ $paginator->lastItem() }}</span>
                        resultados
                    @else
                        {{ $paginator->count() }}
                    @endif
                    de
                    <span>{{ $paginator->total() }}</span>
                </p>
            </nav>
        </div>
    </div>
@endif
