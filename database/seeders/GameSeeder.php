<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GameCategory;
use App\Models\GameCreativity;
use App\Models\GameDesignForChildren;
use App\Models\GameLearn;
use App\Models\GameTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $imgPath = public_path('img/Pokemon Go.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [2];

        $tag = [6, 7, 9];

        $design = [1, 2, 3];

        $creativity = [3];

        $learn = [];

        $currentGame = Game::create([
            'name' => "Pokemon Go",
            'author' => "Niantic Inc.",
            'score' => "4",
            'download' => "100000000",
            'size' => "121",
            'description' => 'Baru! Sekarang Anda dapat bertarung dengan Pelatih Pokémon GO lainnya secara online! Coba GO Battle League hari ini!
            
            Bergabunglah dengan Pelatih di seluruh dunia yang menemukan Pokémon saat mereka menjelajahi dunia di sekitar mereka. Pokémon GO adalah sensasi permainan global yang telah diunduh lebih dari 1 miliar kali dan dinamai ""Game Seluler Terbaik"" oleh Penghargaan Pilihan Pengembang Game dan ""Aplikasi Terbaik Tahun Ini"" oleh TechCrunch.
            
            Temukan dunia Pokémon: Jelajahi dan temukan Pokémon di mana pun Anda berada!
            
            Tangkap lebih banyak Pokémon untuk melengkapi Pokédex Anda!
            
            Perjalanan bersama Buddy Pokémon Anda untuk membantu membuat Pokémon Anda lebih kuat dan mendapatkan hadiah!',
            'age_id' => "3",
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.nianticlabs.pokemongo&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);

        $id = $currentGame->id;

        addForeign($id, $category, $tag, $design, $learn, $creativity);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/Game Beternak untuk Anak-Anak.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [8, 11, 7];

        $tag = [6, 5];

        $design = [1, 2, 3];

        $creativity = [2, 5];

        $learn = [2];

        $currentGame = Game::create([
            'name' => "Game Beternak untuk Anak-Anak",
            'author' => "Timpy Games For Kids, Toddlers & Baby",
            'score' => "4",
            'download' => "100000",
            'size' => "98",
            'description' => 'Selamat datang di Game Bertani untuk Anak-Anak, permainan peternakan hewan terbaik yang Anda dapat mengalami
            kegembiraan menjalani kehidupan pertanian dan memanen buah - buahan dan sayuran segar, merawat pertanian yang imut
            hewan, membangun gudang pertanian, dan banyak lagi! Biarkan tangan Anda kotor di game pertanian ini untuk anak-anak dan
            benamkan diri Anda dalam dunia pertanian yang indah saat Anda menanam dan merawat berbagai tanaman dan menikmati hidup petani kecil di rumah pertanian Anda.',
            'age_id' => "2",
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.iz.farm.game.kids.animal.farming&hl=id-ID&pli=1",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        addForeign($id, $category, $tag, $design, $learn, $creativity);

        // -----------------------------------------------------------------
    }
}

function addForeign($id, array $category, array $tag, array $design, array $learn, array $creativity)
{
    foreach ($category as $_category) {
        GameCategory::create([
            'game_id' => $id,
            'category_id' => $_category,
        ]);
    }
    foreach ($tag as $_tag) {
        GameTag::create([
            'game_id' => $id,
            'tag_id' => $_tag,
        ]);
    }
    foreach ($design as $_design) {
        GameDesignForChildren::create([
            'game_id' => $id,
            'design_id' => $_design,
        ]);
    }
    foreach ($learn as $_learn) {
        GameLearn::create([
            'game_id' => $id,
            'learn_id' => $_learn,
        ]);
    }
    foreach ($creativity as $_creativity) {
        GameCreativity::create([
            'game_id' => $id,
            'creativity_id' => $_creativity,
        ]);
    }
}
