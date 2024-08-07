<?php

namespace App\Filament\Resources\AtGlanceProgramResource\Pages;

use App\Filament\Resources\AtGlanceProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAtGlancePrograms extends ListRecords
{
    protected static string $resource = AtGlanceProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
