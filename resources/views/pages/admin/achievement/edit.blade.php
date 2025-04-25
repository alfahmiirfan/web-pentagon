<x-layouts.admin title="Ubah Prestasi | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.achievement.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Ubah Prestasi
        </h4>
    </div>

    <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
        @method('PUT')
        @csrf

        <x-labels.default text="Tanggal" for="date">
            <x-inputs.date name="date" value="{{ $achievement->date }}" />
        </x-labels.default>
        <x-labels.default text="Judul Prestasi" for="name">
            <x-inputs.text name="name" placeholder="Judul Prestasi" value="{{ $achievement->name }}" />
        </x-labels.default>
        <x-labels.default text="Deskripsi" for="description">
            <x-inputs.textarea name="description" placeholder="Deskripsi" value="{{ $achievement->description }}" />
        </x-labels.default>
        <x-inputs.image label="Foto Prestasi" name="image" value="/storage/{{ $achievement->image }}" />

        @error('error')
            <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                <img src="/icons/info.svg" alt="" class="w-4">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.achievement.home')) }}" />
            <x-buttons.submit text="Ubah" />
        </div>
    </form>

</x-layouts.admin>
