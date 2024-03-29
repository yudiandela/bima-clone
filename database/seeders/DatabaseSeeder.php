<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Assessor',
            'email' => 'assessor@mail.com',
            'role' => 'assessor',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'role' => 'pengaju',
        ]);
    }
}
