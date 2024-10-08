<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class EditSite extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-adjustments';

    protected static string $view = 'filament.pages.edit-site';
    protected static ?string $navigationGroup = 'Setting';
    protected static ?int $navigationSort = 52;

}
