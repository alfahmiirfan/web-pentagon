<div class="flex justify-end gap-1.5">
    <button x-on:click="currentPage = currentPage > 1 ? currentPage - 1 : 1"
        class="rounded-lg border-2 border-cstm-blue-900 p-2.5 hover:bg-slate-200">
        <img src="/icons/v.svg" alt="" class="w-3 rotate-90">
    </button>

    <template x-for="item in maxPage">
        <button x-on:click="currentPage = item" x-text="item"
            x-bind:class="(currentPage === item ? 'bg-cstm-blue-900 text-white hover:bg-cstm-blue-900/75' :
                'hover:bg-slate-200') + ' rounded-lg border-2 border-cstm-blue-900 px-2.5'">
        </button>
    </template>

    <button x-on:click="currentPage = currentPage < maxPage ? currentPage + 1 : maxPage"
        class="rounded-lg border-2 border-cstm-blue-900 p-2.5 hover:bg-slate-200">
        <img src="/icons/v.svg" alt="" class="w-3 -rotate-90">
    </button>
</div>
