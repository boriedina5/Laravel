<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    use SoftDeletes;
protected $fillable = [//kitölthető az értékek hozzáadásnál -> no hiba
    'name', //lehet egy sorba is
    "species",
    "is_enemy",
    "strenght",
    "first_apperance",
    ];
}

