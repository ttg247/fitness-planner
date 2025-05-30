<?php

namespace App\Filament\Resources\ProgramDayResource\Pages;

use App\Filament\Resources\ProgramDayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramDays extends ListRecords
{
    protected static string $resource = ProgramDayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
