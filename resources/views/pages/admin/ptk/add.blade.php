<x-layouts.admin title="Tambah PTK | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.ptk.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah PTK
        </h4>
    </div>

    <form action="{{ route(config('route.admin.ptk.add-action')) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-3">
        @csrf

        <x-labels.default text="Nama" for="name" required="true">
            <x-inputs.text name="name" placeholder="Nama" />
        </x-labels.default>
        <x-labels.default text="NIP" for="nip">
            <x-inputs.text name="nip" placeholder="NIP" />
        </x-labels.default>
        <x-labels.default text="Jabatan" for="position" required="true">
            <x-inputs.text name="position" placeholder="Jabatan" />
        </x-labels.default>
        <x-labels.default text="Tugas" for="job" required="true">
            <x-inputs.textarea name="job" placeholder="Tugas" />
        </x-labels.default>
        <x-labels.default text="Deskripsi" for="description" required="true">
            <x-inputs.textarea name="description" placeholder="Deskripsi" />
        </x-labels.default>
        <x-inputs.image label="Foto PTK" name="image" required="true" />

        @error('error')
            <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                <img src="/icons/info.svg" alt="" class="w-4">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.ptk.home')) }}" />
            <x-buttons.submit text="Tambah" />
        </div>
    </form>

</x-layouts.admin>
