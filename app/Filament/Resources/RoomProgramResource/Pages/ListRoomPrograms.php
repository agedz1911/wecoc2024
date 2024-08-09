<?php

namespace App\Filament\Resources\RoomProgramResource\Pages;

use App\Filament\Resources\RoomProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoomPrograms extends ListRecords
{
    protected static string $resource = RoomProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
