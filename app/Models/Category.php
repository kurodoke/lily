<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    function games() : BelongsToMany {
        return $this->belongsToMany(Game::class, 'game_categories', 'category_id', 'game_id');
    }
}
