<x-layouts.landing title="Detail Prestasi | {{ config('app.name') }}">

    <div class="flex flex-col items-center justify-center">
        <div
            class="flex w-full max-w-screen-xl flex-col gap-3 px-5 pb-10 pt-32 text-justify max-sm:text-sm md:pt-40 2xl:max-w-screen-2xl">
            <div class="aspect-[2/1] w-full rounded-lg border bg-cover bg-center bg-no-repeat"
                style="background-image: url('/storage/{{ $achievement->image }}')">
            </div>
            <h6 title="{{ $achievement->name }}" class="text-xl font-bold sm:text-2xl md:text-3xl">
                {{ $achievement->name }}
            </h6>
            <p title="{{ $achievement->date }}" class="text-gray-500">
                {{ $achievement->date }}
            </p>
            <p>
                {!! nl2br($achievement->description) !!}
            </p>
        </div>
    </div>

</x-layouts.landing>
