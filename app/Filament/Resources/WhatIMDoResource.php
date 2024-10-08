<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatIMDoResource\Pages;
use App\Filament\Resources\WhatIMDoResource\RelationManagers;
use App\Models\WhatIMDo;
use Filament\Forms;
use Filament\Forms\Components\Radio;
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
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('icon')->label('Icon (Font Awesome)')->required(),
                Forms\Components\TextInput::make('description')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\TextColumn::make('description'),
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
