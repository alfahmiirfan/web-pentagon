<div class="flex justify-end gap-1.5">
    <button x-on:click.debounce="currentPage = currentPage > 1 ? currentPage - 1 : 1"
        class="rounded-lg border-2 border-cstm-blue-900 p-2.5 hover:bg-slate-200">
        <img src="/icons/v.svg" alt="" class="w-3 rotate-90">
    </button>

    <template x-for="item in maxPage">
        <div class="flex">
            <template x-if="item === 1 || item === maxPage || (item >= currentPage - 1 && item <= currentPage + 1)">
                <button x-on:click.debounce="currentPage = item" x-text="item"
                    x-bind:class="(currentPage === item ? 'bg-cstm-blue-900 text-white hover:bg-cstm-blue-900/75' :
                        'hover:bg-slate-200') + ' rounded-lg border-2 border-cstm-blue-900 px-2.5 flex-1'">
                </button>
            </template>
            <template x-if="item > 1 && item < maxPage && (item === currentPage - 2 || item === currentPage + 2)">
                <p class="flex-1 rounded-lg border-2 border-cstm-blue-900 px-2.5">
                    ...
                </p>
            </template>
        </div>
    </template>

    <button x-on:click.debounce="currentPage = currentPage < maxPage ? currentPage + 1 : maxPage"
        class="rounded-lg border-2 border-cstm-blue-900 p-2.5 hover:bg-slate-200">
        <img src="/icons/v.svg" alt="" class="w-3 -rotate-90">
    </button>
</div>
