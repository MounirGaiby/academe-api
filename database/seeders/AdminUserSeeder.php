<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => env('DEFAULT_ADMIN_NAME', 'Admin'),
            'email' => env('DEFAULT_ADMIN_EMAIL', 'admin@university.edu'),
            'password' => Hash::make(env('DEFAULT_ADMIN_PASSWORD', 'password')),
            'role' => 'admin'
        ]);
    }
}
