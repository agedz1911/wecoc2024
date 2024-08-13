<?php

namespace App\Livewire\Resources;

use App\Models\AtGlanceProgram;
use App\Models\RoomProgram;
use App\Models\ScheduleSession;
use Livewire\Component;

class Workshop extends Component
{
    public function render()
    {
        $sessions = AtGlanceProgram::all();
        $sesis = ScheduleSession::all();
        $rooms = RoomProgram::all();
        return view('livewire.resources.workshop', [ 'sesis' => $sesis, 'rooms' => $rooms, 'sessions' => $sessions]);
    }
}
