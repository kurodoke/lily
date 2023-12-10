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
            'creativity_name' => 'Mendorong Kreatifitas'
        ]);
        Creativity::create([
            'creativity_name' => 'Memicu Imaginasi'
        ]);
        Creativity::create([
            'creativity_name' => 'Menyebabkan Keingintahuan'
        ]);
        Creativity::create([
            'creativity_name' => 'Melatih Berpikir Kritis'
        ]);
        Creativity::create([
            'creativity_name' => 'Mendorong Berpikir Inovatif'
        ]);
    }
}
