<?php

namespace App\Filament\Resources\WhatIMDoResource\Pages;

use App\Filament\Resources\WhatIMDoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhatIMDos extends ListRecords
{
    protected static string $resource = WhatIMDoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
