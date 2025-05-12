<x-layouts.landing title="Detail Informasi | {{ config('app.name') }}">

    @push('heads')
        <style>
            div#notailwind h1 {
                font-size: 1.875rem;
                font-weight: 700;
            }

            div#notailwind h2 {
                font-size: 1.75rem;
                font-weight: 700;
            }

            div#notailwind h3 {
                font-size: 1.6rem;
                font-weight: 700;
            }

            div#notailwind h4 {
                font-size: 1.4rem;
                font-weight: 700;
            }

            div#notailwind h5 {
                font-size: 1.25rem;
                font-weight: 700;
            }

            div#notailwind h6 {
                font-size: 1.125rem;
                font-weight: 700;
            }

            div#notailwind ul {
                list-style-type: disc;
                padding-left: 1.25rem;
            }

            div#notailwind ol {
                list-style-type: decimal;
                padding-left: 1.25rem;
            }

            div#notailwind a {
                text-decoration-line: underline;
                color: blue;
            }

            div#notailwind a:hover {
                text-decoration-line: underline;
                color: rgb(103, 103, 255);
            }
        </style>
    @endpush

    <div class="flex min-h-screen flex-col items-center justify-center">
        <div
            class="flex w-full max-w-screen-xl flex-col gap-3 px-5 pb-10 pt-32 text-justify md:pt-40 2xl:max-w-screen-2xl">
            <div class="flex aspect-[2/1] w-full items-center justify-center rounded-lg border-2 p-1.5">
                <img src="/storage/{{ $information->image }}" alt=""
                    class="mx-auto aspect-auto h-full max-h-screen max-w-full rounded-lg">
            </div>
            <h6 title="{{ $information->name }}" class="text-xl font-bold sm:text-2xl md:text-3xl">
                {{ $information->name }}
            </h6>
            <p title="{{ $information->date }}" class="text-sm text-gray-500">
                {{ $information->date }}
            </p>
            <div id="notailwind">
                {!! $information->description !!}
            </div>
        </div>
        <div class="flex w-full max-w-screen-xl flex-col gap-4 p-5 2xl:max-w-screen-2xl">
            <div class="flex items-center justify-center gap-10">
                <h6 title="Informasi Lainnya"
                    class="whitespace-nowrap text-xl font-bold text-cstm-blue-900 sm:text-2xl md:text-3xl">
                    Informasi Lainnya
                </h6>
                <div class="h-1 w-full bg-cstm-blue-900"></div>
            </div>
            <div class="grid gap-5 max-sm:mx-5 sm:grid-cols-2 md:grid-cols-3">

                @foreach ($others as $item)
                    <div class="flex aspect-[8/9] flex-col gap-3 rounded-lg p-5 shadow">
                        <div class="aspect-video rounded-lg bg-cover bg-center bg-no-repeat"
                            style="background-image: url('/storage/{{ $item->image }}')">
                        </div>
                        <p title="{{ $item->date }}"
                            class="mr-auto rounded-sm bg-gray-200 px-1.5 text-xs font-semibold sm:text-sm">
                            {{ $item->date }}
                        </p>
                        <p title="{{ $item->name }}" class="line-clamp-2 text-lg font-bold sm:text-xl">
                            {{ $item->name }}
                        </p>
                        <div class="line-clamp-2">
                            {!! $item->description !!}
                        </div>
                        <a title="Selengkapnya"
                            href="{{ route(config('route.landing.information-detail'), ['information' => $item]) }}"
                            class="mt-auto text-cstm-green-900">
                            Selengkapnya >
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</x-layouts.landing>
