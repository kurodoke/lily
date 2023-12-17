<?php

namespace Database\Seeders;

use App\Models\Learn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Learn::create([
            'learn_name' => 'Sosial'
        ]);
        Learn::create([
            'learn_name' => 'Matematika'
        ]);
        Learn::create([
            'learn_name' => 'Sains'
        ]);
        Learn::create([
            'learn_name' => 'Bahasa'
        ]);
        Learn::create([
            'learn_name' => 'Musik'
        ]);
        Learn::create([
            'learn_name' => 'Seni'
        ]);
    }
}
