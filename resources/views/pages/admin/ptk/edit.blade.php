<x-layouts.admin title="Ubah PTK | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.ptk.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Ubah PTK
        </h4>
    </div>

    <form action="{{ route(config('route.admin.ptk.edit-action'), ['ptk' => $ptk]) }}" method="POST"
        enctype="multipart/form-data" class="flex flex-col gap-3">
        @method('PUT')
        @csrf

        <x-labels.default text="Nama" for="name" required="true">
            <x-inputs.text name="name" placeholder="Nama" value="{{ $ptk->name }}" />
        </x-labels.default>
        <x-labels.default text="NIP" for="nip">
            <x-inputs.text name="nip" placeholder="NIP" value="{{ $ptk->nip }}" />
        </x-labels.default>
        <x-labels.default text="Jabatan" for="position" required="true">
            <x-inputs.text name="position" placeholder="Jabatan" value="{{ $ptk->position }}" />
        </x-labels.default>
        <x-labels.default text="Tugas" for="job" required="true">
            <x-inputs.textarea name="job" placeholder="Tugas" value="{{ $ptk->job }}" />
        </x-labels.default>
        <x-labels.default text="Deskripsi" for="description" required="true">
            <x-inputs.textarea name="description" placeholder="Deskripsi" value="{{ $ptk->description }}" />
        </x-labels.default>
        <x-inputs.image label="Foto PTK" name="image" value="/storage/{{ $ptk->image }}" required="true" />

        @error('error')
            <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                <img src="/icons/info.svg" alt="" class="w-4">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.ptk.home')) }}" />
            <x-buttons.submit text="Ubah" />
        </div>
    </form>

</x-layouts.admin>
