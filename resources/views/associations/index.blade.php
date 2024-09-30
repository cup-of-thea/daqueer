<x-layout>
    <x-slot:title>Associations</x-slot:title>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 pt-10">
        <div class="mx-auto max-w-2xl lg:mx-0 pt-4">
            <h2 class="mt-2 text-4xl font-bold tracking-tight text-accent sm:text-6xl">
                Les associations
            </h2>
            <p class="mt-6 text-lg leading-8 text-accent/60">
                Retrouve les associations que nous soutenons ensemble au travers de chaque édition.
            </p>
        </div>
    </div>

    <div class="py-24">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-5">
            <ul role="list" class="-mt-12 space-y-12 divide-y divide-gray-200 xl:col-span-3">
                @foreach($associations as $association)

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

</x-layout>

