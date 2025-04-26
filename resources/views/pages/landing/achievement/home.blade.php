<x-layouts.landing title="Prestasi | {{ config('app.name') }}" x-data="{
    data: [],
    currentPage: 1,
    perpage: 20,
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

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <h1 title="Langkah Gemilang" class="w-full text-4xl font-bold">
                Langkah Gemilang<br>Prestasi Cemerlang
            </h1>
            <p title="Mengabadikan setiap pencapaian sebagai bukti dedikasi, kerja keras, dan semangat juang seluruh warga SMA Negeri 10 Kaur Pentagon."
                class="w-full pr-80 text-xl text-gray-500">
                Mengabadikan setiap pencapaian sebagai bukti dedikasi, kerja keras, dan semangat juang seluruh warga SMA
                Negeri 10 Kaur Pentagon.
            </p>
        </div>
    </div>

    <div class="flex min-h-screen flex-col items-center justify-center">
        <div class="flex w-full max-w-screen-xl flex-col gap-3 px-5 py-10 2xl:max-w-screen-2xl">
            <div class="grid grid-cols-3 gap-5">

                @for ($i = 0; $i < 9; $i++)
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-white shadow">
                        <div
                            class="relative z-0 flex h-full w-full flex-col justify-end gap-2.5 bg-black/50 p-5 text-white">
                            <p title="20 April 2025"
                                class="absolute right-3 top-3 rounded-sm bg-white px-1.5 py-0.5 text-xs font-semibold text-black">
                                20 April 2025
                            </p>
                            <h6 title="" class="line-clamp-2 text-lg font-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nam fugit quisquam
                                velit minima necessitatibus. Officia repellendus laudantium neque maiores consectetur
                                dolore, iste commodi, quo numquam cupiditate corrupti totam delectus?
                            </h6>
                            <p title="" class="line-clamp-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quaerat? Nam,
                                officiis eum fuga harum sit cumque deserunt perferendis! Alias ducimus consequuntur
                                inventore esse aspernatur. Voluptates ipsum dolorum quasi quaerat.
                            </p>
                            <a title="Selengkapnya" href="" class="ml-auto">
                                Selengkapnya >
                            </a>
                        </div>
                    </div>
                @endfor

            </div>

            <x-paginations.default />

        </div>
    </div>

</x-layouts.landing>
