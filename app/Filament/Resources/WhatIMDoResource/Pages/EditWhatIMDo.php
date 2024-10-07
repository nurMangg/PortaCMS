<?php

namespace App\Filament\Resources\WhatIMDoResource\Pages;

use App\Filament\Resources\WhatIMDoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhatIMDo extends EditRecord
{
    protected static string $resource = WhatIMDoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
