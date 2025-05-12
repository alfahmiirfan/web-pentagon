<x-layouts.landing title="Informasi | {{ config('app.name') }}">

    <div class="flex justify-center" x-data="{
        data: {{ json_encode($informations) }},
        currentPage: 1,
        perpage: 6,
        maxPage: 1,
        search: '',
        get filteredData() {
            return this.data.filter(item => (
                this.search === '' ||
                item.description.toLowerCase().includes(this.search.toLowerCase()) ||
                item.date.toLowerCase().includes(this.search.toLowerCase()) ||
                item.name.toLowerCase().includes(this.search.toLowerCase())
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
        <div class="flex w-full max-w-screen-xl flex-col gap-5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <div class="mb-5 flex flex-wrap items-center justify-center gap-3">
                <div class="mr-auto">
                    <h4 title="Informasi" class="text-xl font-bold text-cstm-blue-900">
                        Informasi
                    </h4>
                    <p title="Informasi terkini mengenai SMA Negeri 10 Kaur Pentagon">
                        Informasi terkini mengenai SMA Negeri 10 Kaur Pentagon
                    </p>
                </div>
                <label for="search"
                    class="ml-auto flex w-96 items-center justify-center overflow-hidden rounded-full border border-cstm-blue-900">
                    <input type="search" id="search" x-model.debounce="search" placeholder="Cari"
                        class="h-full flex-1 rounded-l-full px-3 py-1">
                    <img src="/icons/search.svg" alt="search" class="mr-3 w-4">
                </label>
            </div>
            <div class="grid gap-3 sm:grid-cols-2">

                <template x-for="item in paginatedData">
                    <a x-bind:href="`{{ route(config('route.landing.information-detail'), ['information' => '###']) }}`.replace('###',
                        item.id)"
                        target="_blank"
                        class="flex items-center justify-start gap-5 rounded-md bg-cstm-green-50 p-5 transition-all hover:border-2">
                        <div class="aspect-square h-28 rounded-md bg-pink-300 bg-cover bg-center bg-no-repeat"
                            x-bind:style="`background-image: url('/storage/${item.image}')`">
                        </div>
                        <div class="flex flex-col gap-2.5">
                            <p x-bind:title="item.date" x-text="item.date" class="text-xs sm:text-sm">
                            </p>
                            <p x-bind:title="item.name" x-text="item.name" class="line-clamp-1 text-xl font-bold">
                            </p>
                            <div x-html="item.description" class="line-clamp-1 text-sm sm:text-base">
                            </div>
                        </div>
                    </a>
                </template>

            </div>

            <x-paginations.default />

        </div>
    </div>

</x-layouts.landing>
