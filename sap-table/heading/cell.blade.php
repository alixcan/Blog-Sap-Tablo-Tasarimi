@aware(['sortAsc','sortCol', 'sortBy'])
<th scope="col" {{ $attributes->merge(['class' => "px-6 py-1"])->except('wire:*') }}>
    @if($sortBy)
        <button type="button" class="flex items-center group w-full h-4" wire:click="sortBy('{{ $sortBy }}')">
            <span>{{ $slot }}</span>
            <div class="w-[1rem] ">
                @empty($sortCol)
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="hidden group-hover:inline w-[0.65rem] h-[0.65rem] ml-1 text-gray-100 mb-[1px]" fill="currentColor"><path d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z" /></svg>
                @endempty
                @if($sortBy == $sortCol AND $sortAsc)
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="currentColor" class="w-[0.65rem] h-[0.65rem] inline ml-1 text-gray-100 mb-[1px]"><path fill="#FFF" d="M182.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
                @endif
                @if(($sortBy == $sortCol) AND !$sortAsc)
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="currentColor" class="w-[0.65rem] h-[0.65rem] inline ml-1 text-gray-100 mb-[1px]"><path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"/></svg>
                @endif
            </div>
        </button>
    @else
        <span>{{ $slot }}</span>
    @endif
</th>
