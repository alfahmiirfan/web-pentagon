<x-layouts.admin title="Tambah Informasi | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.information.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah Informasi
        </h4>
    </div>

    <form action="{{ route(config('route.admin.information.add-action')) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-3">
        @csrf

        <x-labels.default text="Tanggal" for="date">
            <x-inputs.date name="date" />
        </x-labels.default>
        <x-labels.default text="Judul Informasi" for="name">
            <x-inputs.text name="name" placeholder="Judul Informasi" />
        </x-labels.default>
        <x-labels.default text="Deskripsi" for="description">
            <x-inputs.textarea name="description" placeholder="Deskripsi" />
        </x-labels.default>
        <x-inputs.image label="Foto Informasi" name="image" />

        @error('error')
            <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                <img src="/icons/info.svg" alt="" class="w-4">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.information.home')) }}" />
            <x-buttons.submit text="Tambah" />
        </div>
    </form>

</x-layouts.admin>
