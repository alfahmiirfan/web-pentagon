<x-layouts.app title="Masuk | {{ config('app.name') }}">

    <div class="relative flex min-h-screen flex-row-reverse">
        <div class="flex-1 bg-cover bg-center bg-no-repeat max-md:absolute max-md:h-full max-md:w-full"
            style="background-image: url('/images/landing/hero.jpg')">
        </div>
        <div
            class="relative flex flex-1 flex-col gap-5 bg-white p-5 max-md:absolute max-md:left-1/2 max-md:top-1/2 max-md:-translate-x-1/2 max-md:-translate-y-1/2 max-md:rounded-lg">
            <a href="{{ route(config('route.landing.home')) }}" title="SMA Negeri 10 Kaur Pentagon"
                class="absolute left-5 top-5 flex items-center justify-center gap-2 max-md:static">
                <img src="/images/logo.png" alt="Logo" class="w-10 lg:w-12">
                <h3 class="font-bold sm:text-lg md:text-xl">
                    SMA Negeri 10 Kaur Pentagon
                </h3>
            </a>
            <form action="{{ route(config('route.auth.login-action')) }}" method="POST"
                class="m-auto flex w-72 flex-col gap-3 *:flex-1 max-sm:text-sm md:w-96 md:p-3">
                @csrf

                <p title="Selamat Datang" class="text-center text-xl font-bold">
                    Selamat Datang
                </p>
                <p title="Masukkan Informasi Detail Anda" class="mb-4 text-center">
                    Masukkan Informasi Detail Anda
                </p>
                <x-labels.default text="Email" for="email">
                    <x-inputs.email name="email" placeholder="Email" />
                </x-labels.default>
                <x-labels.default text="Kata Sandi" for="password">
                    <x-inputs.password name="password" placeholder="Kata Sandi" />
                </x-labels.default>

                @error('error')
                    <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                        <img src="/icons/info.svg" alt="" class="w-4">
                        {{ $message }}
                    </p>
                @enderror

                <button type="submit" class="mt-4 rounded-lg bg-cstm-blue-900 py-1.5 text-center text-white">
                    Masuk
                </button>
            </form>
        </div>
    </div>

</x-layouts.app>
