<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameChildrenAge extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'age_id'];
}
