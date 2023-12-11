<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildrenAge;
use App\Models\Creativity;
use App\Models\DesignForChildren;
use App\Models\Learn;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    function __invoke() : View {

        $ages = ChildrenAge::select('id', DB::raw("CONCAT(age_min, ' - ', age_max, ' Tahun') as age"))->orderBy('id')->get();
        $creativities = Creativity::all();
        $design = DesignForChildren::all();
        $learns = Learn::all();
        $categories = Category::all();

        $yearNow = Carbon::now()->year;

        return view('survey.index', compact('ages', 'creativities', 'design', 'learns', 'categories', 'yearNow'));
    }
}
