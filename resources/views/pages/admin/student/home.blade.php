<x-layouts.admin title="Siswa | Admin | {{ config('app.name') }}" x-data="{
    data: {{ json_encode($data) }},
    perpageData: [20, 15, 10, 5],
    currentPage: 1,
    perpage: 20,
    maxPage: 1,
    search: '',
    deleteModal: false,
    selectedID: null,
    get filteredData() {
        return this.data.filter(item => (
            this.search === '' ||
            item.name.toLowerCase().includes(this.search.toLowerCase()) ||
            item.nisn.toLowerCase().includes(this.search.toLowerCase())
        ));
    },
    get paginatedData() {
        const start = (this.currentPage - 1) * this.perpage;
        const end = start + this.perpage;

        const filteredData = this.filteredData;

        this.maxPage = parseInt(filteredData.length / this.perpage) + (filteredData.length % this.perpage === 0 ? 0 : 1);

        if (this.currentPage <= 1) {
            this.currentPage = 1;
        } else if (this.currentPage > this.maxPage) {
            this.currentPage = this.maxPage;
        }

        return filteredData.slice(start, end);
    },
}">

    <h4 class="mb-6 text-xl font-bold text-cstm-blue-900">
        Siswa
    </h4>

    <div class="flex gap-3">
        <x-inputs.select x-model.number.debounce.500ms="perpage">
            <template x-for="item in perpageData">
                <option x-value="item" x-text="item"></option>
            </template>
        </x-inputs.select>
        <x-inputs.search x-model.debounce.500ms="search" />
        <x-links.add href="{{ route(config('route.admin.student.add')) }}" />
    </div>

    @error('error')
        <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
            <img src="/icons/info.svg" alt="" class="w-4">
            {{ $message }}
        </p>
    @enderror

    <div class="rounded-lg border">
        <table class="w-full">
            <thead>
                <tr class="text-white *:bg-cstm-green-900 *:p-1.5 first:*:rounded-tl-lg last:*:rounded-tr-lg">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <template x-for="(item, index) in paginatedData">
                    <tr class="border-b *:p-1.5 last:border-none">
                        <td class="text-center" x-text="(currentPage - 1) * perpage + (index + 1)"></td>
                        <td class="text-center" x-text="item.name"></td>
                        <td class="text-center" x-text="item.nisn"></td>
                        <td>
                            <div class="flex">
                                <div class="relative m-auto" x-data="{
                                    inFocus: false,
                                }">
                                    <button class="m-auto px-3 py-1.5" x-on:click="inFocus = !inFocus">
                                        <img src="/icons/more.svg" alt="more" class="inline-block w-1">
                                    </button>
                                    <div x-show="inFocus"
                                        class="absolute right-0 z-20 flex w-max flex-col gap-1 rounded-lg bg-white p-3 shadow">
                                        <p class="border-b text-cstm-blue-900">
                                            Pilih Aksi
                                        </p>
                                        <a x-bind:href="``.replace('###', item.id)">
                                            Edit
                                        </a>
                                        <button x-on:click="selectedID = item.id; deleteModal = true; inFocus = false"
                                            class="text-left">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </template>

            </tbody>
        </table>

        <template x-if="data.length === 0">
            <p class="my-3 text-center">Tidak ada data</p>
        </template>
        <template x-if="data.length !== 0 && paginatedData.length === 0 && search !== ''">
            <p class="my-3 text-center">Data tidak dapat ditemukan</p>
        </template>

    </div>

    <x-paginations.default />
    <x-modals.delete x-bind:href="selectedID ? ``.replace('###', selectedID) : ''" />

</x-layouts.admin>
