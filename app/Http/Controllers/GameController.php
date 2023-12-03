<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Creativity;
use App\Models\DesignForChildren;
use App\Models\Learn;
use App\Models\Tag;
use Illuminate\Contracts\View\View;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $games = Game::select('id', 'name', 'author', 'score', 'size', 'download', 'description')->orderBy('id')->get();
        $creativities = Creativity::select('id', 'creativity_name AS name')->orderBy('id')->get();
        $design = DesignForChildren::select('id', 'design_name AS name')->orderBy('id')->get();
        $tags = Tag::select('id', 'tag_name AS name')->orderBy('id')->get();
        $learns = Learn::select('id', 'learn_name AS name')->orderBy('id')->get();
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
        dd($request->game_creativity);
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
