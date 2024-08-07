<div>
    @foreach ($programs as $program)
        <p>{{ $program->date }}</p>
        <p>{{ $program->date }}</p>
        {{-- <p>{{ $program->atglance }}</p> --}}
        <p>
            @foreach ($program->atglance as $item)
                {{ $item->session }}
                {{ $item->room }}
            @endforeach
        </p>
    @endforeach

    @foreach ($rooms as $room)
        <p>{{$room->name}}</p>
        <p>{{$room->atglance}}</p>
    @endforeach
    {{-- <div class="flex items-center justify-center">
        <div x-data="{ openTab: 1 }" class="lg:w-3/4 w-full mx-auto">
            <div class="">
                <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">25
                        October</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">26
                        October</button>
                    
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    sdjfsdjfj

                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    ksdflsdjf
                </div>

                <div x-show="openTab === 3"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    sdfdsf
                </div>
            </div>
        </div>
    </div> --}}

    @if (count($atglances) > 0)
        @foreach ($atglances as $atglance)
            <div class="card card-compact w-full bg-slate-50 rounded-lg shadow-xl">
                <figure>
                    @if ($atglance->getMedia('at_glances')->first())
                        <img src="{{ $atglance->getMedia('at_glances')->first()->getUrl() }}" alt=""
                            class="rounded-lg" />
                    @endif
                </figure>
                <div class="card-body">
                    <div class="card-actions justify-start">
                        <button class="btn btn-primary btn-lg px-14"><i class="fa-regular fa-file-pdf"></i>
                            Download</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="h-96">

            <div class="flex flex-col items-center justify-center h-full">
                <h1 class="text-4xl text-gray-400">Coming soon</h1>
            </div>
        </div>
    @endif

</div>
