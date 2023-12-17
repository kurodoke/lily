<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailGameController extends Controller
{
    function __invoke(string $id) : View
    {

        $game = Game::find($id);

        $yearNow = Carbon::now()->year;
        if ($game == null){
            return abort(404);
        }
        return view('detailgame.index', compact('game', 'yearNow'));
    }
}
