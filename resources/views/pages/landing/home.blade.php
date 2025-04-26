<x-layouts.landing title="Beranda | {{ config('app.name') }}">

    <div class="flex flex-col bg-cover bg-center bg-no-repeat"
        style="background-image: url('/images/landing/hero.jpg')">
        <div class="flex min-h-screen w-full flex-1 items-center justify-center bg-black/50">
            <div
                class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-12 p-5 pt-20 2xl:max-w-screen-2xl">
                <h1 title="SMA Negeri 10 Kaur Pentagon" class="text-6xl font-bold text-white">
                    SMA Negeri 10 Kaur Pentagon
                </h1>
                <p title="'Mencetak Generasi Unggul, Siap Bersaing di Era Global' SMA Negeri 10 Kaur (Pentagon) hadir
                    sebagai rumah bagi inovasi, karakter, dan prestasi."
                    class="text-center text-2xl font-medium text-white">
                    "Mencetak Generasi Unggul, Siap Bersaing di Era Global"<br>SMA Negeri 10 Kaur (Pentagon)
                    hadir
                    sebagai rumah bagi inovasi, karakter, dan prestasi.
                </p>
                <button title="Jelajahi Sekolah Kami" class="rounded-lg bg-cstm-blue-900 px-3 py-1.5 text-lg text-white">
                    Jelajahi Sekolah Kami
                </button>
            </div>
        </div>
    </div>

    <div class="flex min-h-screen justify-center">
        <div class="flex w-full max-w-screen-xl flex-col items-center justify-center px-5 py-20 2xl:max-w-screen-2xl">
            <h2 title="Informasi PPDB" class="w-full text-3xl font-bold">
                Informasi PPDB
            </h2>
            <p title="Bergabunglah Bersama Kami di Tahun Ajaran Baru!"
                class="w-full text-xl font-semibold text-gray-500">
                Bergabunglah Bersama Kami di Tahun Ajaran Baru!
            </p>
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
            <div class="aspect-[15/7] w-full overflow-hidden rounded-lg bg-cover bg-center bg-no-repeat"
                style="background-image: url('/images/landing/brochure.jpg')"></div>
        </div>
    </div>

    <div class="flex min-h-screen justify-center bg-cstm-green-50">
        <div class="flex w-full max-w-screen-xl flex-col items-center justify-center px-5 py-20 2xl:max-w-screen-2xl">
            <h2 title="Program Unggulan SMA Negeri 10 Kaur (Pentagon)" class="w-full text-3xl font-bold">
                Program Unggulan SMA Negeri 10 Kaur (Pentagon)
            </h2>
            <p title="Program Spesial untuk Menyiapkan Siswa Menuju Dunia Masa Depan"
                class="w-full text-xl font-semibold text-gray-500">
                Program Spesial untuk Menyiapkan Siswa Menuju Dunia Masa Depan
            </p>
            <div class="my-10 grid w-full grid-cols-2 gap-8">
                <div
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Nanotechnology" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-nano.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4">
                        <h6 title="Nanotechnology" class="font-medium">
                            Nanotechnology
                        </h6>
                        <p title="Eksplorasi teknologi material skala nano">
                            Eksplorasi teknologi material skala nano
                        </p>
                    </div>
                </div>
                <div
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Biotechnology" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-bio.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4">
                        <h6 title="Biotechnology" class="font-medium">
                            Biotechnology
                        </h6>
                        <p title="Riset dan praktek dalam bioteknologi">
                            Riset dan praktek dalam bioteknologi
                        </p>
                    </div>
                </div>
                <div
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Robotic" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-robotic.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4">
                        <h6 title="Robotic" class="font-medium">
                            Robotic
                        </h6>
                        <p title="Pembuatan dan kompetisi robotik">
                            Pembuatan dan kompetisi robotik
                        </p>
                    </div>
                </div>
                <div
                    class="flex aspect-[5/3] flex-col items-end justify-center overflow-hidden rounded-b-sm rounded-t-lg bg-white text-white">
                    <div title="Renewable Energy" class="h-full w-full bg-cover bg-center bg-no-repeat"
                        style="background-image: url('/images/landing/program-energy.jpg')">
                    </div>
                    <div class="w-full bg-cstm-blue-900 px-3 py-4">
                        <h6 title="Renewable Energy" class="font-medium">
                            Renewable Energy
                        </h6>
                        <p title="Energi alternatif dan kesadaran lingkungan">
                            Energi alternatif dan kesadaran lingkungan
                        </p>
                    </div>
                </div>
            </div>
            <a title="Selengkapnya" href="{{ route(config('route.landing.program')) }}"
                class="ml-auto flex items-center justify-center gap-1.5 rounded-lg bg-cstm-green-900 px-14 py-4 text-white">
                Selengkapnya
                <img src="/icons/arrow.svg" alt="Arrow" class="w-5 rotate-180">
            </a>
        </div>
    </div>

</x-layouts.landing>
