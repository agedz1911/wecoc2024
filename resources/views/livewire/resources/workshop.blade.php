<div>

    @if (count($rooms) > 0)
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 1 }" class=" w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">25
                            October</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">26
                            October</button>
                        {{-- <button x-on:click="openTab = 3" :class="{ 'bg-primary-600 text-white': openTab === 3 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">28
                        October</button> --}}
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                            @foreach ($rooms as $room)
                                @if ($room->sesi == 'Workshop')
                                    <div class="px-5 rounded-xl bg-base-100 w-full shadow-md">
                                        <p class="text-lg font-bold text-center text-primary-600">{{ $room->name }}
                                        </p>
                                        @foreach ($room->session as $session)
                                            @if ($session->date == '2024-10-25')
                                                <div class="">
                                                    <h2 class="card-title text-primary-700">
                                                        {{ $session->session }}
                                                    </h2>
                                                    <p>{{ \Carbon\Carbon::parse($session->timeStart)->format('H.i') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}
                                                    </p>
                                                    <div class="overflow-x-auto">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th>Time</th>
                                                                    <th>Title</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($session->atglance as $atglance)
                                                                    <tr class="even:bg-green-100">
                                                                        <td>{{ $atglance->time }}</td>
                                                                        <td>
                                                                            {{ $atglance->topic }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $atglance->speaker }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="divider"></div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                            @foreach ($rooms as $room)
                                @if ($room->sesi == 'Workshop')
                                    <div class="px-5 rounded-xl bg-base-100 w-full shadow-md">
                                        <p class="text-lg font-bold text-center text-primary-600">{{ $room->name }}
                                        </p>
                                        @foreach ($room->session as $session)
                                            @if ($session->date == '2024-10-26')
                                                <div class="">
                                                    <h2 class="card-title text-primary-700">
                                                        {{ $session->session }}
                                                    </h2>
                                                    <p>{{ \Carbon\Carbon::parse($session->timeStart)->format('H.i') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}
                                                    </p>
                                                    <div class="overflow-x-auto">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th>Time</th>
                                                                    <th>Title</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($session->atglance as $atglance)
                                                                    <tr class="even:bg-green-100">
                                                                        <td>{{ $atglance->time }}</td>
                                                                        <td>
                                                                            {{ $atglance->topic }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $atglance->speaker }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="divider"></div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                        ke tiga
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="h-96">

            <div class="flex flex-col items-center justify-center h-full">
                <h1 class="text-4xl text-gray-400">Coming soon</h1>
            </div>
        </div>
    @endif
</div>
