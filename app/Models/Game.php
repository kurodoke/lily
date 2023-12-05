<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'author', 'size', 'download', 'score', 'description', 'logo_filename', 'age_id'];

    function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class, 'game_tags', 'game_id', 'tag_id');
    }

    function learns() : BelongsToMany {
        return $this->belongsToMany(Learn::class, 'game_learns', 'game_id', 'learn_id');
    }

    function designs() : BelongsToMany {
        return $this->belongsToMany(DesignForChildren::class, 'game_design_for_childrens', 'game_id', 'design_id');
    }
    
    function creativities() : BelongsToMany {
        return $this->belongsToMany(Creativity::class, 'game_creativites', 'game_id', 'creativity_id');
    }

    function ages() : BelongsTo {
        return $this->belongsTo(ChildrenAge::class, 'age_id', 'id');
    }
}
