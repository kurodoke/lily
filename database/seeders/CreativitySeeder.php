<?php

namespace Database\Seeders;

use App\Models\Creativity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreativitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Creativity::create([
            'creativity_name' => 'Kreatifitas'
        ]);
        Creativity::create([
            'creativity_name' => 'Imaginasi'
        ]);
        Creativity::create([
            'creativity_name' => 'Pura-pura bermain'
        ]);
        Creativity::create([
            'creativity_name' => 'Memicu keingintahuan'
        ]);
        Creativity::create([
            'creativity_name' => 'Berpikir kritis'
        ]);
        Creativity::create([
            'creativity_name' => 'Inovatif'
        ]);
    }
}
