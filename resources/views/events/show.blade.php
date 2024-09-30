<x-layout>
    <x-slot:title>{!! $edition->title !!}</x-slot:title>
    <div class="relative isolate overflow-hidden from-indigo-100/20">
        <div class="mx-auto max-w-7xl pb-24 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="px-6 lg:px-0 lg:pt-4">
                <div class="mx-auto max-w-2xl">
                    <div class="max-w-lg">

                        <h1 class="mt-10 text-4xl font-bold tracking-tight text-accent sm:text-6xl">
                            {{ $edition->title }}
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-accent/60">
                            {{ $edition->description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-16 md:mx-auto md:max-w-2xl lg:mx-0">
                <div class="shadow-lg rounded-3xl">
                    <div class="bg-indigo-500 [clip-path:inset(0)] md:[clip-path:inset(0_round_theme(borderRadius.3xl))]">
                        <iframe class="w-full aspect-video"
                                src="{{ $edition->video }}&rel=0"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="assoc" class="py-24">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-5">
            <div class="max-w-2xl xl:col-span-2">
                <h2 class="text-3xl font-bold tracking-tight text-accent sm:text-4xl">
                    @if($edition->associations->count() > 1)
                        Les associations soutenues
                    @else
                        L'association soutenue
                    @endif
                </h2>
                <p class="mt-6 text-lg leading-8 text-accent/60">
                    Les valeurs que nous soutenons et partageons avec vous pour cette édition.
                </p>
            </div>
            <ul role="list" class="-mt-12 space-y-12 divide-y divide-gray-200 xl:col-span-3">
                @foreach($edition->associations as $association)

                    <li class="flex flex-col gap-10 pt-12 sm:flex-row">
                        <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover"
                             src="/storage/{{ $association->image }}"
                             alt="">
                        <div class="max-w-xl flex-auto">
                            <h3 class="text-lg font-semibold leading-8 tracking-tight text-accent">
                                {{ $association->name }}
                            </h3>
                            <p class="mt-6 text-base leading-7 text-accent/60">
                                {{ $association->description }}
                            </p>
                            <ul role="list" class="mt-6 flex gap-x-6">
                                @foreach($association->links as $link)

                                    <li>
                                        <a href="{{ $link->url }}" class="text-gray-400 hover:text-gray-300">
                                            <span class="sr-only">{{ $link->type }}</span>
                                            <x-icon :name="config('domain.links.icons.'.$link->type)" class="w-6 h-6"/>
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

    <div class="py-24">
        <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 id="lineup" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">La lineup</h2>
                <p class="mt-4 text-lg leading-8 text-gray-400">
                    Les invité·es de cette édition
                </p>
            </div>
            <ul role="list"
                class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">

                @foreach($edition->guests as $guest)

                    <li class="rounded-2xl bg-secondary px-8 py-10">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56"
                             src="/storage/{{ $guest->image }}"
                             alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-white">
                            {{ $guest->name }}
                        </h3>
                        <p class="text-sm leading-6 text-gray-400">
                            {{ '@' . $guest->handle }}
                        </p>
                        <ul role="list" class="mt-6 flex flex-wrap justify-center gap-6">
                            @foreach($guest->links as $link)

                                <li>
                                    <a href="{{ $link->url }}" class="text-gray-400 hover:text-gray-300">
                                        <span class="sr-only">{{ $link->type }}</span>
                                        <x-icon :name="config('domain.links.icons.'.$link->type)" class="w-6 h-6"/>
                                    </a>
                                </li>

                            @endforeach

                        </ul>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

</x-layout>

