<x-layouts.landing title="Alumni | {{ config('app.name') }}">

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <h1 title="Daftar Alumni" class="w-full text-4xl font-bold">
                Daftar Alumni
            </h1>
            <h1 title="SMA Negeri 10 Kaur Pentagon" class="w-full text-4xl font-bold">
                SMA Negeri 10 Kaur Pentagon
            </h1>
            <p title="Jejak Langkah Alumni, Inspirasi Bagi Generasi Berikutnya" class="w-full text-xl text-gray-500">
                Jejak Langkah Alumni, Inspirasi Bagi Generasi Berikutnya
            </p>
        </div>
    </div>

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
        <div class="flex w-full max-w-screen-xl flex-col gap-5 px-5 py-12 2xl:max-w-screen-2xl">
            <label for="search"
                class="mr-auto flex w-96 items-center justify-center overflow-hidden rounded-full border border-cstm-blue-900">
                <img src="/icons/search.svg" alt="search" class="ml-3 w-4">
                <input type="search" name="search" id="search" placeholder="Cari alumni"
                    class="h-full flex-1 rounded-r-full px-3 py-1">
            </label>

            @for ($i = 0; $i < 3; $i++)
                <div class="flex items-center justify-between gap-5 rounded-xl border p-4 shadow">
                    <div class="flex gap-5">
                        <div class="aspect-[16/10] w-72 rounded-xl bg-pink-300"></div>
                        <div class="flex w-72 flex-col gap-3">
                            <p class="line-clamp-1 text-xl font-bold text-cstm-blue-900">
                                M Rozin Asy
                            </p>
                            <table>
                                <tr>
                                    <td>
                                        Tahun Lulus
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        2020
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kelas
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td class="line-clamp-1">
                                        XII IPA 3
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Status
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td class="line-clamp-1">
                                        Kuliah
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Telepon
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td class="line-clamp-1">
                                        08xxxxxxxxxx
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="" class="mt-auto rounded-full bg-cstm-blue-900 px-8 py-2 text-white shadow">
                        Detail
                    </a>
                </div>
            @endfor

            <x-paginations.default />

        </div>
    </div>

</x-layouts.landing>
