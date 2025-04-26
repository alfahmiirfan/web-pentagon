<x-layouts.landing title="PTK | {{ config('app.name') }}">

    <div class="flex justify-center bg-cstm-green-50">
        <div
            class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-2.5 px-5 pb-12 pt-36 2xl:max-w-screen-2xl">
            <h1 title="Profil Pendidik dan Tenaga Kependidikan (PTK)" class="w-full text-4xl font-bold">
                Profil Pendidik dan Tenaga Kependidikan (PTK)
            </h1>
            <p title="SMA Negeri 10 Kaur memiliki tenaga pendidik dan kependidikan yang profesional, berdedikasi, dan kompeten di bidangnya. Setiap guru dan staf turut berperan penting dalam menciptakan suasana belajar yang positif, kreatif, dan menyenangkan."
                class="w-full pr-80 text-xl text-gray-500">
                SMA Negeri 10 Kaur memiliki tenaga pendidik dan kependidikan yang profesional, berdedikasi, dan kompeten
                di bidangnya. Setiap guru dan staf turut berperan penting dalam menciptakan suasana belajar yang
                positif, kreatif, dan menyenangkan.
            </p>
        </div>
    </div>

    <div class="flex min-h-screen flex-col items-center justify-center bg-cstm-green-50">
        <div class="flex w-full max-w-screen-xl flex-col gap-3 px-5 py-10 2xl:max-w-screen-2xl">
            <div class="grid grid-cols-4 gap-5">

                @for ($i = 0; $i < 8; $i++)
                    <div class="flex aspect-[3/4] flex-col overflow-hidden rounded-xl bg-white shadow">
                        <div class="flex-1"></div>
                        <div class="flex flex-col gap-1 bg-white px-3 py-5 text-center text-sm">
                            <p title="Bidianto Spd" class="text-lg font-bold">
                                Bidianto Spd
                            </p>
                            <p title="Kepala Sekolah" class="text-gray-500">
                                Kepala Sekolah
                            </p>
                            <a title="Selengkapnya" href="" class="text-blue-500 underline">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endfor

            </div>
            <div class="my-5 flex w-full justify-end gap-4">
                <div title="Kiri"
                    class="flex aspect-square w-12 items-center justify-center rounded-full bg-cstm-green-900">
                    <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-8">
                </div>
                <div title="Kanan"
                    class="flex aspect-square w-12 items-center justify-center rounded-full bg-cstm-green-900">
                    <img src="/icons/arrow.svg" alt="Arrow" class="aspect-square w-8 rotate-180">
                </div>
            </div>
        </div>
    </div>

</x-layouts.landing>
