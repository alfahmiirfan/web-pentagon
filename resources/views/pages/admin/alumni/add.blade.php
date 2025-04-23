<x-layouts.admin title="Tambah Alumni | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <a href="{{ route(config('route.admin.alumni.home')) }}"
            class="flex items-center justify-center rounded-full border-2 border-cstm-blue-900 p-2">
            <img src="/icons/v.svg" alt="v" class="w-4 rotate-90">
        </a>
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah Alumni
        </h4>
    </div>

    <form action="" class="flex flex-col gap-3">
        <div class="flex gap-3 *:flex-1">
            <div class="flex flex-col gap-1.5">
                <label for="name">
                    Nama
                </label>
                <input type="text" name="name" id="name" placeholder="Nama"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
            <div class="flex flex-col gap-1.5">
                <label for="year">
                    Tahun Lulus
                </label>
                <input type="text" name="year" id="year" placeholder="Tahun Lulus"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
        </div>
        <div class="flex gap-3 *:flex-1">
            <div class="flex flex-col gap-1.5">
                <label for="class">
                    Kelas
                </label>
                <input type="text" name="class" id="class" placeholder="Kelas"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
            <div class="flex flex-col gap-1.5">
                <label for="status">
                    Status Saat Ini
                </label>
                <input type="text" name="status" id="status" placeholder="Status Saat Ini"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
        </div>
        <div class="flex gap-3 *:flex-1">
            <div class="flex flex-col gap-1.5">
                <label for="job_place">
                    Institusi / Tempat Kerja
                </label>
                <input type="text" name="job_place" id="job_place" placeholder="Institusi / Tempat Kerja"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
            <div class="flex flex-col gap-1.5">
                <label for="position">
                    Bidang / Program Studi / Posisi
                </label>
                <input type="text" name="position" id="position" placeholder="Bidang / Program Studi / Posisi"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
        </div>
        <div class="flex gap-3 *:flex-1">
            <div class="flex flex-col gap-1.5">
                <label for="address">
                    Domisili Saat Ini
                </label>
                <input type="text" name="address" id="address" placeholder="Domisili Saat Ini"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
            <div class="flex flex-col gap-1.5">
                <label for="phone">
                    No Telepon
                </label>
                <input type="text" name="phone" id="phone" placeholder="No Telepon"
                    class="rounded-lg border-2 px-3 py-1.5">
            </div>
        </div>
        <div class="flex flex-col gap-1.5">
            <label for="description">
                Kesan Dan Pesan
            </label>
            <textarea name="description" id="description" placeholder="Kesan Dan Pesan" class="rounded-lg border-2 px-3 py-1.5"></textarea>
        </div>
        <label for="image" class="flex flex-col gap-1.5">
            <p>
                Foto Alumni
            </p>
            <div class="flex h-60 items-center justify-center rounded-lg border-2 border-dashed">
                <p class="text-lg">
                    Pilih File
                </p>
            </div>
            <input type="file" name="image" id="image" class="hidden">
        </label>
        <div class="flex items-center justify-end gap-3">
            <a href="{{ route(config('route.admin.alumni.home')) }}"
                class="w-28 rounded-lg border-2 border-cstm-blue-900 py-1.5 text-center text-cstm-blue-900">
                Batal
            </a>
            <a href="" class="w-28 rounded-lg bg-cstm-blue-900 py-1.5 text-center text-white">
                Tambah
            </a>
        </div>
    </form>

</x-layouts.admin>
