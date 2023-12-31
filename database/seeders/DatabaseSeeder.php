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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdministratorSeeder::class,
            UserSeeder::class,
            ChildrenAgeSeeder::class,
            CreativitySeeder::class,
            DesignForChildrenSeeder::class,
            LearnSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            GameSeeder::class,
        ]);
    }
}
