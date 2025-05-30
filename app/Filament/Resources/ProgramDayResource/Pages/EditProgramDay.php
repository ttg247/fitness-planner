<?php

namespace App\Filament\Resources\ProgramDayResource\Pages;

use App\Filament\Resources\ProgramDayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramDay extends EditRecord
{
    protected static string $resource = ProgramDayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
