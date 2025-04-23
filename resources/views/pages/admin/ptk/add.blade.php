<x-layouts.admin title="Tambah PTK | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.ptk.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah PTK
        </h4>
    </div>

    <form action="" class="flex flex-col gap-3">
        <x-labels.default text="Nama" for="name">
            <x-inputs.text name="name" placeholder="Nama" />
        </x-labels.default>
        <x-labels.default text="Jabatan" for="position">
            <x-inputs.text name="position" placeholder="Jabatan" />
        </x-labels.default>
        <x-labels.default text="Deskripsi" for="description">
            <x-inputs.textarea name="description" placeholder="Deskripsi" />
        </x-labels.default>
        <x-inputs.image label="Foto PTK" name="image" />
        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.ptk.home')) }}" />
            <x-buttons.submit text="Tambah" />
        </div>
    </form>

</x-layouts.admin>
