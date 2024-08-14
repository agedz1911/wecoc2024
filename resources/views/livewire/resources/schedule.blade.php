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
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 ">
                            @foreach ($rooms as $room)
                                @if ($room->sesi == 'Symposium')
                                    <div class="px-5 rounded-xl bg-base-100 w-full shadow-md">
                                        <p class="text-lg font-bold text-center text-primary-600">{{ $room->name }}
                                        </p>
                                        @foreach ($room->session as $session)
                                            @if ($session->date == '2024-10-25')
                                                <div class="">
                                                    <p>{{ \Carbon\Carbon::parse($session->timeStart)->format('H.i') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}
                                                    </p>
                                                    <h2 class="card-title text-primary-700">
                                                        {{ $session->session }}
                                                    </h2>
                                                    @if ($session->session != 'Coffee Break')
                                                        <p class="text-base font-bold">Moderator:
                                                            {{ $session->moderator }}</p>
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
                                                    @endif
                                                </div>
                                                <div class="divider"></div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- <div class="overflow-x-auto ">
                        <table class="table">
                            <thead class="text-base font-semibold  text-primary-800 ">
                                <tr>
                                    @foreach ($rooms as $room)
@if ($room->sesi == 'Symposium')
<th class="text-center">{{ $room->name }}</th>
@endif
@endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($rooms as $room)
<td>
                                        @foreach ($room->session as $session)
@if ($session->date == '2024-10-25' && str_contains(strtolower($session->session), 'symposium'))
<div class="card card-compact w-full shadow-md mb-1">
                                            <div class="card-body">
                                                <p class="font-semibold">
                                                    {{ \Carbon\Carbon::parse($session->timeStart)->format('H.i') }} -
                                                    {{ \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}
                                                </p>
                                                <h2 class="card-title text-primary-700">{{ $session->session }}</h2>
                                                @if ($session->session != 'Coffee Break')
<p class="text-base font-bold">Moderator: {{ $session->moderator }}</p>
                                                <div class="">
                                                    <table class="table ">
                                                        <tr>
                                                            <th class="w-1/12">Time</th>
                                                            <th>Title</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                        @foreach ($session->atglance as $atglance)
<tr class=" even:bg-green-100">
                                                            <td>{{ $atglance->time }}</td>
                                                            <td>
                                                                {{ $atglance->topic }}
                                                            </td>
                                                            <td>
                                                                {{ $atglance->speaker }}
                                                            </td>
                                                        </tr>
@endforeach
                                                    </table>
                                                </div>
@endif
                                            </div>
                                        </div>
@endif
@endforeach
                                    </td>
@endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div> -->

                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 content-start">
                            @foreach ($rooms as $room)
                                @if ($room->sesi == 'Symposium')
                                    <div class="px-5 rounded-xl bg-base-100 w-full shadow-xl">
                                        <p class="text-lg font-bold text-center text-primary-600">{{ $room->name }}
                                        </p>
                                        @foreach ($room->session as $session)
                                            @if ($session->date == '2024-10-26')
                                                <div class="">
                                                    <p>{{ \Carbon\Carbon::parse($session->timeStart)->format('H.i') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}
                                                    </p>
                                                    <h2 class="card-title text-primary-700">
                                                        {{ $session->session }}
                                                    </h2>
                                                    @if ($session->session != 'Coffee Break')
                                                        <p class="text-base font-bold">Moderator:
                                                            {{ $session->moderator }}</p>
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
                                                    @endif
                                                </div>
                                                <div class="divider"></div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- <div class="overflow-x-auto ">
                        <table class="table">
                            <thead class="text-base font-semibold  text-primary-800 ">
                                <tr>
                                    @foreach ($rooms as $room)
@if ($room->sesi == 'Symposium')
<th class="text-center">{{ $room->name }}</th>
@endif
@endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($rooms as $room)
<td>
                                        @foreach ($room->session as $session)
@if ($session->date == '2024-10-26' && str_contains(strtolower($session->session), 'symposium'))
<div class="card card-compact bg-base-100 w-full  shadow-md mb-1">
                                            <div class="card-body">
                                                <p class="font-semibold">
                                                    {{ \Carbon\Carbon::parse($session->timeStart)->format('H.i') }} -
                                                    {{ \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}
                                                </p>
                                                <h2 class="card-title text-primary-700">{{ $session->session }}</h2>
                                                @if ($session->session != 'Coffee Break')
<p class="text-base font-bold">Moderator: {{ $session->moderator }}</p>
                                                <div class="">
                                                    <table class="table ">
                                                        <tr>
                                                            <th class="w-1/12">Time</th>
                                                            <th>Title</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                        @foreach ($session->atglance as $atglance)
<tr class=" even:bg-green-100">
                                                            <td>{{ $atglance->time }}</td>
                                                            <td>
                                                                {{ $atglance->topic }}
                                                            </td>
                                                            <td>
                                                                {{ $atglance->speaker }}
                                                            </td>
                                                        </tr>
@endforeach
                                                    </table>
                                                </div>
@endif
                                            </div>
                                        </div>
@endif
@endforeach
                                    </td>
@endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
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
{{-- <div class="items-center justify-center">
    <div x-data="{ openTab: 1 }" class="p-5">
        <div class="lg:w-3/4 w-full mx-auto">
            <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                @foreach ($sesis as $sesi)
                <button x-on:click="openTab = {{$loop->iteration}}"
:class="{ 'bg-primary-600 text-white': openTab === {{$loop->iteration}} }"
class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">
{{\Carbon\Carbon::parse($sesi->date)->format('d F')}}</button>
@endforeach

</div>
@foreach ($sesis as $sesi)
<div x-show="openTab === {{ $loop->iteration }}"
    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
    <div class="overflow-x-auto">
        <table class="table">

            <thead>
                <tr class="text-base font-semibold mb-2 text-primary-800">
                    <th class="w-1/12">{{
                                    \Carbon\Carbon::parse($sesi->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($sesi->timeEnd)->format('H.i') }}</th>
                    <th colspan="3">{{ $sesi->session }} <br> Room: {{
                                    $sesi->room }} <br>
                        Moderator: {{ $sesi->moderator->name }} ({{ $sesi->moderator->country }})
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100 font-semibold">
                    <th>Time</th>
                    <td>Topics</td>
                    <td>Speaker</td>
                    <td>Country</td>
                </tr>

                @foreach ($sesi->schedule as $schedule)
                <tr>
                    <th>{{ \Carbon\Carbon::parse($schedule->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($schedule->timeEnd)->format('H.i') }}</th>
                    <td>{{ $schedule->topic }}</td>
                    <td>{{ $schedule->faculty->name }}</td>
                    <td>{{ $schedule->faculty->country }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endforeach

</div>
</div>
</div> --}}
{{-- <div class="items-center justify-center">
    <div x-data="{ openTab: 1 }" class="p-5">
        <div class="lg:w-3/4 w-full mx-auto">
            <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                @foreach ($schedules->pluck('session')->unique('date')->sortBy('date') as $session)
                <button x-on:click="openTab = {{$loop->iteration}}"
:class="{ 'bg-primary-600 text-white': openTab === {{$loop->iteration}} }"
class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">
{{\Carbon\Carbon::parse($session->date)->format('d F')}}</button>
@endforeach

</div>
@foreach ($schedules->pluck('session')->unique('date')->sortBy('date') as $session)
<div x-show="openTab === {{ $loop->iteration }}"
    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
    <div class="overflow-x-auto">
        <table class="table">

            <thead>
                <tr class="text-base font-semibold mb-2 text-primary-800">
                    <th class="w-1/12">{{
                                    \Carbon\Carbon::parse($session->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}</th>
                    <th colspan="3">{{ $session->session }} <br> Room: {{
                                    $session->room }} <br>
                        Moderator: {{ $session->moderator->name }} ({{ $session->moderator->country }})
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100 font-semibold">
                    <th>Time</th>
                    <td>Topics</td>
                    <td>Speaker</td>
                    <td>Country</td>
                </tr>

                @foreach ($session->schedule as $schedule)
                <tr>
                    <th>{{ \Carbon\Carbon::parse($schedule->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($schedule->timeEnd)->format('H.i') }}</th>
                    <td>{{ $schedule->topic }}</td>
                    <td>{{ $schedule->faculty->name }}</td>
                    <td>{{ $schedule->faculty->country }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endforeach

</div>
</div>
</div> --}}
