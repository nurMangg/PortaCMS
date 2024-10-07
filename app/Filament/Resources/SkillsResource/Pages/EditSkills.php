<?php

namespace App\Filament\Resources\SkillsResource\Pages;

use App\Filament\Resources\SkillsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkills extends EditRecord
{
    protected static string $resource = SkillsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
