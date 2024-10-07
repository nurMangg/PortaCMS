<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-badge-check';
    protected static ?string $navigationGroup = 'Profile';
    protected static ?int $navigationSort = 13;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Toggle::make('present')
                ->label('Currently Working?')
                ->reactive()
                ->columnSpan(2),
            Forms\Components\TextInput::make('company')->required(),
            Forms\Components\TextInput::make('position')->required(),
            Forms\Components\DatePicker::make('start_date')->label('Start Date')->format('M Y')->required(),
            Forms\Components\DatePicker::make('end_date')
                ->format('M Y')
                ->label('End Date')
                ->reactive() // Membuatnya dapat bereaksi terhadap perubahan
                ->disabled(fn (Closure $get) => $get('present')), // Disable jika present == true
            Forms\Components\Textarea::make('description')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('start_date'),
                Tables\Columns\TextColumn::make('end_date'),
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }    
}
