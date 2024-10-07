<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Profile';
    protected static ?int $navigationSort = 12;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('present')
                    ->label('Currently Studying / Working?')
                    ->reactive()
                    ->columnSpan(2),
                Forms\Components\TextInput::make('institution')->required(),
                Forms\Components\TextInput::make('degree')->required(),
                Forms\Components\DatePicker::make('start_date')->label('Start Date')->format('M Y')->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->format('M Y')
                    ->label('End Date')
                    ->reactive() // Membuatnya dapat bereaksi terhadap perubahan
                    ->disabled(fn (Closure $get) => $get('present')), // Disable jika present == true
                Forms\Components\Textarea::make('description')->required(),
            ]);
    }

    public static function create(): string
    {
        return Education::create([
            'institution' => request('institution'),
            'degree' => request('degree'),
            'start_date' => request('start_date'),
            'end_date' => request('present') ? 'Present' : request('end_date'),
            'description' => request('description'),
        ])->id; 
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('institution'),
                Tables\Columns\TextColumn::make('degree'),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }    
}
