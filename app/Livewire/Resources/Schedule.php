<?php

namespace App\Livewire\Resources;

use App\Models\AtGlanceProgram;
use App\Models\RoomProgram;
use App\Models\ScheduleSession;
use App\Models\ScientificSchedule;
use Livewire\Component;

class Schedule extends Component
{
        public function render()
        {
            // $schedules = ScientificSchedule::all();
            // return view('livewire.resources.schedule', [ 'schedules' => $schedules]);
            $sesis = AtGlanceProgram::all();
            $sessions = ScheduleSession::all();
            $rooms = RoomProgram::all();
            return view('livewire.resources.schedule', [ 'sesis' => $sesis, 'rooms' => $rooms, 'sessions' => $sessions]);
        }
}
