<?php

namespace App\Filament\Resources\ProgramResource\RelationManagers;

use App\Filament\Resources\ProgramDayResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class DaysRelationManager extends RelationManager
{
    protected static string $relationship = 'days'; // this must match Program::days()

    protected static ?string $title = 'Program Days';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Day Title')
                ->required(),

            Forms\Components\TextInput::make('day_number')
                ->label('Day Number')
                ->numeric()
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('day_number')
                    ->label('Day #')
                    ->sortable(),
                Tables\Columns\TextInputColumn::make('title')  // <-- change here
                    ->label('Title'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->url(fn ($record) => ProgramDayResource::getUrl('edit', ['record' => $record])),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
