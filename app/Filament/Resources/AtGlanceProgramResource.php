<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AtGlanceProgramResource\Pages;
use App\Filament\Resources\AtGlanceProgramResource\RelationManagers;
use App\Models\AtGlanceProgram;
use App\Models\DateProgram;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AtGlanceProgramResource extends Resource
{
    protected static ?string $model = AtGlanceProgram::class;
    protected static ?string $navigationGroup = 'Program at glance';
    protected static ?string $modelLabel = 'Program at glance';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('session_id')
                    ->preload()
                    ->relationship('session', 'session'),
                Select::make('room_id')
                    ->native(false)
                    ->preload()
                    ->relationship('roomProgram', 'name'),
                TextInput::make('time'),
                TextInput::make('topic'),
                TextInput::make('speaker'),
                Textarea::make('notes'),
                TextInput::make('desc')
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('roomProgram.name'),
                TextColumn::make('time'),
                TextColumn::make('session'),
                TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAtGlancePrograms::route('/'),
            'create' => Pages\CreateAtGlanceProgram::route('/create'),
            'edit' => Pages\EditAtGlanceProgram::route('/{record}/edit'),
        ];
    }
}
