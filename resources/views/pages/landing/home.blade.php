<x-layouts.landing title="Beranda | {{ config('app.name') }}">

    <div class="flex flex-col bg-cover bg-center bg-no-repeat" style="background-image: url('/images/landing/hero.jpg')">
        <div class="flex min-h-screen w-full flex-1 items-center justify-center bg-black/50">
            <div
                class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-8 p-5 pt-20 md:gap-10 lg:gap-12 2xl:max-w-screen-2xl">
                <h1 title="SMA Negeri 10 Kaur Pentagon"
                    class="text-center text-3xl font-bold text-white md:text-5xl lg:text-6xl">
                    SMA Negeri 10 Kaur Pentagon
                </h1>
                <p title="'Mencetak Generasi Unggul, Siap Bersaing di Era Global' SMA Negeri 10 Kaur (Pentagon) hadir sebagai rumah bagi inovasi, karakter, dan prestasi."
                    class="text-center text-lg font-medium text-white md:text-2xl">
                    "Mencetak Generasi Unggul, Siap Bersaing di Era Global"<br>SMA Negeri 10 Kaur (Pentagon) hadir
                    sebagai rumah bagi inovasi, karakter, dan prestasi.
                </p>
                <a href="#jelajahi" title="Jelajahi Sekolah Kami"
                    class="rounded-lg bg-cstm-blue-900 px-3 py-1.5 text-white md:text-lg">
                    Jelajahi Sekolah Kami
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="flex w-full flex-1 items-center justify-center">
            <div class="flex w-full max-w-screen-xl flex-col items-start justify-center gap-3 p-5 2xl:max-w-screen-2xl">
                <p title="Budianto Sp.d" class="text-xl font-bold text-cstm-blue-900 md:text-3xl">
                    Budianto Sp.d
                </p>
                <p title="Kepala Sekolah" class="text-gray-500 max-md:text-sm">
                    Kepala Sekolah
                </p>
                <img src="/images/landing/students.jpg" alt=""
                    class="mx-auto aspect-auto h-full max-h-screen max-w-full rounded-lg">
            </div>
        </div>
    </div>

    <div id="jelajahi" class="flex justify-center" x-data="{
        data: {{ json_encode($informations) }},
        currentPage: 1,
        perpage: 1,
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

        @if ($informations->count())
            <template x-for="item in paginatedData">
                <div
                    class="flex w-full max-w-screen-xl flex-col items-center justify-center px-5 py-20 2xl:max-w-screen-2xl">
                    <h2 x-bind:title="item.name" x-text="item.name"
                        class="line-clamp-1 w-full text-2xl font-bold md:text-3xl">
                    </h2>
                    <div x-html="item.description"
                        class="line-clamp-2 w-full text-lg font-semibold text-gray-500 md:text-xl">
                    </div>
                    <div class="my-5 flex w-full justify-end gap-3 md:gap-4">
                        <button title="Kiri" x-on:click.debounce="currentPage = currentPage > 1 ? currentPage - 1 : 1"
                            x-bind:class="(currentPage === 1 ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                            ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                            <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 md:w-8">
                        </button>
                        <button title="Kanan"
                            x-on:click.debounce="currentPage = currentPage < maxPage ? currentPage + 1 : maxPage"
                            x-bind:class="(currentPage === maxPage ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                            ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                            <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 rotate-180 md:w-8">
                        </button>
                    </div>
                    <div class="flex w-full items-center justify-center">
                        <img x-bind:src="`/storage/${item.image}`" alt=""
                            class="mx-auto aspect-auto h-full max-h-screen max-w-full rounded-lg shadow">
                    </div>
                </div>
            </template>
        @endif

    </div>

    <div class="flex min-h-screen justify-center bg-cstm-green-50">
        <div class="flex w-full max-w-screen-xl flex-col items-center justify-center px-5 py-20 2xl:max-w-screen-2xl">
            <h2 title="Program Unggulan SMA Negeri 10 Kaur (Pentagon)" class="w-full text-2xl font-bold md:text-3xl">
                Program Unggulan SMA Negeri 10 Kaur (Pentagon)
            </h2>
            <p title="Program Spesial untuk Menyiapkan Siswa Menuju Dunia Masa Depan"
                class="w-full text-lg font-semibold text-gray-500 md:text-xl">
                Program Spesial untuk Menyiapkan Siswa Menuju Dunia Masa Depan
            </p>
            <div class="my-10 grid w-full gap-6 md:grid-cols-2 md:gap-8">
                <a href="{{ route(config('route.landing.program')) }}#nanotechnology"
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Nanotechnology" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-nano.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4 max-sm:text-sm">
                        <h6 title="Nanotechnology" class="font-medium">
                            Nanotechnology
                        </h6>
                        <p title="Eksplorasi teknologi material skala nano">
                            Eksplorasi teknologi material skala nano
                        </p>
                    </div>
                </a>
                <a href="{{ route(config('route.landing.program')) }}#biotechnology"
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Biotechnology" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-bio.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4 max-sm:text-sm">
                        <h6 title="Biotechnology" class="font-medium">
                            Biotechnology
                        </h6>
                        <p title="Riset dan praktek dalam bioteknologi">
                            Riset dan praktek dalam bioteknologi
                        </p>
                    </div>
                </a>
                <a href="{{ route(config('route.landing.program')) }}#robotic"
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Robotic" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-robotic.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4 max-sm:text-sm">
                        <h6 title="Robotic" class="font-medium">
                            Robotic
                        </h6>
                        <p title="Pembuatan dan kompetisi robotik">
                            Pembuatan dan kompetisi robotik
                        </p>
                    </div>
                </a>
                <a href="{{ route(config('route.landing.program')) }}#energy"
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Renewable Energy" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-energy.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4 max-sm:text-sm">
                        <h6 title="Renewable Energy" class="font-medium">
                            Renewable Energy
                        </h6>
                        <p title="Energi alternatif dan kesadaran lingkungan">
                            Energi alternatif dan kesadaran lingkungan
                        </p>
                    </div>
                </a>
            </div>
            <a title="Selengkapnya" href="{{ route(config('route.landing.program')) }}"
                class="ml-auto flex items-center justify-center gap-1.5 rounded-lg bg-cstm-green-900 px-10 py-3 text-white md:px-14 md:py-4">
                Selengkapnya
                <img src="/icons/arrow.svg" alt="Arrow" class="w-5 rotate-180">
            </a>
        </div>
    </div>

</x-layouts.landing>
