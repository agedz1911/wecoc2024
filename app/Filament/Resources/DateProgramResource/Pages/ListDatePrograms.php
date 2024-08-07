<?php

namespace App\Filament\Resources\DateProgramResource\Pages;

use App\Filament\Resources\DateProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatePrograms extends ListRecords
{
    protected static string $resource = DateProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
