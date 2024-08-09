<?php

namespace App\Filament\Resources\DateProgramResource\Pages;

use App\Filament\Resources\DateProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDateProgram extends EditRecord
{
    protected static string $resource = DateProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
