<x-layouts.landing title="Detail Informasi | {{ config('app.name') }}">

    <div class="flex min-h-screen flex-col items-center justify-center">
        <div class="flex w-full max-w-screen-xl flex-col gap-3 px-5 pb-10 pt-40 text-justify 2xl:max-w-screen-2xl">
            <div class="aspect-[2/1] w-full rounded-lg bg-cover bg-center bg-no-repeat"
                style="background-image: url('/images/landing/hero.jpg')">
            </div>
            <h6 class="text-3xl font-bold">
                Judul Informasi
            </h6>
            <p class="text-sm text-gray-500">
                20 April 2025
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, laboriosam? Quibusdam repellendus
                reprehenderit totam dolorem dolorum impedit harum, ad in a amet voluptates ipsam debitis ullam quia ex
                nemo molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatem error
                dolorem assumenda consectetur quis maxime obcaecati, veritatis, earum nam magni explicabo molestias est
                eaque autem quod laudantium saepe nesciunt.
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, laboriosam? Quibusdam repellendus
                reprehenderit totam dolorem dolorum impedit harum, ad in a amet voluptates ipsam debitis ullam quia ex
                nemo molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatem error
                dolorem assumenda consectetur quis maxime obcaecati, veritatis, earum nam magni explicabo molestias est
                eaque autem quod laudantium saepe nesciunt.
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, laboriosam? Quibusdam repellendus
                reprehenderit totam dolorem dolorum impedit harum, ad in a amet voluptates ipsam debitis ullam quia ex
                nemo molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatem error
                dolorem assumenda consectetur quis maxime obcaecati, veritatis, earum nam magni explicabo molestias est
                eaque autem quod laudantium saepe nesciunt.
            </p>
        </div>
        <div class="flex w-full max-w-screen-xl flex-col gap-3 p-5 2xl:max-w-screen-2xl">
            <div class="flex items-center justify-center gap-10">
                <h6 class="whitespace-nowrap text-3xl font-bold text-cstm-blue-900">
                    Informasi Lainnya
                </h6>
                <div class="h-1 w-full bg-cstm-blue-900"></div>
            </div>
            <div class="grid grid-cols-3 gap-5">

                @for ($i = 0; $i < 3; $i++)
                    <div class="flex aspect-[8/9] flex-col gap-3 rounded-lg p-5 shadow">
                        <div class="aspect-video rounded-lg bg-pink-300"></div>
                        <p class="mr-auto rounded-sm bg-gray-200 px-1.5 text-sm font-semibold">
                            20 April 2025
                        </p>
                        <p class="line-clamp-2 text-xl font-bold">
                            Informasi Lainnya
                        </p>
                        <p class="line-clamp-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vitae, deserunt quod maxime
                            sint fuga! Quas iusto provident corrupti laudantium! Adipisci vel inventore reiciendis
                            eligendi id veniam, voluptates dolorem voluptatem?
                        </p>
                        <a href="" class="mt-auto text-cstm-green-900">
                            Selengkapnya >
                        </a>
                    </div>
                @endfor

            </div>
        </div>
    </div>

</x-layouts.landing>
