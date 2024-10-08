<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Pages\Actions\ButtonAction;

class EditProfile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.edit-profile'; 

    protected static ?string $navigationGroup = 'Setting';
    protected static ?int $navigationSort = 51;

    public $name;
    public $email;
    public $password;

    public function mount()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Isi form dengan data user
        $this->name = $user->name;
        $this->email = $user->email;
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required()
                ->disabled(),
            
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->disabled(),
            
            Forms\Components\TextInput::make('password')
                ->label('New Password')
                ->password()
                ->minLength(8)
                ->nullable(), // Password opsional
        ];
    }

    public function save()
    {
        $user = User::find(Auth::id());

        // Validasi dan update profil user
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? Hash::make($this->password) : $user->password,
        ]);

        // Berikan notifikasi
        $this->notify('success', 'Profile updated successfully!');
    }

    protected function getActions(): array
    {
        return [
            ButtonAction::make('save')
                ->label('Save Changes')
                ->action('save'),
        ];
    }
}
