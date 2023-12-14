<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Category;
use App\Models\ChildrenAge;
use App\Models\Creativity;
use App\Models\DesignForChildren;
use App\Models\GameCategory;
use App\Models\GameCreativity;
use App\Models\GameDesignForChildren;
use App\Models\GameLearn;
use App\Models\GameTag;
use App\Models\Learn;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $games = Game::select('*')->orderBy('id')->get();
        $creativities = Creativity::select('id AS value', 'creativity_name AS name')->orderBy('id')->get();
        $design = DesignForChildren::select('id AS value', 'design_name AS name')->orderBy('id')->get();
        $tags = Tag::select('id AS value', 'tag_name AS name')->orderBy('id')->get();
        $learns = Learn::select('id AS value', 'learn_name AS name')->orderBy('id')->get();
        $categories = Category::select('id AS value', 'category_name AS name')->orderBy('id')->get();
        $ages = ChildrenAge::select('id AS value', DB::raw("CONCAT(age_min, ' - ', age_max, ' Tahun') AS name"))->orderBy('id')->get();

        return view('admin.game.index', compact('games', 'creativities', 'design', 'tags', 'learns', 'ages', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        $game_image_filename = $validated['game_image']->store("public/game_image");
        $game_creativities = (!empty($validated['game_creativity'])) ?  explode(",", $validated['game_creativity']) : [];
        $game_design = (!empty($validated['game_design'])) ? explode(",", $validated['game_design']) : [];
        $game_tags = (!empty($validated['game_tag'])) ? explode(",", $validated['game_tag']) : [];
        $game_learns = (!empty($validated['game_learn'])) ? explode(",", $validated['game_learn']) : [];
        $game_categories = (!empty($validated['game_category'])) ? explode(",", $validated['game_category']) : [];

        try {
            $game_instance =  Game::create([
                'name' => $validated['game_name'],
                'author' => $validated['game_author'],
                'score' => $validated['game_rating'],
                'download' => $validated['game_download'],
                'size' => $validated['game_size'],
                'description' => $validated['game_description'],
                'age_id' => $validated['game_age'],
                'logo_filename' => explode('public/',$game_image_filename)[1],
                'url' => $validated['game_url'],
                'premium' => $validated['game_premium'],
                'price' => ($validated['game_premium'] === 'Paid' ? intval(preg_replace("/[^0-9]/", "", $validated['game_price'])) : null),
            ]);

            for ( $i = 0; $i < count($game_creativities); $i++ ) {
                GameCreativity::create([
                    'game_id' => $game_instance->id,
                    'creativity_id' => $game_creativities[$i],
                ]);
            }
            for ( $i = 0; $i < count($game_design); $i++ ) {
                GameDesignForChildren::create([
                    'game_id' => $game_instance->id,
                    'design_id' => $game_design[$i],
                ]);
            }
            for ( $i = 0; $i < count($game_tags); $i++ ) {
                GameTag::create([
                    'game_id' => $game_instance->id,
                    'tag_id' => $game_tags[$i],
                ]);
            }
            for ( $i = 0; $i < count($game_learns); $i++ ) {
                GameLearn::create([
                    'game_id' => $game_instance->id,
                    'learn_id' => $game_learns[$i],
                ]);
            }

            for ( $i = 0; $i < count($game_categories); $i++ ) {
                GameCategory::create([
                    'game_id' => $game_instance->id,
                    'category_id' => $game_categories[$i],
                ]);
            }
            

        } catch (\Throwable $th) {
            dd($th);
            if(isset($game_instance)){
                $game_instance->delete();
            }
            return redirect()->back()->with('error', ['title' => 'Tambah','message' => 'Aksi Gagal']);
        }
        return redirect()->back()->with('success', ['title' => 'Tambah','message' => 'Berhasil Menambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResponse
    {
        $game = Game::findOrFail($id);
        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => 'success',
            'data' => [
                'game' => Game::findOrFail($id),
                'age' => $game->ages,
                'creativity' => $game->creativities,
                'learn' => $game->learns,
                'tag' => $game->tags,
                'design' => $game->designs,
                'category' => $game->categories,
            ],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();
        $game = Game::findOrFail($id);

        $game_creativities = (!empty($validated['game_creativity'])) ?  explode(",", $validated['game_creativity']) : [];
        $game_design = (!empty($validated['game_design'])) ? explode(",", $validated['game_design']) : [];
        $game_tags = (!empty($validated['game_tag'])) ? explode(",", $validated['game_tag']) : [];
        $game_learns = (!empty($validated['game_learn'])) ? explode(",", $validated['game_learn']) : [];
        $game_categories = (!empty($validated['game_category'])) ? explode(",", $validated['game_category']) : [];

        try {
            $game->update([
                'name' => $validated['game_name'],
                'author' => $validated['game_author'],
                'score' => $validated['game_rating'],
                'download' => $validated['game_download'],
                'size' => $validated['game_size'],
                'description' => $validated['game_description'],
                'age_id' => $validated['game_age'],
                'url' => $validated['game_url'],
                'premium' => $validated['game_premium'],
                'price' => ($validated['game_premium'] === 'Paid' ? intval(preg_replace("/[^0-9]/", "", $validated['game_price'])) : null),
            ]);
    
    
            $game->creativities()->sync($game_creativities);
    
            $game->designs()->sync($game_design);
    
            $game->tags()->sync($game_tags);
    
            $game->learns()->sync($game_learns);

            $game->categories()->sync($game_categories);
    
    
            if(isset($validated['game_image'])){
                $game_image_filename = $validated['game_image']->store("public/game_image");
    
                Storage::delete('public/' . $game->logo_filename);
    
                $game->update([
                    'logo_filename' => explode('public/', $game_image_filename)[1],
                ]);
            };
        } catch (\Throwable $th) {
           dd($th);
           return redirect()->back()->with('error', ['title' => 'Edit','message' => 'Gagal Mengedit']);
        }
        return redirect()->back()->with('success', ['title' => 'Edit','message' => 'Berhasil Mengedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        $game = Game::findOrFail($id);
        try {
            Storage::delete('public/' . $game->logo_filename);
            $game->delete();
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', ['title' => 'Hapus','message' => 'Gagal Menghapus']);
        }
        return redirect()->back()->with('success', ['title' => 'Hapus','message' => 'Berhasil Menghapus']);
    }
}
