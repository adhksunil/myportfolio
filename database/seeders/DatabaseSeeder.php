<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
    {
        // Check if the user already exists
        $user = User::where('email', 'admin@gmail.com')->first();

        if (!$user) {
            // Create the user if they don't exist
            User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Replace with your password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
