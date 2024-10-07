<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatIMDoResource\Pages;
use App\Filament\Resources\WhatIMDoResource\RelationManagers;
use App\Models\WhatIMDo;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WhatIMDoResource extends Resource
{
    protected static ?string $model = WhatIMDo::class;
    protected static ?string $navigationLabel = 'What I Do';


    protected static ?string $navigationIcon = 'heroicon-o-chip';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWhatIMDos::route('/'),
            'create' => Pages\CreateWhatIMDo::route('/create'),
            'edit' => Pages\EditWhatIMDo::route('/{record}/edit'),
        ];
    }    
}
