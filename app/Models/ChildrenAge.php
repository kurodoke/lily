<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ChildrenAge extends Model
{
    use HasFactory;

    protected $fillable = ['age_min', 'age_max'];

    function games() : BelongsToMany {
        return $this->belongsToMany(Game::class, 'game_children_ages', 'age_id', 'game_id');
    }
}
