<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    protected $fillable = ['name', 'email', 'password']; // Allow mass assignment for these fields.

    public function canAccessPanel(Panel $panel): bool
    {
        // Hardcoded allowed emails
        $allowedEmails = ['rayan@360dayz.com', 'rlagmouch7@gmail.com'];
        return in_array($this->email, $allowedEmails);
    }

}
