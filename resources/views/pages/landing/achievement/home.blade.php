<x-layouts.landing title="Prestasi | {{ config('app.name') }}">

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <h1 title="Langkah Gemilang Prestasi Cemerlang" class="w-full text-2xl font-bold sm:text-3xl lg:text-4xl">
                Langkah Gemilang<br>Prestasi Cemerlang
            </h1>
            <p title="Mengabadikan setiap pencapaian sebagai bukti dedikasi, kerja keras, dan semangat juang seluruh warga SMA Negeri 10 Kaur Pentagon."
                class="w-full text-gray-500 sm:text-lg lg:text-xl">
                Mengabadikan setiap pencapaian sebagai bukti dedikasi, kerja keras, dan semangat juang seluruh warga SMA
                Negeri 10 Kaur Pentagon.
            </p>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center" x-data="{
        data: {{ json_encode($achievements) }},
        currentPage: 1,
        perpage: 9,
        maxPage: 1,
        get paginatedData() {
            const start = (this.currentPage - 1) * this.perpage;
            const end = start + this.perpage;
    
            this.maxPage = parseInt(this.data.length / this.perpage) + (this.data.length % this.perpage === 0 ? 0 : 1);
    
            if (this.currentPage <= 1) {
                this.currentPage = 1;
            } else if (this.currentPage > this.maxPage) {
                this.currentPage = this.maxPage;
            }
    
            return this.data.slice(start, end);
        },
    }">
        <div class="flex w-full max-w-screen-xl flex-col gap-3 px-5 py-10 2xl:max-w-screen-2xl">
            <div class="grid sm:grid-cols-2 gap-3 md:grid-cols-3 md:gap-5">

                <template x-for="item in paginatedData">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-white bg-cover bg-center bg-no-repeat shadow"
                        x-bind:style="`background-image: url('/storage/${item.image}')`">
                        <div
                            class="relative z-0 flex h-full w-full flex-col justify-end gap-2.5 bg-black/50 p-3 text-white max-md:text-sm md:p-5">
                            <p x-bind:title="item.date" x-text="item.date"
                                class="absolute right-3 top-3 rounded-sm bg-white px-1.5 py-0.5 text-xs font-semibold text-black">
                            </p>
                            <h6 x-bind:title="item.name" x-text="item.name"
                                class="line-clamp-2 text-base font-bold md:text-lg">
                            </h6>
                            <p x-bind:title="item.description" x-text="item.description" class="line-clamp-2">
                            </p>
                            <a title="Selengkapnya"
                                x-bind:href="`{{ route(config('route.landing.achievement-detail'), ['achievement' => '###']) }}`
                                .replace('###', item.id)"
                                target="_blank" class="ml-auto">
                                Selengkapnya >
                            </a>
                        </div>
                    </div>
                </template>

            </div>

            <x-paginations.default />

        </div>
    </div>

</x-layouts.landing>
