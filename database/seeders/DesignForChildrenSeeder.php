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
            'design_name' => 'Game dengan Kata dan Suara'
        ]);
        DesignForChildren::create([
            'design_name' => 'Game yang Penggunaannya mudah'
        ]);
        DesignForChildren::create([
            'design_name' => 'Game dengan Seni dan Animasi'
        ]);
    }
}
