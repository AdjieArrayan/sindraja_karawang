<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuestUserSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GuestUserSeeder::class,
        ]);

        User::updateOrCreate(
            ['username' => 'guest'],
            [
                'name' => 'Guest User',
                'password' => Hash::make('guest123'), // Password default
                'role' => 'guest'
            ]
        );
    }
}
