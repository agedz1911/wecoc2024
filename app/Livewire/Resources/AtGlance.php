<?php

namespace App\Livewire\Resources;

use App\Models\AtGlance as ModelsAtGlance;
use App\Models\AtGlanceProgram;
use App\Models\DateProgram;
use App\Models\RoomProgram;
use Livewire\Component;

class AtGlance extends Component
{
    public function render()
    {
        $atglances = ModelsAtGlance::all();
        // $programs = DateProgram::all();
        // $rooms = RoomProgram::all();
        return view('livewire.resources.at-glance', ['atglances' => $atglances]);
    }
}
