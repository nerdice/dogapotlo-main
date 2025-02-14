<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'user1',
            'email' => 'testuser1@example.com',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'admin1',
            'email' => 'testadmin1@example.com',
            'role' => 'admin',
            'password' => 'test123!'
        ]);
        User::factory()->count(50)->create();

    }
}
