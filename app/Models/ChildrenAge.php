<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildrenAge extends Model
{
    use HasFactory;

    protected $fillable = ['age_min', 'age_max'];
}
