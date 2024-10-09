<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use App\Models\Profile;
use Filament\Pages\Actions\ButtonAction;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;



class Profiles extends Page
{
    protected static string $view = 'filament.pages.profiles';
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Profile';
    protected static ?string $slug = 'profile';
    protected static ?string $title = 'Profile';
    protected static ?string $navigationGroup = 'Profile';

    public $name;
    public $spesific_skill;
    public $birth_date;
    public $email;
    public $phone;
    public $address;
    public $facebook_url;
    public $instagram_url;
    public $twitter_url;
    public $linkedin_url;
    public $github_url;
    public $youtube_url;
    public $profile_image;
    public $description;

    public function mount(): void
    {
        $profile = Profile::firstOrCreate([]);
        // dd($profile->toArray()); // Check this before filling the form
        $this->fill($profile->toArray());
    }
    

    protected function getFormSchema(): array
{
    return [
        Forms\Components\TextInput::make('name')->required(),
        Forms\Components\TextInput::make('spesific_skill')->required(),
        Forms\Components\DatePicker::make('birth_date')->required(),
        Forms\Components\TextInput::make('email')->email()->required(),
        Forms\Components\TextInput::make('phone')->required(),
        Forms\Components\Textarea::make('address')->required(),
        Forms\Components\TextInput::make('facebook_url')->url(),
        Forms\Components\TextInput::make('instagram_url')->url(),
        Forms\Components\TextInput::make('twitter_url')->url(),
        Forms\Components\TextInput::make('linkedin_url')->url(),
        Forms\Components\TextInput::make('github_url')->url(),
        Forms\Components\TextInput::make('youtube_url')->url(),
        SpatieMediaLibraryFileUpload::make('profile_image')
        ->required() // Pastikan field ini wajib jika diinginkan
        ->label('Profile Image'), // Label untuk field
    
        Forms\Components\Textarea::make('description')->required(),
    ];
}



public function save(): void
{
    $profile = Profile::first();

    // Update fields lainnya
    $profile->update([
        'name' => $this->name,
        'spesific_skill' => $this->spesific_skill,
        'birth_date' => $this->birth_date,
        'email' => $this->email,
        'phone' => $this->phone,
        'address' => $this->address,
        'facebook_url' => $this->facebook_url,
        'instagram_url' => $this->instagram_url,
        'twitter_url' => $this->twitter_url,
        'linkedin_url' => $this->linkedin_url,
        'github_url' => $this->github_url,
        'youtube_url' => $this->youtube_url,
        'description' => $this->description,
    ]);

    if (isset($this->profile_image) && is_array($this->profile_image)) {
        // Hapus gambar lama jika ada
        $profile->clearMediaCollection('profile_images');

        // Loop melalui file yang di-upload
        foreach ($this->profile_image as $file) {
            // Tambahkan file ke koleksi media
            $media = $profile->addMedia($file->getRealPath()) // Dapatkan path asli file
                ->usingName($file->getClientOriginalName()) // Simpan dengan nama asli
                ->toMediaCollection('profile_images');
            
        }
    }


    $this->notify('success', 'Profile updated successfully!');
}




    public static function canCreate(): bool
    {
        return false; // Nonaktifkan tombol Create
    }

    protected function getActions(): array
    {
        return [
            ButtonAction::make('Save')
                ->label('Save Changes')
                ->action('save'),
        ];
    }
}
