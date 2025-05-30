<?php
namespace App\Filament\Resources\ProgramDayResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ExercisesRelationManager extends RelationManager
{
    // Use the hasMany relationship defined in ProgramDay
    protected static string $relationship = 'programDayExercises';

    protected static ?string $title = 'Exercises';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('exercise_id')
                ->label('Exercise')
                ->relationship('exercise', 'name')
                ->required(),

            Forms\Components\TextInput::make('sets')->numeric()->required(),
            Forms\Components\TextInput::make('reps')->numeric()->required(),
            Forms\Components\TextInput::make('order')->numeric()->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('order')->sortable(),
            Tables\Columns\TextColumn::make('exercise.name')->label('Exercise'),
            Tables\Columns\TextColumn::make('sets'),
            Tables\Columns\TextColumn::make('reps'),
        ])
        ->defaultSort('order')
        ->headerActions([
            Tables\Actions\CreateAction::make(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }
}
