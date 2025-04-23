<x-layouts.admin title="Tambah Prestasi | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.achievement.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah Prestasi
        </h4>
    </div>

    <form action="" class="flex flex-col gap-3">
        <x-labels.default text="Tanggal" for="date">
            <x-inputs.date name="date" />
        </x-labels.default>
        <x-labels.default text="Judul Prestasi" for="name">
            <x-inputs.text name="name" placeholder="Judul Prestasi" />
        </x-labels.default>
        <x-labels.default text="Deskripsi" for="description">
            <x-inputs.textarea name="description" placeholder="Deskripsi" />
        </x-labels.default>
        <x-inputs.image label="Foto Prestasi" name="image" />
        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.achievement.home')) }}" />
            <x-buttons.submit text="Tambah" />
        </div>
    </form>

</x-layouts.admin>
