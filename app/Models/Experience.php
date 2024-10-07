<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'exp_id',
        'company',
        'position',
        'start_date',
        'end_date',
        'description',
    ];

    protected $table = 'experience';
}
