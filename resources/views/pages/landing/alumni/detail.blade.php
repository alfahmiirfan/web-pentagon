<x-layouts.landing title="Detail Alumni | {{ config('app.name') }}">

    <div class="flex flex-col items-center justify-center">
        <div
            class="flex w-full max-w-screen-xl flex-col gap-3 px-5 pb-10 pt-32 text-justify md:pt-40 2xl:max-w-screen-2xl">
            <h6 title="{{ $alumni->name }}"
                class="line-clamp-1 text-xl font-bold text-cstm-blue-900 sm:text-2xl md:text-3xl">
                {{ $alumni->name }}
            </h6>
            <div class="flex aspect-[2/1] w-full items-center justify-center rounded-lg border-2 p-1.5">
                <img src="/storage/{{ $alumni->image }}" alt=""
                    class="mx-auto aspect-auto h-full max-h-screen max-w-full rounded-lg">
            </div>
            <h6 title="Alumni SMA Negeri 10 Kaur Pentagon" class="font-bold text-cstm-blue-900">
                Alumni SMA Negeri 10 Kaur Pentagon
            </h6>
            <table class="w-fit text-sm md:text-base">
                <tr class="*:px-1 *:align-top">
                    <td class="font-semibold">
                        Tahun Lulus
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $alumni->year }}
                    </td>
                </tr>
                <tr class="*:px-1 *:align-top">
                    <td class="font-semibold">
                        Status Saat Ini
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $alumni->status }}
                    </td>
                </tr>
                <tr class="*:px-1 *:align-top">
                    <td class="font-semibold">
                        Institusi / Tempat Kerja
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $alumni->job_place }}
                    </td>
                </tr>
                <tr class="*:px-1 *:align-top">
                    <td class="font-semibold">
                        Bidang / Program Studi / Posisi
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $alumni->position }}
                    </td>
                </tr>
                <tr class="*:px-1 *:align-top">
                    <td class="font-semibold">
                        Domisili Saat Ini
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $alumni->address }}
                    </td>
                </tr>
                <tr class="*:px-1 *:align-top">
                    <td class="font-semibold">
                        No Telepon
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $alumni->phone }}
                    </td>
                </tr>
            </table>
            <h6 title="Pesan dan Kesan untuk SMA Negeri 10 Kaur" class="font-bold text-cstm-blue-900">
                Pesan dan Kesan untuk SMA Negeri 10 Kaur
            </h6>
            <p class="text-sm md:text-base">
                {!! nl2br($alumni->description) !!}
            </p>
        </div>
    </div>

</x-layouts.landing>
