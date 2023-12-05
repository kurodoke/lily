<?php

namespace Database\Seeders;

use App\Models\DesignForChildren;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignForChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DesignForChildren::create([
            'design_name' => 'Kata dan suara'
        ]);
        DesignForChildren::create([
            'design_name' => 'Penggunaan yang mudah'
        ]);
        DesignForChildren::create([
            'design_name' => 'Seni dan animasi'
        ]);
    }
}
