@props(['title' => config('app.name')])

<x-layouts.app :$title>

    <header class="flex flex-col">

        <nav class="fixed top-0 z-40 flex w-full items-center justify-center bg-white">
            <div class="flex w-full max-w-screen-xl items-center justify-between gap-5 p-5 2xl:max-w-screen-2xl">
                <div title="SMA Negeri 10 Kaur Pentagon" class="flex items-center justify-center gap-3">
                    <img src="/images/logo.png" alt="Logo" class="w-14">
                    <h3 class="text-xl font-bold">
                        SMA Negeri 10 Kaur<br>Pentagon
                    </h3>
                </div>
                <ul class="flex items-center justify-center gap-5 text-lg font-medium">
                    <li title="Beranda">
                        <a href="{{ route(config('route.landing.home')) }}" @class([
                            'text-cstm-blue-900' => request()->routeIs(config('route.landing.home')),
                        ])>
                            Beranda
                        </a>
                    </li>
                    <li title="Tentang" x-data="{
                        about: false
                    }">
                        <button x-on:click="about = !about" @class([
                            'text-cstm-blue-900' => request()->routeIs(config('route.landing.about')),
                        ])>
                            Tentang
                            <img src="/icons/v.svg" alt="V" class="inline-block aspect-auto w-2.5">
                        </button>
                        <div x-show="about"
                            class="absolute mt-1.5 flex w-24 flex-col gap-1.5 rounded-md border bg-white p-1.5 text-sm">
                            <a href="{{ route(config('route.landing.about-profile')) }}" @class([
                                'text-cstm-blue-900' => request()->routeIs(
                                    config('route.landing.about-profile')),
                            ])>
                                Profil
                            </a>
                            <a href="{{ route(config('route.landing.about-ptk-home')) }}" @class([
                                'text-cstm-blue-900' => request()->routeIs(
                                    config('route.landing.about-ptk')),
                            ])>
                                PTK
                            </a>
                        </div>
                    </li>
                    <li title="Program">
                        <a href="{{ route(config('route.landing.program')) }}" @class([
                            'text-cstm-blue-900' => request()->routeIs(config('route.landing.program')),
                        ])>
                            Program
                        </a>
                    </li>
                    <li title="Prestasi">
                        <a href="{{ route(config('route.landing.achievement-home')) }}" @class([
                            'text-cstm-blue-900' => request()->routeIs(
                                config('route.landing.achievement')),
                        ])>
                            Prestasi
                        </a>
                    </li>
                    <li title="Galeri">
                        <a href="{{ route(config('route.landing.gallery')) }}" @class([
                            'text-cstm-blue-900' => request()->routeIs(config('route.landing.gallery')),
                        ])>
                            Galeri
                        </a>
                    </li>
                    <li title="Alumni">
                        <a href="{{ route(config('route.landing.alumni-home')) }}" @class([
                            'text-cstm-blue-900' => request()->routeIs(config('route.landing.alumni')),
                        ])>
                            Alumni
                        </a>
                    </li>
                    <li title="Informasi">
                        <a href="{{ route(config('route.landing.information-home')) }}" @class([
                            'text-cstm-blue-900' => request()->routeIs(
                                config('route.landing.information')),
                        ])>
                            Informasi
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <main class="flex flex-col">

        {{ $slot }}

    </main>

    <footer class="flex flex-col">

        <div class="flex justify-center">
            <div
                class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-5 px-5 py-16 2xl:max-w-screen-2xl">
                <p title="Alamat" class="w-full text-lg">
                    <span class="inline-block w-24 font-medium text-cstm-blue-900">ALAMAT</span>
                    <span class="font-medium text-cstm-blue-900">:</span>
                    Gedung Sako II, Kecamatan Kaur Selatan, Kabupaten Kaur, Provinsi Bengkulu, Kode POS 38563
                </p>
                <p title="Telepon" class="w-full text-lg">
                    <span class="inline-block w-24 font-medium text-cstm-blue-900">TELEPON</span>
                    <span class="font-medium text-cstm-blue-900">:</span>
                    08XXXXXXXXXX
                </p>
                <p title="Email" class="w-full text-lg">
                    <span class="inline-block w-24 font-medium text-cstm-blue-900">EMAIL</span>
                    <span class="font-medium text-cstm-blue-900">:</span>
                    sman10pentagon.kaur@gmail.com
                </p>
                <div class="grid w-full grid-cols-2">
                    <div title="SMA Negeri 10 Kaur Pentagon" class="flex items-center justify-start gap-3 text-lg">
                        <img src="/images/logo.png" alt="Logo" class="w-12">
                        <p class="font-bold text-cstm-blue-900">
                            SMA Negeri 10 Kaur Pentagon
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 text-lg">
                        <p title="Sosial" class="font-medium text-cstm-blue-900">
                            SOSIAL
                        </p>
                        <div class="flex items-center justify-start gap-3">
                            <a title="Facebook" href="">
                                <img src="/icons/facebook.svg" alt="Facebook" class="aspect-square w-8">
                            </a>
                            <a title="LinkedIn" href="">
                                <img src="/icons/linkedin.svg" alt="LinkedIn" class="aspect-square w-8">
                            </a>
                            <a title="Twitter" href="">
                                <img src="/icons/twitter.svg" alt="Twitter" class="aspect-square w-8">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center bg-cstm-blue-900">
            <div class="flex w-full max-w-screen-xl items-center justify-center p-5 2xl:max-w-screen-2xl">
                <p class="w-full text-white">
                    SMA Negeri 10 Kaur &copy 2025. All Rights Reserved
                </p>
            </div>
        </div>

    </footer>

</x-layouts.app>
