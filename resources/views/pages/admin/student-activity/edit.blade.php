<x-layouts.admin title="Ubah Kegiatan | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.student-activity.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Ubah Kesiswaan
        </h4>
    </div>

    <form
        action="{{ route(config('route.admin.student-activity.edit-action'), ['studentActivity' => $studentActivity]) }}"
        method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
        @method('PUT')
        @csrf

        <x-labels.default text="Nama Kesiswaan" for="name" required="true">
            <x-inputs.text name="name" placeholder="Nama Kesiswaan" value="{{ $studentActivity->name }}" />
        </x-labels.default>
        <x-inputs.image label="Foto Kesiswaan" name="image" value="/storage/{{ $studentActivity->image }}"
            required="true" />

        @error('error')
            <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                <img src="/icons/info.svg" alt="" class="w-4">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.student-activity.home')) }}" />
            <x-buttons.submit text="Ubah" />
        </div>
    </form>

</x-layouts.admin>
