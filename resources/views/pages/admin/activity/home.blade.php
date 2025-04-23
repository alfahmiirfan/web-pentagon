<x-layouts.admin title="Kegiatan | Admin | {{ config('app.name') }}">

    <h4 class="mb-6 text-xl font-bold text-cstm-blue-900">
        Kegiatan Asrama
    </h4>

    <div class="flex gap-3">
        <x-inputs.select :options="[20, 10, 5]" name="perpage" />
        <x-inputs.search />
        <x-links.add href="{{ route(config('route.admin.activity.add')) }}" />
    </div>

    <div class="overflow-hidden rounded-lg border">
        <table class="w-full">
            <thead>
                <tr class="text-white *:bg-cstm-green-900 *:p-1.5">
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b *:p-1.5 last:border-none">
                    <td class="text-center">1</td>
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
