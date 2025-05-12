<x-layouts.landing title="Alumni | {{ config('app.name') }}">

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <h1 title="Daftar Alumni" class="w-full text-2xl font-bold sm:text-3xl lg:text-4xl">
                Daftar Alumni
            </h1>
            <h1 title="SMA Negeri 10 Kaur Pentagon" class="w-full text-2xl font-bold sm:text-3xl lg:text-4xl">
                SMA Negeri 10 Kaur Pentagon
            </h1>
            <p title="Jejak Langkah Alumni, Inspirasi Bagi Generasi Berikutnya"
                class="w-full text-gray-500 sm:text-lg lg:text-xl">
                Jejak Langkah Alumni, Inspirasi Bagi Generasi Berikutnya
            </p>
        </div>
    </div>

    <div class="flex justify-center" x-data="{
        data: {{ json_encode($alumni) }},
        currentPage: 1,
        perpage: 5,
        maxPage: 1,
        search: '',
        get filteredData() {
            return this.data.filter(item => (
                this.search === '' ||
                item.job_place.toLowerCase().includes(this.search.toLowerCase()) ||
                item.status.toLowerCase().includes(this.search.toLowerCase()) ||
                item.phone.toLowerCase().includes(this.search.toLowerCase()) ||
                item.name.toLowerCase().includes(this.search.toLowerCase()) ||
                item.year.toLowerCase().includes(this.search.toLowerCase())
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
        <div class="flex w-full max-w-screen-xl flex-col gap-5 px-5 py-12 2xl:max-w-screen-2xl">
            <label for="search"
                class="mr-auto flex w-96 items-center justify-center overflow-hidden rounded-full border border-cstm-blue-900">
                <img src="/icons/search.svg" alt="search" class="ml-3 w-4">
                <input type="search" id="search" x-model.debounce="search" placeholder="Cari alumni"
                    class="h-full flex-1 rounded-r-full px-3 py-1">
            </label>

            <template x-for="item in paginatedData">
                <div class="flex flex-wrap items-center justify-center gap-3 rounded-xl border p-4 shadow md:gap-5">
                    <div class="aspect-[3/4] w-10/12 rounded-xl bg-cover bg-center bg-no-repeat sm:w-36"
                        x-bind:style="`background-image: url('/storage/${item.image}')`"></div>
                    <div class="flex w-full flex-col gap-3 sm:w-96">
                        <p x-bind:title="item.name" x-text="item.name"
                            class="line-clamp-1 text-lg font-bold text-cstm-blue-900 md:text-xl">
                        </p>
                        <table class="text-base max-md:text-sm">
                            <tr>
                                <td>
                                    Tahun Lulus
                                </td>
                                <td>
                                    :
                                </td>
                                <td x-text="item.year">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Status
                                </td>
                                <td>
                                    :
                                </td>
                                <td x-text="item.status" class="line-clamp-1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tempat
                                </td>
                                <td>
                                    :
                                </td>
                                <td x-text="item.job_place" class="line-clamp-1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    :
                                </td>
                                <td x-text="item.phone" class="line-clamp-1">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a x-bind:href="`{{ route(config('route.landing.alumni-detail'), ['alumni' => '###']) }}`.replace('###', item.id)"
                        target="_blank"
                        class="ml-auto mt-auto rounded-full bg-cstm-blue-900 px-6 py-2 text-base text-white shadow max-md:text-sm md:px-8">
                        Detail
                    </a>
                </div>
            </template>

            <x-paginations.default />

        </div>
    </div>

</x-layouts.landing>
