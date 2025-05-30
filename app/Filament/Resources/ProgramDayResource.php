<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramDayResource\Pages;
use App\Filament\Resources\ProgramDayResource\RelationManagers;
use App\Models\ProgramDay;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramDayResource extends Resource
{
    protected static ?string $model = ProgramDay::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('program_id')
                    ->relationship('program', 'name')
                    ->required(),

                Forms\Components\TextInput::make('day_number')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('title')  // Add this!
                    ->label('Day Title')
                    ->required(),

                Forms\Components\Repeater::make('programDayExercises')
                    ->label('Exercises for this day')
                    ->relationship('programDayExercises') // correct hasMany
                    ->schema([
                        Forms\Components\Select::make('exercise_id')
                            ->label('Exercise')
                            ->relationship('exercise', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('sets')->numeric()->required(),
                        Forms\Components\TextInput::make('reps')->numeric()->required(),
                        Forms\Components\TextInput::make('order')->numeric()->required(),
                    ])
                    ->orderable('order')
                    ->defaultItems(1),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('program.name')->label('Program'),
                    Tables\Columns\TextColumn::make('day_number')->label('Day'),
                    
                    Tables\Columns\TextColumn::make('programDayExercises_count')
                        ->counts('programDayExercises')
                        ->label('Exercises')
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with('program') // optional but good for performance
            ->withCount('programDayExercises'); // 👈 this is required for `programDayExercises_count`
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ExercisesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgramDays::route('/'),
            'create' => Pages\CreateProgramDay::route('/create'),
            'edit' => Pages\EditProgramDay::route('/{record}/edit'),
        ];
    }
}
