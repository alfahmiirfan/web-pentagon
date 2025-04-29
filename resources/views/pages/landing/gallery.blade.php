<x-layouts.landing title="Galeri | {{ config('app.name') }}">

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-10 pt-36 md:pb-12 2xl:max-w-screen-2xl">
            <h1 title="Galeri Fasilitas dan" class="w-full text-2xl font-bold sm:text-3xl lg:text-4xl">
                Galeri Fasilitas dan
            </h1>
            <h1 title="Kegiatan Asrama" class="w-full text-2xl font-bold sm:text-3xl lg:text-4xl">
                Kegiatan Asrama
            </h1>
            <p title="Mengenal Fasilitas dan Aktivitas Asrama Lebih Dekat"
                class="w-full text-gray-500 sm:text-lg lg:text-xl">
                Mengenal Fasilitas dan Aktivitas Asrama Lebih Dekat
            </p>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center gap-10 py-20" x-data="{
        data: {{ json_encode($facilities) }},
        currentPage: 1,
        perpage: window.innerWidth > 640 ? 2 : 1,
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
    }"
        x-on:resize.window="perpage = window.innerWidth > 640 ? 2 : 1">
        <div
            class="flex w-full max-w-screen-xl flex-col items-start justify-center gap-3 px-5 md:gap-5 2xl:max-w-screen-2xl">
            <div class="h-1 w-20 bg-cstm-green-900"></div>
            <h3 title="Fasilitas" class="text-xl font-bold sm:text-2xl lg:text-3xl">
                Fasilitas
            </h3>
            <p title="Fasilitas Lengkap untuk Mendukung Pembelajaran dan Pengembangan Diri"
                class="text-gray-500 max-sm:text-sm">
                Fasilitas Lengkap untuk Mendukung Pembelajaran dan Pengembangan Diri
            </p>
        </div>
        <div class="flex w-full max-w-screen-xl items-center justify-center gap-3 px-5 md:gap-5 2xl:max-w-screen-2xl">
            <button title="Kiri" x-on:click.debounce="currentPage = currentPage > 1 ? currentPage - 1 : 1"
                x-bind:class="(currentPage === 1 ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 md:w-8">
            </button>
            <div class="flex flex-1 items-center justify-center gap-5">

                <template x-for="item in paginatedData">
                    <div
                        class="flex aspect-[16/12] w-full flex-col justify-end overflow-hidden rounded-xl bg-white shadow sm:w-1/2">
                        <div class="flex-1 bg-cover bg-center bg-no-repeat"
                            x-bind:style="`background-image: url('/storage/${item.image}')`">
                        </div>
                        <p x-bind:title="item.name" x-text="item.name"
                            class="line-clamp-1 p-5 text-base font-bold sm:text-lg md:text-xl">
                        </p>
                    </div>
                </template>

            </div>
            <button title="Kanan" x-on:click.debounce="currentPage = currentPage < maxPage ? currentPage + 1 : maxPage"
                x-bind:class="(currentPage >= maxPage ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 rotate-180 md:w-8">
            </button>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center gap-10 bg-cstm-green-50 py-20" x-data="{
        data: {{ json_encode($activities) }},
        currentPage: 1,
        perpage: window.innerWidth > 640 ? 2 : 1,
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
    }"
        x-on:resize.window="perpage = window.innerWidth > 640 ? 2 : 1">
        <div
            class="flex w-full max-w-screen-xl flex-col items-start justify-center gap-3 px-5 md:gap-5 2xl:max-w-screen-2xl">
            <div class="h-1 w-20 bg-cstm-green-900"></div>
            <h3 title="Kegiatan Asrama" class="text-xl font-bold sm:text-2xl lg:text-3xl">
                Kegiatan Asrama
            </h3>
            <p title="Fasilitas Lengkap untuk Mendukung Pembelajaran dan Pengembangan Diri"
                class="text-gray-500 max-sm:text-sm">
                Fasilitas Lengkap untuk Mendukung Pembelajaran dan Pengembangan Diri
            </p>
        </div>
        <div class="flex w-full max-w-screen-xl items-center justify-center gap-3 px-5 md:gap-5 2xl:max-w-screen-2xl">
            <button title="Kiri" x-on:click.debounce="currentPage = currentPage > 1 ? currentPage - 1 : 1"
                x-bind:class="(currentPage === 1 ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 md:w-8">
            </button>
            <div class="flex flex-1 items-center justify-center gap-5">

                <template x-for="item in paginatedData">
                    <div
                        class="flex aspect-[16/12] w-full flex-col justify-end overflow-hidden rounded-xl bg-white shadow sm:w-1/2">
                        <div class="flex-1 bg-cover bg-center bg-no-repeat"
                            x-bind:style="`background-image: url('/storage/${item.image}')`">
                        </div>
                        <p x-bind:title="item.name" x-text="item.name"
                            class="line-clamp-1 p-5 text-base font-bold sm:text-lg md:text-xl">
                        </p>
                    </div>
                </template>

            </div>
            <button title="Kanan" x-on:click.debounce="currentPage = currentPage < maxPage ? currentPage + 1 : maxPage"
                x-bind:class="(currentPage >= maxPage ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 rotate-180 md:w-8">
            </button>
        </div>
    </div>

</x-layouts.landing>
