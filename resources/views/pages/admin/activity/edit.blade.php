<x-layouts.admin title="Ubah Kegiatan | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.activity.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Ubah Kegiatan
        </h4>
    </div>

    <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
        @csrf

        <x-labels.default text="Nama Kegiatan" for="name">
            <x-inputs.text name="name" placeholder="Nama Kegiatan" value="{{ $activity->name }}" />
        </x-labels.default>
        <x-inputs.image label="Foto Kegiatan" name="image" value="/storage/{{ $activity->image }}" />

        @error('error')
            <p class="italic text-red-500">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.activity.home')) }}" />
            <x-buttons.submit text="Ubah" />
        </div>
    </form>

</x-layouts.admin>
