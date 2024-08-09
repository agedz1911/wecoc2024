<?php

namespace App\Filament\Resources\RoomProgramResource\Pages;

use App\Filament\Resources\RoomProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoomProgram extends EditRecord
{
    protected static string $resource = RoomProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
