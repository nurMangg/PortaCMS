<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'favicon',
        'color',
    ];

    protected $table = 'site_settings';
}
