<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GameCategory;
use App\Models\GameChildrenAge;
use App\Models\GameCreativity;
use App\Models\GameDesignForChildren;
use App\Models\GameLearn;
use App\Models\GameTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GameSeeder extends Seeder
{

    function addForeign($id, array $category, array $tag, array $design, array $learn, array $creativity, array $age)
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
        foreach ($age as $_age) {
            GameChildrenAge::create([
                'game_id' => $id,
                'age_id' => $_age,
            ]);
        }
    }

    function resetImage()
    {
        $directoryPath = storage_path('app/public/game_image');

        $files = File::allFiles($directoryPath);

        foreach ($files as $file) {
            File::delete($file);
        }
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->resetImage();


        $imgPath = public_path('img/Pokemon Go.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [2];

        $tag = [6, 7, 9];

        $design = [1, 2, 3];

        $creativity = [3];

        $learn = [];

        $age = [3];

        $currentGame = Game::create([
            'name' => "Pokemon Go",
            'author' => "Niantic Inc.",
            'score' => "4",
            'download' => "100000000",
            'size' => "121",
            'description' => 'Pokemon GO menghadirkan petualangan seru di dunia nyata, menggabungkan hiburan dengan interaktifitas. Dengan menangkap berbagai jenis Pokemon di lokasi nyata, game ini tidak hanya menyenangkan, tetapi juga mengajarkan nilai-nilai seperti kerja sama. Dengan grafis cerah dan karakter Pokemon yang ikonik, Pokemon GO memukau mata anak-anak, memperluas imajinasi mereka, dan memberikan pengalaman bermain yang mengesankan. Cocok untuk anak-anak yang ingin menjelajahi dunia sekitar sambil bersenang-senang dengan Pokemon.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.nianticlabs.pokemongo&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);

        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/Game Beternak untuk Anak-Anak.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [8, 11, 7];

        $tag = [6, 5];

        $design = [1, 2, 3];

        $creativity = [2, 5];

        $learn = [2];

        $age = [1, 2];

        $currentGame = Game::create([
            'name' => "Game Beternak untuk Anak-Anak",
            'author' => "Timpy Games For Kids, Toddlers & Baby",
            'score' => "4",
            'download' => "100000",
            'size' => "98",
            'description' => 'Game Beternak untuk Anak-Anak adalah Game tentang petualangan berternak yang menghadirkan pengalaman penuh warna di kebun yang menyenangkan. Dengan karakter-karakter lucu dan grafis yang cerah, game ini tidak hanya menghibur, tetapi juga merangsang kreativitas anak-anak. Anak-anak diajak untuk merawat hewan peliharaan, menanam tanaman, dan merancang kebun mereka sendiri. Game Beternak untuk Anak-Anak adalah rekomendasi yang tepat untuk anak-anak yang ingin belajar sambil bersenang-senang, dengan pesan moral positif tentang kerja sama dan tanggung jawab.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.iz.farm.game.kids.animal.farming&hl=id-ID&pli=1",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/ABC alfabet.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [8, 7];

        $tag = [6, 15];

        $design = [1, 2, 3];

        $creativity = [];

        $learn = [4];

        $age = [1];

        $currentGame = Game::create([
            'name' => "Belajar Huruf ABC",
            'author' => "Qreatif",
            'score' => "4",
            'download' => "100000",
            'size' => "43",
            'description' => 'ABC Alfabet adalah pilihan tepat bagi anak-anak usia 3-5 tahun yang ingin memulai petualangan belajar huruf. Game ini menghadirkan berbagai aktivitas seru seperti bernyanyi, belajar, dan bermain, memberikan pengalaman pembelajaran yang menyenangkan. Sayangnya, satu-satunya downside adalah kebutuhan akan koneksi internet untuk memainkannya. Meskipun demikian, ABC Alfabet tetap menjadi rekomendasi yang bagus untuk mendukung anak-anak dalam perjalanan awal mereka mengenal huruf.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.belajarku.abcalfabet&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/Khan Academy.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [8, 7];

        $tag = [];

        $design = [1, 2, 3];

        $creativity = [1, 4];

        $learn = [4, 5, 2];

        $age = [1, 2];

        $currentGame = Game::create([
            'name' => "Khan Academy Kids:Learning!",
            'author' => "Khan Academy",
            'score' => "5",
            'download' => "5000000",
            'size' => "142",
            'description' => 'Khan Academy Kids adalah sahabat belajar yang cerdas bagi anak-anak usia dini. Dengan desain grafis yang cerah dan karakter-karakter yang ramah, game ini menghadirkan pembelajaran menyenangkan dalam berbagai mata pelajaran. Aktivitas interaktif, pesan positif, dan tantangan yang sesuai tingkat membuatnya memotivasi. Meskipun membutuhkan koneksi internet, Khan Academy Kids memberikan akses pendidikan yang optimal secara gratis dan dengan pengawasan orang tua yang baik. Game ini bukan hanya sekadar pembelajaran; ini adalah perjalanan cerdas yang mendukung pertumbuhan anak-anak secara menyeluruh.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=org.khankids.android&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/kids puzzle - wooden jigsaw.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [3];

        $tag = [16, 6, 5];

        $design = [1, 2, 3];

        $creativity = [1, 4];

        $learn = [];

        $age = [1];

        $currentGame = Game::create([
            'name' => "Kids Puzzles - Wooden Jigsaw",
            'author' => "Skycap",
            'score' => "4",
            'download' => "5000000",
            'size' => "37",
            'description' => 'Kids Puzzles – Wooden Jigsaw adalah Game yang mengajak balita untuk mencocokkan bagian tubuh karakter dengan konsep puzzle kayu yang menyenangkan. Selain memberikan kesenangan, permainan ini juga mendukung pengembangan memori, pemikiran logis, persepsi visual, dan keterampilan motorik halus pada balita. Keberagaman karakter kartun seperti Mickey Mouse, Scooby Doo, Doraemon, Bugs Bunny, dan lainnya menambah daya tarik dan kegembiraan dalam belajar. Dengan fokus pada pengembangan keterampilan dasar, Kids Puzzles – Wooden Jigsaw adalah teman bermain edukatif yang ideal untuk balita.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.skycap.Kids_Wooden_Jigsaw&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/coloring game color and paint.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [8];

        $tag = [17, 6, 5];

        $design = [1, 2, 3];

        $creativity = [1, 2, 5];

        $learn = [6];

        $age = [1, 2, 3];

        $currentGame = Game::create([
            'name' => "Coloring Games: Color & Paint",
            'author' => "RV AppStudios",
            'score' => "5",
            'download' => "100000000",
            'size' => "35",
            'description' => 'Coloring Games: Color & Paint adalah Game mewarnai yang ideal untuk anak-anak yang ingin menyampaikan kreativitas mereka. Game ini menawarkan beragam objek yang dapat diwarnai, memberikan kebebasan kepada anak-anak untuk mengekspresikan diri melalui seni. Dengan fitur-fitur mewarnai yang intuitif, permainan ini tidak hanya memberikan hiburan tetapi juga mendukung perkembangan kreatifitas dan ekspresi diri anak-anak. Cocok untuk anak-anak yang senang mewarnai, Coloring Games: Color & Paint direkomendasikan sebagai sarana bermain yang mendukung pertumbuhan kreatif dan ekspresif bagi mereka.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.rvappstudios.kids.coloring.book.color.painting&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/minecraft.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [2, 11, 7, 4];

        $tag = [9, 6, 5];

        $design = [1, 2, 3];

        $creativity = [1, 2, 5];

        $learn = [];

        $age = [2, 3];

        $currentGame = Game::create([
            'name' => "Minecraft",
            'author' => "Mojang",
            'score' => "5",
            'download' => "50000000",
            'size' => "620",
            'description' => 'Minecraft adalah pengalaman dunia terbuka yang menarik dan mendalam, dirancang untuk memenuhi imajinasi anak-anak. Dengan elemen-elemen seperti konstruksi, penjelajahan gua, dan bertahan hidup, permainan ini menawarkan kombinasi tantangan dan kebebasan. Grafisnya yang sederhana tetapi menarik dan dunia terbuka yang luas memberikan kesempatan kepada anak-anak untuk merancang dan membangun sesuai dengan imajinasi mereka. Minecraft bukan hanya sekadar game, tetapi juga alat untuk mengembangkan pemikiran kreatif dan keterampilan pemecahan masalah pada anak-anak.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.mojang.minecraftpe&hl=id-ID",
            'premium' => "Paid",
            'price' => 109000,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/Paw patrol rescue world.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [1, 7, 2];

        $tag = [6, 5];

        $design = [1, 2, 3];

        $creativity = [3];

        $learn = [];

        $age = [1, 2 ,3];

        $currentGame = Game::create([
            'name' => "PAW Patrol Rescue World",
            'author' => "Budge Studios",
            'score' => "4",
            'download' => "50000000",
            'size' => "940",
            'description' => 'Paw Patrol: Rescue World adalah petualangan menyenangkan yang membawa karakter Paw Patrol ke dunia interaktif yang penuh misi penyelamatan. Dengan desain grafis yang cerah dan ramah anak, game ini menarik perhatian anak-anak secara instan. Anak-anak dapat bergabung dengan para pahlawan anjing favorit mereka untuk menyelesaikan misi penyelamatan yang penuh tantangan. Game ini tidak hanya memberikan hiburan, tetapi juga mempromosikan nilai-nilai positif seperti kerja sama, keberanian, dan pertolongan kepada sesama. Paw Patrol: Rescue World menjadi pilihan yang bagus untuk anak-anak yang ingin mengalami petualangan seru bersama karakter-karakter yang mereka cintai dari Paw Patrol.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/apps/details?id=com.budgestudios.googleplay.PawPatrolRescueWorld&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
        $imgPath = public_path('img/pelajari musik dan lagu.webp');

        $storagePath = 'game_image/' . Str::random(40) . '.webp';

        copy($imgPath, public_path("storage/" . $storagePath));

        $category = [9];

        $tag = [];

        $design = [1, 2, 3];

        $creativity = [1, 2, 3, 4 ,5];

        $learn = [5];

        $age = [1, 2];

        $currentGame = Game::create([
            'name' => "Pelajari Musik & Lagu",
            'author' => "Sunny Kid Games",
            'score' => "4",
            'download' => "1000000",
            'size' => "65",
            'description' => 'Pelajari Musik & Lagu adalah aplikasi pembelajaran musik yang menyenangkan dan interaktif untuk anak-anak. Dengan konsep xylophone virtual, aplikasi ini tidak hanya mengajarkan anak-anak tentang nada dan ritme, tetapi juga memberikan pengalaman bermain alat musik secara langsung. Antarmuka yang sederhana dan intuitif memudahkan anak-anak untuk memahami dan memainkan lagu-lagu sederhana. Dengan berbagai lagu anak yang lucu dan mendidik, Pelajari Musik & Lagu menjadi alat yang efektif untuk memperkenalkan anak-anak pada dunia musik. Fitur interaktif seperti catatan yang berubah warna memberikan umpan balik langsung, merangsang minat anak-anak untuk terus belajar. Meskipun sederhana, aplikasi ini memberikan fondasi yang baik untuk pengenalan awal terhadap elemen dasar musik.',
            'logo_filename' => $storagePath,
            'url' => "https://play.google.com/store/search?q=learn+music+%26+songs+-+xylophone&c=apps&hl=id-ID",
            'premium' => "Free-to-Play",
            'price' => null,
        ]);


        $id = $currentGame->id;

        $this->addForeign($id, $category, $tag, $design, $learn, $creativity, $age);

        // -----------------------------------------------------------------
    }
}
