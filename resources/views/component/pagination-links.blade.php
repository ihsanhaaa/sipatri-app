@if ($paginator->hasPages())
    <div class="text-center">
        @if ($paginator->onFirstPage())
            <p>Prev No</p>
        @else
            <p wire:click="previousPage">Prev</p>
        @endif

        @foreach ($elements as $element)
            <div>
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div class="text-danger" wire:click="gotoPage({{ $page }})">{{ $page }}</div>
                        @else
                            <div wire:click="gotoPage({{ $page }})">{{ $page }}</div>
                        @endif
                    @endforeach
                @endif
            </div>
        @endforeach

        @if ($paginator->hasMorePages())
            <p wire:click="nextPage">Next</p>
        @else
            <p>Next No</p>
        @endif
    </div>
@endif