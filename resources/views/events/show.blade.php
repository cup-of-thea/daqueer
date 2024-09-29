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

    <div class="bg-main py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 id="lineup" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Lineup</h2>
                <p class="mt-4 text-lg leading-8 text-gray-400"></p>
            </div>
            <ul role="list"
                class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                <li class="rounded-2xl bg-secondary px-8 py-10">
                    <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56"
                         src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                         alt="">
                    <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-white">
                        Nikiunderscore
                    </h3>
                    <ul role="list" class="mt-6 flex justify-center gap-x-6">
                        <li>
                            <a href="#" class="text-gray-400 hover:text-gray-300">
                                <span class="sr-only">X</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 hover:text-gray-300">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- More people... -->
            </ul>
        </div>
    </div>

</x-layout>

