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
            'age_max' => 6,
        ]);

        ChildrenAge::create([
            'age_min' => 7,
            'age_max' => 9,
        ]);

        ChildrenAge::create([
            'age_min' => 10,
            'age_max' => 12,
        ]);
    }
}
