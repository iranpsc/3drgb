@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav style="margin-top:20px ">
            <ul class="pagination flex gap-1 p-1 " >
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled  " style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link "  aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li class="page-item" style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px">
                        <button type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</button>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px"  aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px" class="page-item active"  wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px" class="page-item" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">{{ $page }}</button></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item " style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px">
                        <button type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</button>
                    </li>
                @else
                    <li style="background-color:#001448 ; color:white; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px" class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
