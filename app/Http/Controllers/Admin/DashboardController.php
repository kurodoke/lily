<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() : View {
        $_games = Game::orderByDesc('id')->take(5)->get();
        $games = Game::all();
        return view('dashboard.index', compact('games', '_games'));
    }
}
