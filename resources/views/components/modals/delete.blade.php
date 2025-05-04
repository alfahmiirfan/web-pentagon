<div x-show="deleteModal" class="fixed bottom-0 left-0 right-0 top-0 z-50 flex items-center justify-center bg-black/50">
    <div class="rounded-lg bg-white">
        <div class="flex items-center justify-between border-b-2 p-5">
            <p>Hapus</p>
            <button x-on:click="selectedID = null; deleteModal = false" class="rounded-full bg-gray-300 p-1.5">
                <img src="/icons/plus.svg" alt="" class="w-3 rotate-45">
            </button>
        </div>
        <div class="p-5">
            <img src="/icons/info.svg" alt="" class="mx-auto w-36">
            <p class="mx-auto my-5 text-center">
                Apakah anda yakin ingin menghapus item ini?
            </p>
            <div class="flex gap-3">
                <button x-on:click="selectedID = null; deleteModal = false"
                    class="flex-1 rounded-lg border-2 border-gray-400 text-gray-400">
                    Batal
                </button>
                <a class="flex-1 rounded-lg border-2 border-red-500 bg-red-500 text-center text-white"
                    {!! $attributes !!}>
                    Hapus
                </a>
            </div>
        </div>
    </div>
</div>
