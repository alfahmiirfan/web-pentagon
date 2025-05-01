<x-layouts.admin title="Dashboard | Admin | {{ config('app.name') }}">

    <h4 class="mb-6 text-xl font-bold text-cstm-blue-900">
        Dashboard
    </h4>

    <div class="grid grid-cols-3 gap-5">
        <div class="flex flex-col gap-5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="text-gray-500">
                Kegiatan Asrama
            </p>
            <p class="text-3xl font-bold">
                150
            </p>
        </div>
        <div class="flex flex-col gap-5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="text-gray-500">
                Fasilitas
            </p>
            <p class="text-3xl font-bold">
                150
            </p>
        </div>
        <div class="flex flex-col gap-5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="text-gray-500">
                Informasi
            </p>
            <p class="text-3xl font-bold">
                150
            </p>
        </div>
        <div class="flex flex-col gap-5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="text-gray-500">
                PTK
            </p>
            <p class="text-3xl font-bold">
                150
            </p>
        </div>
        <div class="flex flex-col gap-5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="text-gray-500">
                Prestasi
            </p>
            <p class="text-3xl font-bold">
                150
            </p>
        </div>
        <div class="flex flex-col gap-5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="text-gray-500">
                Alumni
            </p>
            <p class="text-3xl font-bold">
                150
            </p>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-5">
        <div class="flex flex-col gap-1.5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="mb-3 text-2xl font-bold">
                Informasi Terkini
            </p>

            @foreach ([1, 2, 3] as $item)
                <p class="line-clamp-1 text-gray-500">
                    Alumni
                </p>
            @endforeach

        </div>
        <div class="flex flex-col gap-1.5 rounded-lg bg-cstm-blue-900/10 p-5">
            <p class="mb-3 text-2xl font-bold">
                Prestasi Terbaru
            </p>

            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $item)
                <p class="line-clamp-1 text-gray-500">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime ad sed cupiditate corporis iure,
                    explicabo commodi debitis dicta, nostrum soluta deleniti exercitationem ab inventore a at iste
                    voluptatum aut perspiciatis?
                </p>
            @endforeach

        </div>
    </div>

</x-layouts.admin>
