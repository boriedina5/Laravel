<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /** @use HasFactory<\Database\Factories\PublisherFactory> */
    use HasFactory;

    //publisher_id (tehát a saját idegen kulcsát) keresi a Book modell álltal kezelt táblában
    //Összes előfordulást begyűjti és egy kollekciónba rakja
    public function books(){
        return $this->hasMany(Book::class);
    }
    //Csak az első előforsulást adja vissza
    public function book(){
        return $this->hasOne(Book::class);
    }
}
