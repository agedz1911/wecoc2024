<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DateProgramResource\Pages;
use App\Filament\Resources\DateProgramResource\RelationManagers;
use App\Models\DateProgram;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DateProgramResource extends Resource
{
    protected static ?string $model = DateProgram::class;
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $modelLabel = 'Date';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date')
                    ->native(false),
                Toggle::make('is_active')->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->dateTime('d M Y'),
                IconColumn::make('is_active')->boolean(),
                TextColumn::make('atglance')
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
            'index' => Pages\ListDatePrograms::route('/'),
            'create' => Pages\CreateDateProgram::route('/create'),
            'edit' => Pages\EditDateProgram::route('/{record}/edit'),
        ];
    }
}
