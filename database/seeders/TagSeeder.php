<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'tag_name' => 'Tantangan'
        ]);
        Tag::create([
            'tag_name' => 'Sepak Bola'
        ]);
        Tag::create([
            'tag_name' => 'Realistis'
        ]);
        Tag::create([
            'tag_name' => 'Logika'
        ]);
        Tag::create([
            'tag_name' => 'Offline'
        ]);
        Tag::create([
            'tag_name' => 'Single-Player'
        ]);
        Tag::create([
            'tag_name' => 'Online'
        ]);
        Tag::create([
            'tag_name' => 'Multi-Player'
        ]);
        Tag::create([
            'tag_name' => 'Kompetitif'
        ]);
        Tag::create([
            'tag_name' => 'Kooperatif'
        ]);
        Tag::create([
            'tag_name' => 'Abstrak'
        ]);
        Tag::create([
            'tag_name' => 'Peliharaan'
        ]);
        Tag::create([
            'tag_name' => 'Simulasi Kendaraan'
        ]);
        Tag::create([
            'tag_name' => 'Restoran'
        ]);
        Tag::create([
            'tag_name' => 'Kartun'
        ]);
        Tag::create([
            'tag_name' => 'Jig-Saw'
        ]);
        Tag::create([
            'tag_name' => 'Menggambar'
        ]);
    }
}
