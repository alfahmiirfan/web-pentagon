<x-layouts.admin title="Tambah Fasilitas | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <a href="{{ route(config('route.admin.facility.home')) }}"
            class="flex items-center justify-center rounded-full border-2 border-cstm-blue-900 p-2">
            <img src="/icons/v.svg" alt="v" class="w-4 rotate-90">
        </a>
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah Fasilitas
        </h4>
    </div>

    <form action="" class="flex flex-col gap-3">
        <div class="flex flex-col gap-1.5">
            <label for="name">
                Nama Fasilitas
            </label>
            <input type="text" name="name" id="name" placeholder="Nama Fasilitas"
                class="rounded-lg border-2 px-3 py-1.5">
        </div>
        <label for="image" class="flex flex-col gap-1.5">
            <p>
                Foto Fasilitas
            </p>
            <div class="flex h-60 items-center justify-center rounded-lg border-2 border-dashed">
                <p class="text-lg">
                    Pilih File
                </p>
            </div>
            <input type="file" name="image" id="image" class="hidden">
        </label>
        <div class="flex items-center justify-end gap-3">
            <a href="{{ route(config('route.admin.facility.home')) }}"
                class="w-28 rounded-lg border-2 border-cstm-blue-900 py-1.5 text-center text-cstm-blue-900">
                Batal
            </a>
            <a href="" class="w-28 rounded-lg bg-cstm-blue-900 py-1.5 text-center text-white">
                Tambah
            </a>
        </div>
    </form>

</x-layouts.admin>
