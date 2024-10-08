<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Profile extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'name',
        'spesific_skill',
        'birth_date',
        'email',
        'phone',
        'address',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'linkedin_url',
        'github_url',
        'youtube_url',
        'profile_image',
        'description',
    ];

    protected $table = "profile";
    // protected $casts = [
    //     'profile_image' => 'array',
    // ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile_images')->singleFile();
    }
    
}
