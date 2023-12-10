<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'Aksi'
        ]);
        Category::create([
            'category_name' => 'Petualangan'
        ]);
        Category::create([
            'category_name' => 'Teka - Teki'
        ]);
        Category::create([
            'category_name' => 'Arkade'
        ]);
        Category::create([
            'category_name' => 'Papan'
        ]);
        Category::create([
            'category_name' => 'Kartu'
        ]);
        Category::create([
            'category_name' => 'Kasual'
        ]);
        Category::create([
            'category_name' => 'Edukasi'
        ]);
        Category::create([
            'category_name' => 'Musik'
        ]);
        Category::create([
            'category_name' => 'Balapan'
        ]);
        Category::create([
            'category_name' => 'Simulasi'
        ]);
        Category::create([
            'category_name' => 'Olahraga'
        ]);
        Category::create([
            'category_name' => 'Strategi'
        ]);
        Category::create([
            'category_name' => 'Kata-Kata'
        ]);
    }
}
