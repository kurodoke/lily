<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChildrenAge extends Model
{
    use HasFactory;

    protected $fillable = ['age_min', 'age_max'];

    function games() : HasMany {
        return $this->hasMany(Game::class, 'age_id', 'id');
    }
}
