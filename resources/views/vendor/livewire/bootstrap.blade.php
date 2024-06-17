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
    <style>
        .active  .page-item {
        background-color: #000BEE; color: white;
    }
    .dark .active .page-item{
        background-color: #C2008C;
        color: white
        
    }


    .page-item{
        border:solid 2px #000BEE; color:#000BEE; width:35px; height:35px; display:flex; justify-content:center; border-radius:6px;align-items: center;
    }
    
    .dark .page-item{
        color: #C2008C;
        border-color: #C2008C;
    }

    </style>

    @if ($paginator->hasPages())
        <nav style="margin-top:20px">
            <ul class="pagination flex gap-1 p-1">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-item" style="font-weight: bold" aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li >
                        <button type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-item" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</button>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class=" disabled" aria-disabled="true"><span class="page-item">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class=" active" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page"><span class="page-item ">{{ $page }}</span></li>
                            @else
                                <li class="" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"><button type="button" class="page-item" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}">{{ $page }}</button></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="">
                        <button type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="page-item" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</button>
                    </li>
                @else
                    <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span style="font-weight: bold" class="page-item" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const body = document.body;
        // Load saved theme from localStorage
        const savedTheme = localStorage.getItem('dark-mode') === 'true';
        if (savedTheme) {
            document.documentElement.classList.add('dark');
        }

        document.querySelectorAll('.page-link').forEach(function(button) {
            button.addEventListener('click', function() {
                {!! $scrollIntoViewJsSnippet !!}
            });
        });
    });
</script>

