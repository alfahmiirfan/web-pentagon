<x-layouts.admin title="Tambah Siswa | Admin | {{ config('app.name') }}">

    <div class="mb-6 flex items-center justify-start gap-2.5">
        <x-links.back href="{{ route(config('route.admin.student.home')) }}" />
        <h4 class="text-xl font-bold text-cstm-blue-900">
            Tambah Siswa
        </h4>
    </div>

    <form action="{{ route(config('route.admin.student.add-action')) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-3">
        @csrf

        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Nama" for="name" required="true">
                <x-inputs.text name="name" placeholder="Nama" />
            </x-labels.default>
            <x-labels.default text="NISN" for="nisn" required="true">
                <x-inputs.text name="nisn" placeholder="NISN" />
            </x-labels.default>
        </div>
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Tempat lahir" for="birth_place" required="true">
                <x-inputs.text name="birth_place" placeholder="Tempat lahir" />
            </x-labels.default>
            <x-labels.default text="Tanggal lahir" for="birth_date" required="true">
                <x-inputs.date name="birth_date" />
            </x-labels.default>
        </div>
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Jenis kelamin" for="gender" required="true">
                <x-inputs.select name="gender" class="py-1.5">
                    <option value="">
                        Pilih Jenis Kelamin
                    </option>

                    @foreach (\App\Models\Student::GetGenderValues() as $option)
                        <option value="{{ $option }}" @selected($option === old('gender'))>
                            {{ ucfirst($option) }}
                        </option>
                    @endforeach

                </x-inputs.select>
            </x-labels.default>
            <x-labels.default text="No Telepon" for="phone" required="true">
                <x-inputs.text name="phone" placeholder="No Telepon" />
            </x-labels.default>
        </div>
        <div class="flex gap-3 *:flex-1">
            <x-labels.default text="Email" for="email" required="true">
                <x-inputs.text name="email" placeholder="Email" />
            </x-labels.default>
            <x-labels.default text="Angkatan" for="generation" required="true">
                <x-inputs.text name="generation" placeholder="Angkatan" />
            </x-labels.default>
        </div>
        <x-labels.default text="Alamat" for="address" required="true">
            <x-inputs.text name="address" placeholder="Alamat" />
        </x-labels.default>
        <x-inputs.image label="Foto Siswa" name="image" required="true" />

        @error('error')
            <p class="flex items-center justify-start gap-1 text-sm italic text-red-500">
                <img src="/icons/info.svg" alt="" class="w-4">
                {{ $message }}
            </p>
        @enderror

        <div class="flex items-center justify-end gap-3">
            <x-links.cancel href="{{ route(config('route.admin.student.home')) }}" />
            <x-buttons.submit text="Tambah" />
        </div>
    </form>

</x-layouts.admin>
