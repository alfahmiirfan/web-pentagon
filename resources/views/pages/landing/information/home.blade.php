<x-layouts.landing title="Informasi | {{ config('app.name') }}">

    <div class="flex justify-center" x-data="{
        data: [],
        currentPage: 1,
        perpage: 20,
        maxPage: 1,
        search: '',
        get filteredData() {
            return this.data.filter(item => (
                this.search === ''
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
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h4 title="" class="text-xl font-bold text-cstm-blue-900">
                        Informasi
                    </h4>
                    <p>
                        Informasi terkini mengenai SMA Negeri 10 Kaur Pentagon
                    </p>
                </div>
                <label for="search"
                    class="flex w-96 items-center justify-center overflow-hidden rounded-full border border-cstm-blue-900">
                    <input type="search" name="search" id="search" placeholder="Cari"
                        class="h-full flex-1 rounded-l-full px-3 py-1">
                    <img src="/icons/search.svg" alt="search" class="mr-3 w-4">
                </label>
            </div>
            <div class="grid grid-cols-2 gap-3">

                @for ($i = 0; $i < 6; $i++)
                    <a href="" class="flex items-center justify-start gap-5 rounded-md bg-cstm-green-50 p-5">
                        <div class="aspect-square h-full rounded-md bg-pink-300"></div>
                        <div class="flex flex-col gap-3">
                            <p class="text-sm">
                                20 April 2025
                            </p>
                            <p class="line-clamp-2 text-xl font-bold">
                                M Rozin Asy
                            </p>
                            <p class="line-clamp-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime beatae temporibus ea
                                quae. Incidunt autem harum blanditiis ducimus veritatis tenetur aliquid iusto? Corporis
                                necessitatibus cumque earum ducimus ipsa illum magnam.
                            </p>
                        </div>
                    </a>
                @endfor

            </div>

            <x-paginations.default />

        </div>
    </div>

</x-layouts.landing>
