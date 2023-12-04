<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Creativity;
use App\Models\DesignForChildren;
use App\Models\GameCreativity;
use App\Models\Learn;
use App\Models\Tag;
use Illuminate\Contracts\View\View;

use function PHPUnit\Framework\isNull;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $games = Game::select('id', 'name', 'author', 'score', 'size', 'download', 'description')->orderBy('id')->get();
        $creativities = Creativity::select('id AS value', 'creativity_name AS name')->orderBy('id')->get();
        $design = DesignForChildren::select('id AS value', 'design_name AS name')->orderBy('id')->get();
        $tags = Tag::select('id AS value', 'tag_name AS name')->orderBy('id')->get();
        $learns = Learn::select('id AS value', 'learn_name AS name')->orderBy('id')->get();
        return view('game.index', compact('games', 'creativities', 'design', 'tags', 'learns'));
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
    public function store(StoreGameRequest $request)
    {
        $validated = $request->validated();

        $game_image_filename = $validated['game_image']->store("public/game_image");
        $game_creativities = (array_key_exists('game_creativity', $validated)) ?  explode(",", $validated['game_creativity']) : null;
        $game_design = (array_key_exists('game_design', $validated)) ? explode(",", $validated['game_design']) : null;
        $game_tags = (array_key_exists('game_tag', $validated)) ? explode(",", $validated['game_tag']) : null;
        $game_learns = (array_key_exists('game_learn', $validated)) ? explode(",", $validated['game_learn']) : null;

        try {
            $game_instance =  Game::create([
                'name' => $validated['game_name'],
                'author' => $validated['game_author'],
                'score' => $validated['game_rating'],
                'download' => $validated['game_download'],
                'size' => $validated['game_size'],
                'description' => $validated['game_description'],
            ]);

            for ( $i = 0; $i < count($game_creativities); $i++ ) {
                GameCreativity::create([
                    'game_id' => $game_instance->id,
                    'creativity_id' => $game_creativities[$i],
                ]);
            }
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
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
    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
