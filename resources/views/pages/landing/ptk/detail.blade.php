<x-layouts.landing title="Detail PTK | {{ config('app.name') }}">

    <div class="flex flex-col items-center justify-center">
        <div
            class="flex w-full max-w-screen-xl flex-col gap-3 px-5 pb-10 pt-32 text-justify max-sm:text-sm md:pt-40 2xl:max-w-screen-2xl">
            <h6 title="{{ $ptk->name }}"
                class="line-clamp-1 text-xl font-bold text-cstm-blue-900 sm:text-2xl md:text-3xl">
                {{ $ptk->name }}
            </h6>
            <p title="{{ $ptk->position }}" class="line-clamp-1 text-gray-500">
                {{ $ptk->position }}
            </p>
            <div class="aspect-[2/1] w-full rounded-lg border bg-cover bg-center bg-no-repeat"
                style="background-image: url('/storage/{{ $ptk->image }}')">
            </div>
            <p>
                {!! nl2br($ptk->description) !!}
            </p>
        </div>
    </div>

</x-layouts.landing>
