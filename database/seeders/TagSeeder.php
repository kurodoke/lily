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
            'tag_name' => 'Arcade'
        ]);
        Tag::create([
            'tag_name' => 'Teka - Teki'
        ]);
        Tag::create([
            'tag_name' => 'Logika'
        ]);
        Tag::create([
            'tag_name' => 'Offline'
        ]);
        Tag::create([
            'tag_name' => 'Pemain Tunggal'
        ]);
        Tag::create([
            'tag_name' => 'Online'
        ]);
        Tag::create([
            'tag_name' => 'Multi Pemain'
        ]);
        Tag::create([
            'tag_name' => 'Bergaya'
        ]);
        Tag::create([
            'tag_name' => 'Premium'
        ]);
        Tag::create([
            'tag_name' => 'Pembelajaran'
        ]);
        Tag::create([
            'tag_name' => 'Simulasi'
        ]);
        Tag::create([
            'tag_name' => 'Kasual'
        ]);
        Tag::create([
            'tag_name' => 'Restoran'
        ]);
    }
}
