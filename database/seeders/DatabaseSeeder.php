<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]);

        $this->call(CategorySeeder::class);
        // $this->call(PostSeeder::class);
        $this->call(UserSeeder::class);
    }
}
