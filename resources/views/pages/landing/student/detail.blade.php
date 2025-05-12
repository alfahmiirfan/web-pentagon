<x-layouts.landing title="Detail Siswa | {{ config('app.name') }}">

    <div class="flex flex-col items-center justify-center">
        <div
            class="flex w-full max-w-screen-xl flex-col gap-3 px-5 pb-10 pt-32 text-justify max-sm:text-sm md:pt-40 2xl:max-w-screen-2xl">
            <h6 title="{{ $student->name }}"
                class="line-clamp-1 text-xl font-bold text-cstm-blue-900 sm:text-2xl md:text-3xl">
                {{ $student->name }}
            </h6>
            <p title="NISN {{ $student->nisn }}" class="line-clamp-1 text-gray-500">
                NISN {{ $student->nisn }}
            </p>
            <div class="flex aspect-[2/1] w-full items-center justify-center rounded-lg border-2 p-1.5">
                <img src="/storage/{{ $student->image }}" alt=""
                    class="mx-auto aspect-auto h-full max-h-screen max-w-full rounded-lg">
            </div>
            <p title="Siswa SMA Negeri 10 Kaur Pentagon" class="font-bold text-cstm-blue-900">
                Siswa SMA Negeri 10 Kaur Pentagon
            </p>
            <table>
                <tr>
                    <td class="whitespace-nowrap font-bold">
                        Jenis Kelamin
                    </td>
                    <td class="px-2.5 font-bold">
                        :
                    </td>
                    <td class="w-full">
                        {{ ucfirst($student->gender) }}
                    </td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap font-bold">
                        Tempat, Tanggal Lahir
                    </td>
                    <td class="px-2.5 font-bold">
                        :
                    </td>
                    <td class="w-full">
                        {{ $student->birth_place }}, {{ $student->birth_date }}
                    </td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap font-bold">
                        No Telepon
                    </td>
                    <td class="px-2.5 font-bold">
                        :
                    </td>
                    <td class="w-full">
                        {{ $student->phone }}
                    </td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap font-bold">
                        Email
                    </td>
                    <td class="px-2.5 font-bold">
                        :
                    </td>
                    <td class="w-full">
                        {{ $student->email }}
                    </td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap font-bold">
                        Alamat
                    </td>
                    <td class="px-2.5 font-bold">
                        :
                    </td>
                    <td class="w-full">
                        {{ $student->address }}
                    </td>
                </tr>
                <tr>
                    <td class="whitespace-nowrap font-bold">
                        Cita - cita
                    </td>
                    <td class="px-2.5 font-bold">
                        :
                    </td>
                    <td class="w-full">
                        {{ $student->dream }}
                    </td>
                </tr>
            </table>
            <p title="Motto Hidup" class="font-bold text-cstm-blue-900">
                Motto Hidup
            </p>
            <p>
                {{ $student->motto }}
            </p>
        </div>
    </div>

</x-layouts.landing>
