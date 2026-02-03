<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "title",
        "author",
        "price",
        "year",
        "limited"
    ];

    //elations - HasOne, HasMany, ManyToMany(BelongsToMany) +1=>BelongsTo
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

}
