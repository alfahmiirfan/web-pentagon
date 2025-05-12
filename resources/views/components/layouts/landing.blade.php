@props(['title' => config('app.name')])

<x-layouts.app :$title>

    <header class="fixed top-0 z-40 flex w-full flex-col bg-white" x-data="{
        mobileNavbar: false
    }">

        <nav class="flex w-full items-center justify-center">
            <div class="flex w-full max-w-screen-xl items-center justify-between gap-5 p-5 2xl:max-w-screen-2xl">
                <a href="{{ route(config('route.landing.home')) }}" title="SMA Negeri 10 Kaur Pentagon"
                    class="flex items-center justify-center gap-3">
                    <img src="/images/logo.png" alt="Logo" class="w-12 lg:w-14">
                    <h3 class="font-bold sm:text-lg md:text-xl">
                        SMA Negeri 10 Kaur<br>Pentagon
                    </h3>
                </a>
                <ul class="hidden items-center justify-center gap-5 font-medium lg:flex xl:text-lg">
                    <li title="Beranda">
                        <a href="{{ route(config('route.landing.home')) }}" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.home')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Beranda
                        </a>
                    </li>
                    <li x-data="{
                        about: false
                    }">
                        <button title="Tentang" x-on:click="about = !about" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.about')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Tentang
                            <img src="/icons/v.svg" alt="V" class="inline-block aspect-auto w-2.5">
                        </button>
                        <div x-show="about"
                            class="absolute mt-1.5 flex w-24 flex-col gap-1.5 rounded-md border bg-white p-1.5 text-sm">
                            <a title="Profil" href="{{ route(config('route.landing.about-profile')) }}"
                                @class([
                                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                        config('route.landing.about-profile')),
                                    'hover:text-cstm-blue-900',
                                ])>
                                Profil
                            </a>
                            <a title="PTK" href="{{ route(config('route.landing.about-ptk-home')) }}"
                                @class([
                                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                        config('route.landing.about-ptk')),
                                    'hover:text-cstm-blue-900',
                                ])>
                                PTK
                            </a>
                            <a title="Siswa" href="{{ route(config('route.landing.about-student-home')) }}"
                                @class([
                                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                        config('route.landing.about-student')),
                                    'hover:text-cstm-blue-900',
                                ])>
                                Siswa
                            </a>
                        </div>
                    </li>
                    <li title="Program">
                        <a href="{{ route(config('route.landing.program')) }}" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.program')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Program
                        </a>
                    </li>
                    <li title="Prestasi">
                        <a href="{{ route(config('route.landing.achievement-home')) }}" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.achievement')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Prestasi
                        </a>
                    </li>
                    <li title="Galeri">
                        <a href="{{ route(config('route.landing.gallery')) }}" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.gallery')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Galeri
                        </a>
                    </li>
                    <li title="Alumni">
                        <a href="{{ route(config('route.landing.alumni-home')) }}" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.alumni')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Alumni
                        </a>
                    </li>
                    <li title="Informasi">
                        <a href="{{ route(config('route.landing.information-home')) }}" @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.information')),
                            'hover:text-cstm-blue-900',
                        ])>
                            Informasi
                        </a>
                    </li>
                </ul>
                <button title="Menu" x-on:click="mobileNavbar = !mobileNavbar"
                    class="rounded-lg border-2 p-1.5 lg:hidden">
                    <img src="/icons/menu.svg" alt="Menu" class="w-5">
                </button>
            </div>
        </nav>

        <ul x-show="mobileNavbar"
            class="flex w-full max-w-screen-xl flex-col items-center justify-between gap-5 p-5 text-sm sm:text-base 2xl:max-w-screen-2xl">
            <li title="Beranda">
                <a href="{{ route(config('route.landing.home')) }}" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.home')),
                    'hover:text-cstm-blue-900',
                ])>
                    Beranda
                </a>
            </li>
            <li x-data="{
                about: false
            }">
                <button title="Tentang" x-on:click="about = !about" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.about')),
                    'hover:text-cstm-blue-900',
                ])>
                    Tentang
                    <img src="/icons/v.svg" alt="V" class="inline-block aspect-auto w-2.5">
                </button>
                <div x-show="about"
                    class="absolute mt-1.5 flex w-24 flex-col gap-1.5 rounded-md border bg-white p-1.5 text-sm">
                    <a title="Profil" href="{{ route(config('route.landing.about-profile')) }}"
                        @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.about-profile')),
                            'hover:text-cstm-blue-900',
                        ])>
                        Profil
                    </a>
                    <a title="PTK" href="{{ route(config('route.landing.about-ptk-home')) }}"
                        @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.about-ptk')),
                            'hover:text-cstm-blue-900',
                        ])>
                        PTK
                    </a>
                    <a title="Siswa" href="{{ route(config('route.landing.about-student-home')) }}"
                        @class([
                            'text-cstm-blue-900 font-semibold' => request()->routeIs(
                                config('route.landing.about-student')),
                            'hover:text-cstm-blue-900',
                        ])>
                        Siswa
                    </a>
                </div>
            </li>
            <li title="Program">
                <a href="{{ route(config('route.landing.program')) }}" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.program')),
                    'hover:text-cstm-blue-900',
                ])>
                    Program
                </a>
            </li>
            <li title="Prestasi">
                <a href="{{ route(config('route.landing.achievement-home')) }}" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.achievement')),
                    'hover:text-cstm-blue-900',
                ])>
                    Prestasi
                </a>
            </li>
            <li title="Galeri">
                <a href="{{ route(config('route.landing.gallery')) }}" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.gallery')),
                    'hover:text-cstm-blue-900',
                ])>
                    Galeri
                </a>
            </li>
            <li title="Alumni">
                <a href="{{ route(config('route.landing.alumni-home')) }}" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.alumni')),
                    'hover:text-cstm-blue-900',
                ])>
                    Alumni
                </a>
            </li>
            <li title="Informasi">
                <a href="{{ route(config('route.landing.information-home')) }}" @class([
                    'text-cstm-blue-900 font-semibold' => request()->routeIs(
                        config('route.landing.information')),
                    'hover:text-cstm-blue-900',
                ])>
                    Informasi
                </a>
            </li>
        </ul>

    </header>

    <main class="flex flex-col">

        {{ $slot }}

    </main>

    <footer class="flex flex-col">

        <div class="flex justify-center">
            <div
                class="flex w-full max-w-screen-xl flex-col items-center justify-center gap-5 px-5 py-16 2xl:max-w-screen-2xl">
                <table class="mr-auto text-sm md:text-base lg:text-lg">
                    <tr title="Alamat"
                        class="align-top *:p-1 first:*:pr-3 first:*:font-medium first:*:text-cstm-blue-900">
                        <td>
                            ALAMAT
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Gedung Sako II, Kecamatan Kaur Selatan, Kabupaten Kaur, Provinsi Bengkulu, Kode POS 38563
                        </td>
                    </tr>
                    <tr title="Telepon"
                        class="align-top *:p-1 first:*:pr-3 first:*:font-medium first:*:text-cstm-blue-900">
                        <td>
                            TELEPON
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            08XXXXXXXXXX
                        </td>
                    </tr>
                    <tr title="Email"
                        class="align-top *:p-1 first:*:pr-3 first:*:font-medium first:*:text-cstm-blue-900">
                        <td>
                            EMAIL
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            sman10pentagon.kaur@gmail.com
                        </td>
                    </tr>
                </table>
                <div class="grid w-full gap-4 sm:grid-cols-2">
                    <div title="SMA Negeri 10 Kaur Pentagon"
                        class="flex items-center justify-start gap-3 text-sm md:text-base lg:text-lg">
                        <img src="/images/logo.png" alt="Logo" class="w-12">
                        <p class="font-bold text-cstm-blue-900">
                            SMA Negeri 10 Kaur Pentagon
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 text-sm md:text-base lg:text-lg">
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
                <p class="w-full text-sm text-white md:text-base">
                    SMA Negeri 10 Kaur &copy 2025. All Rights Reserved
                </p>
            </div>
        </div>

    </footer>

</x-layouts.app>
