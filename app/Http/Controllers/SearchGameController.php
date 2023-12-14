<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SearchGameController extends Controller
{
    function index(Request $request): View
    {

        // try {
            $id_age = $request->input('search_age');
            $id_category = $request->input('search_category');
            $is_premium = $request->input('search_premium');
    
            $games = collect([]);
    
    
            $categories = Category::whereIn('id', $id_category)->get();
    
            $games = collect();
    
            foreach ($categories as $category) {
                $games = $games->merge($category->games);
            }
    
            if ($is_premium === "1") {
                $games = $games->where('age_id', $id_age);
            } else {
                $games = $games->where('age_id', $id_age)->where('premium', 'Free-to-Play');
            }
            $games = $games->unique('id');
            $games = $games->sortByDesc('score');

            $yearNow = Carbon::now()->year;
    
            return view('searchgame.index', compact('yearNow', 'games'));
        // } catch (\Throwable $th) {
        //     abort(403);
        // }
       
    }


    private function getData($id_age,  $id_category, $is_premium): Collection
    {
        if ($is_premium === "1") {
            $games = Game::whereHas('categories', function ($query) use ($id_category) {
                $query->whereIn('category_id', $id_category);
            })->where('age_id', $id_age)->get();
        } else {
            $games = Game::whereHas('categories', function ($query) use ($id_category) {
                $query->whereIn('category_id', $id_category);
            })->where('age_id', $id_age)->where('premium', 'Free-to-Play')->get();
        }

        return $games;
    }
}
