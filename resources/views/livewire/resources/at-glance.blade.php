<div>
    {{-- @foreach ($programs as $program)
        <p>{{ $program->date }}</p>
        <p>{{ $program->date }}</p>
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
    @endforeach --}}
    

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
