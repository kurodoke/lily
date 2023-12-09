<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function __invoke() : View {

        $games = Game::all();
        $count = count($games);
        $digitCount = strlen((string) $count);
        $firstNum = substr((string)$count, 0, 1);
        $avgCount = $firstNum * (10 ** ($digitCount - 1));

        $yearNow = Carbon::now()->year;
        
        return view('landing.index', compact('games', 'avgCount', 'yearNow'));
    }
}
