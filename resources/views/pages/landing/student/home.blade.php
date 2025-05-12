<x-layouts.landing title="Siswa | {{ config('app.name') }}">

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <h1 title="Profil Siswa SMA Negeri 10 Kaur Pentagon"
                class="w-full text-2xl font-bold sm:text-3xl lg:text-4xl">
                Profil Siswa SMA Negeri 10 Kaur Pentagon
            </h1>
            <p title="Profil Siswa sebagai Refleksi Kualitas Pendidikan, Nilai Moral, dan Semangat Inovasi di Lingkungan SMA Negeri 10 Kaur Pentagon. Membangun Generasi Muda yang Cerdas, Berkarakter, dan Siap Menghadapi Tantangan Global melalui Pembinaan Akademik dan Non-Akademik"
                class="w-full text-gray-500 sm:text-lg lg:text-xl">
                Profil Siswa sebagai Refleksi Kualitas Pendidikan, Nilai Moral, dan Semangat Inovasi di Lingkungan SMA
                Negeri 10 Kaur Pentagon. Membangun Generasi Muda yang Cerdas, Berkarakter, dan Siap Menghadapi Tantangan
                Global melalui Pembinaan Akademik dan Non-Akademik
            </p>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center bg-cstm-green-50" x-data="{
        data: {{ json_encode($students) }},
        currentPage: 1,
        perpage: 8,
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
            <div class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4">

                <template x-for="item in paginatedData">
                    <div class="flex aspect-[10/16] flex-col overflow-hidden rounded-xl bg-white shadow-xl">
                        <div class="flex-1 bg-cover bg-center bg-no-repeat"
                            x-bind:style="`background-image: url('/storage/${item.image}')`">
                        </div>
                        <div class="flex flex-col gap-1 bg-white px-3 py-5 text-center text-sm">
                            <p x-bind:title="item.name" x-text="item.name" class="line-clamp-1 text-lg font-bold">
                            </p>
                            <p x-bind:title="`NISN ${item.nisn}`" x-text="`NISN ${item.nisn}`"
                                class="line-clamp-1 text-gray-500">
                            </p>
                            <a title="Selengkapnya"
                                x-bind:href="`{{ route(config('route.landing.about-student-detail'), ['student' => '###']) }}`.replace('###',
                                    item.id)"
                                target="_blank" class="text-blue-500 underline">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </template>

            </div>
            <div class="my-5 flex w-full justify-end gap-4">
                <button title="Kiri" x-on:click.debounce="currentPage = currentPage > 1 ? currentPage - 1 : 1"
                    x-bind:class="(currentPage === 1 ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                    ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                    <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 md:w-8">
                </button>
                <button title="Kanan"
                    x-on:click.debounce="currentPage = currentPage < maxPage ? currentPage + 1 : maxPage"
                    x-bind:class="(currentPage >= maxPage ? ' bg-cstm-green-900/75' : ' bg-cstm-green-900') +
                    ' flex aspect-square items-center justify-center rounded-full p-2.5'">
                    <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-6 rotate-180 md:w-8">
                </button>
            </div>
        </div>
    </div>

</x-layouts.landing>
