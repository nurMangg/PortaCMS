<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatIMDo extends Model
{
    use HasFactory;

    protected $table = 'what_i_do';

    protected $fillable = [
        'title',
        'description',
        'icon'
    ];
}
