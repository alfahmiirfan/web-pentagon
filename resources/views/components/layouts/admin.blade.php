@props(['title' => 'Admin | ' . config('app.name')])

<x-layouts.app :$title>

    <nav
        class="fixed left-60 right-0 top-0 z-40 flex items-center justify-between bg-white p-4 text-lg font-medium shadow">
        <h2>
            Web Profil Sekolah
        </h2>
        <div class="flex items-center justify-center gap-3">
            <p>
                {{ auth()->user()?->name ?? '' }}
            </p>
            <img src="/images/user.png" alt="User" class="w-8">
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
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.dashboard.home')) }}"
                    href="{{ route(config('route.admin.dashboard.home')) }}" text="Dashboard" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.activity.base')) }}"
                    href="{{ route(config('route.admin.activity.home')) }}" text="Kegiatan Asrama" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.student-activity.base')) }}"
                    href="{{ route(config('route.admin.student-activity.home')) }}" text="Kesiswaan" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.facility.base')) }}"
                    href="{{ route(config('route.admin.facility.home')) }}" text="Fasilitas" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.information.base')) }}"
                    href="{{ route(config('route.admin.information.home')) }}" text="Informasi" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.ptk.base')) }}"
                    href="{{ route(config('route.admin.ptk.home')) }}" text="PTK" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.achievement.base')) }}"
                    href="{{ route(config('route.admin.achievement.home')) }}" text="Prestasi" />
            </li>
            <li>
                <x-links.navbar active="{{ request()->routeIs(config('route.admin.alumni.base')) }}"
                    href="{{ route(config('route.admin.alumni.home')) }}" text="Alumni" />
            </li>
        </ul>
        <a href="{{ route(config('route.auth.logout')) }}"
            class="rounded-lg bg-red-500 px-0.5 py-1 text-center text-white hover:bg-red-400">
            Keluar
        </a>
    </aside>

    <main class="flex min-h-screen w-full items-start justify-start overflow-y-auto overflow-x-hidden bg-gray-100 p-5">
        <div class="ml-60 mt-20 flex flex-1 flex-col gap-3 rounded-xl bg-white p-5" {!! $attributes !!}>

            {{ $slot }}

        </div>
    </main>

    @session('success')
        <p class="fixed bottom-5 right-5 z-40 rounded-lg border-2 border-green-500 bg-green-300 px-5 py-1.5 text-green-700">
            {{ $value }}
        </p>
    @endsession

</x-layouts.app>
