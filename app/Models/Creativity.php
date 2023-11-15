<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Creativity extends Model
{
    use HasFactory;

    function games() : BelongsToMany {
        return $this->belongsToMany(Game::class, 'game_creativites', 'creativity_id', 'game_id');
    }
}
