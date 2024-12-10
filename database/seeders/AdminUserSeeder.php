<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminUsers = [
            ['name' => 'Rayan', 'email' => 'rayan@360dayz.com', 'password' => Hash::make('R@y@N2007$')],
            ['name' => 'Rlagmouch', 'email' => 'rlagmouch7@gmail.com', 'password' => Hash::make('R@y@N2007$')],
        ];

        foreach ($adminUsers as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
