<x-layouts.admin title="Tambah Alumni | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.alumni.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah Alumni
        </h4>
    </div>

    <form action="" class="flex flex-col gap-3">
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Nama" for="name">
                <x-inputs.text name="name" placeholder="Nama" />
            </x-labels.default>
            <x-labels.default text="Tahun Lulus" for="year">
                <x-inputs.text name="year" placeholder="Tahun Lulus" />
            </x-labels.default>
        </div>
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Kelas" for="class">
                <x-inputs.text name="class" placeholder="Kelas" />
            </x-labels.default>
            <x-labels.default text="Status Saat Ini" for="status">
                <x-inputs.text name="status" placeholder="Status Saat Ini" />
            </x-labels.default>
        </div>
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Institusi / Tempat Kerja" for="job_place">
                <x-inputs.text name="job_place" placeholder="Institusi / Tempat Kerja" />
            </x-labels.default>
            <x-labels.default text="Bidang / Program Studi / Posisi" for="position">
                <x-inputs.text name="position" placeholder="Bidang / Program Studi / Posisi" />
            </x-labels.default>
        </div>
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Domisili Saat Ini" for="address">
                <x-inputs.text name="address" placeholder="Domisili Saat Ini" />
            </x-labels.default>
            <x-labels.default text="No Telepon" for="phone">
                <x-inputs.text name="phone" placeholder="No Telepon" />
            </x-labels.default>
        </div>
        <x-labels.default text="Kesan Dan Pesan" for="description">
            <x-inputs.textarea name="description" placeholder="Kesan Dan Pesan" />
        </x-labels.default>
        <x-inputs.image label="Foto Alumni" name="image" />
        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.alumni.home')) }}" />
            <x-buttons.submit text="Tambah" />
        </div>
    </form>

</x-layouts.admin>
