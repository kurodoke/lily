<?php

namespace Database\Seeders;

use App\Models\ChildrenAge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChildrenAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChildrenAge::create([
            'age_min' => 3,
            'age_max' => 5,
        ]);

        ChildrenAge::create([
            'age_min' => 6,
            'age_max' => 8,
        ]);

        ChildrenAge::create([
            'age_min' => 9,
            'age_max' => 12,
        ]);
    }
}
