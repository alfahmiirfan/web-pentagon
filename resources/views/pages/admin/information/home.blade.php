<x-layouts.admin title="Informasi | Admin | {{ config('app.name') }}">

    <h4 class="mb-6 text-xl font-bold text-cstm-blue-900">
        Informasi
    </h4>

    <div class="flex gap-3">
        <select name="" id="" class="rounded-lg border px-1">
            <option value="10">
                20
            </option>
            <option value="10">
                10
            </option>
            <option value="5">
                5
            </option>
        </select>
        <label for="search" class="flex items-center justify-center overflow-hidden rounded-lg border">
            <img src="/icons/search.svg" alt="search" class="ml-2.5 w-4">
            <input type="search" name="pencarian" id="search" placeholder="Pencarian"
                class="h-full flex-1 rounded-lg px-2.5">
        </label>
        <a href="" class="ml-auto rounded-lg bg-cstm-blue-900 px-3 py-1.5 text-white">
            <img src="/icons/plus.svg" alt="plus" class="inline-block w-4">
            Tambah
        </a>
    </div>

    <div class="overflow-hidden rounded-lg border">
        <table class="w-full">
            <thead>
                <tr class="text-white *:bg-cstm-green-900 *:p-1.5">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Judul Informasi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b *:p-1.5 last:border-none">
                    <td class="text-center">1</td>
                    <td>20 April 2025</td>
                    <td>Ibadah Bersama</td>
                    <td>
                        <div class="mx-auto aspect-video w-52 bg-blue-300"></div>
                    </td>
                    <td class="text-center">
                        <img src="/icons/more.svg" alt="more" class="inline-block w-1">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-layouts.admin>
