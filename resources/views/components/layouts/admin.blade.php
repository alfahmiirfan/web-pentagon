@props(['title'])

<x-layouts.app :$title>

    <nav
        class="fixed left-60 right-0 top-0 z-40 flex items-center justify-between bg-white p-4 text-lg font-medium shadow">
        <h2>
            Web Profil Sekolah
        </h2>
        <div class="flex items-center justify-center gap-3">
            <p>
                Admin
            </p>
            <div class="aspect-square w-10 rounded-full bg-cstm-blue-900"></div>
        </div>
    </nav>

    <aside class="fixed left-0 top-0 z-40 flex h-screen w-60 flex-col gap-6 bg-white p-5 shadow">
        <div class="flex flex-col items-center justify-center gap-1.5">
            <img src="/images/logo.png" alt="Logo" class="w-16">
            <h3 class="text-center font-medium text-cstm-blue-900">
                SMA Negeri 10 Kaur Pentagon
            </h3>
        </div>
        <ul class="flex flex-col gap-3">
            <li
                class="{{ request()->routeIs(config('route.admin.dashboard.home')) ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="{{ route(config('route.admin.dashboard.home')) }}">
                    Dashboard
                </a>
            </li>
            <li
                class="{{ request()->routeIs(config('route.admin.activity.base')) ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="{{ route(config('route.admin.activity.home')) }}">
                    Kegiatan Asrama
                </a>
            </li>
            <li
                class="{{ request()->routeIs(config('route.admin.facility.base')) ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="{{ route(config('route.admin.facility.home')) }}">
                    Fasilitas
                </a>
            </li>
            <li
                class="{{ request()->routeIs(config('route.admin.information.base')) ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="{{ route(config('route.admin.information.home')) }}">
                    Informasi
                </a>
            </li>
            <li
                class="{{ false ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="">
                    Agenda
                </a>
            </li>
            <li
                class="{{ false ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="">
                    PTK
                </a>
            </li>
            <li
                class="{{ false ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="">
                    Prestasi
                </a>
            </li>
            <li
                class="{{ false ? 'bg-cstm-blue-900 text-white hover:text-gray-300' : 'hover:*:text-cstm-blue-900' }} flex items-center justify-center rounded-lg *:flex-1 *:px-3 *:py-1.5">
                <a href="">
                    Alumni
                </a>
            </li>
        </ul>
    </aside>

    <main class="flex min-h-screen w-full items-start justify-start overflow-y-auto overflow-x-hidden bg-gray-100 p-5">
        <div class="ml-60 mt-20 flex flex-1 flex-col gap-3 rounded-xl bg-white p-5">

            {{ $slot }}

        </div>
    </main>

</x-layouts.app>
