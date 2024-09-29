<div class="bg-white">
    @if($this->edition)
        <div class="relative isolate overflow-hidden from-indigo-100/20">
            <div class="mx-auto max-w-7xl pb-24 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="px-6 lg:px-0 lg:pt-4">
                    <div class="mx-auto max-w-2xl">
                        <div class="max-w-lg">
                            <div class="mt-12">
                                <a href="{{ route('events.incoming') }}"
                                   class="space-y-4 md:space-x-6 md:space-y-0 md:inline-flex">
                                    <div class="w-fit rounded-full bg-indigo-600/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-600/10">
                                        Prochain event
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600 ml-1 md:ml-0">
                                        <p>{{ $this->edition->period }}</p>
                                        <x-icons.chevron-right/>
                                    </div>
                                </a>
                            </div>
                            <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                {{ $this->edition->title }}
                            </h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600">
                                {{ $this->edition->description }}
                            </p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('events.incoming') }}#lineup"
                                   class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    La lineup
                                </a>
                                <a href="{{ route('events.incoming') }}#assoc"
                                   class="text-sm font-semibold leading-6 text-gray-900">
                                    Les associations <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-20 sm:mt-24 lg:mt-36 md:mx-auto md:max-w-2xl lg:mx-0">
                    <div class="shadow-lg rounded-3xl">
                        <div class="bg-indigo-500 [clip-path:inset(0)] md:[clip-path:inset(0_round_theme(borderRadius.3xl))]">
                            <iframe class="w-full aspect-video"
                                    src="{{ $this->edition->video }}&rel=0"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
        </div>
    @endif
</div>

